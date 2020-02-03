<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscsTable extends Migration
{
    private $name = 'subscs';
    private $comment = '구독';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->name, function (Blueprint $table) {
            $table->bigIncrements('id');

            //$table->unsignedBigInteger('vehicle_id')->comment('차량 아이디');
			$table->string('vehicle_num_id', 128)->comment('차대번호');
			$table->unsignedBigInteger('pkg_id')->comment('패키지 아이디');

			$table->string('title')->comment('제목');
            $table->text('content')->nullable()->comment('내용');
            $table->json('options')->nullable()->comment('옵션');

            //$table->foreign('vehicle_id')->references('id')->on('vehicles')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('vehicle_num_id')->references('num_id')->on('vehicles')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('pkg_id')->references('id')->on('pkgs')->onUpdate('cascade')->onDelete('cascade');

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
        Schema::table($this->name, function (Blueprint $table) {
            //$table->dropForeign('subscs_vehicle_id_foreign');
			$table->dropForeign('subscs_vehicle_num_id_foreign');
			$table->dropForeign('subscs_pkg_id_foreign');
        });

        Schema::dropIfExists($this->name);
    }
}
