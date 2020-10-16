<style scoped>
[title = "Red"] {
    background-color: red
}
</style>
<template>
    <div class="col-md-6 offset-md-3">
        <div class="">
            <h3>New Post</h3>
        <hr>
        </div>
        <category-list v-if="mainCategories.length>0" :categories="mainCategories" v-show="!isCategorySelected" @categorySelected="setCategory($event)"></category-list>

        <div v-if="isCategorySelected">
            <label class="form-label">Selected Category:</label>
            <div class="list-group-list pb-3">
                <div role="button" class="list-group-item list-group-item-action d-flex align-items-center bg-info">
                    <div class="col-auto">
                        Icon
                    </div>
                    <div class="col">
                        {{ selectedCategory.name }}
                    </div>
                    <div class="col-4">
                        <button class="btn btn-sm bg-dark float-right" @click="isCategorySelected = false">
                            <i class="fa fa-pen"></i> Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card" v-if="isCategorySelected">
            <div class="card-body">
                <form @submit.prevent autocomplete="off">
                    <h5>Basic Information</h5>
                    <hr class="mt-0">
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title" v-model="post.title">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Description</label>
                        <textarea type="text" class="form-control" name="desc" placeholder="Description" v-model="post.description">
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Image:</label>
                        <button class="btn btn-primary btn-sm" @click="browseImage">
                            Upload Image
                        </button>
                        <div class="d-block" v-if="file.image">
                            File: {{ formFile }}
                        </div>
                        <div v-if="file.image" style="font-size: 11px">Including orginal image, please crop your image for thumbnail so your post apears well</div>
                        <input type="file" id="file-selector" class="d-none" ref="file" @change="loadImage($event)" accept="image/*">
                        
                        <div class="row" v-if="file.image">
                            <div class="col-md-8" v-if="!file.imageThumbnail">
                                <cropper
                                    class="cropper" 
                                    :src="file.image" 
                                    ref="cropper"
                                    :stencil-props="
                                        {
                                            aspectRatio: 10/10
                                        }"
                                    @change="change"
                                    >
                                </cropper>
                                <button type="button" @click="crop()" class="btn btn-sm btn-danger form-control">
                                    <i class="fa fa-crop fa-1x mr-1"></i>Crop
                                </button>
                            </div>
                            <div class="col-md-8" v-if="file.imageThumbnail">
                                <div class="embed-responsive embed-responsive-1by1 border border-primary" >
                                    <img class="embed-responsive-item" :src="file.imageThumbnail">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <div class="col-md-12 m-0 p-0">
                            <div class="embed-responsive embed-responsive-1by1" >
                                <img class="embed-responsive-item" :src="croppedImg">
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label>Deal Type</label>
                        <div class="btn-group btn-group-toggle col p-0">
                            <label :class="'btn btn-sm btn-outline-danger ' + (post.dealType == 1 ? 'active' : '')">
                                <input type="radio" name="dealtype" value="1" v-model="post.dealType" id="option1" autocomplete="off" checked>For Sale
                            </label>
                            <label :class="'btn btn-sm btn-outline-danger ' + (post.dealType == 2 ? 'active' : '')">
                                <input type="radio" name="dealtype" value="2" v-model="post.dealType" id="option2" autocomplete="off">Want to Buy
                            </label>
                            <label :class="'btn btn-sm btn-outline-danger ' + (post.dealType == 3 ? 'active' : '')">
                                <input type="radio" name="dealtype" value="3" v-model="post.dealType" id="option3" autocomplete="off">Exchange
                            </label>
                            <label :class="'btn btn-sm btn-outline-danger ' + (post.dealType == 4 ? 'active' : '')">
                                <input type="radio" name="dealtype" value="4" v-model="post.dealType" id="option4" autocomplete="off">For Rent
                            </label>
                        </div>
                    </div>
                    <div class="form-row form-group" v-if="isInCategoryPath([1,4])">
                        <div class="col-8">
                        <label class="form-label">Quantity / Amount</label>
                        <input type="number" class="form-control" placeholder="Quantity" v-model="post.quantity">
                        </div>
                        <div class="col-4">
                            <label class="form-label">Unit</label>
                            <select class="form-control" placeholder="Measurment Unit" v-model="post.unit">
                                <option value="1">Unit</option>
                                <option value="2">Piece</option>
                                <option value="3">Package</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row form-group">
                        <div class="col-8">
                            <label class="form-label">Price {{ post.dealType == 4 ? ' (Per Month)' : '' }}</label>
                            <input type="number" class="form-control" placeholder="Price" v-model="post.price">
                        </div>
                        <div class="col-4">
                            <label>Currency</label>
                            <select class="form-control" v-model="post.currencyId">
                                <option value="1">USD</option>
                                <option value="2">EUR</option>
                                <option value="3">KRO</option>
                                <option value="3">IRR</option>
                                <option value="4">AFN</option>
                            </select>
                        </div>
                    </div>
                    <div v-if="isInCategoryPath([1])">
                        <div class="form-group" v-if="isInCategoryPath([1,6,7,8])">
                            <label>Brand</label>
                            <select class="form-control col" v-model="post.deviceBrand">
                                <option v-for="brand in brands" :key="brand.id" :value="brand.id">{{ brand.name }}</option>
                            </select>
                        </div>
                        <div class="form-group" v-if="isInCategoryPath([1,6,7,8])">
                            <label>Model</label>
                            <input type="text" class="form-control" name="model" placeholder="Model" v-model="post.deviceModel">
                        </div>
                        <div class="form-group" v-if="isInCategoryPath([8])">
                            <label>PC Type</label>
                            <select class="form-control" v-model="post.devicePcType">
                                <option value="1">Laptop</option>
                                <option value="2">Desktop</option>
                                <option value="3">Tablet PC</option>
                            </select>
                        </div>
                        <div class="form-group" v-if="isInCategoryPath([7])">
                            <label>Hard Disk Size</label>
                            <input type="number" class="form-control" name="hdd-size" placeholder="Hard Disk Size" v-model="post.deviceHddSize">
                        </div>
                        <div class="form-group" v-if="isInCategoryPath([7])">
                            <label>RAM Size</label>
                            <input type="number" class="form-control" name="ram-size" placeholder="RAM Size" v-model="post.deviceRamSize">
                        </div>
                        <div class="form-group" v-if="isInCategoryPath([7])">
                            <label>Processor</label>
                            <v-select :options="processors" 
                                label="name" 
                                :reduce="processor => processor.id" 
                                v-model="post.deviceProcessor">
                            </v-select>
                        </div>
                    </div>

                    <div v-if="isInCategoryPath([3])">
                        <div class="form-group">
                            <label>Build Year</label>
                            <input type="text" class="form-control" name="build-year" placeholder="Build Year" v-model="post.buildingBuildYear">
                        </div>
                        <div class="form-group">
                            <label>Floor</label>
                            <v-select v-model="post.buildingFloor"
                                :options="floors" label="name"
                                :reduce="floor => floor.id">
                            </v-select>
                        </div>
                        <div class="form-group">
                            <label>Rooms</label>
                            <input type="number" class="form-control" name="rooms" placeholder="Rooms" v-model="post.buildingRooms">
                        </div>
                        <div class="form-group">
                            <label>Area Square (Meters)<sup>2</sup></label>
                            <div class="input-group mb-2">
                                <input type="number" class="form-control" name="area_as_square" placeholder="e.g.  200" v-model="post.buildingAreaAsSquare">
                                <div class="input-group-append">
                                    <div class="input-group-text">m<sup>2</sup></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Facilities</label>
                            <div class="form-row">
                                <div class="icheck-primary pl-1">
                                    <input type="checkbox" id="has_parking" v-model="post.buildingHasParking">
                                    <label for="has_parking"></label>Has Parking 
                                </div>
                                <div class="icheck-primary pl-3">
                                    <input type="checkbox"  id="has_lift" v-model="post.buildingHasElevator">
                                    <label for="has_lift"></label>Has Elevator
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Deposit</label>
                            <input type="number" class="form-control" name="deposit" placeholder="Deposit" v-model="post.buildingDeposit">
                        </div>
                        <div class="form-group">
                            <label>Rent Per Month</label>
                            <input type="number" class="form-control" name="rent_per_month" placeholder="Rent per month" v-model="post.buildingRentPerMonth">
                        </div>
                    </div>

                    <div v-if="categoryPath.indexOf(2) !== -1">
                        <div class="form-group">
                            <label>Car Brand</label>
                            <v-select 
                                v-model="post.carBrand"
                                :options="carBrands"
                                :reduce="carBrands => carBrands.id"
                                label="name">
                            </v-select>
                        </div>
                        <div class="form-group">
                            <label>Car Model</label>
                            <input type="text" class="form-control" name="area_as_square" placeholder="" v-model="post.carModel">
                        </div>
                        <div class="form-group">
                            <label>Kilometers Consumed</label>
                            <input type="number" class="form-control" name="area_as_square" placeholder="" v-model="post.carKilometersConsumed">
                        </div>

                    </div>

                    <div class="form-group" v-if="isInCategoryPath([1,2,4])">
                        <label>Usage Status</label>
                        <select class="form-control" v-model="post.usageStatus">
                            <option value="1">New</option>
                            <option value="2">Used</option>
                            <option value="3">Open box</option>
                        </select>
                    </div>

                    <div class="form-group" v-if="isInCategoryPath([1,2,4])">
                        <label>Available Colors</label>
                        <v-select multiple
                            :options="colors"
                            :reduce="colors => colors.id"
                            label="name"
                            ref="colorsRef"
                            @input="$refs.colorsRef.$refs.search.focus()">
                        </v-select>
                    </div>


                    <h5>Contact Information</h5>
                    <hr class="mt-1 mb-2">
                    <div class="form-group">
                        <label>Email Adress: *</label>
                        <input type="email" class="form-control" name="contact_email" placeholder="" v-model="post.contactEmail">
                    </div>
                    <div class="form-group">
                        <label>Country and Phone Number: *</label>
                        <vue-tel-input v-model="post.contactPhone" @country-changed="(val) => {post.contactCountry = val.iso2}" :onlyCountries="['AF', 'SE', 'IR']"></vue-tel-input>
                        <div class="icheck-primary icheck-inline">
                            <input type="checkbox" id="phoneVisibility" v-model="post.contactPhoneVisibility" /><label for="phoneVisibility"></label>
                            Show phone on post
                        </div>
                    </div>

                    <div class="form-group">
                        <label>City: *</label>
                        <v-select :options="cities" label="name" :reduce="cities => cities.id" v-model="post.contactCity"></v-select>
                    </div>
                    <div class="form-group">
                        <label>Location: *</label>
                        <select class="form-control" v-model="post.contactLocationType">
                            <option value="1">Address</option>
                            <option value="2">Map</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" v-if="post.contactLocationType == 1" v-model="post.contactAddress">
                        <div class="mt-3" style="height: 400px; width: 100%" v-if="post.contactLocationType == 2">
                            <l-map
                                :zoom="zoom"
                                :center="center"
                                @update:center="centerUpdate"
                                @update:zoom="zoomUpdate"
                                @ready="mapReady"
                                >
                                <l-tile-layer
                                    :url="url"
                                    :attribution="attribution"
                                />
                            </l-map>
                        </div>
                    </div>



                    <div class="form-group">
                        <div class="icheck-primary icheck-inline">
                            <input type="checkbox" id="terms" v-model="userAgreementStatus" /><label for="terms"></label>
                            I agree with <router-link to="/terms">terms and policies</router-link> of this website
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control btn-primary" value="Submit" :disabled="!userAgreementStatus" @click="submitPost">
                    </div>
                </form>
            </div>
        </div>
        <div class="row"></div>
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
import { latLng } from "leaflet";
    import CategoryList from '../components/CategoryList';
    import {
        Cropper
    } from 'vue-advanced-cropper'
    import vSelect from 'vue-select';
    import 'vue-select/dist/vue-select.css';
    // import select2 from 'select2'
    // import 'select2/dist/css/select2.min.css'
    // import 'select2-bootstrap4-theme/dist/select2-bootstrap4.min.css'
    export default {
        components: {
            CategoryList,
            Cropper,
            vSelect
        },
        data() {
            return {
                zoom: 15,
                center: latLng(59.3242, 18.0665),
                url: 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                attribution:
                    '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
                showMap: true,
                
                post: {
                    // Basic Info
                    title: '',
                    description: '',
                    price: '',
                    currencyId: '',
                    quantity: '',
                    unit: 1,
                    dealType: '',

                    categoryId: '', 

                    // Electronic Devices
                    deviceBrand: '',
                    deviceModel: '',
                    devicePcType: '',
                    deviceHddSize: '',
                    deviceRamSize: '',
                    deviceProcessor: '',

                    // Building
                    buildingBuildYear: '',
                    buildingAreaAsSquare: '',
                    buildingFloor: '',
                    buildingRooms: '',
                    buildingDeposit: '',
                    buildingRentPerMonth: '',
                    buildingHasParking: '',
                    buildingHasElevator: '',

                    // Car
                    carBrand: '',
                    carModel: '',
                    carHand: '',
                    carKilometersConsumed: '',

                    // Genereal
                    availableColors: [],
                    usageStatus: '',

                    // Contact Information
                    contactEmail: '',
                    contactPhone: '',
                    contactPhoneVisibility: false,
                    contactCountry: '',
                    contactCity: '',
                    contactLocationType: 1,
                    contactAddress: '',
                    contactMapZoom: '',
                    contactMapLat: '',
                    contactMapLng: ''


                },
                file: {
                    image: '',
                    imageThumbnail: '',
                },
                formData: new FormData(),
                isCategorySelected: false,
                selectedCategory: '',
                categoryPath: [],
                userAgreementStatus: false,
                formFile: '',
            }
        },
        created() {
            this.$store.dispatch('constants/fetchCities');
            this.$store.dispatch('constants/fetchCountries')
            this.$store.dispatch('constants/fetchCategories')
        },
        computed: {
            countries() {
                return this.$store.getters['constants/getCountries'];
            },
            cities() {
                return this.$store.getters['constants/getCities']
            },
            brands() {
                return [
                    {id: 1, name: "Samsung"},
                    {id: 2, name: "Apple"},
                ]
            },
            processors() {
                return [
                    {id: 1, name: "Core i3"},
                    {id: 2, name: "Core i5"},
                ]
            },
            floors() {
                let floors = [];
                floors.push({ id: 0, name: "UnderGround"});
                floors.push({ id: 1, name: "Ground Level"});
                for (var i = 2; i < 100 ; i++) {
                    floors.push({ id: i, name: i});
                }
                return floors;
            },
            carBrands() {
                let brands = [];
                brands.push({ id: 1, name: 'Corolla'})
                brands.push({ id: 2, name: 'Toyota'})
                brands.push({ id: 3, name: 'Benz'})
                return brands;
            },
            colors() {
                let colors = [
                    { id: 1, name: 'Black'},
                    { id: 2, name: 'White'},
                    { id: 3, name: 'Red'},
                    { id: 4, name: 'Yellow'},
                    { id: 5, name: 'Blue'},
                    { id: 6, name: 'Green'},
                ]
                return colors;
            },
            mainCategories() {
                return this.$store.getters['constants/getCategories']
            },
            
        },
        methods: {
            isInCategoryPath(cats) {
                if (cats instanceof Array){
                    var res = false;
                    cats.forEach(cat => {
                        if (this.categoryPath.indexOf(cat) !== -1) {
                            res = true;
                        } else {
                        }
                    });
                    return res;
                }
            },
            mapReady(mp) {
                this.post.contactMapZoom = mp.getZoom()
                this.post.contactMapLat = mp.getBounds().getCenter().lat
                this.post.contactMapLng = mp.getBounds().getCenter().lng
            },
            zoomUpdate(zoom) {
                this.post.contactMapZoom = zoom;
            },
            centerUpdate(center) {
                this.post.contactMapLat = center.lat;
                this.post.contactMapLng = center.lng;
            },

            setCategory(data) {
                for (var prop in this.post) {
                    this.post[prop] = '';
                }
                this.isCategorySelected = true;
                this.selectedCategory = data.category;
                this.categoryPath = data.list;
                this.post.categoryId = data.category.id;
            },
            change({coordinates, canvas}) {
                canvas.toBlob(blob => {
					this.formData.append('imageThumbnail', blob);
				}, 'image/jpeg');
            },
            crop() {
                const { coordinates, canvas, } = this.$refs.cropper.getResult();
                this.file.imageThumbnail = canvas.toDataURL();
                // You able to do different manipulations at a canvas
                // but there we just get a cropped image
                // this.croppedImg = canvas.toDataURL();
                // console.log(this.coordinates)
            },
            browseImage() {
                $('#file-selector').click();
            },
            loadImage(event) {
                // Reference to the DOM input element
                var input = event.target;
                // Ensure that you have a file before attempting to read it
                if (input.files && input.files[0]) {
                    this.formFile = input.files[0].name;
                    this.formData.append('image', input.files[0]); 

                    // create a new FileReader to read this image and convert to base64 format
                    var reader = new FileReader();
                    // Define a callback function to run, when FileReader finishes its job
                    reader.onload = (e) => {
                        // Note: arrow function used here, so that "this.imageData" refers to the imageData of Vue component
                        // Read image as base64 and set to imageData
                        this.file.image = e.target.result;
                    };
                    // Start the reader job - read file as a data url (base64 format)
                    reader.readAsDataURL(input.files[0]);
                }
            },
            submitPost() {
                if (this.userAgreementStatus) {
                    let config = {
                        header : {
                            "Content-Type": "multipart/form-data"
                        }
                    }
                    // this.formData.append('title', this.post.title)
                    // this.formData.append('desc', this.post.description)
                    // this.formData.append('quantity', this.post.quantity)
                    // this.formData.append('price', this.post.price)
                    // this.formData.append('unit_id', this.post.unit)
                    // this.formData.append('category_id', this.post.category);



                    for (var prop in this.post) {
                        this.formData.append(prop, this.post[prop]);
                    }

                    axios.post(
                        '/api/v1/posts', 
                        this.formData,
                        config,
                    ).then(response => {
                        console.log(response)
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
        },
        updated() {
        }

    }

</script>
