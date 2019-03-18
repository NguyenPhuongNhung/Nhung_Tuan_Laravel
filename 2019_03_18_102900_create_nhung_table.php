<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhungTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('nhung', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigIncrements('phoneNumber');
			$table->bigIncrements('email');
			$table->timestamps('Date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('nhung');
	}
}
