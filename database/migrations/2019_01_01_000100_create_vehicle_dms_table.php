<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleDmsTable extends Migration
{
	private $name = 'vehicle_dms';
	private $comment = '차량(dm)';

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
			$table->string('num_serial')->comment('차량번호');
			$table->string('num_id')->comment('차대번호');

			//FIXME BEGIN
			$table->string('num_reg')->nullable()->comment('차량등록번호');
			$table->timestamp('date_registered')->nullable()->comment('등록일');
			$table->timestamp('date_created')->nullable()->comment('생성일');
			$table->timestamp('date_updated')->nullable()->comment('수정일');
			$table->string('franchise')->nullable()->comment('프렌차이즈');
			$table->string('model')->nullable()->comment('모델');
			$table->string('model_detail', 4096)->nullable()->comment('모델상세');
			$table->string('model_detail_desc', 4096)->nullable()->comment('모델상세설명');
			$table->string('color')->nullable()->comment('색상');
			$table->string('model_year')->nullable()->comment('모델연도');
			$table->string('dealer')->nullable()->comment('판매딜러');
			$table->timestamp('date_care')->nullable()->comment('정비일(최근)');
			$table->unsignedInteger('mileage')->nullable()->comment('주행거리');
			$table->string('user_num_serial')->nullable()->comment('고객번호');
			$table->string('user_name')->nullable()->comment('고객이름');
			$table->string('corp_num_serial')->nullable()->comment('법인번호');
			$table->string('corp_name')->nullable()->comment('법인이름');
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
