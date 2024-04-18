<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(5)->create();

         Listing::factory(6)->create();

         /* Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'laravel, javascript',
            'company' => 'ACme Corp',
            'location' => 'Boston, MA',
            'email' => 'jsin@gmail.com',
            'website' => 'https://www.acme.co',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi beatae mollitia ad consequatur libero veritatis soluta eligendi atque id vel, amet, hic earum quam cum similique eos quos vero itaque.',
         ]);

         Listing::create([
            'title' => 'Full stack Eng',
            'tags' => 'laravel, api, vue',
            'company' => 'Stark Corp',
            'location' => 'NY, MA',
            'email' => 'json@gmail.com',
            'website' => 'https://www.stack.co',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi beatae mollitia ad consequatur libero veritatis soluta eligendi atque id vel, amet, hic earum quam cum similique eos quos vero itaque.',
         ]); */

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
