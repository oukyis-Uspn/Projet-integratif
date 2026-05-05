<?php
$page_title = "Contact – Cabinet JurisNova";
$page_desc = "Contactez le cabinet JurisNova pour un premier entretien confidentiel. Paris 8e.";

$success = false;
$errors = [];
$form_data = ['nom' => '', 'email' => '', 'telephone' => '', 'societe' => '', 'sujet' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $form_data['nom']       = trim($_POST['nom'] ?? '');
  $form_data['email']     = trim($_POST['email'] ?? '');
  $form_data['telephone'] = trim($_POST['telephone'] ?? '');
  $form_data['societe']   = trim($_POST['societe'] ?? '');
  $form_data['sujet']     = trim($_POST['sujet'] ?? '');
  $form_data['message']   = trim($_POST['message'] ?? '');

  if (empty($form_data['nom']))     $errors[] = "Le nom est requis.";
  if (!filter_var($form_data['email'], FILTER_VALIDATE_EMAIL)) $errors[] = "L'adresse e-mail est invalide.";
  if (empty($form_data['sujet']))   $errors[] = "Veuillez sélectionner un sujet.";
  if (strlen($form_data['message']) < 20) $errors[] = "Le message doit contenir au moins 20 caractères.";

  if (empty($errors)) {
    // En production : mail() ou intégration SMTP sécurisé
    // mail('contact@jurisnova.fr', 'Nouveau contact JurisNova', ...);
    $success = true;
    $form_data = array_fill_keys(array_keys($form_data), '');
  }
}

include 'header.php';
?>

<section class="page-hero">
  <div class="container">
    <span class="section__tag">Premier entretien confidentiel</span>
    <h1>Nous contacter</h1>
    <p>Chaque dossier commence par une écoute attentive. Décrivez-nous votre situation et nous vous répondrons sous 24 heures ouvrées.</p>
  </div>
</section>

<section class="section contact-section">
  <div class="container contact-section__inner">

    <!-- INFOS -->
    <div class="contact-info">
      <h2>Informations <em>pratiques</em></h2>
      <br></br>
      <div class="contact-info__items">
        <div class="contact-info__item">
          <div class="contact-info__icon"></div>
          <div>
            <strong>Adresse</strong>
            <p>8<sup>e</sup> arrondissement, Paris<br>À proximité de Champs-Élysées – Clemenceau</p>
          </div>
        </div>
        <div class="contact-info__item">
          <div class="contact-info__icon"></div>
          <div>
            <strong>Téléphone</strong>
            <p><a href="tel:+33142000000">+33 (0)1 42 00 00 00</a></p>
          </div>
        </div>
        <div class="contact-info__item">
          <div class="contact-info__icon"></div>
          <div>
            <strong>E-mail</strong>
            <p><a href="mailto:contact@jurisnova.fr">contact@jurisnova.fr</a></p>
          </div>
        </div>
        <div class="contact-info__item">
          <div class="contact-info__icon"></div>
          <div>
            <strong>Horaires</strong>
            <p>Lundi – Vendredi : 9h00 – 18h00<br>Sur rendez-vous uniquement</p>
          </div>
        </div>
      </div>
      <div class="contact-info__note">
      <br></br>
        <p> <strong>Confidentialité garantie.</strong> Toutes vos communications avec le cabinet sont couvertes par le secret professionnel de l'avocat.</p>
      </div>
      <div class="contact-info__urgence">
        <h4> Urgence juridique ?</h4>
        <p>Pour toute situation nécessitant une réponse immédiate (mesures conservatoires, référé…), appelez directement notre ligne d'urgence.</p>
        <a href="tel:+33600000000" class="btn btn--outline btn--sm">Ligne urgence : +33 (0)6 00 00 00 00</a>
      </div>
    </div>

    <!-- FORMULAIRE -->
    <div class="contact-form-wrap">
      <h2>Envoyer un <em>message</em></h2>

      <?php if ($success): ?>
      <div class="alert alert--success">
         <strong>Message envoyé.</strong> Nous vous répondrons dans les 24 heures ouvrées. Merci de votre confiance.
      </div>
      <?php endif; ?>

      <?php if (!empty($errors)): ?>
      <div class="alert alert--error">
        <strong>Veuillez corriger les erreurs suivantes :</strong>
        <ul><?php foreach ($errors as $e): ?><li><?= htmlspecialchars($e) ?></li><?php endforeach; ?></ul>
      </div>
      <?php endif; ?>

      <form method="POST" action="contact.php" class="contact-form" novalidate>
        <div class="form-row">
          <div class="form-group">
            <label for="nom">Nom complet <span class="required">*</span></label>
            <input type="text" id="nom" name="nom" value="<?= htmlspecialchars($form_data['nom']) ?>" placeholder="Jean Dupont" required>
          </div>
          <div class="form-group">
            <label for="email">Adresse e-mail <span class="required">*</span></label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($form_data['email']) ?>" placeholder="jean@societe.fr" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="tel" id="telephone" name="telephone" value="<?= htmlspecialchars($form_data['telephone']) ?>" placeholder="+33 6 00 00 00 00">
          </div>
          <div class="form-group">
            <label for="societe">Société / Organisation</label>
            <input type="text" id="societe" name="societe" value="<?= htmlspecialchars($form_data['societe']) ?>" placeholder="Nom de votre entreprise">
          </div>
        </div>
        <div class="form-group">
          <label for="sujet">Objet de la demande <span class="required">*</span></label>
          <select id="sujet" name="sujet" required>
            <option value="">— Sélectionner une expertise —</option>
            <option value="commercial" <?= $form_data['sujet'] === 'commercial' ? 'selected' : '' ?>>Droit Commercial</option>
            <option value="compliance" <?= $form_data['sujet'] === 'compliance' ? 'selected' : '' ?>>Compliance & Conformité</option>
            <option value="contentieux" <?= $form_data['sujet'] === 'contentieux' ? 'selected' : '' ?>>Contentieux</option>
            <option value="societes" <?= $form_data['sujet'] === 'societes' ? 'selected' : '' ?>>Droit des Sociétés</option>
            <option value="social" <?= $form_data['sujet'] === 'social' ? 'selected' : '' ?>>Droit Social</option>
            <option value="international" <?= $form_data['sujet'] === 'international' ? 'selected' : '' ?>>Droit International</option>
            <option value="autre" <?= $form_data['sujet'] === 'autre' ? 'selected' : '' ?>>Autre demande</option>
          </select>
        </div>
        <div class="form-group">
          <label for="message">Décrivez votre situation <span class="required">*</span></label>
          <textarea id="message" name="message" rows="6" placeholder="Exposez brièvement votre situation juridique. Ces informations restent strictement confidentielles." required><?= htmlspecialchars($form_data['message']) ?></textarea>
        </div>
        <div class="form-footer">
          <p class="form-rgpd">En soumettant ce formulaire, vous acceptez que vos données soient traitées dans le cadre de votre demande, conformément à notre <a href="mentions-legales.php">politique de confidentialité</a>.</p>
          <button type="submit" class="btn btn--gold btn--lg">Envoyer ma demande →</button>
        </div>
      </form>
    </div>

  </div>
</section>

<?php include 'footer.php'; ?>
