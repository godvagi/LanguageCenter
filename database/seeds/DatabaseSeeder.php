<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Promotion::create([
          'name' => 'Adele',
          'startdate' => '26/50/50',
          'expdate' => '26/50/50',
          'img' => 'test.png',
          'type' => 'percent',
          'total' => '20',
          'description' => 'grammar',
      ]);
    
    }
}
