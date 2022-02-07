<?php
include 'inc/init.inc.php';
include 'inc/function.inc.php';


include 'inc/header.inc.php';
?>

<style>
  #fonctionnement{background-color: white;}
</style>

<main class="fonctionnement">
    <section class="section1">

        <div class="container">
            <div class="row justify-content-sm-between">

                <a href="#deleguer" class="block col-11 col-md-3">
                    <img src="<?= URL ?>images/site/avion.png" alt="Avion en papier symbolisant une mission">
                    <p class="part1 jaune">BESOIN DE DÉLÉGUER</p>
                    <p class="part2 bleu">VOS TÂCHES ADMINISTRATIVES ?</p>
                </a>

                <a href="#gestion" class="block col-11 col-md-3">
                    <img src="<?= URL ?>images/site/immeuble.png" alt="immeuble représentant des locaux">
                    <p class="part1 jaune">LA GESTION DE VOS LOCAUX</p>
                    <p class="part2 bleu">VOUS PREND DU TEMPS ?</p>
                </a>

                <a href="#federer" class="block col-11 col-md-3">
                    <img src="<?= URL ?>images/site/muscle.png" alt="bras contracté">
                    <p class="part1 jaune">ENVIE DE FÉDÉRER</p>
                    <p class="part2 bleu">VOS ÉQUIPES ?</p>
                </a>
            </div>
        </div>
    </section>

    <section class="section2">

        <div class="container">
            <div class="col-11 col-lg-7 col-xxl-6">
                <p>FAITES APPEL À NOS EXPERTS,</p>
                <span>> Les subers</span>
                <p>ET CONSACREZ-VOUS SEREINEMENT À VOTRE COEUR DE MÉTIER.</p>
            </div>
        </div>
    </section>

    <section class="section3">
        <div class="container">
            <div class="row align-items-start justify-content-center">
                <div class="contenu col-11 col-lg-8 col-xl-6">

                    <div class="block">
                        <div class="ancre" id="deleguer"></div>
                        <p class="titre">BESOIN DE DÉLÉGUER :</p>
                        <ul>
                            <li class="liste-img">Demande de mission auprès de SuB Conseil.</li>
                            <li class="liste-img">Prise de contact, analyse de la demande et des besoins (un audit peut être réalisé à votre demande si nécessaire et des outils mise en place).</li>
                            <li class="liste-img">Recherche du meilleur profil "suber" au sein de notre réseau.</li>
                            <li class="liste-img">Mise en place de la mission (cette dernière sera minimum de 4 heures par mois).</li>
                            <li class="liste-img">Envoi du devis et validation par vos soins.</li>
                            <li class="liste-img">Mise en place du premier rdv avec le suber.</li>
                            <li class="liste-img">Démarrage de la mission.</li>
                            <li class="liste-img">Premier bilan suite au démarrage de la mission.</li>
                            <li class="liste-img">Facturation mensuelle des heures réalisées.</li>
                            <li class="liste-img">Bilan trimestriel pour les missions de longue durée.</li>
                        </ul>
                    </div>


                    <div class="block">
                        <div class="ancre" id="gestion"></div>
                        <img class="ombre" src="<?= URL ?>images/site/ombreclaire.png" alt="flèche en forme de cercle">
                        <p class="titre">GESTION DES LOCAUX :</p>
                        <ul>
                            <li class="liste-img">Demande de mission auprès de SuB Conseil.</li>
                            <li class="liste-img">Prise de contact, analyse de la demande et des besoins.</li>
                            <li class="liste-img">Pour l’office management : cf Besoin de déléguer.</li>
                            <li class="liste-img">Pour la gestion matérielle des locaux :</li>
                            <ul class="ss-liste">
                                <li>Proposition d’une mission ponctuelle de dépannage/réparation/aménagement ou récurrente pour laquelle sera mis en place une interface de tickets afin de préparer au mieux l’intervention d’entretien.</li>
                                <li>Recherche du meilleur profil "suber" au sein de notre réseau.</li>
                                <li>Envoi du devis et validation par vos soins (pour les missions récurrentes, le tarif sera forfaitaire en fonction de la surface des locaux et de la fréquentation, un système de crédit d’heures sera mis en place).</li>
                                <li>Mise en place de la mission .</li>
                                <li>Premier bilan suite au démarrage de la mission.</li>
                                <li>Facturation au temps passé pour les missions ponctuelles et mise en place d’un prélèvement pour les missions récurrentes.</li>
                                <li>Bilans réguliers.</li>
                            </ul>
                        </ul>
                    </div>

                    <div class="block">
                        <div class="ancre" id="federer"></div>
                        <p class="titre">ENVIE DE FÉDÉRER VOS ÉQUIPES :</p>
                        <ul>
                            <li class="liste-img">Demande de mission auprès de SuB Conseil.</li>
                            <li class="liste-img">Prise de contact, analyse de la demande et des besoins.</li>
                            <li class="liste-img">Besoin en communication interne :</li>
                            <ul class="ss-liste">
                                <li> Recherche du meilleur profil "suber" au sein de notre réseau.</li>
                                <li> Envoi du devis et validation par vos soins.</li>
                                <li> Mise en place de la mission.</li>
                                <li> Suivi de la mission jusqu’à sa réalisation.</li>
                            </ul>
                            <li class="liste-img">Pour les événements :</li>
                            <ul class="ss-liste">
                                <li> Analyse du besoin en fonction du projet, du nombre de participants et du budget.</li>
                                <li> Recherche du meilleur profil "suber" au sein de notre réseau.</li>
                                <li> Envoi du devis et validation par vos soins.</li>
                                <li> Acompte de 30% pour démarrage de la mission.</li>
                                <li> Mise en place de la mission et points réguliers jusqu’au jour J.</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
include 'inc/footer.inc.php';