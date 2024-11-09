<?php

namespace RustamAliHussaini\EcommerceCompletionPackage\Database\Factories;

use RustamAliHussaini\EcommerceCompletionPackage\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

class WarehouseFactory extends Factory
{
    protected $model = Warehouse::class;


    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'area' => $this->faker->numberBetween(1000, 10000), // in square meters
            'no_of_room' => $this->faker->numberBetween(1, 20),
            'longitude' => $this->faker->longitude,
            'latitude' => $this->faker->latitude,
            'country_id' => $this->faker->numberBetween(1, 5), // Ensure these IDs match your seeded data
            'state_id' => $this->faker->numberBetween(1, 50),
            'city' => $this->faker->city,
            'postal_code' => $this->faker->postcode,
            'address_line_one' => $this->faker->streetAddress,
            'address_line_two' => $this->faker->secondaryAddress,
            'tenant_id' => $this->faker->uuid, // Assuming UUID format for tenant ID
            'company_id' => $this->faker->optional()->numberBetween(1, 10),
            'seller_id' => $this->faker->optional()->numberBetween(1, 10),
        ];
    }
}
