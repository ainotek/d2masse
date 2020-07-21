
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'donations';

    /**
     * Run the migrations.
     * @table donations
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('to');
            $table->string('from');
            $table->string('amount');
            $table->longText('message')->nullable();
            $table->integer('user_id');

            $table->index(["user_id"], 'fk_donations_users1_idx');
            $table->timestamps();


            $table->foreign('user_id', 'fk_donations_users1_idx')
                ->references('id')->on('users')
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


