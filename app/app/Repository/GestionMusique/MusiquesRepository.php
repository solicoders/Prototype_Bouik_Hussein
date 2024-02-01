<?php

namespace App\Repository\GestionMusique;

use App\Models\GestionMusique\Musique;
use App\Repository\GestionMusique\BaseRepository;

class MusiquesRepository extends BaseRepository
{
    protected $model;

    public function __construct(Musique $model)
    {
        $this->model = $model;
    }

    public function getAllMusiques()
    {
        return $this->model->all();
    }

    public function createMusique(array $data)
    {
        return $this->model->create($data);
    }

    public function findMusique($id)
    {
        return $this->model->find($id);
    }

    public function updateMusique($id, array $data)
    {
        $model = $this->model->find($id);

        if ($model) {
            $model->update($data);
            return $model;
        }

        return null;
    }

    public function deleteMusique($id)
    {
        $model = $this->model->find($id);

        if ($model) {
            $model->delete();
            return true;
        }

        return false;
    }

}
?>
