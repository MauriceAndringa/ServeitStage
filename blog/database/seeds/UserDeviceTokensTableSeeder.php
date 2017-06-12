<?php

use Illuminate\Database\Seeder;

class UserDeviceTokensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\UserDeviceTokens::create([
            'user_id' => '2',
            'platform' => 'iOS',
            'device_id' => null,
            'device_token' => '4f957f2e 0bb3c92a 213705c2 89aa928c 9572ccc5 079eb2ca 0b246cc8 09e68e88'
        ]);

        \App\UserDeviceTokens::create([
            'user_id' => '1',
            'platform' => 'Android',
            'device_id' => null,
            'device_token' => ''
        ]);

        \App\UserDeviceTokens::create([
            'user_id' => '1',
            'platform' => 'Android',
            'device_id' => null,
            'device_token' => ''
        ]);
        \App\UserDeviceTokens::create([
            'user_id' => '1',
            'platform' => 'Android',
            'device_id' => null,
            'device_token' => ''
        ]);
        \App\UserDeviceTokens::create([
            'user_id' => '1',
            'platform' => 'Android',
            'device_id' => null,
            'device_token' => ''
        ]);
    }
}
