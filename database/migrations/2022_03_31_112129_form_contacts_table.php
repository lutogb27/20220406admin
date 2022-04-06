<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FormContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms',function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('name-kana');
            $table->string('age');
            $table->string('gender')->length(2);
            $table->string('address');
            $table->char('zipcode',6);
            $table->text('body');
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
        Schema::dropIfExists('froms');
    }
}
