<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->integer('branch_id');
            $table->string('name', 200);
            $table->integer('model_id');
            $table->integer('category_id');
            $table->string('incident_code', 300)->nullable();
            $table->string('contact_person')->nullable();
            $table->text('incident_report',300)->nullable();
            $table->text('inspection_report',300)->nullable();
            $table->string('fix_asset',100)->nullable();
            $table->string('serial_number',100)->nullable();
            $table->datetime('modify_date')->nullable();
            $table->string('part_name',100)->nullable();
            $table->string('part_number',100)->nullable();
            $table->string('old_serial',100)->nullable();
            $table->string('new_serial',100)->nullable();
            $table->text('remarks',300)->nullable();
            $table->integer('engineer_id');
            $table->integer('verifier_id');
            $table->string('representative',100)->nullable();
            $table->string('file_upload')->nullable();
            $table->integer('status_id')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('incidents');
    }
}
