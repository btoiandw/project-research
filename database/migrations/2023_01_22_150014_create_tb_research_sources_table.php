<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbResearchSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_research_sources', function (Blueprint $table) {
            $table->increments('research_sources_id');
            $table->string('research_source_name');
            $table->string('Year_source');
            $table->string('type_research_source');
            $table->string('ex_research')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_research_sources');
    }
}
