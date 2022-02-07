<?php
/* 
- Logo header :
Est-il un lien qui permet de revenir sur la page d'accueil (souvent le cas) ? Si oui :
  Le nom sous le logo fait aussi parti du lien (je suppose que oui) ?
  Quel effet au survol du lien ?

- Menu dans le header :
Quel effet au survol ? (Sur la maquette j'ai l'effet après avoir cliquer je pense)

*/
include 'inc/init.inc.php';
include 'inc/function.inc.php';


include 'inc/header.inc.php';
?>

<style>
  #accueil{background-color: white;}
</style>

<main class="accueil">

  <section class="section1 container">
    <div class="titre1">
      <p class="jaune">BOOSTEZ</p>
      <p class="bleu">VOTRE CROISSANCE</p>
    </div>
    <div class="titre2">
      <p class="jaune">LIBÉREZ-VOUS</p>
      <p class="bleu">DES TÂCHES ANNEXES</p>
    </div>
    <div class="titre2">
      <p class="jaune">FAITES APPEL À NOS EXPERTS</p>
      <p class="bleu">« LES SUBERS »</p>
    </div>
    <div class="titre2">
      <p class="jaune">CONSACREZ-VOUS À L'ESSENTIEL</p>
      <p class="bleu">VOTRE COEUR DE MÉTIER</p>
    </div>
  </section>

  <section class="section2 section2a">

    <div class="partie1">
      <div class="container">

        <div class="onglet">
          <p>Votre temps est précieux ...</p>
        </div>

        <div class="block1 row justify-content-center align-items-center">

          <div class="image col-3 col-md-2">
            <img src="<?= URL ?>images/site/icone_temps.png" alt="Horloge symbolisant un gain de temps">
          </div>
          <div class="entête col-11 row justify-content-md-center">
            <div class="col-md-8">
              <p class="jaune">VOTRE TEMPS EST PRÉCIEUX,</p>
              <p class="jaune">DÉLÉGUEZ VOS TÂCHES</p>
              <p class="jaune">ADMINISTRATIVES QUOTIDIENNES</p>
            </div>
          </div>
        </div>

        <div class="block2 row">
          <div class="corps col-12 row justify-content-center justify-content-md-between">
            <div class="ss-corps col-11 col-md-4">
              <p>COMPTABILITÉ / FINANCE</p>
              <ul>
                <li>Audit et optimisation de vos outils</li>
                <li>Rédaction de PROCESS</li>
                <li>Pré-comptabilité</li>
                <li>Intégration des pièces comptables dans votre outils de gestion</li>
                <li>Digitalisation et numérisation de vos pièces comptables</li>
                <li>Préparation du dossier mensuel destiné à votre expert comptable</li>
                <li>Accompagnement de la gestion de projet (mise en place ERP, levée de fonds, ...)</li>
              </ul>
            </div>

            <div class="ss-corps col-11 col-md-3">
              <p>ADMINISTRATION DES VENTES</p>
              <ul>
                <li>Facturation</li>
                <li>Relances</li>
                <li>Litiges</li>
                <li>Rédaction de PROCESS</li>
                <li>Suivi de la trésorerie</li>
                <li>Rapports commerciaux</li>
              </ul>
            </div>

            <div class="ss-corps col-11 col-md-4">
              <p>RESSOURCES HUMAINES</p>
              <ul>
                <li>Gestion de la médecine du travail</li>
                <li>Récolte des variables de paie</li>
                <li>Saisie de données sur vos outils type Payfit, Lucca, ...</li>
                <li>ON/OFF boarding</li>
                <li>Suivi de la formation</li>
                <li>Ergonomie au poste de travail</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="partie2">
      <div class="container">

        <div class="onglet">
          <p>Libérez-vous l'esprit ...</p>
        </div>

        <div class="block1 row justify-content-center align-items-center">

          <div class="image col-3 col-md-2">
            <img src="<?= URL ?>images/site/icone_maison.png" alt="Maison symbolisant des locaux">
          </div>
          <div class="entête col-11 col-lg-7 row justify-content-md-center">
            <div class="col-md-7">
              <p class="jaune">LIBÉREZ-VOUS L'ESPRIT,</p>
              <p class="jaune">CONFIEZ-NOUS LA GESTION</p>
              <p class="jaune">DE VOS LOCAUX</p>
            </div>
          </div>
        </div>

        <div class="block2 row">
          <div class="corps col-12 row justify-content-center justify-content-sm-around justify-content-md-between">
            <div class="ss-corps col-11 col-sm-5 col-md-4">
              <p>OFFICE MANAGEMENT</p>
              <ul>
                <li>Gestion des Notes De Frais</li>
                <li>Gestion des tickets restaurants</li>
                <li>Gestion des agendas</li>
                <li>Gestion des fournitures</li>
                <li>Gestion des bureaux (badges, plannings de présence)</li>
              </ul>
            </div>

            <div class="ss-corps col-11 col-sm-5 col-md-4">
              <p>GESTION DES LOCAUX</p>
              <ul>
                <li>Contrat d'entretien de vos locaux</li>
                <li>Dépannage et réparation express</li>
                <li>Décoration de vos locaux</li>
                <li>Installation de mobilier</li>
                <li>Réagencement de vos locaux</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="partie3">
      <div class="container">

        <div class="onglet">
          <p>Fédérez vos équipes ...</p>
        </div>

        <div class="block1 row justify-content-center align-items-center">

          <div class="image col-3 col-md-2">
            <img src="<?= URL ?>images/site/icone_main.png" alt="Mains jointes symbolisant la cohésion">
          </div>
          <div class="entête col-11 row justify-content-md-center">
            <div class="col-md-7">
              <p class="jaune">FÉDÉREZ VOS ÉQUIPES,</p>
              <p class="jaune">FAITES ORGANISER</p>
              <p class="jaune">VOS ÉVÉNEMENTS INTERNES</p>
            </div>
          </div>
        </div>

        <div class="block2 row">
          <div class="corps col-12 row justify-content-center">
            <div class="ss-corps col-11 col-md-4">
              <p>ÉVÉNEMENTIEL</p>
              <ul>
                <li>Day out</li>
                <li>Soirées à thèmes</li>
                <li>Cours de sport collectifs (yoga, fitness, zumba, …)</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="section2 section2b ">
    <div id="tabs">

      <ul class="onglet ">
        <li><a id="focus1" class="ui-state-hover" href="#tabs-1">Votre temps est précieux ...</a></li>
        <li><a id="focus2" href="#tabs-2">Libérez-vous l'esprit ...</a></li>
        <li><a id="focus3" href="#tabs-3">Fédérez vos équipes</a></li>
      </ul>

      <div class="contenant">
        <div id="tabs-1" class="container">

          <div class="block1 row justify-content-center align-items-center">
            <div class="image col-lg-2">
              <img src="<?= URL ?>images/site/icone_temps.png" alt="Horloge symbolisant un gain de temps">
            </div>
            <div class="entête col-lg-6 col-xxl-5">
              <p class="jaune">VOTRE TEMPS EST PRÉCIEUX,</p>
              <p class="jaune">DÉLÉGUEZ VOS TÂCHES</p>
              <p class="jaune">ADMINISTRATIVES QUOTIDIENNES</p>
            </div>
          </div>

          <div class="block2 row">
            <div class="corps col-12 row justify-content-md-between">
              <div class="ss-corps col-lg-4">
                <p>COMPTABILITÉ / FINANCE</p>
                <ul>
                  <li>Audit et optimisation de vos outils</li>
                  <li>Rédaction de PROCESS</li>
                  <li>Pré-comptabilité</li>
                  <li>Intégration des pièces comptables dans votre outils de gestion</li>
                  <li>Digitalisation et numérisation de vos pièces comptables</li>
                  <li>Préparation du dossier mensuel destiné à votre expert comptable</li>
                  <li>Accompagnement de la gestion de projet (mise en place ERP, levée de fonds, ...)</li>
                </ul>
              </div>

              <div class="ss-corps col-lg-3">
                <p>ADMINISTRATION DES VENTES</p>
                <ul>
                  <li>Facturation</li>
                  <li>Relances</li>
                  <li>Litiges</li>
                  <li>Rédaction de PROCESS</li>
                  <li>Suivi de la trésorerie</li>
                  <li>Rapports commerciaux</li>
                </ul>
              </div>

              <div class="ss-corps col-lg-3">
                <p>RESSOURCES HUMAINES</p>
                <ul>
                  <li>Gestion de la médecine du travail</li>
                  <li>Récolte des variables de paie</li>
                  <li>Saisie de données sur vos outils type Payfit, Lucca, ...</li>
                  <li>ON/OFF boarding</li>
                  <li>Suivi de la formation</li>
                  <li>Ergonomie au poste de travail</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div id="tabs-2" class="container">

          <div class="block1 row justify-content-center align-items-center">
            <div class="image col-lg-2">
              <img src="<?= URL ?>images/site/icone_maison.png" alt="Maison symbolisant des locaux">
            </div>
            <div class="entête col-lg-5 col-xxl-5">
              <p class="jaune">LIBÉREZ-VOUS L'ESPRIT,</p>
              <p class="jaune">CONFIEZ-NOUS LA GESTION</p>
              <p class="jaune">DE VOS LOCAUX</p>
            </div>
          </div>

          <div class="block2 row">
            <div class="corps col-12 row justify-content-md-between justify-content-lg-around">
              <div class="ss-corps col-lg-3">
                <p>OFFICE MANAGEMENT</p>
                <ul>
                  <li>Gestion des Notes De Frais</li>
                  <li>Gestion des tickets restaurants</li>
                  <li>Gestion des agendas</li>
                  <li>Gestion des fournitures</li>
                  <li>Gestion des bureaux (badges, plannings de présence)</li>
                </ul>
              </div>

              <div class="ss-corps col-lg-3">
                <p>GESTION DES LOCAUX</p>
                <ul>
                  <li>Contrat d'entretien de vos locaux</li>
                  <li>Dépannage et réparation express</li>
                  <li>Décoration de vos locaux</li>
                  <li>Installation de mobilier</li>
                  <li>Réagencement de vos locaux</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div id="tabs-3" class="container">

          <div class="block1 row justify-content-center align-items-center">
            <div class="image col-lg-2">
              <img src="<?= URL ?>images/site/icone_main.png" alt="Mains jointes symbolisant la cohésion">
            </div>
            <div class="entête col-lg-5">
              <p class="jaune">FÉDÉREZ VOS ÉQUIPES,</p>
              <p class="jaune">FAITES ORGANISER </p>
              <p class="jaune">VOS ÉVÉNEMENTS INTERNES</p>
            </div>
          </div>

          <div class="block2 row">
            <div class="corps col-12 row justify-content-lg-center">
              <div class="ss-corps col-lg-3">
                <ul>
                  <li>Day out</li>
                  <li>Soirées à thèmes</li>
                  <li>Com et pub interne et externe</li>
                  <li>Journée banalisée</li>
                  <li>Cours de sport collectifs (yoga, fitness, zumba, …)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section3 container">
    <div class="col-11 col-lg-8 col-xl-6">
      <p><span class="gras">Après plusieurs années de travail au sein de START-UP,</span> la création de SUB CONSEIL est née d’un constat simple : la croissance souvent exponentielle de ces structures nécessite une adaptation constante des fonctions support et annexes. Mais il n’est <span class="gras">pas souvent justifié d’embaucher</span> à temps plein et cela représente un coût que bon nombre de dirigeants ne sont pas prêts à engager préférant alors gérer seuls ces tâches au détriment de leur activité et de leur croissance.</p>
      <p><span class="gras">L’environnement</span> et <span class="gras">les conditions</span> de travail sont aussi des atouts maîtres pour un bon <span class="gras">développement de l’activité</span>. Plus vos équipes sont motivées et plus vos projets avancent.</p>
      <p>En faisant appel à SUB CONSEIL, vous vous <span class="gras">libérez l’esprit</span> de toutes les contraintes administratives quotidiennes et vous travaillez dans un environnement de travail propice au développement de votre activité.</p>
    </div>
  </section>

</main>

<?php
include 'inc/footer.inc.php'
?>

