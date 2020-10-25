<template>
    <div class="row">
        <div class=" p-2 pl-3" v-if="name!='Categories'">
            <i class="fa fa-arrow-right"></i>
        </div>
        <div class="col">
            <div :class="['card card-light m-0 m-0 ', name != 'Categories' ? 'collapsed-card' : '']">
                <div class="card-header" data-card-widget="collapse">
                    <router-link :to="{ name: 'AdminCategoryEdit', params: { categoryId: category.id } }" class="btn btn-tool" v-if="name!='Categories'"><i class="fas fa-pen"></i></router-link>
                    {{ name }}
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" v-if="category.children.length>0">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body p-0 pl-2">
                    <category-item
                        v-for="category in categories" 
                        :categories="category.children" 
                        :category="category"
                        :name="category.name"
                        :key="category.id">
                    </category-item>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["categories", "category", "name"],
        name: 'category-item'
    }
</script>
