<style scoped>
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}
</style>
<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-lg-6">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="/login" @submit.prevent="login">
                    <h2 class="text-center">Sign in</h2>
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1">
                                <a href="#" class="fb btn form-control text-left" @click="socialLogin('facebook')">
                                    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                </a>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <a href="#" class="google btn form-control text-left" @click="socialLogin('google')">
                                    <i class="fa fa-google fa-fw"></i> Login with Google
                                </a>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <a href="#" class="twitter btn form-control text-left" @click="socialLogin('twitter')">
                                    <i class="fa fa-twitter fa-fw"></i> Login with Twitter
                                </a>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1">
                                <input id="email" type="email" v-model="username" class="form-control" name="email" placeholder="Email" required autocomplete="email" autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1">
                                <input id="password" type="password" v-model="password" class="form-control" name="password" placeholder="Password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 offset-md-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-10 offset-md-1">
                                <button type="submit" class="btn btn-success form-control">
                                    Sign In
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    data() {
        return {
            username: '',
            password: ''
        }
    },
    mounted () {
        window.addEventListener('message', this.onMessage, false)
    },

    beforeDestroy () {
        window.removeEventListener('message', this.onMessage)
    },
    methods: {
        onMessage (e) {
        if (e.origin !== window.origin || !e.data.token) {
            return
        }
        if (e.data.token) {
            localStorage.setItem('access_token', e.data.token)
            this.$store.dispatch('auth/getCurrentUser', e.data.token);
        }
        // localStorage.setItem('user',e.data.name)
        // localStorage.setItem('jwt',e.data.token)

        this.$router.push({name: 'Home'})
        },
        login() {
            this.$store.dispatch('auth/newToken', {
                username: this.username,
                password: this.password
            })
            .then(response => {
                this.$router.push({ name: 'Home' })
            })
        },
        socialLogin(provider) {
            window.open('/login/' + provider, '_blank', "");
    
        }
    }
}
</script>
