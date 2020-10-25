<template>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4 p-0">

                <div class="card">
                    <div class="card-body p-0">
                        <div class="embed-responsive embed-responsive-1by1 img-thumbnail" >
                            <img :src="postImage" class="embed-responsive-item" style="object-fit: contain" alt="Product Image">
                        </div>
                    </div>

                    <div class="card-footer p-2">
                        <div class="btn btn-primary btn-flat">
                            <i class="fas fa-comment fa-lg"></i>
                            <p class="d-inline text-truncate">Send Message</p>
                        </div>

                        <div class="btn btn-danger btn-flat float-right">
                            <i class="fas fa-heart fa-lg"></i>
                            <p class="d-inline text-truncate">Add to Wishlist</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="">
                    <h3 class="">{{ post.title }}</h3>
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
                        Details:
                    </div>
                    <div class="card-body">
                        <ul class="list-group-flush p-0">
                            <li class="list-group-item" v-if="post.device_brand">
                                <div class="d-inline-block">Device Brand</div>
                                <div class="d-inline-block float-right">{{ post.device_brand.name }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.device_model">
                                <div class="d-inline-block">Device Model</div>
                                <div class="d-inline-block float-right">{{ post.device_model }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.device_pc_type">
                                <div class="d-inline-block">PC Type</div>
                                <div class="d-inline-block float-right">{{ post.pc_type.name }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.device_hdd_size">
                                <div class="d-inline-block">Hard Disk</div>
                                <div class="d-inline-block float-right">{{ post.device_hdd_size }} GB</div>
                            </li>
                            <li class="list-group-item" v-if="post.device_ram_size">
                                <div class="d-inline-block">RAM</div>
                                <div class="d-inline-block float-right">{{ post.device_ram_size }} GB</div>
                            </li>
                            <li class="list-group-item" v-if="post.device_processor">
                                <div class="d-inline-block">Processor</div>
                                <div class="d-inline-block float-right">{{ post.device_processor }}</div>
                            </li>

                            <li class="list-group-item" v-if="post.building_build_year">
                                <div class="d-inline-block">Build Year</div>
                                <div class="d-inline-block float-right">{{ post.building_build_year }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.building_area_as_square">
                                <div class="d-inline-block">Area As Square</div>
                                <div class="d-inline-block float-right">{{ post.building_area_as_square }} m<sup>2</sup></div>
                            </li>
                            <li class="list-group-item" v-if="post.building_floor">
                                <div class="d-inline-block">Floor</div>
                                <div class="d-inline-block float-right">{{ post.building_floor }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.building_rooms">
                                <div class="d-inline-block">Rooms</div>
                                <div class="d-inline-block float-right">{{ post.building_rooms }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.building_deposit">
                                <div class="d-inline-block">Amount of deposit</div>
                                <div class="d-inline-block float-right">{{ post.building_deposit }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.building_rent_per_month">
                                <div class="d-inline-block">Rent per Month</div>
                                <div class="d-inline-block float-right">{{ post.building_rent_per_month }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.building_has_parking">
                                <div class="d-inline-block">Has Parking</div>
                                <div class="d-inline-block float-right">{{ post.building_has_parking == 1 ? 'Yes' : 'No' }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.building_has_elevator">
                                <div class="d-inline-block">Has Elevator</div>
                                <div class="d-inline-block float-right">{{ post.building_has_elevator == 1 ? 'Yes' : 'No' }}</div>
                            </li>

                            <li class="list-group-item" v-if="post.car_brand">
                                <div class="d-inline-block">Car Brand</div>
                                <div class="d-inline-block float-right">{{ post.car_brand.name }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.car_model">
                                <div class="d-inline-block">Car Model</div>
                                <div class="d-inline-block float-right">{{ post.car_model }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.car_hand">
                                <div class="d-inline-block">Car Hand</div>
                                <div class="d-inline-block float-right">{{ post.car_hand.name }}</div>
                            </li>
                            <li class="list-group-item" v-if="post.car_kilometers_consumed">
                                <div class="d-inline-block">Kilometers Consumed</div>
                                <div class="d-inline-block float-right">{{ post.car_kilometers_consumed }} Kms</div>
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
