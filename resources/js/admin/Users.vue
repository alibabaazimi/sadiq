<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card" style="min-height: 500px">
                <div class="card-header">
                    Users:
                </div>
                <div class="card-body">
                    <router-link to="/admin/users/new" class="btn btn-primary">
                        <i class="fa fa-plus"></i> New User
                    </router-link>
                    <table class="table table-bordered mt-2">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Joining Date</th>
                                <th style="">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in users.data" v-bind:key="user.id">
                                <td>{{ user.id }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                                <td>{{ moment(user.created_at).format('MM/DD/YYYY, h:mm a') }}</td>
                                <td>
                                    <router-link :to="{ name: 'AdminUserShow', params: { userId: user.id } }" class="btn btn-sm btn-primary inline">View</router-link>
                                    <button class="btn btn-sm btn-danger inline" @click="deleteUser(user.id)">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <pagination :data="users" @pagination-change-page="getResults"></pagination>
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
            this.$store.dispatch('admin/fetchUsers', this.$route.params.userId);
        },
        computed: {
            users() {
                return this.$store.getters['admin/getUsers']
            }
        },
        methods: {
            getResults(page = 1) {
                this.$store.dispatch('admin/fetchUsers', page);
            },
            deleteUser(userId) {
                Swal.fire({
                    title: 'Do you want to save the changes?',
                    showCancelButton: true,
                    confirmButtonText: `Save`,
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        this.$store.dispatch('admin/deleteUser', userId)
                        .then(response => {
                            Swal.fire('User deleted successfully!', '', 'success')
                        })
                        .catch(err => {
                            Swal.fire('Changes are not saved', '', 'info')
                        })
                        
                    } 
                })
                
            }
	}
    }

</script>
