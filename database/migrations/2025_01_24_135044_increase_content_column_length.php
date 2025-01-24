<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('articles', function (Blueprint $table) {
        $table->text('content')->change(); // Verander naar 'text' voor lange inhoud
    });
}

public function down()
{
    Schema::table('articles', function (Blueprint $table) {
        $table->string('content', 255)->change(); // Terug naar een string van maximaal 255 tekens
    });
}

};
