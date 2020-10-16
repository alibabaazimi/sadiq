<template>
    <div class="card">
        <div class="card-header bg-olive">
            <h5>Select Category</h5>
        </div>
        <div class="card-body p-0">
            <ol class="breadcrumb float-sm-left col m-0">
                <li class="breadcrumb-item" v-for="(item, index) in list" :key="index">
                    <a href="#" @click="gotoCategory(item, index)">{{ item.category.name }}</a>
                </li>
            </ol>
            <div class="list-group-flush">
                <!-- <category-item @applied="sh()" v-for="category in categories" :key="category.id" :category="category"></category-item> -->
                <div role="button" 
                    v-for="category in myCat" 
                    :key="category.id" 
                    @click="selectCategory(category)" 
                    class="list-group-item list-group-item-action d-flex align-items-center bd-highlight"
                    @mouseover="category.checked = true"
                    @mouseleave="category.checked = false">
                    <div class="col">
                        Icon
                    </div>
                    <div class="col-10">
                        {{ category.name }}
                    </div>
                    <div id="category_toolbox pr-3">
                        <div class="col-2" v-if="category.children.length>0">
                            <i class="fas fa-arrow-right p-2"></i>
                        </div>
                        <div class="col-2" v-else>
                            <!-- <input type="checkbox" :checked="category.checked"> -->
                            <div class="icheck-primary icheck-inline">
                                <input type="radio" :id="category.name" :checked="category.checked" ><label :for="category.name"></label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div role="button" v-if="list.length>1"
                    class="list-group-item list-group-item-action d-flex align-items-center bd-highlight"
                    @click="selectOther(list[list.length-1].category)">
                    <div class="col">
                        Icon
                    </div>
                    <div class="col-10">
                        Other
                    </div>
                    <div id="category_toolbox pr-3">
                        <div class="col-2">
                            <div class="icheck-primary icheck-inline">
                                <input type="radio" id="category.name"  ><label for="category.name"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CategoryItem from './CategoryItem'
export default {
    props: ['categories'],
    data() {
        return {
            list: [],
            categoryPath: [],
            myCat: this.categories,
            defaultCategory: this.categories
        }
    },
    methods: {
        selectCategory(category) {
            if (!this.categoryPath.includes(category.id)) {
                this.categoryPath.push(category.id)
            }
            if (category.children.length>0) {
                this.myCat = category['children'];
                this.list.push({category: category, children: category['children']})
            } else {
                this.$emit('categorySelected', {category: category, list: this.categoryPath});
                // Change Menu to default
                this.myCat = this.defaultCategory;
                this.list = [{category: {name: 'Main'}, children: this.categories}]
                this.categoryPath = [];
            }
            this.myCat.forEach(category => {
                Vue.set(category, 'checked', false);
            });
        },
        selectOther(category) {
            if (!this.categoryPath.includes(category.id)) {
                this.categoryPath.push(category.id)
            }
            this.$emit('categorySelected', {category: category, list: this.categoryPath});
            // Change Menu to default
            this.myCat = this.defaultCategory;
            this.list = [{category: {name: 'Main'}, children: this.categories}]
            this.categoryPath = [];
        },
        gotoCategory(item, index) {
                this.myCat = item['children'];
                this.list.splice(index+1, this.list.length-index);
                this.categoryPath.splice(index, this.categoryPath.length-index+1);
        }
    },
    mounted() {
        this.list.push({category: {name: 'Main'}, children: this.categories})
        this.myCat.forEach(category => {
            Vue.set(category, 'checked', false);
        });
    },
    components: {
        CategoryItem
    },
}
</script>