<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark" style="min-height: 500px">
                <div class="card-header">
                    Categories Setup:
                </div>
                <div class="card-body">
                    <router-link to="/admin/users/new" class="btn btn-primary">
                        <i class="fa fa-plus"></i> New Category
                    </router-link>
                    <div class="row mt-3">
                        <div class="col-12">
                            <category-item :categories="categories" :category="category" name="Categories"></category-item>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

import Swal from 'sweetalert2/dist/sweetalert2.js'
import 'sweetalert2/src/sweetalert2.scss'

import CategoryItem from './CategoryItem'

    export default {
        components: {
            CategoryItem
        },
        data() {
            return {
                category: {
                    children: []
                }
            }
        },
        created() {
            this.$store.dispatch('constants/fetchCategories');
        },
        computed: {
            categories() {
                return this.$store.getters['constants/getCategories']
            }
        },
        methods: {
            
	}
    }

</script>
