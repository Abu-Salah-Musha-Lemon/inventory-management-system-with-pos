<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    private function generateRandomNID() {
        $nid = '';
        $minLength = 9;
        $maxLength = 10;
        
        // Generate a random number within the specified length range
        $length = $this->faker->numberBetween($minLength, $maxLength);
        
        // Generate random digits and concatenate them to form the NID
        for ($i = 0; $i < $length; $i++) {
            $nid .= $this->faker->randomDigit;
        }
        
        return $nid;
    }
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'experience' => $this->faker->numberBetween(0, 30), // Assuming 0 to 30 years of experience
            'photo' => '',
            'salary' => $this->faker->numberBetween(20000, 80000),
            'vacation' => $this->faker->numberBetween(10, 30),
            'city' => $this->faker->city,
            'nid' => $this->generateRandomNID(),
        ];
    }
   
    
}
