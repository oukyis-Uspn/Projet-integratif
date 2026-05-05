<?php
$page_title = "Cabinet JurisNova – Expertise Juridique & Innovation";
$page_desc = "Cabinet d'avocats spécialisé en droit commercial, compliance et contentieux. Fondé en 2005 à Paris 8e.";
include 'header.php';
?>

<!-- HERO -->
<section class="hero" id="accueil">
  <div class="hero__bg"></div>
  <div class="hero__content">
    <span class="hero__eyebrow">Cabinet d'avocats — Paris 8<sup>e</sup></span>
    <h1 class="hero__title">L'expertise juridique<br><em>alliée à l'innovation</em></h1>
    <p class="hero__sub">Nous défendons vos intérêts avec rigueur, discrétion et une vision moderne du droit des affaires.</p>
    <div class="hero__actions">
      <a href="contact.php" class="btn btn--gold">Prendre rendez-vous</a>
      <a href="#expertises" class="btn btn--outline">Nos expertises</a>
    </div>
  </div>
  <div class="hero__scroll-hint">
    <span></span>
  </div>
</section>

<section class="statsband">
  <div class="container" style="display: flex; justify-content: space-around; width: 100%;">
    <div class="statsband__item">
      <strong>2005</strong>
      <span>Fondation</span>
    </div>
    <div class="statsband__sep"></div>
    <div class="statsband__item">
      <strong>+150</strong>
      <span>Clients</span>
    </div>
    <div class="statsband__sep"></div>
    <div class="statsband__item">
      <strong>12</strong>
      <span>Collaborateurs</span>
    </div>
    <div class="statsband__sep"></div>
    <div class="statsband__item">
      <strong>2,1 M€</strong>
      <span>CA Annuel</span>
    </div>
  </div>
</section>

<!-- EXPERTISES -->
<section class="section expertises" id="expertises">
  <div class="container">
    <div class="section__header">
      <span class="section__tag">Nos domaines</span>
      <h2>Une expertise <em>pointue</em> pour chaque enjeu</h2>
      <p>Du conseil stratégique à la représentation en justice, nous intervenons à chaque étape de la vie juridique de votre entreprise.</p>
    </div>
    <div class="expertises__grid">
      <?php
      $expertises = [
        ["titre" => "Droit Commercial", "desc" => "Contrats, fusions-acquisitions, distribution, propriété intellectuelle. Nous sécurisons vos opérations commerciales de bout en bout."],
        ["titre" => "Compliance & Conformité", "desc" => "Mise en conformité RGPD, lutte anti-blanchiment, codes de conduite. Anticipez les risques réglementaires avant qu'ils ne deviennent des contentieux."],
        ["titre" => "Contentieux", "desc" => "Défense en justice, arbitrage, médiation. Nos avocats plaident avec conviction devant toutes les juridictions compétentes."],
        ["titre" => "Droit des Sociétés", "desc" => "Création, gouvernance, restructuration, dissolution. Un accompagnement sur mesure à chaque étape de la vie de votre entreprise."],
        ["titre" => "Droit Social", "desc" => "Relations individuelles et collectives du travail, licenciements, négociations avec les partenaires sociaux."],
        ["titre" => "Droit International", "desc" => "Opérations transfrontalières, implantations étrangères, contrats internationaux et résolution des litiges hors frontières."],
      ];
      foreach ($expertises as $exp): ?>
      <div class="expertise-card">
        <div class="expertise-card__icon"><?= $exp['icon'] ?></div>
        <h3><?= $exp['titre'] ?></h3>
        <p><?= $exp['desc'] ?></p>
        <a href="expertises.php" class="expertise-card__link">En savoir plus →</a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- APPROCHE -->
<section class="section approche" id="approche">
  <div class="container approche__inner">
    <div class="approche__visual">
      <div class="approche__badge">
      <div class="approche__img-placeholder">
        <div class="approche__building">
          <div class="building__top"></div>
          <div class="building__body">
            <div class="building__windows">
              <?php for ($i = 0; $i < 12; $i++): ?>
              <div class="building__win <?= ($i % 3 === 1) ? 'lit' : '' ?>"></div>
              <?php endfor; ?>
            </div>
          </div>
          <div class="building__base"></div>
        </div>
      </div>
    </div>
    <div class="approche__content">
      <span class="section__tag">Notre approche</span>
      <h2>Le droit au service de <em>votre réussite</em></h2>
      <p class="approche__intro">Fondé par Richard Dupond, spécialiste reconnu du droit commercial et de la compliance, JurisNova conjugue rigueur académique et pragmatisme opérationnel.</p>
            <br></br>
      <div class="approche__values">
        <div class="value-item">
          <div>
            <strong>Confidentialité absolue</strong>
            <p>Le secret professionnel est le fondement de notre relation client. Chaque dossier est traité avec la plus grande discrétion.</p>
          </div>
        </div>
        <div class="value-item">
          <div>
            <strong>Réactivité et disponibilité</strong>
            <p>Vos urgences sont les nôtres. Nous nous engageons sur des délais de réponse clairs et tenus.</p>
          </div>
        </div>
        <div class="value-item">
          <div>
            <strong>Innovation numérique</strong>
            <p>Outils collaboratifs sécurisés, dématérialisation des échanges, suivi en temps réel de vos dossiers.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CLIENTS -->
<section class="section clients">
  <div class="container">
    <div class="section__header">
      <span class="section__tag">Clientèle</span>
      <h2>Ils nous font <em>confiance</em></h2>
      <p>PME, start-ups en hypercroissance et filiales de groupes internationaux : nous adaptons notre conseil à la réalité de chaque structure.</p>
      <br></br>
    </div>
    <div class="clients__types">
      <div class="client-type">
        <div class="client-type__icon"></div>
        <h4>PME et ETI</h4>
        <p>Accompagnement juridique global pour les entreprises en développement, de la structuration à la croissance externe.</p>
      </div>
      <div class="client-type">
        <div class="client-type__icon"></div>
        <h4>Start-ups</h4>
        <p>Levées de fonds, pactes d'actionnaires, protection de la propriété intellectuelle, contrats SaaS et conformité RGPD.</p>
      </div>
      <div class="client-type">
        <div class="client-type__icon"></div>
        <h4>Filiales internationales</h4>
        <p>Implantation en France, droit du travail applicable, conformité locale et gestion des risques transfrontaliers.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-section">
  <div class="container cta-section__inner">
    <h2>Prêt à sécuriser votre avenir juridique ?</h2>
    <p>Contactez-nous pour un premier entretien confidentiel et sans engagement.</p>
    <a href="contact.php" class="btn btn--gold btn--lg">Nous contacter</a>
  </div>
</section>

<?php include 'footer.php'; ?>
