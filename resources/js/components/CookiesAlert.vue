<style scoped>
.cookies-policies-panel {
    position:fixed;
    left: 0px;
    bottom: 0px;
    height: auto;
    width: 100%;
    background: rgba(255, 255, 255, 0.89);
}
</style>

<template>
    <div class="cookies-policies-panel" v-show="!cookiesAlertShow">
        <div class="container pt-3">

                <h5>Cookies Consent</h5>
            <div class="row">
                <div class="col">
                <p>
                    This website uses cookies and by clicking 'Accept and Close', you agree to the storing of cookies on your device to give you best and relavant experience
                </p>
                </div>
                <div class="col-md-4">
                    <button class="btn btn-secondary float-right" @click="accept">Accept and Close</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    computed: {
        cookiesAlertShow() {
            return this.$store.getters['cookiesAccepted']
        }
    },
    methods: {
        accept() {
            this.$store.commit('SET_COOKIES_ACCEPTED');
        }
    }
}
</script>