<?php

namespace Database\Seeders;
use App\Models\Voucher;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VoucherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Voucher::create([
            'code' => 'ABC123',
            'type' => 'fixed',
            'value' => 3000,
        ]);

            Voucher::create([
            'code' => 'DEF456',
            'type' => 'fixed',
            'value' => 500,
        ]);
    }
}
