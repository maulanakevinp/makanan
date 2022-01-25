<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Transaksi::truncate();
        \App\Models\Transaksi::factory(100)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
