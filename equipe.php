<?php
$page_title = "L'Équipe – Cabinet JurisNova";
$page_desc = "Rencontrez les avocats et collaborateurs du cabinet JurisNova, experts en droit commercial, compliance et contentieux.";
include 'header.php';
?>

<section class="page-hero">
  <div class="container">
    <span class="section__tag">Des profils d'exception</span>
    <h1>Notre équipe</h1>
    <p>12 collaborateurs engagés, réunis autour d'une conviction commune : le droit doit être un levier de croissance, pas un frein.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section__header">
      <span class="section__tag">Associés fondateurs</span>
      <h2>Une direction <em>expérimentée</em></h2>
    </div>
    <div class="team-grid team-grid--featured">
      <div class="team-card team-card--featured">
        <div class="team-card__avatar team-card__avatar--rd">RD</div>
        <div class="team-card__body">
          <h3>Richard Dupond</h3>
          <span class="team-card__role">Associé fondateur — Droit commercial & Compliance</span>
          <p>Diplômé de l'Université Paris I Panthéon-Sorbonne et titulaire d'un LL.M. en droit des affaires de la London School of Economics, Richard Dupond a fondé JurisNova en 2005 après dix ans d'exercice au sein de cabinets internationaux. Reconnu dans les classements <em>Best Lawyers</em> et <em>Legal 500</em>, il conseille principalement les groupes internationaux dans leurs opérations de croissance externe et leurs programmes de conformité.</p>
          <div class="team-card__tags">
            <span>Droit Commercial</span>
            <span>Compliance</span>
            <span>M&A</span>
            <span>Arbitrage</span>
          </div>
        </div>
      </div>
      <div class="team-card team-card--featured">
        <div class="team-card__avatar team-card__avatar--sm">SM</div>
        <div class="team-card__body">
          <h3>Sophie Marchand</h3>
          <span class="team-card__role">Associée — Droit des Sociétés & Droit Social</span>
          <p>Avocate au Barreau de Paris depuis 2009, Sophie Marchand a développé une expertise reconnue en droit des sociétés et en droit social. Elle accompagne les entrepreneurs et les dirigeants dans toutes les opérations structurantes : création, levées de fonds, pactes d'actionnaires, mais aussi restructurations sociales délicates. Son approche allie rigueur technique et sens du dialogue.</p>
          <div class="team-card__tags">
            <span>Droit des Sociétés</span>
            <span>Droit Social</span>
            <span>Start-ups</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section section--light">
  <div class="container">
    <div class="section__header">
      <span class="section__tag">Collaborateurs</span>
      <h2>Une équipe <em>pluridisciplinaire</em></h2>
    </div>
    <div class="team-grid">
      <?php
      $collaborateurs = [
        ["initiales" => "AL", "nom" => "Antoine Lefèvre", "role" => "Avocat collaborateur", "spec" => "Contentieux commercial & Arbitrage", "color" => "c1"],
        ["initiales" => "CM", "nom" => "Claire Moreau", "role" => "Avocate collaboratrice", "spec" => "RGPD & Droit du numérique", "color" => "c2"],
        ["initiales" => "TB", "nom" => "Thomas Bertrand", "role" => "Avocat collaborateur", "spec" => "Droit fiscal & Structuration", "color" => "c3"],
        ["initiales" => "ND", "nom" => "Nathalie Durand", "role" => "Avocate collaboratrice", "spec" => "Droit social & Relations collectives", "color" => "c4"],
        ["initiales" => "PG", "nom" => "Philippe Garnier", "role" => "Avocat collaborateur", "spec" => "Droit international & Contrats", "color" => "c1"],
        ["initiales" => "ES", "nom" => "Emma Simon", "role" => "Avocate collaboratrice", "spec" => "Propriété intellectuelle & Marques", "color" => "c2"],
        ["initiales" => "JR", "nom" => "Julien Rousseau", "role" => "Avocat collaborateur", "spec" => "Fusions-acquisitions & Private equity", "color" => "c3"],
        ["initiales" => "MB", "nom" => "Marie Blanc", "role" => "Juriste senior", "spec" => "Conformité réglementaire & Audit", "color" => "c4"],
      ];
      foreach ($collaborateurs as $c): ?>
      <div class="team-card">
        <div class="team-card__avatar team-card__avatar--<?= $c['color'] ?>"><?= $c['initiales'] ?></div>
        <h3><?= $c['nom'] ?></h3>
        <span class="team-card__role"><?= $c['role'] ?></span>
        <p class="team-card__spec"><?= $c['spec'] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section rejoindre">
  <div class="container rejoindre__inner">
    <div class="rejoindre__content">
      <span class="section__tag">Recrutement</span>
      <h2>Rejoindre <em>JurisNova</em></h2>
      <p>Nous recherchons en permanence des talents qui partagent notre exigence, notre curiosité et notre goût pour l'innovation juridique. Si vous êtes avocat ou juriste avec une solide expérience en droit des affaires, n'hésitez pas à nous adresser votre candidature.</p>
      <a href="mailto:recrutement@jurisnova.fr" class="btn btn--gold">Candidature spontanée</a>
    </div>
    <div class="rejoindre__values">
      <div class="rejoindre__value">
        <strong>Excellence</strong>
        <p>Des dossiers traités avec la plus haute rigueur technique et éthique.</p>
      </div>
      <div class="rejoindre__value">
        <strong>Innovation</strong>
        <p>Des outils numériques modernes pour travailler mieux, pas plus.</p>
      </div>
      <div class="rejoindre__value">
        <strong>Collectif</strong>
        <p>Une culture de la collaboration et du partage de connaissances.</p>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>
