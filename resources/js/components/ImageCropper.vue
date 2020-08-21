<template>
<div class="row">
	<div class="col-md-12">
	<img ref="image" :src="src"></img>
	</div>
</div>
</template>

<script>
	import Cropper from 'cropperjs'
	export default {
		name: 'ImageCropper',
		props: {
			src: String
		},
		data() {
			return {
				cropper: {},
				destination: {},
				image: {}
			}
		},
		mounted() {
			this.image = this.$refs.image;
			this.cropper = new Cropper(this.image, {
				zoomable: false,
				scalable: false,
				aspectRatio: 1,
				viewMode: 3,
				responsive: true,
				crop: () => {
					const convas = this.cropper.getCroppedCanvas();
				}
			});
		}
	}

</script>

<style>
img {
  display: block;

  /* This rule is very important, please don't ignore this */
  max-width: 100%;
}
</style>