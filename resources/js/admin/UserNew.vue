<template>
    <div class="row">


    </div>
</template>

<script>
    export default {
        created() {
            this.$store.dispatch('admin/fetchUsers', 1);
        },
        computed: {
            users() {
                return this.$store.getters['admin/getUsers']
            }
        },
        methods: {
		getResults(page = 1) {
            this.$store.dispatch('admin/fetchUsers', page)
		}
	}
    }

</script>
