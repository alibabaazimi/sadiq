<template>
    <div class="row">
        <post-item v-for="post in posts" :post="post" :key="post.key"></post-item>
    </div>
    
</template>
<script>

import { mapGetters } from "vuex";
import PostItem from './PostItem';
export default {
    props: ['posts'],
    components: {
        PostItem
    },
    name: "Posts",

    mounted() {
        this.$store.dispatch('posts/fetchPosts');
    },

};
</script>