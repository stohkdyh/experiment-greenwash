<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pre_tests', function (Blueprint $table) {
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            // $table->unsignedBigInteger('user_id')->unique()->nullable()    ;
            // $table->foreign('user_id')->references('id')->on('user_infos')->onDelete('cascade');
            $table->id(); 
            $table->string('name');
            $table->string('kode_berita');
            $table->string('pre1');
            $table->string('pre2');
            $table->string('pre3');
            $table->string('pre4');
            $table->string('pre5');
            $table->string('pre6');
            $table->string('pre7');
            $table->string('pre8');
            $table->string('pre9');
            $table->string('pre10');
            $table->string('pre11');
            $table->string('pre12');
            $table->string('pre13');
            $table->string('pre14');
            $table->string('pre15');
            $table->string('pre16');
            $table->string('pre17');
            $table->string('pre18');
            $table->string('pre19');
            $table->string('pre20');
            $table->string('pre21');
            $table->string('pre22');
            $table->string('pre23');
            $table->string('pre24');
            $table->string('pre25');
            $table->string('pre26');
            $table->string('pre27');
            $table->string('pre28');
            $table->string('pre29');
            $table->string('pre30');
            $table->string('pre31');
            $table->string('pre32');
            $table->string('pre33');
            $table->string('pre34');
            $table->string('pre35');
            $table->string('pre36');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pre_tests');
    }
};
