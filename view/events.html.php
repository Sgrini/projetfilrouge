<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Importation des styles et des icônes -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
  <link rel="stylesheet" href="/style/main.css" />
  <title>MNS Gest Club</title>
</head>
<!-- HEADER: Barre de navigation principale -->
<?php require_once "_header.html.php"; ?>

<body>
  <!-- HEADER: Barre de navigation principale -->
  <?php require_once "_header.html.php"; ?>
  <section class="events__section">
    <div class="container">
      <div>
        <h1>Evenements star</h1>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus
          tempora repellendus quidem odit labore.
        </p>
      </div>
      <!-- Événement en cours -->
      <div class="events__current">
        <div class="events__current-details">
          <h3 class="events__current-details-title">
            1/4 de Finale du Tournoi National
          </h3>
          <p>Location</p>
          <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam
            odit vero laboriosam quasi!
          </p>
          <button class="button__book">Réserver ma place</button>
        </div>

        <div class="events__img-wrapper">
          <img class="events__img" src="/img/eventbasket.jpg" alt="event basket game" />
        </div>
      </div>
      <div>
        <div>
          <!-- Liste des événements -->
          <button class="events__all-button">Voir tout</button>
          <button class="events__incoming-button">A venir</button>
        </div>
        <hr class="separator" />
        <div class="event">
          <div class="date">
            <div class="day">14</div>
            <div class="month">Fév 2024</div>
          </div>
          <div class="content">
            <div class="title__events">1/2 Finale du Tournoi National</div>
            <div class="description">
              Location<br />Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.
            </div>
          </div>
          <a href="#" class="button__book">Réserver ma place</a>
        </div>
        <hr class="separator" />

        <div class="event">
          <div class="date">
            <div class="day">17</div>
            <div class="month">Fév 2024</div>
          </div>
          <div class="content">
            <div class="title__events">Finale du Tournoi National</div>
            <div class="description">
              Location<br />Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.
            </div>
          </div>
          <a href="#" class="button__book">Réserver ma place</a>
        </div>
        <hr class="separator" />

        <div class="event">
          <div class="date">
            <div class="day">18</div>
            <div class="month">Fév 2024</div>
          </div>
          <div class="content">
            <div class="title__events">
              Remise des trophés du Tournoi National
            </div>
            <div class="description">
              Location<br />Lorem ipsum dolor sit amet, consectetur adipiscing
              elit.
            </div>
          </div>
          <a href="#" class="button__book">Réserver ma place</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Pied de page -->
  <?php require_once "_footer.html.php"; ?>

  <script src="script.js"></script>
</body>

</html>