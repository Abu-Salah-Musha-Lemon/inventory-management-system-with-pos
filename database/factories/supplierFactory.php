<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\supplier>
 */
class supplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

  
     public function phoneNumber()
     {
         $prefix = '880'; // Country code prefix
         $length = 11; // Length of the remaining digits
 
         $phoneNumber = $prefix;
         for ($i = 0; $i < $length; $i++) {
             $phoneNumber .= $this->faker->numberBetween(0, 9); // Append a random integer digit
         }
         return $phoneNumber;
     }


    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->phoneNumber(), 
            'address' => $this->faker->address,
            'type' => $this->faker->randomElement(['Distributer', 'Whole Seller', 'Broker']), // Example types
            'photo' => 'default.jpg', // Assuming you have a default photo
            'shopeName' => $this->faker->company,
            'account_holder' => $this->faker->name,
            'account_number' => $this->faker->bankAccountNumber,
            'bank_name' => $this->faker->word,
            'bank_branch' => $this->faker->word,
            'city' => $this->faker->city,
        ];
    }
}
