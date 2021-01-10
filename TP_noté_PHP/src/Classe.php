<?php

declare(strict_types=1);

namespace Eleve;

class Classe
{
    private $Etudiants = [];
    private $groupsOfEtudiants = [];

    public function __construct(Etudiants ...$Etudiants)
    {
        $this->Etudiants = $Etudiants;
        foreach($Etudiants as $Etudiants) {
            if (!isset($this->groupsOfEtudiants[get_class($Etudiants)])) {
                $this->groupsOfEtudiants[get_class($Etudiants)] = [];
            }

            $this->groupsOfEtudiants[get_class($Etudiants)][$Etudiants->getName()] = $Etudiants;
        }
    }

    public function Nom()
    {
        foreach($this->Etudiants as $Etudiants) {
            echo get_class($Etudiants).' : '.$Etudiants->getName()."<br>\n";
        }

        $this->Eleve(...$this->Etudiants);
    }

    private function Eleve(Etudiants ...$Etudiants): void
    {
        while ($this->groupsOfEtudiants()) {
            $this->round(...$Etudiants);
        }
    }


    private function round(Etudiants ...$Etudiants)
    {
        // Select player one by one for fight
    }
}
