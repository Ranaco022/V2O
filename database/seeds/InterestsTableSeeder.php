<?php

use Illuminate\Database\Seeder;

class InterestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('interests')->insert([
			'firstName' => 'Bob',
			'lastName' => 'Smith',
			'email' => 'bob@builder.com',
			'interest' => 'sports'
		
		]);
    }
}
