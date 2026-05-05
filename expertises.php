<?php
$page_title = "Expertises – Cabinet JurisNova";
$page_desc = "Droit commercial, compliance, contentieux, droit des sociétés et social. Découvrez les expertises du cabinet JurisNova.";
include 'header.php';
?>

<section class="page-hero">
  <div class="container">
    <span class="section__tag">Nos domaines d'intervention</span>
    <h1>Nos expertises</h1>
    <p>Une équipe pluridisciplinaire pour répondre à l'ensemble de vos enjeux juridiques.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <?php
    $expertises = [
      [
        "titre" => "Droit Commercial",
        "desc_courte" => "Au cœur de toute activité économique, le droit commercial encadre vos relations d'affaires et protège vos intérêts stratégiques.",
        "details" => [
          "Rédaction et négociation de contrats commerciaux complexes",
          "Opérations de fusions-acquisitions et due diligence juridique",
          "Protection de la propriété intellectuelle et des marques",
          "Droit de la distribution et des franchises",
          "Structuration d'accords de partenariat et de joint-venture",
        ]
      ],
      [
        "titre" => "Conformité",
        "desc_courte" => "Dans un environnement réglementaire en constante évolution, la conformité est un impératif stratégique, non une contrainte.",
        "details" => [
          "Mise en conformité RGPD : audit, documentation, formation",
          "Programme de lutte anti-blanchiment (LCB-FT)",
          "Codes de conduite et politiques internes anti-corruption",
          "Veille réglementaire et accompagnement sectoriel",
          "Formation des équipes aux enjeux de compliance",
        ]
      ],
      [
        "titre" => "Contentieux",
        "desc_courte" => "Lorsque la voie amiable n'est plus envisageable, nos avocats plaident avec conviction et préparent chaque dossier avec minutie.",
        "details" => [
          "Représentation devant les tribunaux de commerce",
          "Contentieux civil et arbitrage international",
          "Médiation et modes alternatifs de règlement des conflits",
          "Référés d'urgence et mesures conservatoires",
          "Recouvrement de créances complexes",
        ]
      ],
      [
        "titre" => "Droit des Sociétés",
        "desc_courte" => "De la création à la transmission, nous accompagnons les dirigeants à chaque étape de la vie juridique de leur entreprise.",
        "details" => [
          "Choix de la forme juridique et constitution de société",
          "Pactes d'actionnaires et gouvernance",
          "Augmentations de capital, émission de BSPCE et BSA",
          "Restructurations, scissions et apports partiels d'actifs",
          "Transmission d'entreprise et cession de fonds de commerce",
        ]
      ],
      [
        "titre" => "Droit Social",
        "desc_courte" => "La gestion des ressources humaines génère des enjeux juridiques permanents. Nous vous accompagnons pour prévenir et gérer les risques.",
        "details" => [
          "Rédaction et audit de contrats de travail",
          "Accompagnement des procédures de licenciement",
          "Négociation d'accords collectifs",
          "Gestion des relations avec les institutions représentatives du personnel",
          "Accompagnement lors des inspections et contrôles URSSAF",
        ]
      ],
      [
        "titre" => "Droit International",
        "desc_courte" => "L'internationalisation de votre activité soulève des questions juridiques spécifiques qui nécessitent une expertise transfrontalière.",
        "details" => [
          "Contrats internationaux et choix de la loi applicable",
          "Implantation de filiales et succursales en France",
          "Arbitrage commercial international",
          "Conformité aux réglementations export (sanctions, embargos)",
          "Gestion des litiges transfrontaliers",
        ]
      ],
    ];
    foreach ($expertises as $i => $exp): ?>
    <div class="expertise-detail <?= ($i % 2 === 1) ? 'expertise-detail--reverse' : '' ?>">
      <div class="expertise-detail__num"><?= $exp['num'] ?></div>
      <div class="expertise-detail__content">
        <div class="expertise-detail__header">
          <span class="expertise-detail__icon"><?= $exp['icon'] ?></span>
          <h2><?= $exp['titre'] ?></h2>
        </div>
        <p class="expertise-detail__desc"><?= $exp['desc_courte'] ?></p>
        <ul class="expertise-detail__list">
          <?php foreach ($exp['details'] as $point): ?>
          <li><?= $point ?></li>
          <?php endforeach; ?>
        </ul>
        <a href="contact.php" class="btn btn--gold btn--sm">Consulter un expert</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="cta-section">
  <div class="container cta-section__inner">
    <h2>Votre situation ne rentre pas dans une case ?</h2>
    <p>Nos avocats analysent chaque dossier dans sa singularité. Contactez-nous pour une première consultation.</p>
    <a href="contact.php" class="btn btn--gold btn--lg">Prendre contact</a>
  </div>
</section>

<?php include 'footer.php'; ?>
