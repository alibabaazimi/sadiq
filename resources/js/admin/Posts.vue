<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="min-height: 500px">
                <div class="card-header">
                    Posts:
                </div>
                <div class="card-body">
                    <router-link to="/admin/posts/new" class="btn btn-primary">
                        <i class="fa fa-plus"></i> New Post
                    </router-link>
                    <table class="table table-bordered mt-2">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Title</th>
                                <th>Published date</th>
                                <th style="">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="post in posts.data" v-bind:key="post.id">
                                <td>{{ post.id }}</td>
                                <td>{{ post.title }}</td>
                                <td>{{ moment(post.created_at).format('MM/DD/YYYY, h:mm a') }}</td>
                                <td>
                                    <router-link :to="{ name: 'AdminPostShow', params: { postId: post.id } }" class="btn btn-sm btn-primary inline">View</router-link>
                                    <button class="btn btn-sm btn-danger inline" @click="deletePost(post.id)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <pagination :data="posts" @pagination-change-page="getResults"></pagination>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'

    export default {
        created() {
            this.$store.dispatch('admin/fetchPosts');
        },
        computed: {
            posts() {
                return this.$store.getters['admin/getPosts']
            }
        },
        methods: {
            getResults(page = 1) {
                this.$store.dispatch('admin/fetchPosts', page);
            },
            deletePost(postId) {
                Swal.fire({
                    title: 'Do you want to delete the posts?',
                    showCancelButton: true,
                    confirmButtonText: `Yes`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        this.$store.dispatch('admin/deletePost', postId)
                        .then(response => {
                            Swal.fire('Post deleted successfully!', '', 'success')
                        })
                        .catch(err => {
                            Swal.fire('Post not deleted', '', 'info')
                        })
                        
                    } 
                })
                
            }
	}
    }

</script>
