<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                'date'        => '2018-10-01',
                'user_id'     => 1,
                'address'     => 'street 1',
                'description' => 'description 1',
            ],
            [
                'date'        => '2018-10-02',
                'user_id'     => 1,
                'address'     => 'street 2',
                'description' => 'description 2',   

            ],
            [
                'date'        => '2018-10-03',
                'user_id'     => 1,
                'address'     => 'street 3',
                'description' => 'description 3',   
            ]
        ]);
    }
}
