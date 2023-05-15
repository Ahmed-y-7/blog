<?php

namespace Database\Factories;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //  comment هنا انشاء بيانات عشوائية لكي ينكتب في قاعدة البيانات حق 
        return [
            'name' => $this->faker->name,
            'body' => $this->faker->realText(250),
            'created_at' => $this->faker->dateTimeBetween('-2 months')
        ];
    }
}
