<template>
    <div class="card">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <ul class="list-group-flush p-0">
                <li class="list-group-item p-0" 
                    v-for="category in mainCategories"
                    :key="category.id">
                    <router-link :to="'/category/'+ category.slug">
                        {{ category.name }}
                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'
export default {
    computed: {
        ...mapGetters({
            mainCategories: 'constants/getCategories'
        }),
    },
}
</script>