<?php

use Illuminate\Database\Seeder;
use App\Data_Dosen;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Data_Dosen::class, 10)->create();
    }
}
