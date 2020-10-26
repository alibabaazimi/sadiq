<template>
    <div>
        <div class="row mb-2 mt-1 sticky-top" style="top: 75px">
            <div class="col-md-6 offset-md-3">
                <search-bar></search-bar>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Filter</div>
                    </div>
                    <div class="card-body">
                        <ul class="nav flex-column p-0">
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

                <h3>Results:</h3>
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

import SearchBar from '../components/Search'
export default {
    components: {
        SearchBar
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