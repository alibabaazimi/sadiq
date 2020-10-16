<template>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 p-0">
                <div class="col-md-12">
                    <img :src="postImage" class="img-thumbnail" alt="Product Image">
                </div>
                <div class="d-sm-block d-md-none mt-3 pl-2">
                    <h3 class="">{{ post.title }}</h3>
                    <a href="" class=" btn-sm"><i class="far fa-thumbs-up"></i>{{ post.likes.length }} Likes</a>
                </div>
                <div class="mt-3 pl-2 pr-2">
                    <div class="btn btn-primary btn-flat">
                        <i class="fas fa-comment fa-lg"></i>
                        Send Message
                    </div>

                    <div class="btn btn-danger btn-flat float-right">
                        <i class="fas fa-heart fa-lg"></i>
                        Add to Wishlist
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-none d-md-block">
                    <h3 class="">{{ post.title }}</h3>
                    <a href="" class=" btn-sm"><i class="far fa-thumbs-up"></i>{{ post.likes.length }} Likes</a>
                </div>



                <div class="mt-4 post-share col">
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
                <hr>



                <div class="card">
                    <div class="card-header bg-olive">
                        Basic Informations:
                    </div>
                    <div class="card-body">
                        <ul class="list-group-flush p-0">
                            <li class="list-group-item">
                                <div class="d-inline-block">Device Brand</div>
                                <div class="d-inline-block float-right">{{ post.device_brand['name'] }}</div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">Device Model</div>
                                <div class="d-inline-block float-right">{{ post.device_model }}</div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block"></div>
                                <div class="d-inline-block float-right">{{ post.color['name'] }}</div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">Price</div>
                                <div class="d-inline-block float-right">{{ post.device_brand['name'] }}</div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-inline-block">Price</div>
                                <div class="d-inline-block float-right">{{ post.price }}</div>
                            </li>
                        </ul>
                    </div>
                </div>

                <hr>
                <div class="card rounded-0 shadow-none">
                    <div class="card-header bg-olive">
                    <h5>Description</h5>
                    </div>
                    <div class="card-body">
                    <p style="white-space: pre-wrap;">{{ post.description }}</p>
                    </div>
                </div>

                <div class="card rounded-0 shadow-none">
                    <div class="card-header bg-olive">
                    <h5>Cantact Information</h5>
                    </div>
                    <div class="card-body">
                        <div v-if="isLoggedIn">
                            <p>{{ post.desc }}</p>
                        </div>
                        <div v-else>
                            Please login to see contact Information
                        </div>
                    </div>
                </div>

                
                <hr>
                <comments :postId="post.id"></comments>
            </div>
            
            <div class="col-md-2 d-none d-md-block">
                <div class="card rounded-0">
                    <div class="card-header">
                        Ads
                    </div>
                    <div class="card-body">
                        Google Ads
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { mapState } from 'vuex';
import comments from '../components/PostShowComments';
export default {
    components: {
        comments
    },
    created() {
        this.$store.dispatch('posts/fetchPost', this.$route.params.postId);
    },
    computed: {
        post() {
            return this.$store.getters['posts/currentPost']
        },
        postImage() {
            // return '/post_photos/uzd0huDmf9b3hdyvUT9sWm16fbhIlBJ3WWcOXuCS.png'
            return this.$store.getters['posts/postImage']
        },
        isLoggedIn() {
            return this.$store.getters['auth/check']
        }
    },
};
</script>
