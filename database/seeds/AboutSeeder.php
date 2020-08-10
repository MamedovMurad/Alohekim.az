<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abouts')->insert([
            'name'=>'Hamid',
            'surname'=>'Hamidli',
            'brithday'=>now(),
            'citizenship'=>'Azerbaycan',
            'address'=>'Azerbaycan,Baku,Yasamal',
            'slug'=>Str::slug('haqqinda')
        ]);
    }
}
