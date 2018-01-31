<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DbAkreditasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program_studies', function($table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('accreditations', function($table) {
            $table->increments('id');
            $table->date('accreditation_date');
            $table->decimal('total_score', 8, 4)->unsigned()->default(0);
            $table->integer('prodi_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('prodi_id')->references('id')->on('program_studies');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });

        Schema::create('standart_firsts', function($table) {
            $table->increments('id');
            $table->string('val11a');
            $table->string('val11b');
            $table->string('val12');
            $table->integer('accreditation_id')->unsigned();

            $table->foreign('accreditation_id')->references('id')->on('accreditations');

            $table->decimal('score', 8, 4)->unsigned();
            $table->timestamps();
        });

        Schema::create('standart_seconds', function($table) {
            $table->increments('id');
            $table->string('val21');
            $table->string('val22');
            $table->string('val23');
            $table->string('val24');
            $table->string('val25');
            $table->string('val26');
            $table->integer('accreditation_id')->unsigned();

            $table->foreign('accreditation_id')->references('id')->on('accreditations');

            $table->decimal('score', 8, 4)->unsigned();
            $table->timestamps();
        });

        Schema::create('standart_thirds', function($table) {
            $table->increments('id');
            $table->string('val311a');
            $table->string('val311b');
            $table->string('val311c');
            $table->string('val311d');
            $table->string('val312');
            $table->string('val313');
            $table->string('val314a');
            $table->string('val314b');
            $table->string('val321');
            $table->string('val322');
            $table->string('val331a');
            $table->string('val331b');
            $table->string('val331c');
            $table->string('val332');
            $table->string('val333');
            $table->string('val341');
            $table->string('val342');
            $table->integer('accreditation_id')->unsigned();

            $table->foreign('accreditation_id')->references('id')->on('accreditations');

            $table->decimal('score', 8, 4)->unsigned();
            $table->timestamps();
        });

        Schema::create('standart_fourths', function($table) {
            $table->increments('id');
            $table->string('val41');
            $table->string('val421');
            $table->string('val422');
            $table->string('val431a');
            $table->string('val431b');
            $table->string('val431c');
            $table->string('val431d');
            $table->string('val432');
            $table->string('val433');
            $table->string('val434');
            $table->string('val435');
            $table->string('val441');
            $table->string('val442a');
            $table->string('val442b');
            $table->string('val451');
            $table->string('val452');
            $table->string('val453');
            $table->string('val454');
            $table->string('val455');
            $table->string('val461a');
            $table->string('val461b');
            $table->string('val461c');
            $table->string('val462');
            $table->string('dosen');
            $table->string('opsi');
            $table->integer('accreditation_id')->unsigned();

            $table->foreign('accreditation_id')->references('id')->on('accreditations');

            $table->decimal('score', 8, 4)->unsigned();
            $table->timestamps();
        });

        Schema::create('standart_fifths', function($table) {
            $table->increments('id');
            $table->string('val511a');
            $table->string('val511b');
            $table->string('val512a');
            $table->string('val512b');
            $table->string('val512c');
            $table->string('val513');
            $table->string('val514');
            $table->string('val52a');
            $table->string('val52b');
            $table->string('val531a');
            $table->string('val531b');
            $table->string('val532');
            $table->string('val541a');
            $table->string('val541b');
            $table->string('val541c');
            $table->string('val542');
            $table->string('val551a');
            $table->string('val551b');
            $table->string('val551c');
            $table->string('val551d');
            $table->string('val552');
            $table->string('val56');
            $table->string('val571');
            $table->string('val572');
            $table->string('val573');
            $table->string('val574');
            $table->string('val575');
            $table->string('opsi');
            $table->integer('accreditation_id')->unsigned();

            $table->foreign('accreditation_id')->references('id')->on('accreditations');

            $table->decimal('score', 8, 4)->unsigned();
            $table->timestamps();
        });

        Schema::create('standart_sixths', function($table) {
            $table->increments('id');
            $table->string('val61');
            $table->string('val621');
            $table->string('val622');
            $table->string('val623');
            $table->string('val631');
            $table->string('val632');
            $table->string('val633');
            $table->string('val641a');
            $table->string('val641b');
            $table->string('val641c');
            $table->string('val641d');
            $table->string('val641e');
            $table->string('val642');
            $table->string('val643');
            $table->string('val651');
            $table->string('val652');
            $table->integer('accreditation_id')->unsigned();

            $table->foreign('accreditation_id')->references('id')->on('accreditations');

            $table->decimal('score', 8, 4)->unsigned();
            $table->timestamps();
        });

        Schema::create('standart_sevenths', function($table) {
            $table->increments('id');
            $table->string('val711');
            $table->string('val712');
            $table->string('val713');
            $table->string('val714');
            $table->string('val721');
            $table->string('val722');
            $table->string('val731');
            $table->string('val732');
            $table->integer('accreditation_id')->unsigned();

            $table->foreign('accreditation_id')->references('id')->on('accreditations');

            $table->decimal('score', 8, 4)->unsigned();
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
        Schema::dropIfExists('standart_sevenths');
        Schema::dropIfExists('standart_sixths');
        Schema::dropIfExists('standart_fifths');
        Schema::dropIfExists('standart_fourths');
        Schema::dropIfExists('standart_thirds');
        Schema::dropIfExists('standart_seconds');
        Schema::dropIfExists('standart_firsts');
        Schema::dropIfExists('accreditations');
        Schema::dropIfExists('program_studies');
    }
}
