<?php

function ageCalculate($birthDate) 
{
    $today      = date("Y-n-d");
    $dateA      = new DateTime($today);
    $dateB      = new DateTime($birthDate);
    $dateDiff   = $dateA->diff($dateB);
     
    return $dateDiff->y.' ปี '.$dateDiff->m.' เดือน '.$dateDiff->d.' วัน';
}

echo ageCalculate('1999-11-25') ;
