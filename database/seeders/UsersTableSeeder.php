<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Ali Baba',
                'email' => 'ali@gmail.com',
                'dob' => null,
                'gender' => '1',
                'email_verified_at' => null,
                'password' => '$2y$10$FCy1SxkQMvDITA7GTLwhDeeP2Ywmx0IgH7D99h/ibHbFJf.dfjPM6',
                'remember_token' => null,
                'created_at' => '2020-08-21 20:44:06',
                'updated_at' => '2020-08-21 20:44:06',
            ),
        ));
    }
}
