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
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'experience' => $this->faker->numberBetween(0, 30), // Assuming 0 to 30 years of experience
            'photo' => 'default.jpg',
            'salary' => $this->faker->numberBetween(20000, 80000),
            'vacation' => $this->faker->numberBetween(10, 30),
            'city' => $this->faker->city,
            'nid' => $this->faker->uuid,
        ];
    }
    
}
