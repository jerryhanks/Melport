<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        //crete the table here
      Schema::create('report_code',function(Blueprint $table)
	{
	
	$table->increments('id');
	$table->string('code',10)->unique();
	$table->string('meaning',50);
	$table->timestamps();
	});
	
      $faker = Faker\Factory::create();
      $limit=5;
      for($i=0; $i<$limit; $i++)
	{
	DB::table('report_code')->insert([
	    //,	    
	    'code' => $faker->text(),
	    'meaning' => $faker->text()
	]);
	}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //drop the table here
      Schema::drop('report_code');
    }
}
