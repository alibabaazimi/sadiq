<template>
    <div class="col-md-4 col-sm-6 ">
        <div class="card card-widget">
            <div class="card-body" style="display: block;">
                <router-link :to="{ name: 'PostShow', params: { postId: post.id }}" class="text-dark">
                    <img class="img-fluid pad" :src="post.image.path" alt="Photo">
                    <h3>{{ post.title }}</h3>
                    <p>{{ post.desc }}</p>
                </router-link>
                <button type="button" class="btn btn-default btn-sm"><i class="fas fa-share"></i> Share</button>
                <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
                <a href="">
                <span class="float-right text-muted"> comments</span>
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
