<?php

// database/migrations/YYYY_MM_DD_HHMMSS_add_formateur_id_to_seances_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFormateurIdToSeancesTable extends Migration
{
    public function up()
    {
        Schema::table('seances', function (Blueprint $table) {
            $table->unsignedBigInteger('formateur_id')->nullable(); // Add the formateur_id column
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade'); // Add foreign key constraint
        });
    }

    public function down()
    {
        Schema::table('seances', function (Blueprint $table) {
            $table->dropForeign(['formateur_id']);
            $table->dropColumn('formateur_id');
        });
    }
}

