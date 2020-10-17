<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeviceProcessorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('device_processors')->delete();
        
        \DB::table('device_processors')->insert(array(
            0 =>
            array(
                'created_at' => null,
                'id' => 1,
                'name' => 'Core 2 duo',
                'updated_at' => null,
            ),
            1 =>
            array(
                'created_at' => null,
                'id' => 2,
                'name' => 'Core i3',
                'updated_at' => null,
            ),
            2 =>
            array(
                'created_at' => null,
                'id' => 3,
                'name' => 'Core i5',
                'updated_at' => null,
            ),
            3 =>
            array(
                'created_at' => null,
                'id' => 4,
                'name' => 'Core i7',
                'updated_at' => null,
            ),
            4 =>
            array(
                'created_at' => null,
                'id' => 5,
                'name' => 'Core i9',
                'updated_at' => null,
            ),
            5 =>
            array(
                'created_at' => null,
                'id' => 6,
                'name' => 'Other',
                'updated_at' => null,
            ),
        ));
    }
}
