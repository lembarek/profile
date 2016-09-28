<?php

use Illuminate\Database\Seeder;
use Lembarek\Profile\Models\Profile;

class ProfileTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $profiles = [
            [1, 'united states', 'male', '1991-01-01'],
            [2, 'algeria', 'female', '1991-05-01'],
        ];
        foreach($profiles as $profile){
            Profile::create([
                'user_id' => $profile[0],
                'country' => $profile[1],
                'sex' => $profile[2],
                'birth_date' => $profile[3],
            ]);
        }
    }
}
