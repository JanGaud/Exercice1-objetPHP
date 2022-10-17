<article>
    <div class="haut-carte">
        <h2>Nom complet</h2>
        <div class="medaillon"><img src="style\img\kittyavatar.png" alt="image de l'animal"></div>
    </div>
    <div class="bas-carte">
        <h4>Information du client</h4>
        <section class="info-section">
            <small>Age: <?php echo $owner1->getNom()?></small> <br>
            <small>Adresse: <?php echo $owner1->getAdresse()?></small> <br>
            <small>Code Postale: <?php echo $owner1->getCodePostale()?></small> <br>
            <small>Téléphone: <?php echo $owner1->getTelephone()?></small> <br>
            <small>Courriel: <?php echo $owner1->getEmail()?></small>
        </section>

            <h4>Information sur les animaux de compagnies</h4>
            <section class="animal-compagnie">
                <div class="animal">
                    <small>Nom: <?php echo $pet1->getNom()?></small> <br>
                    <small>Age: <?php echo $pet1->getAge()?></small> <br>
                    <small>Espèce: <?php echo $pet1->getType()?></small>
                </div>

                <div class="animal">
                    <small>Nom: <?php echo $pet3->getNom()?></small> <br>
                    <small>Age: <?php echo $pet3->getAge()?></small> <br>
                    <small>Espèce: <?php echo $pet3->getType()?></small>
                </div>
            </section>
    </div>
</article>