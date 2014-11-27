<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table)
		{
			# Si no colocamos este método (create) Se realizará un alter table.
			$table->create(); #Indica que va crear una tabla.

			$table->increments('id'); #Crea un campo obligatorio, id para cada registro.
			#Podemos definir la longitud pasandolo como segundo parametro. Default son 200
			#$table->string('email',300);
			$table->string('email'); #Campo email.
			$table->string('real_name'); #Campo de nombre real.
			$table->string('password'); #Campo de password.

			$table->timestamps(); #Campo de fecha
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
