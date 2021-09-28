<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Users;

class UsersTableSeeder extends Seeder
{
    public function run()
    {

      Users::truncate();

      srand(12345);
      $randomNumber = rand(111, 999);

      $phoneType = ['Mobile', 'Desk', 'Software'];

      for ($i = 0; $i < 20; $i++) {
        Users::create([
          'name' => Str::random(8).' '.Str::random(9),
          'phone' => '+44 '.rand(721111111, 799999999),
          'handset' => $phoneType[array_rand($phoneType, 1)],
        ]);
      }
    }
}
