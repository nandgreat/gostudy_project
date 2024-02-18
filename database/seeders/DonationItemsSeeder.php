<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonationItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $default = [
            ['item_name' => 'Desktop Computer', 'amount_per_item' => '200',  'created_at' => now(), 'updated_at' => now()],
            ['item_name' => 'Laptop Computer', 'amount_per_item' => '120',  'created_at' => now(), 'updated_at' => now()],
            ['item_name' => 'White board', 'amount_per_item' => '40',  'created_at' => now(), 'updated_at' => now()],
            ['item_name' => 'Software', 'amount_per_item' => '300',  'created_at' => now(), 'updated_at' => now()],
            ['item_name' => 'Textbooks', 'amount_per_item' => '10',  'created_at' => now(), 'updated_at' => now()],
            ['item_name' => 'Computer', 'amount_per_item' => '190',  'created_at' => now(), 'updated_at' => now()],
            ['item_name' => 'Accessories', 'amount_per_item' => '70',  'created_at' => now(), 'updated_at' => now()],
            ['item_name' => 'Desks', 'amount_per_item' => '60',  'created_at' => now(), 'updated_at' => now()],
            ['item_name' => 'Chair', 'amount_per_item' => '30',  'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('donation_items')->insert($default);
    }
}
