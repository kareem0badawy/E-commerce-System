<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::disableForeignKeyConstraints();
		Schema::create('departments', function (Blueprint $table) {
				$table->bigIncrements('id');
				$table->string('name_ar');
				$table->string('name_en');
				$table->string('icon')->nullable();
				$table->string('description')->nullable();
				$table->string('keyword')->nullable();
				$table->unsignedBigInteger('parent')->nullable();
				$table->foreign('parent')->references('id')->on('departments')->onDelete('cascade');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('departments');
	}
}
