<?php

use Illuminate\Database\Seeder;
use App\User;

class USerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	[
        		'name' => 'User 1',
        		'province' => 'Québec',
        		'phone' => '(416) 123-4567',
        		'postal_code' => 'M5G 2G8',
        		'salary' => '40 000,00',
        	],       	
        	[
        		'name' => 'User 2',
        		'province' => 'Ontario',
        		'phone' => '416-124-4568',
        		'postal_code' => 'X5G 2G0',
        		'salary' => '40 000,00',
        	],       	
        	[
        		'name' => 'User 3',
        		'province' => 'Alberta',
        		'phone' => '(416) 123-4567',
        		'postal_code' => 'E1A 2G8',
        		'salary' => '40,000.00',
        	],       	
        	[
        		'name' => 'User 4',
        		'province' => 'Manitoba',
        		'phone' => '416-124-4568',
        		'postal_code' => 'V0R 0B4',
        		'salary' => '40000,00',
        	],       	
        	[
        		'name' => 'User 5',
        		'province' => 'New Brunswick',
        		'phone' => '(416) 123-4567',
        		'postal_code' => 'M5G 2G8',
        		'salary' => '40000',
        	], 
                [
        		'name' => 'User 6',
        		'province' => 'Ontario',
        		'phone' => '816-129-4568',
        		'postal_code' => 'U5O 2G0',
        		'salary' => '40 000,00',
        	],       	
        	[
        		'name' => 'User 7',
        		'province' => 'Alberta',
        		'phone' => '(416) 123-4589',
        		'postal_code' => 'L1A 2G9',
        		'salary' => '40,000.00',
        	],
                [
        		'name' => 'User 8',
        		'province' => 'Québec',
        		'phone' => '(416) 123-4567',
        		'postal_code' => 'M5G 2G8',
        		'salary' => '40 000,00',
        	],       	
        	[
        		'name' => 'User 9',
        		'province' => 'Ontario',
        		'phone' => '416-124-4568',
        		'postal_code' => 'X5G 2G0',
        		'salary' => '40 000,00',
        	],       	
        	[
        		'name' => 'User 10',
        		'province' => 'Alberta',
        		'phone' => '(416) 123-4567',
        		'postal_code' => 'E1A 2G8',
        		'salary' => '40,000.00',
        	],
                [
        		'name' => 'User 11',
        		'province' => 'Ontario',
        		'phone' => '816-129-4568',
        		'postal_code' => 'U5O 2G0',
        		'salary' => '40 000,00',
        	],       	
        	[
        		'name' => 'User 12',
        		'province' => 'Alberta',
        		'phone' => '(416) 123-4589',
        		'postal_code' => 'L1A 2G9',
        		'salary' => '40,000.00',
        	],
                [
        		'name' => 'User 13',
        		'province' => 'Québec',
        		'phone' => '(416) 123-4567',
        		'postal_code' => 'M5G 2G8',
        		'salary' => '40 000,00',
        	],       	
        	[
        		'name' => 'User 14',
        		'province' => 'Ontario',
        		'phone' => '416-124-4568',
        		'postal_code' => 'X5G 2G0',
        		'salary' => '40 000,00',
        	],       	
        	[
        		'name' => 'User 15',
        		'province' => 'Alberta',
        		'phone' => '(416) 123-4567',
        		'postal_code' => 'E1A 2G8',
        		'salary' => '40,000.00',
        	]             
        ];

        foreach ($users as  $value) {
            User::create($value);
        }
    }
}
