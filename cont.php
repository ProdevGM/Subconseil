<?php
/* error_reporting(E_ALL);
ini_set("display_errors", 1);  */
include 'inc/init.inc.php';
include 'inc/function.inc.php';

// Déclaration des variables
$erreur = false; // Passe à true si une erreur dans la validation des champs
$msg_envoyé = ''; // Message affiché quand le mail est envoyé

// Affichage de l'erreur sous chaque champs si non validé
$erreur_societe = '';
$erreur_activite = '';
$erreur_qualite_statut = '';
$erreur_nom = '';
$erreur_prenom = '';
$erreur_email = '';
$erreur_tel = '';
$erreur_message = '';
$erreur_cv = '';

// Variable différente en fonction du formulaire ('su' Start_Up ou 'fl' Freelance)
$societe = '';
$activite = '';

$qualite_statut = '';
$nom = '';
$prenom = '';
$email = '';
$tel = '';
$objet = '';
$message = '';
$destinataire = 'contact@subconseil.com';

// Attribution d'une valeur à la variable $contact en fonction de son état, pour simplification du code suivant
if(isset($_GET['contact'])){
    if($_GET['contact'] == 'su')
        $contact = 'su';
    elseif($_GET['contact'] == 'fl')
        $contact = 'fl';
    else
        $contact = 'erreur';
}else
    $contact = 'erreur';


