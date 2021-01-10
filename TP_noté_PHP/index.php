<?php

use Eleve\Classe;
use Eleve\Information\StudentFailed;
use Eleve\Character\StudentSuccess;


require __DIR__.'/vendor/autoload.php';

$fight = new Classe(...[
        new StudentFailed('Jean'),
        new StudentFailed('Paul'),
        new StudentFailed('Gauthier'),
        new StudentSuccess('Ilies'),
        new StudentSuccess('Islem'),
        new StudentSuccess('Frédéric'),
        new StudentSuccess('Willy'),
        new StudentSuccess('Sarah'),
        new StudentSuccess('Toufik'),
        new StudentSuccess('Ivan'),
        new StudentSuccess('Alexandre'),
    ]
);


