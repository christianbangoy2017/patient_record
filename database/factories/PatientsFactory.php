<?php
use App\Models\Patients;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PatientFactory extends Factory
{
    protected $model = Patients::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'contactno' => $this->faker->phoneNumber(),
            'birthdate' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail()            
            
        ];
    }
}
