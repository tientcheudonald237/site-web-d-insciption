<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/form3.css">
    <link rel="stylesheet" href="../fontawesome-free-6.1.1-web/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="principal">
        <div class="sidebar">
            <div class="logo">
                <a href="info.html">
                    <img src="../img/logo.png" alt="logo">
                </a>
                <span class="link">UY I - NGOA</span>
            </div>
            <hr>
            <div class="logo">
                <i class="fas fa-calendar-days"></i>
                <span id="date"></span>
            </div>
            <hr>
            <ul class="nav_list">
                <li>
                    <a href="../index.html">
                        <i class="fas fa-house-user"></i>
                        <span class="link_name">Acceuil</span>
                    </a>
                    <span class="tooltip">Acceuil</span>
                </li>
                <li>
                    <a href="../inscription.php">
                        <i class="fas fa-address-card"></i>
                        <span class="link_name">Inscriptions</span>
                    </a>
                    <span class="tooltip">Inscriptions</span>
                </li>
                <li>
                    <a href="../dossier.html">
                        <i class="fas fa-address-card"></i>
                        <span class="link_name">Mon dossier</span>
                    </a>
                    <span class="tooltip">Mon dossier</span>
                </li>
            </ul>
            <br>
            <span class="as">ASSISTANCE</span>
            <ul class="nav_list">
                <li>
                    <a href="../faq.html">
                        <i class="fas fa-circle-question"></i>
                        <span class="link_name">FAQ</span>
                    </a>
                    <span class="tooltip">FAQ</span>
                </li>
                <li>
                    <a href="../contact.html">
                        <i class="fas fa-envelope"></i>
                        <span class="link_name">Contactez-nous</span>
                    </a>
                    <span class="tooltip">Contactez</span>
                </li>
            </ul>
        </div>
        <div class="D">
            <i class="fas fa-list-ul" id="btn"></i>
            <i class="fas fa-arrow-left" id="btn2"></i>
            <span>Pre-inscription ?? NGOA-EKELE</span>
            <hr>
            <div>
                <a href="../inscription.html"><i class="fas fa-address-card" id="ouvert"></i></a>
                <a href="./form2.html"><i class="fas fa-info" id="info"></i></a>
                <a href="./form2_2.html"><i class="fas fa-user" id="ouvert"></i></a>
                <a href="./form3_faclettre.html"><i class="fas fa-landmark" id="ouvert"></i></a>
                <a href=""><i class="fas fa-scroll"></i></a>
                <a href=""><i class="fas fa-volleyball"></i></a>
            </div>
        </div>
        <div class="corps">
            <form action="./form4.php" method="post">
                <label for="">Votre facult??<span>*</span></label><br>
                <p>
                    <select name="faculte" id="">
                        <option value="L1">FACULTE DES LETTRES</option>
                        
                    </select>
                </p>
                <label for="">Niveau souhait??<span>*</span></label>
                <p>
                    <select name="niveau" id="">
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>
                        <option value="L4">M1</option>
                    </select>
                </p>
                <label for="">Premier choix de fili??re<span>*</span></label>
                <p>
                    <select name="ch1" id="" required>
                    <option value=""></option>
                        <option value="Geographie">Geographie</option>
                        <option value="Histoire">Histoire</option>
                        <option value="Lettre modernes fran??aises">Lettre modernes fran??aises</option>
                        <option value="Linguistique g??n??rale et appliqu??e">Linguistique g??n??rale et appliqu??e</option>
                        <option value="Litterature et civilisation africaine">Litterature et civilisation africaine</option>
                        <option value="Philosophie">Philosophie</option>
                        <option value="psychologie">psychologie</option>
                        <option value="sociologie">sociologie</option>
                        <option value="science du language">science du language</option>
                        <option value="Tourisme et hotellerie">Tourisme et hotellerie</option>
                        <option value="Master Pro- Cartographie, T??l??detection, Syst??me d'information g??ographique, Gestion durable des territoires">Master Pro- Cartographie, T??l??detection, Syst??me d'information g??ographique, Gestion durable des territoires</option>
                        <option value="Master Pro- Urbanisme, Am??nagement et developpement urbain(URAMDEUR)">Master Pro- Urbanisme, Am??nagement et developpement urbain(URAMDEUR)</option>
                        <option value="Master Pro- Developpement et Am??nagement Touristique des territoires(DATT)">Master Pro- Developpement et Am??nagement Touristique des territoires(DATT)</option>
                        <option value="Master Pro- Gestion des activit??s touristiques et hotelires(GATH)">Master Pro- Gestion des activit??s touristiques et hotelires(GATH)</option>
                        <option value="Master Pro- Master Proffesionnel Genre et Developpement">Master Pro- Master Proffesionnel Genre et Developpement</option>
                        <option value="Master Pro- Master en Production Cinematographique et audio-visuelle">Master Pro- Master en Production Cinematographique et audio-visuelle</option>
                        <option value="Master Pro- Traduction">Master Pro- Traduction</option>
                        <option value="Master Pro- Interpretation">Master Pro- Interpretation</option>
                        <option value="Master Pro- S??miatique">Master Pro- S??miatique</option>
                        <option value="Master Pro- psychologie du travail et des organisations">Master Pro- psychologie du travail et des organisations</option>
                        <option value="Langues et cultures camerounaises">Langues et cultures camerounaises</option>
                        <option value="Allemand">Allemand</option>
                        <option value="Anthropologie">Anthropologie</option>
                        <option value="Archeologie et gestion du patrimoine">Archeologie et gestion du patrimoine</option>
                        <option value="Arts du spectacle cinematographe">Arts du spectacle cinematographe</option>
                        <option value="Arts plastiques et histoire de l'art">Arts plastiques et histoire de l'art</option>
                        <option value="Bilingue Anglophon">Bilingue Anglophone</option>
                        <option value="Bilingue Francophone">Bilingue Francophone</option>
                        <option value="English">English</option>
                        <option value="Espagnol">Espagnol</option>
                    </select>
                </p>
                <label for="">Second choix de fili??re<span>*</span></label>
                <p>
                    <select name="ch2" id="" required>
                    <option value=""></option>
                        <option value="Geographie">Geographie</option>
                        <option value="Histoire">Histoire</option>
                        <option value="Lettre modernes fran??aises">Lettre modernes fran??aises</option>
                        <option value="Linguistique g??n??rale et appliqu??e">Linguistique g??n??rale et appliqu??e</option>
                        <option value="Litterature et civilisation africaine">Litterature et civilisation africaine</option>
                        <option value="Philosophie">Philosophie</option>
                        <option value="psychologie">psychologie</option>
                        <option value="sociologie">sociologie</option>
                        <option value="science du language">science du language</option>
                        <option value="Tourisme et hotellerie">Tourisme et hotellerie</option>
                        <option value="Master Pro- Cartographie, T??l??detection, Syst??me d'information g??ographique, Gestion durable des territoires">Master Pro- Cartographie, T??l??detection, Syst??me d'information g??ographique, Gestion durable des territoires</option>
                        <option value="Master Pro- Urbanisme, Am??nagement et developpement urbain(URAMDEUR)">Master Pro- Urbanisme, Am??nagement et developpement urbain(URAMDEUR)</option>
                        <option value="Master Pro- Developpement et Am??nagement Touristique des territoires(DATT)">Master Pro- Developpement et Am??nagement Touristique des territoires(DATT)</option>
                        <option value="Master Pro- Gestion des activit??s touristiques et hotelires(GATH)">Master Pro- Gestion des activit??s touristiques et hotelires(GATH)</option>
                        <option value="Master Pro- Master Proffesionnel Genre et Developpement">Master Pro- Master Proffesionnel Genre et Developpement</option>
                        <option value="Master Pro- Master en Production Cinematographique et audio-visuelle">Master Pro- Master en Production Cinematographique et audio-visuelle</option>
                        <option value="Master Pro- Traduction">Master Pro- Traduction</option>
                        <option value="Master Pro- Interpretation">Master Pro- Interpretation</option>
                        <option value="Master Pro- S??miatique">Master Pro- S??miatique</option>
                        <option value="Master Pro- psychologie du travail et des organisations">Master Pro- psychologie du travail et des organisations</option>
                        <option value="Langues et cultures camerounaises">Langues et cultures camerounaises</option>
                        <option value="Allemand">Allemand</option>
                        <option value="Anthropologie">Anthropologie</option>
                        <option value="Archeologie et gestion du patrimoine">Archeologie et gestion du patrimoine</option>
                        <option value="Arts du spectacle cinematographe">Arts du spectacle cinematographe</option>
                        <option value="Arts plastiques et histoire de l'art">Arts plastiques et histoire de l'art</option>
                        <option value="Bilingue Anglophon">Bilingue Anglophone</option>
                        <option value="Bilingue Francophone">Bilingue Francophone</option>
                        <option value="English">English</option>
                        <option value="Espagnol">Espagnol</option>
                    </select>
                </p>
                <label for="">Troisi??me choix de fili??re<span>*</span></label>
                <p>
                    <select name="ch3" id="" required>
                    <option value=""></option>
                        <option value="Geographie">Geographie</option>
                        <option value="Histoire">Histoire</option>
                        <option value="Lettre modernes fran??aises">Lettre modernes fran??aises</option>
                        <option value="Linguistique g??n??rale et appliqu??e">Linguistique g??n??rale et appliqu??e</option>
                        <option value="Litterature et civilisation africaine">Litterature et civilisation africaine</option>
                        <option value="Philosophie">Philosophie</option>
                        <option value="psychologie">psychologie</option>
                        <option value="sociologie">sociologie</option>
                        <option value="science du language">science du language</option>
                        <option value="Tourisme et hotellerie">Tourisme et hotellerie</option>
                        <option value="Master Pro- Cartographie, T??l??detection, Syst??me d'information g??ographique, Gestion durable des territoires">Master Pro- Cartographie, T??l??detection, Syst??me d'information g??ographique, Gestion durable des territoires</option>
                        <option value="Master Pro- Urbanisme, Am??nagement et developpement urbain(URAMDEUR)">Master Pro- Urbanisme, Am??nagement et developpement urbain(URAMDEUR)</option>
                        <option value="Master Pro- Developpement et Am??nagement Touristique des territoires(DATT)">Master Pro- Developpement et Am??nagement Touristique des territoires(DATT)</option>
                        <option value="Master Pro- Gestion des activit??s touristiques et hotelires(GATH)">Master Pro- Gestion des activit??s touristiques et hotelires(GATH)</option>
                        <option value="Master Pro- Master Proffesionnel Genre et Developpement">Master Pro- Master Proffesionnel Genre et Developpement</option>
                        <option value="Master Pro- Master en Production Cinematographique et audio-visuelle">Master Pro- Master en Production Cinematographique et audio-visuelle</option>
                        <option value="Master Pro- Traduction">Master Pro- Traduction</option>
                        <option value="Master Pro- Interpretation">Master Pro- Interpretation</option>
                        <option value="Master Pro- S??miatique">Master Pro- S??miatique</option>
                        <option value="Master Pro- psychologie du travail et des organisations">Master Pro- psychologie du travail et des organisations</option>
                        <option value="Langues et cultures camerounaises">Langues et cultures camerounaises</option>
                        <option value="Allemand">Allemand</option>
                        <option value="Anthropologie">Anthropologie</option>
                        <option value="Archeologie et gestion du patrimoine">Archeologie et gestion du patrimoine</option>
                        <option value="Arts du spectacle cinematographe">Arts du spectacle cinematographe</option>
                        <option value="Arts plastiques et histoire de l'art">Arts plastiques et histoire de l'art</option>
                        <option value="Bilingue Anglophon">Bilingue Anglophone</option>
                        <option value="Bilingue Francophone">Bilingue Francophone</option>
                        <option value="English">English</option>
                        <option value="Espagnol">Espagnol</option>
                    </select>
                </p>
                <label for="">Votre Statut<span>*</span></label>
                <p>
                    <select name="statut" id="">
                        <option value="Etudiant Camerounais">Etudiant Camerounais</option>
                        <option value="Etudiant etrang??">Etudiant etrang??</option>
                    </select>
                </p>
                <br>
                <button type="submit">Suivant</button><a href="../inscription.php">Precedent</a>
            </form>
        </div> 
        <footer>Copyright ?? 2022 ICT4D L1. All rights reserved. <br>Universit?? de Yaound?? I</footer>
    </div>
    <script src="../js/script.js"></script>           
</body>
</html>