<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
//		Schema::table('implementations', function(Blueprint $table) {
//			$table->foreign('project_id')->references('id')->on('projects')
//						->onDelete('restrict')
//						->onUpdate('restrict');
//		});
//		Schema::table('implementations', function(Blueprint $table) {
//			$table->foreign('student_id')->references('id')->on('students')
//						->onDelete('restrict')
//						->onUpdate('restrict');
//		});
//		Schema::table('implementations', function(Blueprint $table) {
//			$table->foreign('jiri_id')->references('id')->on('jiries')
//						->onDelete('restrict')
//						->onUpdate('cascade');
//		});
//		Schema::table('jiries', function(Blueprint $table) {
//			$table->foreign('user_id')->references('id')->on('users')
//						->onDelete('restrict')
//						->onUpdate('cascade');
//		});
//		Schema::table('impressions', function(Blueprint $table) {
//			$table->foreign('user_id')->references('id')->on('users')
//						->onDelete('restrict')
//						->onUpdate('restrict');
//		});
//		Schema::table('impressions', function(Blueprint $table) {
//			$table->foreign('student_id')->references('id')->on('students')
//						->onDelete('restrict')
//						->onUpdate('cascade');
//		});
//		Schema::table('impressions', function(Blueprint $table) {
//			$table->foreign('jiri_id')->references('id')->on('jiries')
//						->onDelete('restrict')
//						->onUpdate('cascade');
//		});
//		Schema::table('scores', function(Blueprint $table) {
//			$table->foreign('user_id')->references('id')->on('users')
//						->onDelete('restrict')
//						->onUpdate('restrict');
//		});
//		Schema::table('scores', function(Blueprint $table) {
//			$table->foreign('implementation_id')->references('id')->on('implementations')
//						->onDelete('restrict')
//						->onUpdate('restrict');
//		});
//		Schema::table('performances', function(Blueprint $table) {
//			$table->foreign('student_id')->references('id')->on('students')
//						->onDelete('restrict')
//						->onUpdate('cascade');
//		});
//		Schema::table('performances', function(Blueprint $table) {
//			$table->foreign('jiri_id')->references('id')->on('jiries')
//						->onDelete('restrict')
//						->onUpdate('cascade');
//		});
//		Schema::table('people', function(Blueprint $table) {
//			$table->foreign('jiri_id')->references('id')->on('jiries')
//						->onDelete('restrict')
//						->onUpdate('cascade');
//		});
	}

	public function down()
	{
//		Schema::table('implementations', function(Blueprint $table) {
//			$table->dropForeign('implementations_project_id_foreign');
//		});
//		Schema::table('implementations', function(Blueprint $table) {
//			$table->dropForeign('implementations_student_id_foreign');
//		});
//		Schema::table('implementations', function(Blueprint $table) {
//			$table->dropForeign('implementations_jiri_id_foreign');
//		});
//		Schema::table('jiries', function(Blueprint $table) {
//			$table->dropForeign('jiries_user_id_foreign');
//		});
//		Schema::table('impressions', function(Blueprint $table) {
//			$table->dropForeign('impressions_user_id_foreign');
//		});
//		Schema::table('impressions', function(Blueprint $table) {
//			$table->dropForeign('impressions_student_id_foreign');
//		});
//		Schema::table('impressions', function(Blueprint $table) {
//			$table->dropForeign('impressions_jiri_id_foreign');
//		});
//		Schema::table('scores', function(Blueprint $table) {
//			$table->dropForeign('scores_user_id_foreign');
//		});
//		Schema::table('scores', function(Blueprint $table) {
//			$table->dropForeign('scores_implementation_id_foreign');
//		});
//		Schema::table('performances', function(Blueprint $table) {
//			$table->dropForeign('performances_student_id_foreign');
//		});
//		Schema::table('performances', function(Blueprint $table) {
//			$table->dropForeign('performances_jiri_id_foreign');
//		});
//		Schema::table('people', function(Blueprint $table) {
//			$table->dropForeign('people_jiri_id_foreign');
//		});
	}
}