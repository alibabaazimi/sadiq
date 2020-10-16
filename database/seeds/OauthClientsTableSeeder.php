<?php

use Illuminate\Database\Seeder;

class OauthClientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oauth_clients')->delete();
        
        \DB::table('oauth_clients')->insert(array (
            0 => 
            array (
                'created_at' => '2020-10-14 19:47:28',
                'id' => 1,
                'name' => 'Laravel Personal Access Client',
                'password_client' => 0,
                'personal_access_client' => 1,
                'provider' => NULL,
                'redirect' => 'http://localhost',
                'revoked' => 0,
                'secret' => 'F00tSYEV1Mk0pEb4GiFFsjkcOqWUktmHwqlJbKwC',
                'updated_at' => '2020-10-14 19:47:28',
                'user_id' => NULL,
            ),
            1 => 
            array (
                'created_at' => '2020-10-14 19:47:28',
                'id' => 2,
                'name' => 'Laravel Password Grant Client',
                'password_client' => 1,
                'personal_access_client' => 0,
                'provider' => 'users',
                'redirect' => 'http://localhost',
                'revoked' => 0,
                'secret' => 'xSbNQERv4ePMAJQ0wD62dGOEqrk4WlDXmKayy0J1',
                'updated_at' => '2020-10-14 19:47:28',
                'user_id' => NULL,
            ),
        ));
        
        
    }
}