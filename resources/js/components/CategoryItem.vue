<template>
    <div @click="selected()" class="list-group-item list-group-item-action d-flex align-items-center bd-highlight">
        <div class="col-md-2 pl-4">
            <i class="fas fa-mobile fa-4x text-navy"> </i>
        </div>
        <div class="m-3">
            {{category.name}}
        </div>
    </div>
</template>

<script>
export default {
    methods: {
        selected() {
            this.$emit('applied')
        }
    },
    props: ['category']
}
</script>