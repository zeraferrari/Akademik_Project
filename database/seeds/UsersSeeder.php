<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'id'        => 1,
                'name'      => 'Client_Uxdiin',
                'email'     => 'client_uxdiin@gmail.com',
                'password'  => Hash::make('12345678'),
                'api_token' => '9yzk5DhBMazOcs2Cv7W3la4YJcRQLCOpU1bIkMVWIVH6yf9gvMRM2Wy7jvmhuvInjV1dgtwxs0uiObA10QzQ5RGD',
            ],

            [
                'id'        => 2,
                'name'      => 'Client_Mufli',
                'email'     => 'client_Mufli@gmail.com',
                'password'  => Hash::make('12345678'),
                'api_token' => 'n7QtWgSDf2E5JbFH1uBRNuCQ1D1fnSQX2EbJFH3yGZQ8k0ErONF7ciQLqxKIw84DLUWEUadz4DcGhD6Jgdp8WY4s',
            ],
        ]);
    }
}
