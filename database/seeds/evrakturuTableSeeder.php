<?php

use Illuminate\Database\Seeder;

class evrakturuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('evrakturu')->insert([
            ['evrakturuid' => 1, 'evrakturuad' => "ALIŞ SİPARİŞ FİŞİ"],
            ['evrakturuid' => 2, 'evrakturuad' => "SATIŞ SİPARİŞ FİŞİ"],
            ['evrakturuid' => 3, 'evrakturuad' => "ALIŞ İRSALİYESİ"],
            ['evrakturuid' => 4, 'evrakturuad' => "SATIŞ İRSALİYESİ"],
            ['evrakturuid' => 5, 'evrakturuad' => "ALIŞ FATURASI"],
            ['evrakturuid' => 6, 'evrakturuad' => "SATIŞ FATURASI"],
            ['evrakturuid' => 7, 'evrakturuad' => "ÇEK BORDROSU"],
            ['evrakturuid' => 8, 'evrakturuad' => "TAHSİLAT MAKBUZU"],
            ['evrakturuid' => 9, 'evrakturuad' => "BORÇ MAKBUZU"],

        ]);
    }
}