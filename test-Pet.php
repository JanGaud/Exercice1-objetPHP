<?php 
    require_once "Classes/Pet.php";
    require_once "Classes/Owner.php";
    require_once "Classes/Animal.php"; 

    $owner1 = new Owner("Janis", "5656 st-Wellignton", "H0F0Z9", "5145555555", "JG@gmail.com");
    $owner2 = new Owner("Joshua", "80 desgagné" , "H7V7O7" , "4505555555", "Josh@hotmail.com");

    $pet1 = new Pet("Chien", "Chouwan", new DateTime("10-10-2017"), $owner1);
    $pet2 = new Pet("Chat", "Maya", new DateTime("11-11-2012"), $owner2);
    $pet3 = new Pet("T-rex", "Rex", new DateTime("12-12-2013"), $owner1);
    $pet4 = new Pet("Cheval", "Blackie", new DateTime("18-04-2005"), $owner2);
?>


    <pre><?=($pet1);?></pre>
    <pre><?=($pet2);?></pre>
    <pre><?=($pet3);?></pre>
    <pre><?=($pet4);?></pre>
