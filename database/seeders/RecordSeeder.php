<?php

namespace Database\Seeders;

use App\Models\Records;
use App\Models\Tags;
use App\Models\RecordsTags;
use Illuminate\Database\Seeder;

class RecordSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RecordsTags::factory(5)->create();
        Tags::factory(3)->create();

        Records::factory(3)->create();
    }

}