if(isset($_POST['envoyer']) && $_POST['envoyer'] == 'ENVOYER'){

    if(
        (isset($_POST['societe']) || isset($_POST['activite'])) &&
        isset($_POST['qualite_statut']) &&
        isset($_POST['nom']) &&
        isset($_POST['prenom']) &&
        isset($_POST['email']) &&
        isset($_POST['tel']) &&
        isset($_POST['message'])){

            if(isset($_POST['societe'])){

                $societe = ucfirst(trim($_POST['societe']));

                // Test des conditions de validité
                $verif_societe = preg_match('#^([A-Z][\p{L}-]).{0,40}+$#', $societe); // Max 40 caractères, limitation caractère spéciaux et une majuscule
                // Vérification validité société
                if(!$verif_societe){
                    $erreur_societe = '<div class="erreur">Maximum de 40 caractères et caractère spéciaux limités</div>';	
                    $erreur = true;
                }elseif(empty($societe)){
                    $erreur_societe = '<div class="erreur">Société obligatoire</div>';	
                    $erreur = true;
                }                    

            }elseif(isset($_POST['activite'])){

                $activite = ucfirst(trim($_POST['activite']));
                
                // Test des conditions de validité
                $verif_activite = preg_match('#^([A-Z][\p{L}-]).{0,40}+$#', $activite); // Max 40 caractères, limitation caractère spéciaux et une majuscule
                // Vérification validité société
                if(!$verif_activite){
                    $erreur_activite = '<div class="erreur">Maximum de 40 caractères et caractère spéciaux limités</div>';	
                    $erreur = true;
                }elseif(empty($activite)){
                    $erreur_activite = '<div class="erreur">Activité obligatoire</div>';	
                    $erreur = true;
                } 
            }

            $qualite_statut = ucfirst(trim($_POST['qualite_statut']));
            $nom = strtoupper(trim($_POST['nom']));
            $prenom = ucfirst(trim($_POST['prenom']));
            $email = trim($_POST['email']);
            $tel = trim($_POST['tel']);
            $message = ucfirst(trim($_POST['message']));

            // Test des conditions de validité
            $verif_qualite_statut = preg_match('#^([A-Z][\p{L}-]).{0,30}+$#', $qualite_statut); // Max 30 caractères, limitation caractère spéciaux et une majuscule
            $verif_nom = preg_match('#^([A-Z][\p{L}-]).{0,20}+$#', $nom); // Max 20 caractères, limitation caractère spéciaux et une majuscule
            $verif_prenom = preg_match('#^([A-Z][\p{L}-]).{0,20}+$#', $prenom); // Max 20 caractères, limitation caractère spéciaux et une majuscule
            $verif_tel = preg_match('#^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$#', $tel); // Contrôle du tel
            $verif_message = preg_match('#^([A-Z][\p{L}-]).{0,1250}+$#', $message); // Max 1250 caractères, limitation caractère spéciaux et une majuscule


            // Vérification validité nom
            if(!$verif_qualite_statut){
                $erreur_qualite_statut = '<div class="erreur">Maximum de 30 caractères et caractère spéciaux limités</div>';	
                $erreur = true;
            }elseif(empty($qualite_statut)){
                $erreur_qualite_statut = '<div class="erreur">Champ obligatoire</div>';	
                $erreur = true;
            }            
            // Vérification validité nom
            if(!$verif_nom){
                $erreur_nom = '<div class="erreur">Maximum de 20 caractères et caractère spéciaux limités</div>';	
                $erreur = true;
            }elseif(empty($nom)){
                $erreur_nom = '<div class="erreur">Nom obligatoire</div>';	
                $erreur = true;
            }
            // Vérification validité prenom
            if(!$verif_prenom){            
                $erreur_prenom = '<div class="erreur">Maximum de 20 caractères et caractère spéciaux limités</div>';	
                $erreur = true;
            }elseif(empty($prenom)){
                $erreur_prenom = '<div class="erreur">Prénom obligatoire</div>';	
                $erreur = true;
            }
            // Vérification validité email
            if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)) {
                $erreur_email = '<div class="erreur">Format invalide</div>';
                $erreur = true;
            }
            // Vérification validité tel
            if(!$verif_tel && !empty($tel)){            
                $erreur_tel = '<div class="erreur">Format invalide</div>';	
                $erreur = true;
            }  
            // Vérification validité message
            if(!$verif_message){            
                $erreur_message = '<div class="erreur">Maximum de 1250 caractères et caractère spéciaux limités</div>';	
                $erreur = true;
            }elseif(empty($message)){
                $erreur_message = '<div class="erreur">Message obligatoire</div>';	
                $erreur = true;
            }

            
            // Si pas d'erreur
            if(!$erreur){

                if(isset($_POST['societe'])){
                    $sujet = "MISSION pour : ".$societe." - ".$prenom." ".$nom. " a effectué une demande";
                    $contenu = $prenom." ".$nom." de la société ".$qualite_statut." vous a transmis une demande.

Sa qualité : ".$qualite_statut."
Pour le contacter : ".$email." / ".$tel."

Sa demande : ".$message;
                }elseif(isset($_POST['activite'])){
                    $sujet = "RECRUTEMENT : ".$prenom." ".$nom." souhaite devenir un(e) Suber";
                    $contenu = $prenom." ".$nom." souhaite rejoindre votre réseau.
                    
Activité : ".$activite."
Son statut : ".$qualite_statut."
Pour le contacter : ".$email." / ".$tel."

Type de mission recherchées : ".$message;
                }

                if(isset($_FILES['cv']['tmp_name']) && file_exists($_FILES['cv']['tmp_name'])){

                    $fichier = $_FILES['cv']["tmp_name"];
                    // On crait un boundary unique
                    $boundary = md5(uniqid(rand(), true));
                    // On met les entêtes
                    $entetes = 'Content-Type: multipart/mixed;'."\r\n".' boundary="'.$boundary.'"';
                    $body = 'This is a multi-part message in MIME format.'."\r\n";
                    $body .= '--'.$boundary."\r\n";
                    // ici, c'est la première partie, notre texte HTML (ou pas !)
                    // Là, on met l'entête
                    $body .= 'Content-Type: text/plain; charset="UTF-8"'."\r\n";
                    // On peut aussi mettres les autres (voir à la fin)
                    $body .= "\r\n";
                    // On remet un deuxième retour à la ligne pour dire que les entêtes sont finie, on peut afficher notre texte !
                    $body .= $contenu;
                    // Le texte est finie, on va faire un saut à la ligne
                    $body .= "\r\n";
                    // Et on commence notre deuxième partie qui va contenir le PDF
                    $body .= '--'.$boundary."\r\n";
                    // On lui dit (dans le Content-type) que c'est un fichier PDF
                    $body .= 'Content-Type: application/pdf; name="'.$fichier.'"'."\r\n";
                    $body .= 'Content-Transfer-Encoding: base64'."\r\n";
                    $body .= 'Content-Disposition: attachment; filename="'.$_FILES['cv']['name'].'"'."\r\n";
                    // Les entêtes sont finies, on met un deuxième retour à la ligne
                    $body .= "\r\n";
                    $source = file_get_contents($fichier);
                    $source = base64_encode ($source);
                    $source = chunk_split($source);
                    $body .= $source;
                    // On ferme la dernière partie :
                    $body .= "\r\n".'--'.$boundary.'--';

                    // On envoi le mail :
                    if(mail($destinataire, $sujet, $body, $entetes)){
                        $msg_envoyé = '<div class="validation">Votre message a bien été envoyé</div>';
    
                        // Réinitialisation des variable
                        $societe = '';
                        $activite = '';
                        $qualite_statut = '';
                        $nom = '';
                        $prenom = '';
                        $email = '';
                        $tel = '';
                        $objet = '';
                        $message = '';
                    }else{
                        $msg_envoyé = '<div class="validation">Erreur lors de l\'envoi du message</div>';
                        $msg_envoyé .= '<div class="validation">Veuillez réessayer plus tard</div>';
                    }
                }else{

                    if(mail($destinataire, $sujet, $contenu)){
                        $msg_envoyé = '<div class="validation">Votre message a bien été envoyé</div>';
    
                        // Réinitialisation des variable
                        $societe = '';
                        $activite = '';
                        $qualite_statut = '';
                        $nom = '';
                        $prenom = '';
                        $email = '';
                        $tel = '';
                        $objet = '';
                        $message = '';
                    }else{
                        $msg_envoyé = '<div class="validation">Erreur lors de l\'envoi du message</div>';
                        $msg_envoyé .= '<div class="validation">Veuillez réessayer plus tard</div>';
                    }

                } 


            }
    }
}

include 'inc/header.inc.php';
?>

<style>
  #contact{background-color: white;}
</style>

<main class="contact">

