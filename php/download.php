<?php
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename=BoatGrade.csv');
    header('Pragma: no-cache'); 
    readfile("BoatGrade.csv");
?>

