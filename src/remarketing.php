<?php
include("./header2.php");
// function test_input($data)
// {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }
// $transmission = '';
$name = $message = $phone = $visitor_email = $transmission =
    $year = $marque = $modele = $km = $numId = $process = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // request method is post
    // now handle the form data

    // declare name and email variables
    // $name = $message = $phone = $visitor_email = $transmission =
    //     $year = $marque = $modele = $km = $numId = $process = '';
    $phoneError = $nameError = $formError = $emailError = "";


    if (!empty($_POST['nom'])) {
        $name = $_POST['nom'];
    }
    if (!empty($_POST['phone'])) {
        $phone = $_POST['phone'];
    }
    if (!empty($_POST['email'])) {
        $visitor_email = $_POST['email'];
    }
    if (!empty($_POST['check_list'])) {
        foreach ($_POST['check_list'] as $value) {

            $transmission = strval($value);
        }
    }
    if (!empty($_POST['year'])) {
        $year = $_POST['year'];
    }
    if (!empty($_POST['marque'])) {
        $marque = $_POST['marque'];
    }
    if (!empty($_POST['modele'])) {
        $modele = $_POST['modele'];
    }
    if (!empty($_POST['km'])) {
        $km = $_POST['km'];
    }
    if (!empty($_POST['num-id'])) {
        $numId = $_POST['num-id'];
    }
    if (!empty($_POST['process'])) {
        $process = $_POST['process'];
    }
    //$namef = $_POST['name'];
    //$visitor_email = $_POST['email'];
    //$message = $_POST['message'];

    $email_from = 'mathieu@blackduckagency.com';

    $email_subject = "a subject";

    $email_body = "Nom : $name.\n" .
        "Courriel : $visitor_email.\n" .
        "Téléphone: $phone.\n" .
        "Année de la voiture: $year.\n" .
        "Marque de la voiture: $marque.\n" .
        "Modele de la voiture: $modele.\n" .
        "Kilométrage de la voiture: $km.\n" .
        "Kilométrage de la voiture: $transmission.\n" .
        "Kilométrage de la voiture: $numId.\n" .
        "Kilométrage de la voiture: $process.\n";

    $to = "mathecool22@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply-To $visitor_email \r\n";

    if (empty($visitor_email) || empty($name) || empty($phone)) {
        $formError = "Veuillez remplir les champs requis.";
    } else {
        // error_log("envoi?");
        mail($to, $email_subject, $email_body, $headers);
        $mailEnvoyer = "<div class='mail-sent' style='margin: auto; margin-top: 12vh'>
<p style='color:white; margin: auto; font-size: 1.5rem; text-transform: uppercase;'>Merci de nous avoir contactés.</p>
</div>";
    }
} else {
    $formError = "what the fuck";
}
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
            <?php lang("<a class=\"lnk<?= ($lang == 'en')? ' active' : ''; ?> en\" href=\"?lang=en\"><div class='lang-switch2'>EN</div></a>", "<a class=\"lnk<?= ($lang == 'fr')? ' active' : ''; ?> en\" href=\"?lang=fr\"><div class='lang-switch2'>FR</div></a>"); ?>
            <div class="rm-black">
                <img src="./images/logo-blanc.svg" alt="" />
                <span class="ligne-bleue"></span>
                <h1>Remarketing</h1>


            </div>
        </div>
        <div class="rm-bg">
            <div class="rm-cont-form">
                <h2>
                    <?php lang("Vendre son véhicule	n'aura 
						jamais été si 
						<span>simple</span> !", "Selling your vehicule 
                        never has been this
                        <span>easy</span> !"); ?>
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
                <form id="formRM" method="post" action="./mailer2.php?form=remarketing<?php lang('&lang=fr', '&lang=en') ?>" class="leform" enctype="multipart/form-data">
                    <label class="label-n" for="nom"><?php lang("nom et prénom ", "first and last name"); ?>*</label>
                    <input type="text" name="nom" id="nom" />

                    <label class="label-n" for="email"><?php lang("Courriel", "E-mail"); ?> *</label>
                    <input type="email" name="email" id="email" />

                    <label class="label-n" for="phone"><?php lang("Numéro de téléphone", "phone number"); ?> *</label>
                    <input type="tel" name="phone" id="phone" />

                    <label class="label-n" for="year"><?php lang("année de la voiture", "year of the car"); ?> *</label>
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

                    <label class="label-n" for="marque"><?php lang("marque", "brand"); ?> *</label>
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

                    <label class="label-n" for="modele"><?php lang("modèle", "model"); ?> *</label>
                    <input type="text" name="modele" id="modele" />

                    <label class="label-n" for="km"><?php lang("kilométrage", "kilometers"); ?> *</label>
                    <input type="number" name="km" id="km" />

                    <label class="label-trans" for="transmission">Transmission *</label>
                    <div class="cont-radio">
                        <div class="cont-radio-1">
                            <label class="container"><?php lang("Automatique", "Automatic"); ?>
                                <input type="checkbox" name="check_list[]" checked="checked" value="<?php lang('Automatique', 'Automatic'); ?>" id="trans-a" />
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="cont-radio-2">
                            <label class="container"><?php lang("Manuelle", "Manual"); ?>
                                <input type="checkbox" name="check_list[]" value="<?php lang('Manuelle', 'Manual'); ?>" id="trans-m" />
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
                            accidents associés à votre véhicule.)", "In order to serve you better, please provide us with your vehicle identification number. It's a 17-digit serial number that is located on the registration paper of your vehicle. <br /> <br />(This number does not give us access to any of your personal information. It allows us only to check the history of accidents associated with your vehicle.)"); ?>
                        </p>
                        <input type="text" name="num-id" id="num-id" />
                        <label class="label-last" for="process"><?php lang("Où en êtes vous dans votre processus de vente ?", "Where are you at in the process of selling your vehicule ?"); ?>
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
                    <button type="submit" name="submit" id="submit3" value="ENVOYER" class="rm-sub btn-color btn-l-r">
                        <?php lang("ENVOYER", "SEND"); ?>
                    </button>
                </form>
            </div>
            <div class="rm-cont-link">
                <a href="./home.php<?php lang("?lang=fr", "?lang=en"); ?>">visitez notre site web</a>
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
                    <img src="./images/location.svg" alt="location-icon" />
                    <p>
                        1410 Boul. Taschereau, <br />
                        La Prairie, QC J5R 4E8
                    </p>
                </li>
                <li>
                    <img src="./images/phone.svg" alt="phone-icon" />
                    <p><a href="tel:4509071596">(450) 907-1596</a></p>
                </li>
                <li>
                    <img src="./images/email.svg" alt="email-icon" />
                    <p>info@simplicitelocation.com</p>
                </li>
            </ul>
            <div class="hour">
                <h2>Heures d'ouverture</h2>
                <p>Lundi/ Vendredi : 9am - 5pm</p>
            </div>
            <div class="cont-footer-line">
                <span class="footer-line-rm"></span>
                <a href="./remarketing.php<?php lang("?lang=fr", "?lang=en"); ?>">REMARKETING</a>
            </div>
            <div class="cont-linkedin">
                <a href="#"><img src="./images/linkedin.svg" alt="linkedin-icon" /></a>
                <span></span>
            </div>
        </div>
        <div class="cont-flex-t">
            <div class="col-1">
                <h2>Contactez-nous</h2>
                <ul>
                    <li>
                        <img src="./images/location.svg" alt="location-icon" />
                        <p>
                            1410 Boul. Taschereau, <br />
                            La Prairie, QC J5R 4E8
                        </p>
                    </li>
                    <li>
                        <img src="./images/phone.svg" alt="phone-icon" />
                        <p><a href="tel:4509071596">(450) 907-1596</a></p>
                    </li>
                    <li>
                        <img src="./images/email.svg" alt="email-icon" />
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
                    <a href="./remarketing.php<?php lang("?lang=fr", "?lang=en"); ?>">REMARKETING</a>
                </div>
                <div class="cont-linkedin">
                    <a href="#"><img src="./images/linkedin.svg" alt="linkedin-icon" /></a>
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
                <img src="./images/simplicite-logo.svg" alt="logo-footer" onclick="gotoTop()" />
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
            <img src="./images/simplicite-logo.svg" alt="logo-footer" onclick="gotoTop()" class="tablette" />
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
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>