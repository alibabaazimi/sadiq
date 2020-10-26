<template>
    <div class="col-md-4 col-sm-6 ">
        <div class="card card-widget">
            <div class="card-body" style="display: block;">
                <router-link :to="{ name: 'PostShow', params: { slug: post.slug }}" class="text-dark">
                    <img class="img-fluid pad" :src="post.image.thumbnail_path" alt="Photo">
                    <h3>{{ post.title }}</h3>
                    <p>{{ post.desc }}</p>
                </router-link>
                <a href="">
                <span class="float-right text-muted">{{ post.price }} {{/* post.currency.symbol ? post.currency.symbol :*/ post.currency.name }}</span>
                </a>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</template>
<script>
export default {
  name: "Post",
  props: ["post"],

};
</script>
