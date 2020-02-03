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
			$table->string('num_serial')->comment('고객번호')->index();
            $table->string('name')->comment('고객이름');
           
            //FIXME BEGIN
			$table->timestamp('date_created')->nullable()->comment('생성일');
			$table->timestamp('date_updated')->nullable()->comment('수정일');
            $table->string('tel_1', 30)->nullable()->comment('전화번호1');
            $table->string('tel_2', 30)->nullable()->comment('전화번호2');
            $table->string('addr', 2048)->nullable()->comment('주소');
            $table->string('post', 30)->nullable()->comment('우편번호');
            $table->string('email')->nullable()->comment('이메일');
            //FIXME END
            
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
