<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
	private $name = 'users';
	private $comment = '사용자';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->name, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

			$table->string('user_dm_dealer_group_code', 32)->comment('딜러 그룹 코드(user_dms)');
			$table->string('user_dm_num_serial')->comment('고객번호(user_dms)');

			$table->json('options')->nullable()->comment('옵션');

			$table->foreign('user_dm_num_serial')->references('num_serial')->on('user_dms')->onDelete('cascade')->onUpdate('cascade');
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
			$table->dropForeign('users_user_dm_num_serial_foreign');
		});

        Schema::dropIfExists('users');
    }
}
