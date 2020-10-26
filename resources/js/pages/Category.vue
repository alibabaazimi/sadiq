<template>
    <div>
        <portal-target name="destination"></portal-target>
        <div class="row mb-2 mt-1 sticky-top" style="top: 75px">
            <div class="col-md-6 offset-md-3">
                <search-bar></search-bar>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <categories></categories>
            </div>
            <div class="col-md-8">
                <h3>All posts:</h3>
                <div class="row">
                    
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        Advertisements
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {
        mapGetters
    } from 'vuex'
    import SearchBar from '../components/Search'
    import Categories from '../components/Categories'
    import PostList from '../components/PostList'

    export default {
        components: {
            SearchBar,
            Categories,
            PostList
        },
        mounted() {
            console.log('Home mounted.')
        },
        computed: {
          
        },
        methods: {
            setSearchCategory(e) {
                this.searchCategory = e
            }
        },

        
    }

</script>
