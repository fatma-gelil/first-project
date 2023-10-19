<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        listing::factory(6)->create();

//        \App\Models\User::factory()->create([
//            'title'=>'Laravel Senior Developer',
//            'tags'=>'laravel,api,backend',
//            'company'=>'Microsoft',
//            'email'=>'example@email.com',
//            'website'=>'https://www.microsoft.com',
//            'location'=>'Boston,MA',
//            'description'=>'loremfmgwirngihithnbipjigpernrebnvinojneriobgetnbfjnbejetnbjtnbinbjtnbidfnbn',
//        ]);
    }
}