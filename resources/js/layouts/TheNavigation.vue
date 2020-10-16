<style scoped>
    @media (max-width: 767.98px) {
        .offcanvas-collapse {
            position: fixed;
            top: 60px;
            /* Height of navbar */
            bottom: 0;
            width: 100%;
            padding-right: 1rem;
            padding-left: 1rem;
            overflow-y: auto;
            z-index: 99909;
            background-color: var(--gray-dark);
            transition: -webkit-transform .3s ease-in-out;
            transition: transform .3s ease-in-out;
            transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out;
            -webkit-transform: translateX(100%);
            transform: translateX(100%);
        }

        .offcanvas-collapse.open {
            -webkit-transform: translateX(-1rem);
            transform: translateX(-1rem);
            /* Account for horizontal padding on navbar */
        }
    }

    .offcanvas-navbar li nav-link {
        color: white;
    }

    .mega-menu-backdrop {
        background-color: rgba(0, 0, 0, 0.116); 
        position: fixed; 
        top: 0px; 
        left: 0px; 
        height: 100%; 
        width: 100%;
        z-index: 9998;
    }

    .megaMenu {
        position: fixed;
        width: 100%;
        left: 0px;
        top: 70px;
        z-index: 9999;
    }

    .fade-down-enter-active,
    .fade-down-leave-active {
        transition: opacity .5s, top .5s;
    }

    .fade-down-enter,
    .fade-down-leave-to

    /* .fade-leave-active below version 2.1.8 */
        {
        opacity: 0;
        top: 60px;
    }

</style>
<template>
    <nav class="main-header navbar navbar-expand-md navbar-dark navbar-dark sticky-top pl-3 pr-3">
        <router-link to="/" class="navbar-brand">
            <img src="/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Sadiq Store</span>
        </router-link>

        <div class="row p-2">
            <div class="">
                <a href="#" class="nav-link nav-item text-light" @click="toggleMegaMenu">Browse
                    <i class="fas fa-caret-down inline-block"></i>
                </a>
            </div>
        </div>


        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <ul class="order-md-3 navbar-nav navbar-no-expand ml-auto .hidden-md-down">
                <li class="nav-item" v-show="!isNewPostPage">
                    <router-link to="/posts/new" class="btn bg-olive mr-3 d-none d-md-block float-right">
                        <i class="fa fa-plus-circle mr-1"></i> Post your Ads
                    </router-link>
                </li>
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown" v-if="loggedIn">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">12</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm"></p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i></p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown" v-if="loggedIn">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown user-menu" v-if="loggedIn">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img :src="user.profileImage" class="user-image img-circle elevation-2" alt="User Image">

                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img :src="user.profileImage" class="img-circle elevation-2" alt="User Image">

                            <p>
                                <small>Member since Nov. 2012</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>
                            <!-- /.row -->
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <router-link to="/profile" class="btn btn-default btn-flat">Profile</router-link>
                            <router-link to="/logout" class="btn btn-default btn-flat float-right">Sign out
                            </router-link>
                        </li>
                    </ul>
                </li>


                <li class="nav-item" v-if="!loggedIn">
                    <router-link to="/login" class="nav-link">Login</router-link>
                </li>
                <li class="nav-item" v-if="!loggedIn">
                    <router-link to="/signup" class="nav-link">Sign Up</router-link>
                </li>
            </ul>
        </div>

        <div class="row order-3">
            <router-link to="/posts/new" class="btn bg-olive mr-3  d-md-none" v-show="!isNewPostPage">
                Post your Ads
            </router-link>
            <button class="navbar-toggler p-0 border-0 float-right" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <portal to="mainPage" slim>
            <div class="mega-menu-backdrop" v-show="megaMenuShow" @click="toggleMegaMenu">

            </div>
                <transition name="fade-down">
                    <div class="megaMenu" v-show="megaMenuShow">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8 offset-md-2">
                                        <div class="row">
                                        <div class="col-md-4">
                                            <h5>Categories</h5>
                                            <a href="#" class="nav-link nav-item">Electronics</a>
                                            <a href="#" class="nav-link">Buildings</a>
                                            <a href="#" class="nav-link">Vehicles</a>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Categories</h5>
                                            <a href="#" class="nav-link">Electronics</a>
                                        </div>
                                        <div class="col-md-4">
                                            <h5>Categories</h5>
                                            <a href="#" class="nav-link">Electronics</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </transition>
        </portal>


    </nav>
</template>

<script>
    import {
        mapGetters
    } from 'vuex'
    export default {
        data() {
            return {
                megaMenuShow: false,
            }
        },
        created() {
            // console.log('erro' + this.$store.getters.loggedIn)
            if (this.loggedIn) {
                this.$store.dispatch('auth/getUser', localStorage.getItem('access_token'));
            }
        },
        computed: {
            loggedIn() {
                return this.$store.getters['auth/check']
            },

            user() {
                return this.$store.getters['auth/user']
            },
            isNewPostPage() {
                return this.$route.name == 'NewPost'
            }
        },
        mounted() {
            
        },
        methods: {
            toggleMegaMenu() {
                if (this.megaMenuShow == false) {
                    this.megaMenuShow = true;
                } else {
                    this.megaMenuShow = false;
                }
            }
        },
    }

</script>
