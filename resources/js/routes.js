import Vue from 'vue'
import VueRouter from 'vue-router'
import Middleware from './middleware/index'
import store from './store/index';

Vue.use(VueRouter)

import Home from './components/pages/Home.vue';
import About from './components/pages/About.vue';
import PostList from './components/pages/PostList.vue';
import PostShow from './components/pages/PostShow.vue';
import NewPost from './components/pages/NewPost.vue';

import UserLogin from './components/pages/UserLogin.vue';
import UserRegister from './components/pages/UserRegister.vue';
import UserProfilePrivate from './components/pages/UserProfilePrivate.vue';
import Logout from './components/pages/UserLogout.vue';
import Page404 from './components/pages/404.vue';

import Test from './components/pages/Test.vue';

export const routes = [
    {
        path: '/',
        component: Home,
        name: 'Home',
    },
    {
        path: '/login',
        component: UserLogin,
        name: 'UserLogin',
        meta: {
            middleware: Middleware.guest
        }
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
        name: 'NewPost'
    },
    {
        path: '/posts/:postId',
        component: PostShow,
        name: 'PostShow',
    },
    {
        path: '/logout',
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
        path: '/test',
        component: Test,
        name: 'Test'
    },
    {
        path: '/*',
        component: Page404,
        name: 'Page404'
    }
];



const router = new VueRouter({
    mode: 'history',
    routes
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
