<style scoped>
    .catBox {
        position: absolute;
        width: 100%;
        left: 0px;
        top: 70px;
        z-index: 9999;
    }
</style>
<template>
    <div>
        <the-navigation></the-navigation>
        <div class="content-wrapper">
            <div class="content">
            <portal-target name="mainPage"></portal-target>
                <div class="ml-3 mr-3 pt-3">
                    <router-view></router-view>
                </div>
            </div>
        </div>
        <cookies-alert-box></cookies-alert-box>
        <the-footer></the-footer>
    </div>
</template>

<script>

import CookiesAlertBox from '../components/CookiesAlert'
import TheNavigation from './TheNavigation.vue';
import TheFooter from './TheFooter.vue'
import TheHome from '../pages/Home'
export default {
    components: {
        TheNavigation,
        TheFooter,
        TheHome,
        CookiesAlertBox
    },
    mounted() {
        document.body.classList = "hold-transition layout-top-nav"
    }    
}
</script>