<template>
</template>
<script>
export default {
    mounted() {
        console.log('Logged out')
        this.$store.dispatch('auth/destroyToken')
        .then(response => {
            this.$router.push({ name: 'UserLogin' })
        })
    }
}
</script>
