<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Kategori::truncate();
        Kategori::create(['nama' => 'makanan']);
        Kategori::create(['nama' => 'minuman']);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
