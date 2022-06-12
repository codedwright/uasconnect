<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();

            $table->text('question_text')->nullable();
            $table->text('code_snippet')->nullable();
            $table->text('answer_explanation')->nullable();
            $table->string('read_more_link')->nullable();

            $table->timestamps();
        });
    }
};
