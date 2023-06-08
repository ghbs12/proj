<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('cpf', 14)->unique();
            $table->date('nascimento');
            $table->decimal('altura', 5, 2);
            $table->decimal('peso', 5, 2);
            $table->decimal('imc_atual', 5, 2);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('faixa_id');
            $table->foreign('faixa_id')->references('id')->on('faixas')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
