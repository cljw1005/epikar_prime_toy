<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDmsTable extends Migration
{
	private $name = 'user_dms';
	private $comment = '사용자(dm)';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->name, function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->string('dealer_group_code', 32)->comment('딜러 그룹 코드');
			$table->string('sn')->comment('고객번호');
			$table->string('name')->comment('고객이름');

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
        Schema::dropIfExists($this->name);
    }
}
