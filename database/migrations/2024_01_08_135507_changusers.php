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
        Schema::table('users', function ($table) {

            // $table->text('image')->nullable()->change();// pour modifier une colonne

            $table->string('tyeuser')->default('user')->change();// pour Ajouter une colonne

            // $table->dropColumn('image');// pour Supprimerune colonne



       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
