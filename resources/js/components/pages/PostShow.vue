<template>
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none">{{ post.title }}</h3>
                <div class="col-12">
                    <img :src="postImage" class="product-image" alt="Product Image">
                </div>
                <div class="col-md-4 mt-2">
                    <a href="" class=" btn-sm"><i class="far fa-thumbs-up"></i>{{ post.likes.length }} Likes</a>
                </div>

                <div class="mt-4 product-share col">
                    <a href="#" class="text-gray">
                        <i class="fab fa-facebook-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                        <i class="fab fa-twitter-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                        <i class="fas fa-envelope-square fa-2x"></i>
                    </a>
                    <a href="#" class="text-gray">
                        <i class="fas fa-rss-square fa-2x"></i>
                    </a>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <h3 class="my-3">{{ post.title }}</h3>
                <p>{{ post.desc }}</p>

                <hr>

                <div class="bg-gray py-2 px-3 mt-4">
                    <h2 class="mb-0">
                        ${{ post.price }}
                    </h2>
                    <h4 class="mt-0">
                        <small>Tax: ${{ (post.price/100)*10 }} </small>
                    </h4>
                </div>

                <div class="mt-4">
                    <div class="btn btn-primary btn-lg btn-flat">
                        <i class="fas fa-cart-plus fa-lg mr-2"></i>
                        Order
                    </div>

                    <div class="btn btn-default btn-lg btn-flat">
                        <i class="fas fa-heart fa-lg mr-2"></i>
                        Add to Wishlist
                    </div>
                </div>
            </div>
        </div>
        <comments></comments>
    </div>
</template>
<script>
import { mapState } from 'vuex';
import comments from './PostShowComments';
export default {
    components: {
        comments
    },
    created() {
        this.$store.dispatch('posts/fetchPost', this.$route.params.postId);
    },
    computed: {
        post() {
            return this.$store.getters.['posts/currentPost']
        },
        postImage() {
            // return '/post_photos/uzd0huDmf9b3hdyvUT9sWm16fbhIlBJ3WWcOXuCS.png'
            return this.$store.getters.['posts/postImage']
        },
    },
};
</script>
