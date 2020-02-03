<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareDmsTable extends Migration
{
	private $name = 'care_dms';
	private $comment = '정비(dm)';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->name, function (Blueprint $table) {
            $table->bigIncrements('id');

			//FIXME BEGIN
			$table->string('dealer_group_code', 32)->comment('딜러 그룹 코드');
			$table->timestamp('date_care')->nullable()->comment('정비일');
			$table->string('vehicle_num_id')->comment('차대번호');
			$table->string('num_invoice')->comment('송장번호');

            $table->string('num_wip')->nullable()->comment('작업번호(WIPNO)');
			$table->unsignedInteger('mileage')->nullable()->nullable()->comment('주행거리');
            $table->string('corp_pos')->nullable()->nullable()->comment('POS회사코드');
            $table->timestamp('date_in')->nullable()->comment('DATE IN');
            $table->timestamp('date_out')->nullable()->comment('DATE OUT');
            $table->string('num_op')->nullable()->comment('운영자번호');
            $table->string('name_op')->nullable()->comment('운영자명');
            $table->string('invoice')->nullable()->comment('송장값(invoice value)');
            $table->enum('type', array('L', 'P'))->nullable()->comment('정비구분(Labor OR Part)');
            $table->string('num')->nullable()->comment('정비코드');
            $table->string('desc', 4096)->nullable()->comment('정비설명');
            $table->unsignedInteger('price_rate')->nullable()->comment('부품금액공임비율');
			$table->unsignedInteger('qty_time')->nullable()->comment('부품수량공임시간');
            $table->string('disc_rate')->nullable()->comment('할인비율');
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
