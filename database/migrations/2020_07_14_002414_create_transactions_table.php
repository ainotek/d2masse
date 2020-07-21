
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'transactions';

    /**
     * Run the migrations.
     * @table transactions
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->integer('amount');
            $table->string('phone');
            $table->string('partner_id');
            $table->string('transaction_id');
            $table->string('pay_service');
            $table->tinyInteger('status');
            $table->string('message')->nullable();
            $table->string('designation');
            $table->date('payment_date');
            $table->time('payment_time');
            $table->string('phone_prefix');

            $table->index(["user_id"], 'fk_transactions_users1_idx');

            $table->unique(["status"], 'status_UNIQUE');

            $table->unique(["partner_id"], 'partner_id_UNIQUE');

            $table->unique(["transaction_id"], 'transaction_id_UNIQUE');
            $table->timestamps();


            $table->foreign('user_id', 'fk_transactions_users1_idx')
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
