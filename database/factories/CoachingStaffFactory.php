<?php

namespace Database\Factories;
use App\Models\CoachingStaff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CoachingStaff>
 */
class CoachingStaffFactory extends Factory
{
    protected $model = CoachingStaff::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'avatar' => $this->faker->imageUrl(),
            'description' => $this->faker->paragraph,
        ];
    }
}
