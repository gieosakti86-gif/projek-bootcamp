<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
* @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Link>
*/
class LinkFactory extends Factory{
 /**
 * Define the model's default state.
 *
 * @return array<string, mixed>
 */
 public function definition(): array{
 return [
 'title' => $this->faker->words(3, true),
 'url' => $this->faker->url(),
 'image' => null, // Gambar diset null terlebih dahulu untuk dummy // 80% kemungkinan bernilai true
 'is_active' => $this->faker->boolean(80),
 'clicks' => $this->faker->numberBetween
(0, 250),
 ];
 }
}
