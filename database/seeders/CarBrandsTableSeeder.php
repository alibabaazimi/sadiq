<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CarBrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('car_brands')->delete();
        
        \DB::table('car_brands')->insert(array(
            0 =>
            array(
                'created_at' => null,
                'id' => 1,
                'name' => 'Toyota',
                'updated_at' => null,
            ),
            1 =>
            array(
                'created_at' => null,
                'id' => 2,
                'name' => 'Corolla',
                'updated_at' => null,
            ),
            2 =>
            array(
                'created_at' => null,
                'id' => 3,
                'name' => 'Benz',
                'updated_at' => null,
            ),
            3 =>
            array(
                'created_at' => null,
                'id' => 4,
                'name' => 'Hunda',
                'updated_at' => null,
            ),
        ));
    }
}
