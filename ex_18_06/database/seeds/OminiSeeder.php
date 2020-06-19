<?php

use Illuminate\Database\Seeder;
use App\Omini;

class OminiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Omini::class, 50) -> create();
    }
}
