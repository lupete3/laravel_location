<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $ville = $this->faker->city;
        $pays = $this->faker->country;
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName(),
            'sexe' => $this->faker->randomElement(['M','F']),
            'dateNaissance' => $this->faker->dateTimeBetween('1950-01-01', '2001-01-01'),
            'lieuNaissance' => $ville.' , '.$pays,
            'nationalite' => $this->faker->country,
            'ville' => $ville,
            'pays' => $pays,
            'adresse' => $this->faker->address,
            'telephone1' => $this->faker->phoneNumber,
            'telephone2' => $this->faker->phoneNumber,
            'pieceIdentite' => $this->faker->randomElement(['CARTE ELECTEUR','PERMIS CONDUIRE', 'PASSPORT', 'VISA']),
            'noPieceIdentite' => $this->faker->creditCardNumber
        ];
    }
}
