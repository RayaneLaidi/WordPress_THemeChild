<?php
/**
 * Template de la page d'accueil personnalisée
 */

get_header();
?>

<!-- SECTION HÉROS -->
<section class="section-heros-drake">
    <div class="conteneur-drake">
        <div class="contenu-heros">
            <h1>DRAKE</h1>
            <div class="sous-titre-heros">Artiste • Producteur • Icône</div>
            
            <div class="etiquettes-heros">
                <span class="etiquette">6x Gagnant aux Grammys</span>
                <span class="etiquette">Records Billboard</span>
                <span class="etiquette">OVO Sound</span>
            </div>
            
            <div class="boutons-appel-action">
                <a href="#albums" class="bouton-action">Écouter maintenant</a>
                <a href="#tournee" class="bouton-action secondaire">Dates de tournée</a>
            </div>
        </div>
    </div>
</section>

<!-- SECTION ALBUMS -->
<section id="albums" class="section-albums-drake">
    <div class="conteneur-drake">
        <h2 class="titre-section">Discographie</h2>
        <div class="grille-albums">
            <!-- ALBUM 1 -->
            <div class="carte-album">
                <div class="couverture-album" style="background-image: url('https://www.nicepng.com/png/detail/24-241383_png-download-drake-vector-ovo-drake-ovo-logo.png')"></div>
                <div class="info-album">
                    <h3 class="titre-album">Certified Lover Boy</h3>
                    <div class="annee-album">2021 • 21 Morceaux</div>
                </div>
            </div>

            <!-- ALBUM 2 -->
            <div class="carte-album">
                <div class="couverture-album" style="background-image: url('https://www.levelman.com/content/images/2022/11/NWST.jpg')"></div>
                <div class="info-album">
                    <h3 class="titre-album">Scorpion</h3>
                    <div class="annee-album">2018 • 25 Morceaux</div>
                </div>
            </div>

            <!-- ALBUM 3 -->
            <div class="carte-album">
                <div class="couverture-album" style="background-image: url('https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                <div class="info-album">
                    <h3 class="titre-album">Views</h3>
                    <div class="annee-album">2016 • 20 Morceaux</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION TOURNÉE -->
<section id="tournee" class="section-tournee-drake">
    <div class="conteneur-drake">
        <h2 class="titre-section">Tournée Mondiale 2025</h2>
        <div class="dates-tournee">
            <div class="date-concert">
                <div class="info-date">
                    <h3>Paris • Accor Arena</h3>
                    <p>15 Mars 2025</p>
                </div>
                <a href="#" class="bouton-billet">Acheter des billets</a>
            </div>

            <div class="date-concert">
                <div class="info-date">
                    <h3>Londres • O2 Arena</h3>
                    <p>22 Mars 2025</p>
                </div>
                <a href="#" class="bouton-billet">Acheter des billets</a>
            </div>

            <div class="date-concert">
                <div class="info-date">
                    <h3>New York • Madison Square Garden</h3>
                    <p>5 Avril 2025</p>
                </div>
                <a href="#" class="bouton-billet">Acheter des billets</a>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();