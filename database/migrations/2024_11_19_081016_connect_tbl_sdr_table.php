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
        if (!Schema::hasTable('tbl_sdr')) {
            Schema::create('tbl_sdr', function (Blueprint $table) {
                $table->integer('ID')->primary()->autoIncrement();
                $table->integer('IDReg')->nullable();
                
                

                $table->charset = 'latin1';
                $table->collation = 'latin1_swedish_ci';
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
