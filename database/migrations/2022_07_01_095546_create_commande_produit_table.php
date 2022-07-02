<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandeProduitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_produit', function (Blueprint $table) {
            $table->unsignedBigInteger('commande_id');
            $table->unsignedBigInteger('produits_id');

            $table->integer('quantite_total');
            $table->integer('prix_total');

            $table->foreigner('commande_id')->references('id')->on('commandes');
            $table->foreigner('produits_id')->references('id')->on('produits');

        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commande_produit');
    }
}
