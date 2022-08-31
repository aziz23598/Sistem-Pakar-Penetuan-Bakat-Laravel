<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('usia');
            $table->string('pendidikan');
            $table->string('alamat');
            $table->string('jenis_kelamin');
            $table->decimal('j1', 5, 2);
            $table->decimal('j2', 5, 2);
            $table->decimal('j3', 5, 2);
            $table->decimal('j4', 5, 2);
            $table->decimal('j5', 5, 2);
            $table->decimal('j6', 5, 2);
            $table->decimal('j7', 5, 2);
            $table->decimal('j8', 5, 2);
            $table->decimal('j9', 5, 2);
            $table->decimal('j10', 5, 2);
            $table->decimal('j11', 5, 2);
            $table->decimal('j12', 5, 2);
            $table->decimal('j13', 5, 2);
            $table->decimal('j14', 5, 2);
            $table->decimal('j15', 5, 2);
            $table->decimal('j16', 5, 2);
            $table->decimal('j17', 5, 2);
            $table->decimal('j18', 5, 2);
            $table->decimal('j19', 5, 2);
            $table->decimal('j20', 5, 2);
            $table->decimal('j21', 5, 2);
            $table->decimal('j22', 5, 2);
            $table->decimal('j23', 5, 2);
            $table->decimal('j24', 5, 2);
            $table->decimal('j25', 5, 2);
            $table->decimal('j26', 5, 2);
            $table->decimal('j27', 5, 2);
            $table->decimal('j28', 5, 2);
            $table->decimal('j29', 5, 2);
            $table->decimal('j30', 5, 2);
            $table->decimal('j31', 5, 2);
            $table->decimal('j32', 5, 2);
            $table->decimal('j33', 5, 2);
            $table->decimal('j34', 5, 2);
            $table->decimal('j35', 5, 2);
            $table->decimal('j36', 5, 2);
            $table->decimal('j37', 5, 2);
            $table->decimal('j38', 5, 2);
            $table->decimal('j39', 5, 2);
            $table->decimal('j40', 5, 2);
            $table->decimal('j41', 5, 2);
            $table->decimal('j42', 5, 2);
            $table->decimal('j43', 5, 2);
            $table->decimal('j44', 5, 2);
            $table->decimal('j45', 5, 2);
            $table->decimal('hasil', 5, 2);
            $table->string('bakat');
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
        Schema::dropIfExists('tests');
    }
}