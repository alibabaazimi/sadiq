<template>
    <div class="row mt-4">
        <div class="card-footer card-comments col-md-12" v-if="comments && comments.length > 1">
            <h5>{{ comments.length }} comments</h5>
            <div class="card-comment" v-for="(value) in comments" :key="value.id">
                <img class="img-circle img-sm" :src="'/'+value.user.image.path" alt="User Image">
                <div class="comment-text">
                    <span class="username">
                        {{ value.user.name }}
                        <span class="text-muted float-right">2 mins ago</span>
                    </span>
                    {{ value.text }}
                </div>
            </div>
            <div class="mt-3">
                <form v-if="loggedIn" @submit.prevent="submitComment">
                    <img class="img-fluid img-circle img-sm" :src="user.image" alt="Alt Text">
                    <div class="img-push">
                        <input type="hidden" v-model="comment.postId">
                        <input type="text" class="form-control form-control-sm" v-model="comment.text" name="comment"
                            placeholder="Press enter to post comment">
                    </div>
                </form>
                <div v-else>To comment please login <router-link :to="{ name: 'UserLogin' }">Login</router-link></div>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                comment: {
                    postId: this.$route.params.postId,
                    text: ''
                }
            }
        },
        created() {
            this.$store.dispatch('posts/fetchPostComments', this.$route.params.postId);
        },
        computed: {
            comments() {
                // console.log(this.$store.getters['posts/getPostComments']);
                return this.$store.getters['posts/getPostComments'];
            },
            loggedIn() {
                return this.$store.getters['auth/loggedIn'];
            },
            user() {
                return this.$store.getters['auth/user'];
            }
        },
        methods: {
            submitComment() {
                this.$store.dispatch('posts/submitComment', {
                    post_id: this.comment.postId,
                    comment_text: this.comment.text
                })
                .then(response => {
                    this.comment.text = '';
                })
            }
        }
    };

</script>
