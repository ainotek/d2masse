
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('city_id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('password')->nullable();
            $table->string('phone')->nullable();
            $table->tinyInteger('is_baptized')->nullable();
            $table->string('gender')->nullable();
            $table->tinyInteger('is_confirmed')->nullable();
            $table->tinyInteger('is_catechumen')->nullable();
            $table->date('birthday')->nullable();
            $table->integer('parishe_id');

            $table->index(["parishe_id"], 'fk_users_parishes1_idx');

            $table->index(["city_id"], 'fk_users_cities1_idx');
            $table->timestamps();


            $table->foreign('city_id', 'fk_users_cities1_idx')
                ->references('id')->on('cities')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('parishe_id', 'fk_users_parishes1_idx')
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


