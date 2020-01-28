<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePkgProdTable extends Migration
{
	private $name = 'pkg_prod';
	private $comment = '패키지-상품 매핑';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->name, function (Blueprint $table) {
            $table->bigIncrements('id');

			$table->unsignedBigInteger('pkg_id')->comment('패키지 아이디');
			$table->unsignedBigInteger('prod_id')->comment('상품 아이디');

			$table->foreign('pkg_id')->references('id')->on('pkgs')->onDelete('cascade')->onUpdate('cascade');
			$table->foreign('prod_id')->references('id')->on('prods')->onDelete('cascade')->onUpdate('cascade');

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
		Schema::table($this->name, function (Blueprint $table) {
			$table->dropForeign('pkg_prod_pkg_id_foreign');
			$table->dropForeign('pkg_prod_prod_id_foreign');
		});

        Schema::dropIfExists($this->name);
    }
}
