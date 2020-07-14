<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cities';

    /**
     * Run the migrations.
     * @table cities
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = '';
            $table->increments('id');
            $table->string('name');
            $table->integer('parrent_id')->default('0');
            $table->integer('country_id');

            $table->index(["country_id"], 'fk_cities_countries1_idx');

            $table->unique(["name"], 'name_UNIQUE');
            $table->timestamps();


            $table->foreign('country_id', 'fk_cities_countries1_idx')
                ->references('id')->on('countries')
                ->onDelete('no action')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->tableName);
    }
}
