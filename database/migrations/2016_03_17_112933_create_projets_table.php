<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projets', function (Blueprint $table) {
            $table->increments('id'); //id de la bap
            $table->string('titleprojet', 150); //nom du projet BAP
            $table->string('commanditaire'); //nom du commanditaire
            $table->string('command_metier'); // metier du commanditaire
            $table->integer('command_tel')->unique(); //tél du commanditaire, unique car il ne peut y avoir qu'un seul même numéro de tél
            $table->string('command_mail')->unique(); //email du commanditaire, unique veut dire qu'il ne peut pas y avoir 2 fois le même
            $table->string('command_ville'); //ville du commanditaire

            $table->string('decisionnaire'); //nom du decisionnaire
            $table->string('decid_metier'); // metier du decisionnaire
            $table->integer('decid_tel')->unique(); //tél du decisionnaire, unique car il ne peut y avoir qu'un seul même numéro de tél
            $table->string('decid_mail')->unique(); //email du decisionnaire, unique veut dire qu'il ne peut pas y avoir 2 fois le même
            $table->string('decid_ville'); //ville du decisionnaire

            $table->string('type_projet'); // type du projet, si c'est un site web, ou un jeu vidéo, ou etc...
            $table->string('contexte'); // contexte de la demande
            $table->string('objectifs'); //objectifs du commanditaire
            $table->longText('textprojet'); //description du projet
            $table->string('contraintes'); //contraintes du projet
            $table->string('statut')->default('Non validé'); // statut du projet, par défaut, mis en non validé
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
        Schema::drop('projets');
    }
}
