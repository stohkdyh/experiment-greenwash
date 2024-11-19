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
        Schema::create('post_tests', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->string('kode_berita');
            $table->string('manipulation1');
            $table->string('manipulation2');
            $table->string('manipulation3');
            $table->string('manipulation4');
            $table->string('manipulation5');
            $table->string('manipulation6');
            $table->string('manipulation7');
            $table->string('manipulation8');
            $table->string('post1');
            $table->string('post2');
            $table->string('post3');
            $table->string('post4');
            $table->string('post5');
            $table->string('post6');
            $table->string('post7');
            $table->string('post8');
            $table->string('post9');
            $table->string('post10');
            $table->string('post11');
            $table->string('post12');
            $table->string('post13');
            $table->string('post14');
            $table->string('post15');
            $table->string('post16');
            $table->string('post17');
            $table->string('post18');
            $table->string('post19');
            $table->string('post20');
            $table->string('post21');
            $table->string('post22');
            $table->string('post23');
            $table->string('post24');
            $table->string('post25');
            $table->string('post26');
            $table->string('post27');
            $table->string('post28');
            $table->string('post29');
            $table->string('post30');
            $table->string('post31');
            $table->string('post32');
            $table->string('post33');
            $table->string('post34');
            $table->string('post35');
            $table->string('post36');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tests');
    }
};
