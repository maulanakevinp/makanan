<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Menu::truncate();
        Menu::create([
            "menu"          => "Nasi Goreng",
            "kategori_id"   => 1,
            "harga"         => 10000
        ]);
        Menu::create([
            "menu"          => "Mie Freno",
            "kategori_id"   => 1,
            "harga"         => 10000
        ]);
        Menu::create([
            "menu"          => "Nasi Teriyaki",
            "kategori_id"   => 1,
            "harga"         => 10000
        ]);
        Menu::create([
            "menu"          => "Nasi Ayam Katsu",
            "kategori_id"   => 1,
            "harga"         => 10000
        ]);
        Menu::create([
            "menu"          => "Nasi Goreng Mawut",
            "kategori_id"   => 1,
            "harga"         => 10000
        ]);
        Menu::create([
            "menu"          => "Teh Hijau",
            "kategori_id"   => 2,
            "harga"         => 6000
        ]);
        Menu::create([
            "menu"          => "Teh Lemon",
            "kategori_id"   => 2,
            "harga"         => 6000
        ]);
        Menu::create([
            "menu"          => "Teh",
            "kategori_id"   => 2,
            "harga"         => 6000
        ]);
        Menu::create([
            "menu"          => "Kopi Hitam",
            "kategori_id"   => 2,
            "harga"         => 6000
        ]);
        Menu::create([
            "menu"          => "Kopi Susu",
            "kategori_id"   => 2,
            "harga"         => 6000
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
