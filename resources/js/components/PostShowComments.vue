<template>
    <div class="card mt-4">
        <div class="card-header bg-orange">
            <h5>Reviews and Comments</h5>
        </div>
        <div class="card-comments bg-white p-3">
            <h5>{{ comments.length }} comments</h5>
            <div class="card-comment" v-for="comment in comments" :key="comment.id">
                <img class="img-circle img-sm"  alt="User Image" :src="comment.user.image ? '/'+comment.user.image.path : comment.userProfileImage">
                <div class="comment-text">
                    <span class="username">
                        {{ comment.user.name }}
                        <span class="text-muted float-right">2 mins ago</span>
                    </span>
                    {{ comment.text }}
                </div>
            </div>
            <div class="mt-3">
                <form v-if="loggedIn" @submit.prevent="submitComment">
                    <img class="img-fluid img-circle img-sm" :src="user.profileImage" alt="Alt Text">
                    <div class="img-push">
                        <input type="hidden" v-model="comment.postId">
                        <input type="text" class="form-control form-control-sm" v-model="comment.text" name="comment"
                            placeholder="Write your comment and press Enter">
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
            this.$store.dispatch('posts/fetchPostComments', this.comment.postId);
        },
        computed: {
            comments() {
                // console.log(this.$store.getters['posts/getPostComments']);
                return this.$store.getters['posts/getPostComments'];
            },
            loggedIn() {
                return this.$store.getters['auth/check'];
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
