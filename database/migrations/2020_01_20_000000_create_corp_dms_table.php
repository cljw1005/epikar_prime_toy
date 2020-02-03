<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorpDmsTable extends Migration
{
	private $name = 'corp_dms';
	private $comment = '법인(DM)';

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
            $table->string('dealer_group_code')->comment('딜러 그룹 코드');
            $table->string('num_serial')->nullable()->comment('법인번호');
            $table->string('name')->nullable()->comment('법인이름');
            $table->timestamp('date_created')->nullable()->comment('생성일');
            $table->timestamp('date_updated')->nullable()->comment('수정일');
            $table->string('tel_1', 30)->nullable()->comment('전화번호1');
            $table->string('tel_2', 30)->nullable()->comment('전화번호2');
            $table->string('addr', 2048)->nullable()->comment('주소');
            $table->string('post', 30)->nullable()->comment('우편번호');
            //FIXME END

            $table->timestamps();
        });

		DB::statement("ALTER TABLE " . $this->name . " comment '" . $this->comment . "'");
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
