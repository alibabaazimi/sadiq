import Vue from 'vue'
import VueRouter from 'vue-router'
import Middleware from './middleware/index'
import store from './store/index';

Vue.use(VueRouter)

import MainLayout from './layouts/MainLayout'
import Home from './pages/Home.vue';
import About from './pages/About.vue';
import Terms from './pages/Terms.vue';
import PostList from './components/PostList.vue';
import PostShow from './pages/PostShow.vue';
import NewPost from './pages/NewPost.vue';

import UserLogin from './pages/UserLogin.vue';
import UserRegister from './pages/UserRegister.vue';
import UserProfilePrivate from './pages/UserProfilePrivate.vue';
import Logout from './pages/UserLogout.vue';

import AdminMainLayout from './admin/MainLayout';
import Dashboard from './admin/Dashboard.vue'
import Users from './admin/Users.vue'
import AdminUserShow from './admin/UserShow.vue'
import AdminUserNew from './admin/UserNew.vue'

import Page404 from './pages/404.vue';
import Test from './pages/Test.vue';

export const routes = [

    {
        path: '/admin',
        component: AdminMainLayout,
        meta: {
            middleware: Middleware.auth
        },
        children: [
            {
                path: '/',
                component: Dashboard,
                name: Dashboard,
            },
            {
                path: 'users',
                component: Users,
                name: 'Users',
            },
            {
                path: 'user/:userId',
                component: AdminUserShow,
                name: 'AdminUserShow',
            },
            {
                path: 'users/new',
                component: AdminUserNew,
                name: 'AdminUserNew',
            }
        ]
    },
    {
        path: '/',
        component: MainLayout,
        children: [
            {
                path: '/',
                component: Home, 
                name: 'Home'
            },
            {
                path: 'login',
                component: UserLogin,
                name: 'UserLogin',
                meta: {
                    middleware: Middleware.guest
                },
            },
            {
                path: '/signup',
                component: UserRegister,
                name: 'UserRegister',
                meta: {
                    middleware: Middleware.guest
                }
            },
            {
                path: '/posts',
                component: PostList,
                name: 'PostList',
            },
            {
                path: '/posts/new',
                component: NewPost,
                name: 'NewPost',
                meta: {
                    middleware: Middleware.auth
                }
            },
            {
                path: '/posts/:postId',
                component: PostShow,
                name: 'PostShow',
            },
            {
                path: 'logout',
                component: Logout,
                name: 'Logout'
            },
            {
                path: '/profile',
                component: UserProfilePrivate,
                name: 'UserProfilePrivate',
                meta: {
                    middleware: Middleware.auth
                }
            },
            {
                path: '/about',
                component: About,
                name: 'About'
            },
            {
                path: '/terms',
                component: Terms,
                name: 'Terms'
            }, 
            {
                path: '/test',
                component: Test,
                name: 'Test'
            },    
            {
                path: '/*',
                component: Page404,
                name: 'Page404'
            }
        ]
    },

];



const router = new VueRouter({
    mode: 'history',
    routes,
    scrollBehavior (to, from, savedPosition) {
        return { x: 0, y: 0 }
    }
});

function nextCheck(context, middlware, index) {
    const nextMiddleware = middlware[index];

    if (!nextMiddleware) {
        return context.next;
    }

    return (...parameters) => {
        context.next(...parameters);
        const nextMidd = nextCheck(context, middlware, index + 1);

        nextMiddleware({...context, next: nextMidd})
    }
}

router.beforeEach((to, from, next) => {
    if (to.meta.middleware) {
        const middleware = Array.isArray(to.meta.middleware) ? to.meta.middleware : [to.meta.middleware];

        const context = {
            to,
            from,
            next,
            store
        }

        const nextMiddleware = nextCheck(context, middleware, 1);
        return middleware[0]({...context, next: nextMiddleware})
    }

    return next();
})

export default router;
