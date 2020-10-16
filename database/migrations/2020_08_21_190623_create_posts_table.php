<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            // title: '',
            // description: '',
            // price: '',
            // currency: '',
            // quantity: '',
            // unit: '',
            // img: '',
            // dealType: '',

            // Basic Info
            $table->string('title');
            $table->string('slug')->unique()->nullable();
            $table->text('description');
            $table->integer('price');
            $table->integer('currency_id');
            $table->integer('quantity')->nullable();
            $table->integer('unit_id')->nullable();
            $table->integer('deal_type');

            // Electronic Devices
            // deviceBrand: '',
            // deviceModel: '',
            // devicePcType: '',
            // deviceHddSize: '',
            // deviceRamSize: '',
            // deviceProcessor: '',
            $table->string('device_brand')->nullable(); // ################# Needs table
            $table->string('device_model')->nullable();
            $table->integer('device_pc_type')->nullable(); // Laptop, Desktop// ################# Needs table
            $table->integer('device_hdd_size')->nullable(); // in GB
            $table->integer('device_ram_size')->nullable(); // in GB
            $table->integer('device_processor')->nullable(); // Core i3 - Cor i9 , Other // ################# Needs table
            // Game id and account
            // $table->integer('game_name')->nullable(); // PUBG, Clash, Call of Duty // ################# Needs table

            // // Building
            // buildingBuildYear: '',
            // buildingAreaAsSquare: '',
            // buildingFloor: '',
            // buildingRooms: '',
            // buildingDeposit: '',
            // buildingRentPerMonth: '',
            // buildingHasParking: '',
            // buildingHasElevator: '',
            $table->string('building_build_year')->nullable();
            $table->string('building_area_as_square')->nullable();
            $table->string('building_floor')->nullable();
            $table->integer('building_rooms')->nullable();
            $table->integer('building_deposit')->nullable();
            $table->integer('building_rent_per_month')->nullable();
            $table->boolean('building_has_parking')->nullable();
            $table->boolean('building_has_elevator')->nullable();

            // // Car
            // carBrand: '',
            // carModel: '',
            // carKilometersConsumed: '',
            // plateType
            // stringType
            $table->integer('car_brand')->nullable(); // ################# Needs table
            $table->string('car_model')->nullable();
            $table->integer('car_hand')->nullable(); // 1 for Right 2 for left
            $table->integer('car_kilometers_consumed')->nullable();

            // Genereal
            // availableColors: [],
            // usageStatus: '',
            $table->integer('available_colors')->nullable(); // red, blue, // ################# Needs table
            $table->integer('usage_status')->nullable(); // ############# Needs table

            
            // Contact Information
            // contactEmail: '',
            // contactPhone: '',
            // contactCountry: '',
            // contactCity: '',
            // contactLocationType: 1,
            // contactAddress: '',
            // mapZoom: '',
            // mapLat: '',
            // mapLng: ''
            $table->text('contact_email')->nullable();
            $table->string('contact_phone');
            $table->boolean('contact_phone_visibility')->default(false); // yes
            $table->string('contact_country');
            $table->integer('contact_city');
            $table->integer('contact_location_type');
            $table->string('contact_address')->nullable();
            $table->integer('contact_map_zoom')->nullable();
            $table->integer('contact_map_lat')->nullable();
            $table->integer('contact_map_lng')->nullable();

            // Category
            $table->integer('category_id');

            // Author
            $table->integer('posted_by');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
