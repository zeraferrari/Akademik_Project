<?php

use Illuminate\Database\Seeder;
use App\Data_Akademik;
use Illuminate\Support\Facades\DB;

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

        DB::table('data_akademik')->insert([
            [
                'id'        => 101,
                'Nama'      => 'uxdiin',
                'NIM'       => '1715015000',
                'Email'     => 'uxdiin@command.com',
                'Password'  => Hash::make('12345678')
            ],
        ]);
    }
}
