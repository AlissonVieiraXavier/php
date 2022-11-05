<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SiteContato>
 */
class SiteContatoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    //protected $model = SiteContato::class;
    public function definition()
    {
        return [
            'name' =>fake()->name(),
            'telefone' => fake()->phoneNumber(),
            'email' => fake()->email(),
            'mensagem'=>fake()->text(30),
            'motivo_contato'=> fake()->numberBetween(1,3)
            ];
    }
}

