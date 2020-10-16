<template>
    <div>
        <the-navigation></the-navigation>
        <the-sidebar></the-sidebar>
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content pt-3">
                <router-view></router-view>
            </section>
            <!-- /.content -->
        </div>
    </div>
</template>

<script>
    import TheNavigation from './TheNavigation'
    import TheSidebar from './TheSidebar'
    export default {
        components: {
            TheNavigation,
            TheSidebar
        },
        mounted() {
            document.body.classList = "hold-transition sidebar-collapse sidebar-mini"
        }
    }

</script>
