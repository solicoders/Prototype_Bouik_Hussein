<?php

namespace Tests\Feature;
// tests/Feature/MusiquesRepositoryTest.php

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\GestionMusique\Type;
use App\Models\GestionMusique\Musique;
use App\Repository\GestionMusique\MusiquesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MusiquesRepositoryTest extends TestCase
{
    use DatabaseTransactions;

    protected $musiqueRepository;

    public function setUp(): void
    {
        parent::setUp();
        $this->musiqueRepository = app(MusiquesRepository::class);
    }

    public function test_get_all_musiques(): void
    {
        $musiques = $this->musiqueRepository->getAllMusiques();
        $this->assertNotEmpty($musiques);
    }

    public function test_create_musique(): void
    {
        $type = Type::first();

        $validatedData = [
            'artiste' => 'nicki minaj',
            'titre' => 'anaconda',
            'created_at' => '2020-08-07 00:00:00',
            'updated_at' => '2020-08-07 00:00:00',
            'reference' => 'ref123',
            'type_id' => $type->id,
        ];

        $createdMusique = $this->musiqueRepository->createMusique($validatedData);
        $this->assertInstanceOf(Musique::class, $createdMusique);
    }

    public function test_find_musique(): void
    {
        $musique = Musique::first();
        $foundMusique = $this->musiqueRepository->findMusique($musique->id);
        $this->assertInstanceOf(Musique::class, $foundMusique);
    }

    public function test_update_musique(): void
    {
        $musique = Musique::first();
        $type = Type::first();

        $validatedData = [
            'artiste' => 'updated artist',
            'titre' => 'updated title',
            'created_at' => '2020-08-07 00:00:00',
            'updated_at' => '2020-08-07 00:00:00',
            'reference' => 'updated ref123',
            'type_id' => $type->id,
        ];

        $updatedMusique = $this->musiqueRepository->updateMusique($musique->id, $validatedData);
        $this->assertInstanceOf(Musique::class, $updatedMusique);
    }

    public function test_delete_musique(): void
    {
        $musique = Musique::first();
        $deleted = $this->musiqueRepository->deleteMusique($musique->id);
        $this->assertTrue($deleted);
    }
}
