<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark" style="min-height: 500px">
                <div class="card-header">
                    Categories Setup:
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Title (EN)</label>
                        <input type="text" class="form-control" placeholder="Category Name" v-model="category.name">
                    </div>
                    <div class="form-group">
                        <label>Title (FA)</label>
                        <input type="text" class="form-control" placeholder="اسم دسته" v-model="category.name_fa">
                    </div>
                    <div class="form-group">
                        <label>Title (SE)</label>
                        <input type="text" class="form-control" placeholder="Category Name" v-model="category.name_se">
                    </div>
                    <div class="form-group">
                        <label>Parent Category</label>
                        <select class="form-control" v-model="category.parent_id">
                            <option v-for="category in allCategories" 
                                    :key="category.id" 
                                    :value="category.id">
                                    {{ category.name }}
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" @click="storeCategory">
                            <i class="fa fa-save"></i>
                            Save Changes
                        </button>
                    </div>     
                </div>
            </div>
        </div>

    </div>
</template>

<script>

import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'

    export default {
        data() {
            return {
                category: {
                    name: '',
                    name_se: '',
                    name_fa: '',
                    parent_id: ''
                }
            }
        },
        created() {
            this.$store.dispatch('admin/fetchAllCategories');
        },
        computed: {
            allCategories() {
                return this.$store.getters['admin/getAllCategories']
            },
        },
        methods: {
            storeCategory() {
                this.$store.dispatch('admin/storeCategory', this.category)
                .then(response => {
                    $(document).Toasts('create', {
                        title: 'Success!',
                        body: 'Category Added',
                        autohide: true,
                        delay: 5000,
                    });
                    this.$router.push({ name: 'AdminCategories'})
                })
                .catch(error => {

                })
            }
        }
    }

</script>
