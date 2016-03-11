<?php

use Illuminate\Database\Seeder;

class ArticlesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Article::class, 20)->create(); // Créer 20 utilisateurs
    }
}
