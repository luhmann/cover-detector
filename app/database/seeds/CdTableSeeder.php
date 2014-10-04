<?php


class CdTableSeeder extends Seeder {

	public function run()
	{
		DB::table('cds')->delete();

	}
} 