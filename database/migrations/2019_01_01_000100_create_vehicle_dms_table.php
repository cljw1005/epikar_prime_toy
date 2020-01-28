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
			$table->string('sn')->comment('차량번호');
			$table->string('vin')->comment('차대번호');

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
