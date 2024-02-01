<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            [
                'id' => 1,
                'reference' => 'ref1',
                'titre' => 'Rap',
                'description' => 'Genre characterized by rhythm and rhyming speech',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'reference' => 'ref2',
                'titre' => 'Pop',
                'description' => 'Popular music genre with catchy melodies',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'reference' => 'ref3',
                'titre' => 'Dance',
                'description' => 'Music genre intended for dancing and clubbing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'reference' => 'ref4',
                'titre' => 'Rock',
                'description' => 'Genre characterized by guitar-driven sound and energetic performances',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 5,
                'reference' => 'ref5',
                'titre' => 'Country',
                'description' => 'Music genre originating from rural areas of the Southern United States',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 6,
                'reference' => 'ref6',
                'titre' => 'Classical',
                'description' => 'Music genre rooted in Western traditions and known for its complexity',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 7,
                'reference' => 'ref7',
                'titre' => 'Jazz',
                'description' => 'Genre characterized by improvisation and swing rhythms',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 8,
                'reference' => 'ref8',
                'titre' => 'R&B',
                'description' => 'Rhythm and Blues genre combining elements of jazz, gospel, and blues',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 9,
                'reference' => 'ref9',
                'titre' => 'Electronic',
                'description' => 'Music genre created using electronic instruments and technology',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
