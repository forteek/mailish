<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTables extends Migration
{
    public function up()
    {
        Schema::create('mails', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('sender');
            $table->string('title', 511);
            $table->text('content')->nullable();

            $table->timestamps();
        });

        Schema::create('openings', function (Blueprint $table) {
            $table->id();

            $table->uuid('mail_id');
            $table->string('user_agent', 511);

            $table->timestamps();

            $table->foreign('mail_id')->references('id')->on('mails');
        });

        Schema::create('recipients', function (Blueprint $table) {
            $table->id();

            $table->uuid('mail_id');
            $table->string('email');
            $table->string('name')->nullable();

            $table->timestamps();

            $table->foreign('mail_id')->references('id')->on('mails');
        });
    }

    public function down()
    {
        Schema::table('recipients', function (Blueprint $table) {
            $table->dropForeign('recipients_mail_id_foreign');
        });
        Schema::table('openings', function (Blueprint $table) {
            $table->dropForeign('openings_mail_id_foreign');
        });

        Schema::dropIfExists('recipients');
        Schema::dropIfExists('openings');
        Schema::dropIfExists('mails');
    }
}
