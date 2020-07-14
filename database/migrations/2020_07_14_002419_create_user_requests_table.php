
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRequestsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'user_requests';

    /**
     * Run the migrations.
     * @table user_requests
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('masse_id');
            $table->longText('message');
            $table->integer('request_type_id');

            $table->index(["request_type_id"], 'fk_user_masses_request_types1_idx');

            $table->index(["masse_id"], 'fk_user_masses_masses1_idx');

            $table->index(["user_id"], 'fk_user_masses_users_idx');
            $table->timestamps();


            $table->foreign('user_id', 'fk_user_masses_users_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('masse_id', 'fk_user_masses_masses1_idx')
                ->references('id')->on('masses')
                ->onDelete('no action')
                ->onUpdate('cascade');

            $table->foreign('request_type_id', 'fk_user_masses_request_types1_idx')
                ->references('id')->on('requests')
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


