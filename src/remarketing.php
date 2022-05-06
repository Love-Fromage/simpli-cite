<?php
include("./header2.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./images/270.286528372.ico" />
    <title>Remarketing</title>

    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/main.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="js/scriptRM.js" defer></script>
</head>

<body>
    <div class="cont-rm">
        <div class="rm-bg-img">
            <div class="rm-black">
                <img src="./images/logo-blanc.svg" alt="" />
                <span class="ligne-bleue"></span>
                <h1>Remarketing</h1>
            </div>
        </div>
        <div class="rm-bg">
            <div class="rm-cont-form">
                <h2>
                    <?php lang("Vendre son véhicule <br />
						n'aura <br />
						jamais été si <br />
						<span>simple</span> !", "Selling your vehicule <br />
                        never has been this
                        <br /> <span>easy</span> !"); ?>
                </h2>
                <p>
                    <?php lang("Chez Simpli-cité, nous donnons une seconde vie aux
                    véhicules usagés. Nous achetons tous les types de
                    véhicules et dans le but de les revendre en gros.", "At Simpli-cité, we give a second life
                    to used vehicules. We buy all types of vehicules and in the optic of reselling them in big."); ?>
                </p>
                <p>
                    <?php lang("Vous désirez vendre votre véhicule ? Remplissez le
                    formulaire ci-dessous et obtenez le meilleur prix sur le
                    marché.", "You wish to sell your vehicule ? Fill this form and obtain the best price in the market."); ?>
                </p>
                <form action="" class="leform">
                    <label for="nom"><?php lang("nom et prénom ", "first and last name"); ?>*</label>
                    <input type="text" name="nom" id="nom" />

                    <label for="email"><?php lang("Courriel", "E-mail"); ?> *</label>
                    <input type="email" name="email" id="email" />

                    <label for="phone"><?php lang("Numéro de téléphone", "phone number"); ?> *</label>
                    <input type="tel" />

                    <label for="year"><?php lang("année de la voiture", "year of the car"); ?> *</label>
                    <select name="year" id="year" onfocus="this.size=10;" onblur="this.size=1;" onchange="this.size=1; this.blur();" style="height: auto">
                        <option value="" selected disabled hidden></option>

                        <option value="2020">2020</option>

                        <option value="2019">2019</option>

                        <option value="2018">2018</option>

                        <option value="2017">2017</option>

                        <option value="2016">2016</option>

                        <option value="2015">2015</option>

                        <option value="2014">2014</option>

                        <option value="2013">2013</option>

                        <option value="2012">2012</option>

                        <option value="2011">2011</option>

                        <option value="2010">2010</option>

                        <option value="2009">2009</option>

                        <option value="2008">2008</option>

                        <option value="2007">2007</option>

                        <option value="2006">2006</option>

                        <option value="2005">2005</option>

                        <option value="2004">2004</option>

                        <option value="2003">2003</option>

                        <option value="2002">2002</option>

                        <option value="2001">2001</option>

                        <option value="2000">2000</option>
                    </select>

                    <label for="marque"><?php lang("marque", "brand"); ?> *</label>
                    <select name="marque" id="marque" onfocus="this.size=10;" onblur="this.size=1;" onchange="this.size=1; this.blur();" style="height: auto">
                        <option value="" selected disabled hidden></option>
                        <option value="Acura">Acura</option>
                        <option value="Alfa Romeo">Alfa Romeo</option>
                        <option value="Audi">Audi</option>
                        <option value="BMW">BMW</option>
                        <option value="Buick">Buick</option>
                        <option value="Cadillac">Cadillac</option>
                        <option value="Chevrolet">Chevrolet</option>
                        <option value="Chrysler">Chrysler</option>
                        <option value="Dodge">Dodge</option>
                        <option value="Fiat">Fiat</option>
                        <option value="Ford">Ford</option>
                        <option value="GMC">GMC</option>
                        <option value="Genesis">Genesis</option>
                        <option value="Hino">Hino</option>
                        <option value="Honda">Honda</option>
                        <option value="Hummer">Hummer</option>
                        <option value="Hyundai">Hyundai</option>
                        <option value="Infiniti">Infiniti</option>
                        <option value="Jaguar">Jaguar</option>
                        <option value="Jeep">Jeep</option>
                        <option value="Kia">Kia</option>
                        <option value="Land Rover">Land Rover</option>
                        <option value="Lexus">Lexus</option>
                        <option value="Lincoln">Lincoln</option>
                        <option value="Maserati">Maserati</option>
                        <option value="Mazda">Mazda</option>
                        <option value="Mercedes-Benz">Mercedes-Benz</option>
                        <option value="Mercury">Mercury</option>
                        <option value="Mini">Mini</option>
                        <option value="Mitsubishi">Mitsubishi</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Oldsmobile">Oldsmobile</option>
                        <option value="Pontiac">Pontiac</option>
                        <option value="Porsche">Porsche</option>
                        <option value="Ram">Ram</option>
                        <option value="Saab">Saab</option>
                        <option value="Saturn">Saturn</option>
                        <option value="Scion">Scion</option>
                        <option value="Smart">Smart</option>
                        <option value="Subaru">Subaru</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Tesla">Tesla</option>
                        <option value="Toyota">Toyota</option>
                        <option value="Volkswagen">Volkswagen</option>
                        <option value="Volvo">Volvo</option>
                    </select>

                    <label for="modele"><?php lang("modèle", "model"); ?> *</label>
                    <input type="text" name="modele" id="modele" />

                    <label for="km"><?php lang("kilométrage", "kilometers"); ?> *</label>
                    <input type="number" name="km" id="km" />

                    <label for="transmission">Transmission *</label>
                    <div class="cont-radio">
                        <div class="cont-radio-1">
                            <label class="container"><?php lang("Automatique", "Automatic"); ?>
                                <input type="checkbox" checked="checked" id="trans-a" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="cont-radio-2">
                            <label class="container"><?php lang("Manuelle", "Manual"); ?>
                                <input type="checkbox" id="trans-m" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>

                    <div class="cont-partie-2">
                        <label for="num-id"><?php lang("numéro d'identification", "identification number"); ?> *</label>
                        <p class="partie-2-p">
                            <?php lang("Afin de mieux vous servir, veuillez nous fournir
                            votre numéro d'identification de véhicule. Il
                            s'agit d'un numéro de série à 17 chiffres qui se
                            trouve sur le papier d'immatriculation de votre
                            véhicule. <br />
                            <br />
                            (Ce numéro ne nous donne accès à aucune de vos
                            informations personnelles. Il nous permet
                            uniquement de vérifier l'historique des
                            accidents associés à votre véhicule.)", "please give us number vehicule"); ?>
                        </p>
                        <input type="text" name="num-id" id="num-id" />
                        <label for="process"><?php lang("Où en êtes vous dans votre processus de vente ?", "Where are you at in the process of selling your vehicule ?"); ?>
                        </label>
                        <select name="process" id="process" class="select-selected" onfocus="this.size=3; this.style='height: auto;'" onblur="this.size=1;" onchange="this.size=1; this.blur();">
                            <option value="" selected disabled hidden></option>
                            <option value="1">
                                <?php lang("Prêt pour le vendre rapidement", "Ready to sell it fast"); ?>
                            </option>
                            <option value="2">
                                <?php lang("Le vendre dans quelques mois", "Sell it in a couple of months"); ?>
                            </option>
                            <option value="3"><?php lang("Simplement curieux", "Simple curiosity"); ?></option>
                        </select>
                    </div>
                    <button type="submit" name="submit" id="submit" value="ENVOYER" class="rm-sub btn-color btn-l-r">
                        <?php lang("ENVOYER", "SEND"); ?>
                    </button>
                </form>
            </div>
            <div class="rm-cont-link">
                <a href="./home.html">visitez notre site web</a>
            </div>
        </div>
    </div>
    <footer class="footer-rm">
        <div class="cont-scroll" onclick="gotoTop()">
            <span></span>
            <p id="scroll-btn">RETOUR</p>
        </div>
        <div class="rm-cont-mobile">
            <h2>Contactez-nous</h2>
            <ul>
                <li>
                    <img src="../images/location.svg" alt="location-icon" />
                    <p>
                        1410 Boul. Taschereau, <br />
                        La Prairie, QC J5R 4E8
                    </p>
                </li>
                <li>
                    <img src="../images/phone.svg" alt="phone-icon" />
                    <p><a href="tel:4509071596">(450) 907-1596</a></p>
                </li>
                <li>
                    <img src="../images/email.svg" alt="email-icon" />
                    <p>info@simplicitelocation.com</p>
                </li>
            </ul>
            <div class="hour">
                <h2>Heures d'ouverture</h2>
                <p>Lundi/ Vendredi : 9am - 5pm</p>
            </div>
            <div class="cont-footer-line">
                <span class="footer-line-rm"></span>
                <a href="./remarketing.html">REMARKETING</a>
            </div>
            <div class="cont-linkedin">
                <a href="#"><img src="../images/linkedin.svg" alt="linkedin-icon" /></a>
                <span></span>
            </div>
        </div>
        <div class="cont-flex-t">
            <div class="col-1">
                <h2>Contactez-nous</h2>
                <ul>
                    <li>
                        <img src="../images/location.svg" alt="location-icon" />
                        <p>
                            1410 Boul. Taschereau, <br />
                            La Prairie, QC J5R 4E8
                        </p>
                    </li>
                    <li>
                        <img src="../images/phone.svg" alt="phone-icon" />
                        <p><a href="tel:4509071596">(450) 907-1596</a></p>
                    </li>
                    <li>
                        <img src="../images/email.svg" alt="email-icon" />
                        <p>info@simplicitelocation.com</p>
                    </li>
                </ul>
            </div>
            <div class="col-2">
                <div class="hour">
                    <h2>Heures d'ouverture</h2>
                    <p>Lundi/ Vendredi : 9am - 5pm</p>
                </div>
                <div class="cont-footer-line">
                    <span class="footer-line-rm"></span>
                    <a href="./remarketing.html">REMARKETING</a>
                </div>
                <div class="cont-linkedin">
                    <a href="#"><img src="../images/linkedin.svg" alt="linkedin-icon" /></a>
                </div>
            </div>
        </div>
        <span class="separator"></span>

        <div class="cont-petit-lien">
            <div class="flex-t">
                <div class="row-1">
                    <div>
                        <a href="#">Mentions légales</a><span>&nbsp | &nbsp </span>
                        <a href="#">Politique de confidentialité</a>
                        <span>&nbsp | &nbsp</span>
                    </div>

                    <p>
                        @2022 - Simpli-Cité Location - Tous droits réservés
                    </p>
                </div>
                <div class="row-2">
                    <p class="bda">
                        Site réalisé par
                        <a href="https://blackduckagency.com">Black Duck Agency</a>
                    </p>
                </div>
            </div>
            <div class="flex-mobile">
                <img src="../images/simplicite-logo.svg" alt="logo-footer" onclick="gotoTop()" />
                <div>
                    <a href="#">Mentions légales</a> <span>|</span>
                    <a href="#">Politique de confidentialité</a>
                </div>

                <p>@2022 - Simpli-Cité Location - Tous droits réservés</p>
                <p class="bda">
                    Site réalisé par
                    <a href="https://blackduckagency.com">Black Duck Agency</a>
                </p>
            </div>
            <img src="../images/simplicite-logo.svg" alt="logo-footer" onclick="gotoTop()" class="tablette" />
        </div>
    </footer>
    <script>
        const gotoTop = () => {
            window.scrollTo({
                top: 0,
                left: 0,
                behavior: "smooth",
            });
        };
    </script>
</body>

</html>