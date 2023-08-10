<?php

namespace Database\Seeders;

use App\Models\Laundry;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $laundries = [
            [
                'claim_code' => 'sakjhsaiu',
                'user_id' => 1,
                'shop_id' => 2,
                'weight' => 2.3,
                'with_pickup' => 1,
                'with_delivery' => 1,
                'pickup_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'delivery_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'total' => 50000,
                'description' => 'baju koko, sarung, sajadah',
                'status' => 'Done',
                'created_at' => '2023-04-11 08:50:49',
                'updated_at' => '2023-04-11 08:50:49',
            ],
            [
                'claim_code' => 'sakjhsaiu',
                'user_id' => 1,
                'shop_id' => 3,
                'weight' => 1.3,
                'with_pickup' => 0,
                'with_delivery' => 0,
                'pickup_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'delivery_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'total' => 30000,
                'description' => 'baju koko, sarung, sajadah',
                'status' => 'Process',
                'created_at' => '2023-04-12 08:50:49',
                'updated_at' => '2023-04-12 08:50:49',
            ],
            [
                'claim_code' => 'akshas7i',
                'user_id' => 1,
                'shop_id' => 3,
                'weight' => 2.3,
                'with_pickup' => 0,
                'with_delivery' => 1,
                'pickup_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'delivery_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'total' => 21500,
                'description' => 'baju koko, sarung, sajadah',
                'status' => 'Queue',
                'created_at' => '2023-04-12 08:50:49',
                'updated_at' => '2023-04-12 08:50:49',
            ],
            [
                'claim_code' => 'asoaus',
                'user_id' => 1,
                'shop_id' => 5,
                'weight' => 1.1,
                'with_pickup' => 0,
                'with_delivery' => 1,
                'pickup_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'delivery_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'total' => 11500,
                'description' => 'baju koko, sarung, sajadah',
                'status' => 'Queue',
                'created_at' => '2023-04-12 08:50:49',
                'updated_at' => '2023-04-12 08:50:49',
            ],
            [
                'claim_code' => 'slkjaks',
                'user_id' => 1,
                'shop_id' => 7,
                'weight' => 3.2,
                'with_pickup' => 1,
                'with_delivery' => 1,
                'pickup_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'delivery_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'total' => 35500,
                'description' => 'baju koko, sarung, sajadah',
                'status' => 'Washing',
                'created_at' => '2023-04-14 08:50:49',
                'updated_at' => '2023-04-14 08:50:49',
            ],
            [
                'claim_code' => 'asldjasld89sa7d89asd',
                'user_id' => 1,
                'shop_id' => 9,
                'weight' => 0.4,
                'with_pickup' => 1,
                'with_delivery' => 1,
                'pickup_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'delivery_address' => '811 South San Fernando, Boulevard Burbank, CA 91502',
                'total' => 12000,
                'description' => 'baju koko, sarung, sajadah',
                'status' => 'Queue',
                'created_at' => '2023-04-14 08:50:49',
                'updated_at' => '2023-04-14 08:50:49',
            ],
        ];

        foreach ($laundries as $laundry) {
            Laundry::create($laundry);
        }
    }
}
