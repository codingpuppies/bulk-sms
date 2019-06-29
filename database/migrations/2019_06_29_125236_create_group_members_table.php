<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGroupMembersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_members', function(Blueprint $table)
		{
			$table->integer('phonebook_contact_id')->index('fk_phonebook_has_groups_phonebook_idx');
			$table->integer('groups_group_id')->index('fk_phonebook_has_groups_groups1_idx');
			$table->integer('group_member_id')->primary();
			$table->enum('status', array('active','inactive'))->nullable();
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
		Schema::drop('group_members');
	}

}
