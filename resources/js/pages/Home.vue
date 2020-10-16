<template>
    <div>
        <portal-target name="destination"></portal-target>
        <div class="row mb-2 mt-1 sticky-top" style="top: 75px">
            <div class="col-md-8 offset-md-2">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                            {{ searchCategory }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#" @click="setSearchCategory('All Category')">All</a>
                            <a class="dropdown-item" href="#" @click="setSearchCategory('Electronics')">Electronics</a>
                            <a class="dropdown-item" href="#" @click="setSearchCategory('Buildings')">Buildings</a>
                            <a class="dropdown-item" href="#" @click="setSearchCategory('Vehicles')">Vehicles</a>
                        </div>
                    </div>
                    <input type="hidden" name="search_param" value="all" id="search_param">         
                    <input type="text" class="form-control" name="x" :placeholder="'Search in ' + searchCategory">
                    <div class="input-group-append">
                        <button class="btn btn-secondary" type="button"><span class="fa fa-search"></span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Filter</div>
                    </div>
                    <div class="card-body">
                        <ul class="nav flex-column">
                            Price
                            <input id="range_1" type="text" name="range_1" value="">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Land</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Vehicles</a>
                            </li>
                        </ul>
                    </div>
                </div>
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
                <div class="row">
                    <post-list :posts="posts"></post-list>
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
    import PostList from '../components/PostList'
    export default {
        data() {
            return {
                searchCategory: 'All Category',
            }
        },
        components: {
            PostList
        },
        mounted() {
            console.log('Home mounted.')
        },
        computed: {
            ...mapGetters({
                posts: 'posts/all'
            }),
        },
        methods: {
            setSearchCategory(e) {
                this.searchCategory = e
            }
        },
        mounted() {
            $('#range_1').ionRangeSlider({
                min     : 0,
                max     : 5000,
                from    : 1000,
                to      : 4000,
                type    : 'double',
                step    : 1,
                prefix  : '$',
                prettify: false,
                hasGrid : true
            })
        }
        
    }

</script>
