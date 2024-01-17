<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('price');
            $table->string('status')->default('złożono'); // Dodanie domyślnej wartości dla statusu
            $table->timestamp('start_date')->nullable(); // Dodanie pola daty rozpoczęcia realizacji
            $table->timestamp('end_date')->nullable(); // Dodanie pola daty zakończenia realizacji
            $table->timestamps();
            $table->foreignId('user_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
