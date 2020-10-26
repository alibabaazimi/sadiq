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
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://placehold.it/900x200/39CCCC/ffffff&amp;text=Your+Advertisements+Here"
                                alt="First slide">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100"
                                src="https://placehold.it/900x200/3c8dbc/ffffff&amp;text=Browse+Best+Products"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100"
                                src="https://placehold.it/900x200/f39c12/ffffff&amp;text=Sell+Your+Products"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <hr>
                <h3>All posts:</h3>
                <!-- <div class="row"> -->
                    <post-list :posts="posts"></post-list>
                <!-- </div> -->
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
            ...mapGetters({
                posts: 'posts/all',
                postsLoadingStatus: 'posts/allLoadingStatus'
            }),
        },
        methods: {
            setSearchCategory(e) {
                this.searchCategory = e
            }
        },

        
    }

</script>
