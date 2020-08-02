<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('masses')->insert([
            'parish_id' => 1,
            'name' => 'Messe de 7h30',
            'start_at' => '07:30',
            'request_closed_at' => '06:00',
            'start_day' => 2,
        ]);
    }
}
