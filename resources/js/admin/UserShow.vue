<template>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">User Info</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img :src="user.profileImage" class="img-fluid">
                                <div class="btn-sm btn-primary">
                                    Change
                                </div>
                            </div>

                        </div>
                        <div class="col-md-9">
                            <div class="card p-4">
                                <form>
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" id="name" class="form-control" v-model="user.name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email" v-model="user.email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="gender" id="gender" class="form-control" v-model="user.gender">
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" name="dob" id="dob" class="form-control" v-model="user.dob">
                                    </div>
                                    <div class="form-group">
                                        <label for="country">City</label>
                                        <select name="city" id="city" class="form-control">
                                            <option v-for="city in cities" v-bind:key="city.id" :value="city.id">
                                                {{ city.name }}
                                            </option>
                                        </select>
                                    </div>
                                </form>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
            }
        },
        created() {
            this.$store.dispatch('admin/fetchUser', this.$route.params.userId);
        },
        computed: {
            user() {
                return this.$store.getters.['admin/getUser']
            },
            cities() {
                return this.$store.getters.['constants/getCities'];
            }
        },

    }

</script>
