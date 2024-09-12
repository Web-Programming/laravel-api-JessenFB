<?php

namespace Database\Seeders;

use App\Models\Donation;
use App\Models\Funding;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(count: 10)->create();
       
        $funding = Funding::create([
            'title' => 'Bantuan Kemanusiaan',
            'desc' => 'Bantuan untuk korban bencana alam',
            'image' => 'bantuan-kemanusiaan.jpg',
            'progress' => 0,  
            'duration' => '1 Bulan',  
            'collected' => 0,
            'target' => 1000000,
            'user_id' => 1,  
        ]);


        Donation::create([
            'amount' => 100000,
            'funding_id' => 1,  
            'user_id' => 1,  
        ]);
    }
}
