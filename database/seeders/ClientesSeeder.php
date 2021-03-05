<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 25; $i++) { 
            DB::table('clientes')->insert([
                'nome' => Str::random(10),
                'idade' => random_int(1, 100)
            ]);
           }
    }
}
