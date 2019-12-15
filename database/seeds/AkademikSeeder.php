<?php

use Illuminate\Database\Seeder;
use App\Data_Akademik;

class AkademikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Data_Akademik::class, 100)->create();
    }
}
