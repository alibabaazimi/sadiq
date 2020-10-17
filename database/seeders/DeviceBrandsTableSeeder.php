<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeviceBrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('device_brands')->delete();
        
        \DB::table('device_brands')->insert(array(
            0 =>
            array(
                'created_at' => null,
                'id' => 1,
                'name' => 'Dell',
                'updated_at' => null,
            ),
            1 =>
            array(
                'created_at' => null,
                'id' => 2,
                'name' => 'Apple',
                'updated_at' => null,
            ),
            2 =>
            array(
                'created_at' => null,
                'id' => 3,
                'name' => 'Toshiba',
                'updated_at' => null,
            ),
            3 =>
            array(
                'created_at' => null,
                'id' => 4,
                'name' => 'Samsung',
                'updated_at' => null,
            ),
            4 =>
            array(
                'created_at' => null,
                'id' => 5,
                'name' => 'IBM',
                'updated_at' => null,
            ),
            5 =>
            array(
                'created_at' => null,
                'id' => 6,
                'name' => 'Sony',
                'updated_at' => null,
            ),
            6 =>
            array(
                'created_at' => null,
                'id' => 7,
                'name' => 'Huawei',
                'updated_at' => null,
            ),
            7 =>
            array(
                'created_at' => null,
                'id' => 8,
                'name' => 'HTC',
                'updated_at' => null,
            ),
            8 =>
            array(
                'created_at' => null,
                'id' => 9,
                'name' => 'Lenovo',
                'updated_at' => null,
            ),
            9 =>
            array(
                'created_at' => null,
                'id' => 10,
                'name' => 'Asus',
                'updated_at' => null,
            ),
            10 =>
            array(
                'created_at' => null,
                'id' => 11,
                'name' => 'Seagate',
                'updated_at' => null,
            ),
            11 =>
            array(
                'created_at' => null,
                'id' => 12,
                'name' => 'nVidia',
                'updated_at' => null,
            ),
            12 =>
            array(
                'created_at' => null,
                'id' => 13,
                'name' => 'Intel',
                'updated_at' => null,
            ),
        ));
    }
}
