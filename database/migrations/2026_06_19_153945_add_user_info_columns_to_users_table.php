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
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable()->change();
            $table->string('password')->nullable()->change();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('location')->nullable();
            $table->string('occupation')->nullable();
            $table->string('education')->nullable();
            $table->string('income')->nullable();
        });

        // Migrate data
        $userInfos = \DB::table('user_infos')->get();
        foreach ($userInfos as $userInfo) {
            \DB::table('users')->insert([
                'id' => $userInfo->id,
                'name' => $userInfo->name,
                'gender' => $userInfo->gender,
                'age' => $userInfo->age,
                'location' => $userInfo->location,
                'occupation' => $userInfo->occupation,
                'education' => $userInfo->education,
                'income' => $userInfo->income,
                'created_at' => $userInfo->created_at,
                'updated_at' => $userInfo->updated_at,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Revert data migration (if needed) and drop columns
        Schema::table('users', function (Blueprint $table) {
            $table->string('email')->nullable(false)->change();
            $table->string('password')->nullable(false)->change();
            $table->dropColumn(['gender', 'age', 'location', 'occupation', 'education', 'income']);
        });
    }
};
