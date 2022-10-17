<article>
    <div class="haut-carte">
        <h2>Nom complet</h2>
        <div class="medaillon"><img src="style\img\kittyavatar.png" alt="image de l'animal"></div>
    </div>
    <div class="bas-carte">
        <h4>Information du client</h4>
        <section class="info-section">
            <small>Age: <?php echo $owner3->getNom()?></small> <br>
            <small>Adresse: <?php echo $owner3->getAdresse()?></small> <br>
            <small>Code Postale: <?php echo $owner3->getCodePostale()?></small> <br>
            <small>Téléphone: <?php echo $owner3->getTelephone()?></small> <br>
            <small>Courriel: <?php echo $owner3->getEmail()?></small>
        </section>

            <h4>Information sur les animaux de compagnies</h4>
            <section class="animal-compagnie">
                <div class="animal">
                    <small>Nom: <?php echo $pet4->getNom()?></small> <br>
                    <small>Age: <?php echo $pet4->getAge()?></small> <br>
                    <small>Espèce: <?php echo $pet4->getType()?></small>
                </div>
            </section>
    </div>
</article>