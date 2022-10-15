<?php 
    require_once "Classes\Pet.php";
    require_once "Classes\Owner.php";

    $owner1 = new Owner("Janis", "2047 Darling", "H1W1W9", "5145555555", "JG@gmail.com");

    $pet1 = new Pet("Chien", "Chouwan", new DateTime("10-10-2017"), $owner1);
    $pet2 = new Pet("Chat", "Maya", new DateTime("11-11-2012"), $owner1);
    $pet3 = new Pet("T-rex", "Rex", new DateTime("12-12-2013"), $owner1);
    $pet4 = new Pet("Cheval", "Blackie", new DateTime("18-04-2005"), $owner1);
?>


    <pre><?=($pet1);?></pre>
    <pre><?=($pet2);?></pre>
    <pre><?=($pet3);?></pre>
    <pre><?=($pet4);?></pre>
