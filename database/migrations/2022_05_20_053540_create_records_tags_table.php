<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordsTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('records_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('records_id');
            $table->unsignedBigInteger('tags_id');
            $table->timestamps();
            
                        
            $table->foreign('records_id')->references('id')->on('records')->onDelete('cascade');
            $table->foreign('tags_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('records_tags');
    }
}
