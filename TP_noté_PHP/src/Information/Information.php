<?php

declare(strict_types=1);

namespace Eleve\Information;

use Eleve\Note;
use Eleve\NOM;
use Eleve\idEleve;


abstract class Information implements Note, NOM, idEleve
{
    protected $note;
    protected $Nom;
    protected $idEleve;

    public function __construct(string $id)
    {
        $this->note = rand(0, 20);
        $this->idEleve = rand(500 , 1000);
        $this->Nom = $id;
    }

    public function note(): float
    {
        return $this->note;
    }

    public function idEleve(): float
    {
        return $this->idEleve;
    }


    public function getNom(): string
    {
        return $this->Nom;
    }

    
}