<?php
    if($contact == 'su' || $contact == 'fl'){
?>
        <section class="section1">
        
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-11 col-md-9 col-lg-7 col-xxl-6">
                        <?= $msg_envoyé ?>
                        <div class="entête">
                            <p class="part1">UNE QUESTION ?</p>
                            <p class="part1"><?php echo ($contact == 'su') ? strtoupper('vous souhaitez gagnez du temps ?') : strtoupper('vous recherchez des missions ?')  ?></p>
                            <p class="part2">CONTACTEZ-NOUS !</p>
                            <p class="part3">Nous aurons plaisir à vous répondre dans les plus bref delais !</p>
                        </div>
                        <form class="row justify-content-between align-items-center" action="#" method="POST" enctype="multipart/form-data">
                            <?php echo ($_GET['contact'] == 'su') ? '<input class="col-12" type="text" name="societe" value="'.$societe.'" placeholder="Société" maxlength="40" required>' : '' ?>
                            <?= $erreur_societe ?>
                            <input class="col-12 col-md-5 col-lg-3 nom" type="text" name="nom" value="<?= $nom ?>" placeholder="Nom" maxlength="20" required>
                            <?= $erreur_nom ?>
                            <input class="col-12 col-md-5 col-lg-3 prenom" type="text" name="prenom" value="<?= $prenom ?>" placeholder="Prénom" maxlength="20" required>
                            <?= $erreur_prenom ?>
                            <?php echo ($_GET['contact'] == 'fl') ?
                            '<button class="col-3" id="cv" type="button">JOINDRE MON CV</button>
                            <input id="input_cv" type="file" name="cv">'
                            .$erreur_cv.'
                            <input class="col-12" type="text" name="activite" value="'.$activite.'" placeholder="Activité"  maxlength="40" required>'
                            .$erreur_activite
                            : '<div class="vide col-lg-3"></div>' ?>
                            <input class="col-12" type="text" name="qualite_statut" value="<?= $qualite_statut ?>" placeholder="<?php echo ($_GET['contact'] == 'su') ? 'Qualité' : 'Statut' ?>"  maxlength="30" required>
                            <?= $erreur_qualite_statut ?>
                            <input class="col-12" type="mail" name="email" value="<?= $email ?>" placeholder="Adresse mail" required>
                            <?= $erreur_email ?>
                            <input class="col-12" type="tel" name="tel" pattern="[0-9]{10}" value="<?= $tel ?>" placeholder="Téléphone">
                            <?= $erreur_tel ?>
                            <textarea class="col-12" name="message" placeholder="<?php echo ($_GET['contact'] == 'su') ? 'Exprimez vos besoins...' : 'Decrivez les missions qui vous intéressent...' ?>"  maxlength="1250" required><?= $message ?></textarea>
                            <?= $erreur_message ?>
                            <div class="envoyer col-4 row align-content-end">
                                <input type="submit" name="envoyer" value="ENVOYER">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
<?php
    }else{
?>

        <section class="section2">
        
            <div class="container">
                <div class="contenant row justify-content-center justify-content-md-around">
                    <div class="block block1 col-11 col-lg-5 col-xxl-4 row align-content-between justify-content-center">
                        <div class="image1 col-3">
                            <img src="<?= URL ?>images/site/loupe.png" alt="loupe à la recherche d'un expert">    
                        </div>
                        <div class="ss-block col-md-11 col-lg-12">
                            <p class="part1 bleu">VOUS ÊTES UNE SOCIÉTÉ ET VOUS AVEZ</p>
                            <p class="part2 jaune">BESOIN D'UN EXPERT ?</p>
                            <img class="col-4 image2" src="<?= URL ?>images/site/loupe.png" alt="loupe à la recherche d'un expert">
                            <p class="part3">DÉCRIVEZ NOUS VOS BESOINS ET NOUS VOUS RECONTACTERONS AU PLUS VITE POUR TROUVER ENSEMBLE LA SOLUTION QUI VOUS CONVIENT</p>
                        </div>
                        <a href="<?= URL ?>contact/entreprise" class="">Faire une demande</a>
                    </div>

                    
                    <div class="block col-11 col-lg-5 col-xxl-4 row align-content-between justify-content-center">
                        <div class="image1 col-3">
                            <img src="<?= URL ?>images/site/main.png" alt="appel de la main">
                        </div>
                        <div class="ss-block col-md-11 col-lg-12">
                            <p class="part1 bleu">VOUS ÊTES UN FREELANCE ET VOUS SOUHAITEZ</p>
                            <p class="part2 jaune">REJOINDRE NOTRE ÉQUIPE ?</p>
                            <img class="col-4 image2" src="<?= URL ?>images/site/main.png" alt=appel de la main"">
                            <p class="part3">FAITES NOUS PART DE VOS COMPÉTENCES AFIN QUE NOUS TROUVIONS ENSEMBLE LA MISSION QUI VOUS CONVIENT</p>
                        </div>
                        <a href="<?= URL ?>contact/freelance" class="">Déposer votre cv</a>
                    </div>
                </div>
            </div>

            <div class="vide"></div>
        </section>
<?php
    }
?>
</main>

<?php
include 'inc/footer.inc.php'
?>