<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->id();

            $table->foreignId('question_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('option')->nullable();
            $table->tinyInteger('correct')->nullable()->default(0);

            $table->timestamps();
        });
    }
};
