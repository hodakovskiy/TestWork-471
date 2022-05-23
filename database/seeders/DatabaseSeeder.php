<?php

namespace Database\Seeders;

use App\Models\Records;
use App\Models\RecordsTags;
use App\Models\Tags;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->cleanDatabase();

        User::factory(1)->create();

        RecordsTags::factory(3)->create();

        Records::factory(3)->create();

        Records::factory(2)
            ->hasAttached(
                Tags::factory()->count(3)
            )
            ->create();

        Tags::factory(2)
            ->hasAttached(
                Records::factory()->count(3)
            )
            ->create();
    }

    /**
     * Clear the tables
     * 
     * @return void
     */
    private function cleanDatabase()
    {
        Schema::disableForeignKeyConstraints();

        User::truncate();
        RecordsTags::truncate();
        Tags::truncate();
        Records::truncate();

        Schema::enableForeignKeyConstraints();
    }

}
