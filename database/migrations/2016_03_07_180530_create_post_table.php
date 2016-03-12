<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('title', 150);
            $table->char('client', 150);
            $table->char('client_metier',150);
            $table->char('client_adresse', 150);
            $table->string('client_email')->unique();
            $table->integer('client_tel');
            $table->char('client_suivi', 150);
            $table->char('client_suivi_metier', 150);
            $table->char('client_suivi_adresse', 150);
            $table->string('client_suivi_email')->unique();
            $table->integer('client_suivi_tel');
            $table->longText('fiche_identite');
            $table->string('type_projet');
            $table->string('context');
            $table->longText('demande');
            $table->longText('objectifs');
            $table->longText('contraintes');
            $table->char('status')->default('En Attente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
