<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\todo;
class todoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    #factory(App\todo::class, 10)->create();
    public function run()
    {
        
        todo::factory()->count(10)->create();
    }
}
