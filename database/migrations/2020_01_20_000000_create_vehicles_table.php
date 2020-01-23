<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
	private $name = 'vehicles';
	private $comment = '차량';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->name, function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->string('vin', 128)->comment('차대번호')->index();

			$table->string('title')->comment('제목');
			$table->text('content')->nullable()->comment('내용');
			$table->json('options')->nullable()->comment('옵션');

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
