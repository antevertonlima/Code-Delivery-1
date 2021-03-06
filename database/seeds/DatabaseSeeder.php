<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(UserTableSeeder::class);
         $this->call(CategoriaTableSeeder::class);
         $this->call(PedidoTableSeeder::class);
         $this->call(CupomTableSeeder::class);
         $this->call(OAuthClientSeeder::class);
        
        Model::reguard();
    }
}
