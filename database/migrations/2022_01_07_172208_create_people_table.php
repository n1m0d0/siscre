<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('second_name');
            $table->string('surname');
            $table->string('second_surname');
            $table->string('married_name')->nullable();
            $table->string('identification_document');
            $table->enum('extension', [
                'CH',
                'LP',
                'CB',
                'OR',
                'PT',
                'TJ',
                'SC',
                'BE',
                'PD'
            ]);
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('address');
            $table->string('department');
            $table->string('city');
            $table->string('telephone');
            $table->string('cellphone');
            $table->string('email')->unique();
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
        Schema::dropIfExists('people');
    }
}
