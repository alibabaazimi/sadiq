<template>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">User Info</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img :src="'/' + post.image.path" class="img-fluid">
                                <div class="btn-sm btn-primary">
                                    Change
                                </div>
                            </div>

                        </div>
                        <div class="col-md-9">
                            <div class="card p-4">
                                <form>
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" id="title" class="form-control" v-model="post.title">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Description</label>
                                        <input type="text" name="description" id="description" v-model="post.description" class="form-control">
                                    </div>
                                </form>
                            </div>
                        </div>
                        
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
            }
        },
        created() {
            this.$store.dispatch('admin/fetchPost', this.$route.params.postId);
        },
        computed: {
            post() {
                return this.$store.getters['admin/getPost']
            },
            cities() {
                return this.$store.getters['constants/getCities'];
            }
        },

    }

</script>
