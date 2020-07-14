
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParishesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'parishes';

    /**
     * Run the migrations.
     * @table parishes
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('city_id');
            $table->string('name');
            $table->decimal('longitude', 13, 8)->nullable();
            $table->decimal('latitude', 13, 8)->nullable();
            $table->integer('dioce_id');
            $table->string('registration')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->nullable();

            $table->index(["city_id"], 'fk_parishes_cities1_idx');

            $table->index(["dioce_id"], 'fk_parishes_dioces1_idx');
            $table->timestamps();


            $table->foreign('city_id', 'fk_parishes_cities1_idx')
                ->references('id')->on('cities')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('dioce_id', 'fk_parishes_dioces1_idx')
                ->references('id')->on('dioces')
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

