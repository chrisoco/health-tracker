<?php

namespace Database\Factories;

use App\Models\Smoke;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Smoketracker>
 */
class SmokeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Smoke::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $randomDate = Carbon::tomorrow()->subDays(rand(0, 30))->subSeconds(rand(0, 86400));

        return [
            'created_at' => $randomDate,
            'updated_at' => $randomDate,
        ];
    }
}
