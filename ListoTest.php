<?php
{
    function isInclusDansPeriode($start, $end): bool
    {
        // 3 Possibilités : la période se trouve dans le mois, la période a commencé avant le mois mais termine dedans et la période a commencé avant et termine après
        if (($start >= "2021-08-01" && $end <= "2021-08-31") || ($start < "2021-08-01" && $end > "2021-08-31") || ($end <= "2021-08-31" && $end >= "2021-08-01")) {
            return true;
        } else {
            return false;
        }
    }

    //Quelques test pour vérifier si tout fonctionne
    $test1 = isInclusDansPeriode("2021-08-12","2021-09-05");
    $test2 = isInclusDansPeriode("2021-08-02","2021-08-22");
    $test3 = isInclusDansPeriode("2021-07-16","2021-08-13");
    $test4 = isInclusDansPeriode("2021-07-10","2021-09-18");

    if ($test1 === false && ($test2 && $test3 && $test4)) {
        echo 'Tout marche parfaitement.';
    } else {
        echo 'Il y a un problème dans le fonctionnement.';
    }
}