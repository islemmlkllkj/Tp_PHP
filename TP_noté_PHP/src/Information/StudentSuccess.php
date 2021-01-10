<?php

declare(strict_types=1);

namespace Eleve\Information;

use Eleve\Peuechou;
use Eleve\idEleve;

final class StudentSuccess extends Information implements Peuechou
{
    public function __construct(string $idEleve)
    {
        parent::__construct($idEleve);
        $this->idEleve = $idEleve ;
    }

    

    public function describeSuccess(): string
    {
        return "{$this->name()} SUCCEED";
    }
}
