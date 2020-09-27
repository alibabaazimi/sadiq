<template>
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
                <h3>New Post</h3>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label class="form-label">Post info</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" v-model="postTitle">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="desc" placeholder="Description" v-model="postDesc">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Image:</label>
                        <input type="file" ref="file" @change="loadImage($event)" accept="image/*">
                        <cropper 
                            class="cropper" 
                            :src="postImg" 
                            ref="cropper"
                            :stencil-props="
                                {
                                    aspectRatio: 10/10
                                }"
                            @change="change"
                            >
                        </cropper>
                        <input type="button" @click="crop()" value="Crop              .">
                    </div>
                    <div class="form-group" style="display:none">
                        <div class="col-md-12 m-0 p-0">
                            <div class="embed-responsive embed-responsive-1by1 cropped-image" 
                            :style="{ 
                                backgroundImage: 'url('+croppedImg+')',
                                backgroundSize: coordinates.width/2+'px '+ coordinates.height/2+'px',
                                backgroundPosition: '-'+coordinates.top+'px '+ '-'+coordinates.left+'px'
                            }"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Quantity</label>
                        <input type="number" class="form-control" placeholder="Quantity" v-model="postAmount">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Price</label>
                        <input type="number" class="form-control" placeholder="Price" v-model="postPrice">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Measurment Unit</label>
                        <select class="form-control" placeholder="Measurment Unit" v-model="postUnit">
                            <option value="1">Unit</option>
                            <option value="2">Meter</option>
                            <option value="3">Kg</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Category</label>
                        <select class="form-control" placement="Category" v-model="postCategory">
                            <option value="1">Unit</option>
                            <option value="2">Meter</option>
                            <option value="3">Kg</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control btn-success" value="Submit" @click="submitPost">
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>

.cropped-image {
background-color: #cccccc;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}
</style>

<script>
    import {
        Cropper
    } from 'vue-advanced-cropper'
    export default {
        components: {
            Cropper
        },
        data() {
            return {
                postTitle: '',
                postDesc: '',
                postAmount: '',
                postPrice: '',
                postUnit: '',
                postCategory: '',

                postImg: '/profile-default.jpg',
                croppedImg: '/profile-default.jpg',
                formData: new FormData(),
                coordinates: {
                    top: '',
                    left: '',
                    height: 0,
                    width: 0,
                },

            }
        },
        mounted() {
            console.log('New Post Mounted');

        },
        methods: {
            change({coordinates, canvas}) {
                console.log(coordinates, canvas)
            },
            crop() {
                const { coordinates, canvas, } = this.$refs.cropper.getResult();
                this.coordinates = coordinates;
                // You able to do different manipulations at a canvas
                // but there we just get a cropped image
                // this.croppedImg = canvas.toDataURL();
                console.log(this.coordinates)
            },
            loadImage(event) {
                // Reference to the DOM input element
                var input = event.target;
                // Ensure that you have a file before attempting to read it
                if (input.files && input.files[0]) {
                    this.formData.append('image-file', input.files[0]); 

                    // create a new FileReader to read this image and convert to base64 format
                    // var reader = new FileReader();
                    // // Define a callback function to run, when FileReader finishes its job
                    // reader.onload = (e) => {
                    //     // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
                    //     // Read image as base64 and set to imageData
                    //     this.postImg = e.target.result;
                    // };
                    // // Start the reader job - read file as a data url (base64 format)
                    // reader.readAsDataURL(input.files[0]);
                }
            },
            submitPost() {
                    let config = {
                        header : {
                            "Content-Type": "multipart/form-data"
                        }
                    }
                    this.formData.append('title', this.postTitle)
                    this.formData.append('desc', this.postDesc)
                    this.formData.append('amount', this.postAmount)
                    this.formData.append('price', this.postPrice)
                    this.formData.append('unit_id', this.postUnit)
                    this.formData.append('category_id', this.postCategory);


                    axios.post(
                        '/api/v1/posts', 
                        this.formData,
                        config,
                    ).then(response => {
                        console.log('image upload response > ', response)
                        $(document).Toasts('create', {
                            title: 'Success!',
                            body: 'Post added successfully.',
                            autohide: true,
                            delay: 5000,
                        });
                        this.$router.push({ name: 'Home' });
                    }).catch(err => {
                        console.log(err);
                    })
            }
        }
    }

</script>
