<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       for ($i=0; $i < 20; $i++) { 
        DB::table('produtos')->insert([
            'nome' => Str::random(10),
            'foto' => "https://images.tcdn.com.br/img/img_prod/686591/shampoo_bomba_barba_e_cabelo_danger_barba_forte_250ml_1_1_20200226114151.jpg",
            'preco' => random_int(10, 250)
        ]);
       }
    }
}
