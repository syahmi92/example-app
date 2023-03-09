<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tasks;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tasks>
 */
class TasksFactory extends Factory
{
    protected $model = Tasks::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'uuid'=> $this -> faker -> uuid(),
            'name'=> $this -> faker -> name(),
            'description'=> $this -> faker -> paragraph(),
            'status'=> $this -> faker -> randomElement(['done','abandon','in progress'])
        ];
    }
}
