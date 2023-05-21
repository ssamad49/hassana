<?php

use App\Models\TypeDiabete;
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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('cin')->nullable();
            $table->string('name');
            $table->integer('age');
            $table->string('address');
            $table->string('phone')->nullable();
            $table->float('TA')->nullable();
            $table->float('glycemie')->nullable();
            $table->float('poids')->nullable();
            $table->float('albuminurie')->nullable();
            $table->text('observation')->nullable();
            $table->foreignId('typeDiabete_id')->nullable()->constrained('type_diabetes');
            $table->foreignId('traitement_id')->nullable()->constrained('traitements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
