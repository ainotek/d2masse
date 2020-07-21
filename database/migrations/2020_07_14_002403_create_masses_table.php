
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMassesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'masses';

    /**
     * Run the migrations.
     * @table masses
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('parishe_id');
            $table->string('name');
            $table->dateTime('start_at');
            $table->dateTime('request_closed_at');

            $table->index(["parishe_id"], 'fk_masses_parishes1_idx');
            $table->timestamps();


            $table->foreign('parishe_id', 'fk_masses_parishes1_idx')
                ->references('id')->on('parishes')
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


