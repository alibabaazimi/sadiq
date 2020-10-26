<template>
    <div class="input-group mb-3 shadow position-relative">
        <div class="input-group-prepend">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                {{ searchCategory }}
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#" @click="setSearchCategory('All Category')">All</a>
                <a class="dropdown-item" href="#" 
                    v-for="category in categories" 
                    :key="category.id" 
                    @click="searchCategory = category.name"
                    >{{ category.name }}
                </a>
            </div>
        </div>
        <input type="hidden" name="search_param" value="all" id="search_param">         
        <input type="text" class="form-control" ref="searchBox" autocomplete="off"
            name="search_query" 
            v-model="searchQuery"
            :placeholder="'Search in ' + searchCategory"
            @focus="searchBoxFocused = true"
            @blur="searchBoxFocused = false">
        <div class="input-group-append">
            <button class="btn btn-secondary rounded-right" type="button"><span class="fa fa-search"></span></button>
        </div>
        <div class="col-md-12 m-0 p-0">
            <div class="col position-absolute m-0 p-0 rounded-bottom shadow" 
                v-if="searchBoxFocused">
                <ul class="list-group p-0" v-if="searchQuery.length<3">
                    <li class="list-group-item bg-light" v-if="searchQuery.length==0">
                        <div class="d-inline-block">Please type at least 3 letters</div>
                    </li>
                    <li class="list-group-item bg-light" v-if="searchQuery.length>0">
                        <div class="d-inline-block">{{ 3-searchQuery.length }} more</div>
                    </li>
                </ul>
                <ul class="list-group p-0 bg-light" v-if="searchQuery.length>2">
                    <li class="list-group-item" @click="test">
                        <div class="d-inline-block">Searching for "{{ searchQuery }}"</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            searchQuery: '',
            searchCategory: 'All Category',
            searchBoxFocused: false,
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
        test() {
            alert();
        },
        sleep(seconds){
            var waitUntil = new Date().getTime() + seconds*1000;
            while(new Date().getTime() < waitUntil) true;
        }
    }
}
</script>