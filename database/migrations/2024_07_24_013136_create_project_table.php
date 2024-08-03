<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->string('Name',30);
            $table->string('Address',60);
            $table->string('Email_verifed_at',50);
            $table->enum('Gender',["M","F","O"])->nullable();
            $table->date('DOB')->nullable();
            $table->string('Password');
            $table->boolean('Status')->default(1);
            $table->integer('Points')->defualt(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
