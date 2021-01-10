<?php

declare(strict_types=1);

namespace Eleve\Information;

use Eleve\Peuechou;

class Peuechou extends \Exception
{
    private $Information;

    public function __construct(Peuechou $Information)
    {
        parent::__construct("{$Information->Peuechou()}\n");
        $this->Information = $Information;
    }
}
