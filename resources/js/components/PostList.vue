<style scoped>



.animated {
	background-color: #f3f3f3;
	background: linear-gradient(to right, #f3f3f3 5%, #eee 20%, #f3f3f3 35%);
	animation: placeholderShimmer 4s linear 0s infinite normal forwards;
}

.title {
	position: relative;
	height: 28px;
}

.title:after {
	position: absolute;
	right: 0;
	content: '';
	background: #fff;
	height: 28px;
	width: 0%;
}
.padding {
  height: 16px;
  background: #fff;
}
@keyframes placeholderShimmer {
	0% {
		background-position: -500px 0;
	}

	100% {
		background-position: 500px 0;
	}
}

</style>
<template>
    <div>
        <div class="row" v-if="postsLoadingStatus==2">
            <post-item v-for="post in posts" :post="post" :key="post.key"></post-item>
        </div>
        <div class="row" v-if="postsLoadingStatus==1">
            <div class="col-md-4" v-for="n in 9" :key="n">
                <div class="card">
                    <div class="card-body">
                        <div class="embed-responsive embed-responsive-1by1 animated">
                            <div class="embed-responsive-item pad"></div>
                        </div>
                        <div class="padding"></div>
                        <div class="animated">
                            <div class="title"></div>
                        </div>
                        <div class="padding"></div>
                        <div class="animated">
                            <div class="title"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div v-if="postsLoadingStatus==3"><h1>Error load...</h1></div>
        </div>
    </div>
    
</template>
<script>

import { mapGetters } from "vuex";
import PostItem from '../components/PostItem';
export default {
    props: ['posts'],
    components: {
        PostItem
    },
    name: "Posts",
    computed: {
        ...mapGetters({
            postsLoadingStatus: 'posts/allLoadingStatus'
        }),
    },
    mounted() {
        this.$store.dispatch('posts/fetchPosts');
    },

};
</script>