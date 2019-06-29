<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('messages', function(Blueprint $table)
		{
			$table->foreign('recipient_id', 'fk_messages_1')->references('contact_id')->on('phonebook')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('group_id', 'fk_messages_2')->references('group_id')->on('groups')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('app_id', 'fk_messages_app1')->references('id')->on('app')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('messages', function(Blueprint $table)
		{
			$table->dropForeign('fk_messages_1');
			$table->dropForeign('fk_messages_2');
			$table->dropForeign('fk_messages_app1');
		});
	}

}
