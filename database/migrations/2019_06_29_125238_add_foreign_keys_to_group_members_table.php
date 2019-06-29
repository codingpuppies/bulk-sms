<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGroupMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('group_members', function(Blueprint $table)
		{
			$table->foreign('groups_group_id', 'fk_phonebook_has_groups_groups1')->references('group_id')->on('groups')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('phonebook_contact_id', 'fk_phonebook_has_groups_phonebook')->references('contact_id')->on('phonebook')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('group_members', function(Blueprint $table)
		{
			$table->dropForeign('fk_phonebook_has_groups_groups1');
			$table->dropForeign('fk_phonebook_has_groups_phonebook');
		});
	}

}
