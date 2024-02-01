<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Add this line
class MusiquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('musiques')->insert([
            [
                'titre' => 'HISS',
                'artiste' => 'Megan Thee Stallion',
                'reference' => 'ref1',
                'type_id' => 1,
            'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'WAP',
                'artiste' => 'Cardi B',
                'reference' => 'ref2',
                'type_id' => 1,
            'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Savage',
                'artiste' => 'Megan Thee Stallion',
                'reference' => 'ref3',
                'type_id' => 1,
            'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Savage Love',
                'artiste' => 'Jason Derulo',
                'reference' => 'ref4',
                'type_id' => 2,
            'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Blinding Lights',
                'artiste' => 'The Weeknd',
                'reference' => 'ref5',
                'type_id' => 3,
            'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Levitating',
                'artiste' => 'Dua Lipa',
                'reference' => 'ref6',
                'type_id' => 3,
            'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Good 4 U',
                'artiste' => 'Olivia Rodrigo',
                'reference' => 'ref7',
                'type_id' => 2,
            'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Stay',
                'artiste' => 'The Kid Laroi',
                'reference' => 'ref8',
                'type_id' => 3,
            'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Heat Waves',
                'artiste' => 'Glass Animals',
                'reference' => 'ref9',
                'type_id' => 4,
            'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titre' => 'Industry Baby',
                'artiste' => 'Lil Nas X',
                'reference' => 'ref10',
                'type_id' => 1,
            'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
