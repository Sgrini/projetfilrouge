<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/admin/include/auth.php';
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="/style/main.css" />
    <title>MNS Gest Club</title>
</head>

<body>
    <!-- HEADER: Barre de navigation principale -->
    <?php require_once "_header.html.php"; ?>
    <!-- SECTION HERO: Introduction du site -->
    <section class="hero">
        <div class="hero__overlay"></div>
        <!-- Effet de contraste -->
        <div class="hero__header">
            <h1>Bienvenue sur MNS Gest Club</h1>
            <div class="hero__header-text">
                <p>
                    Réserver vos places d'événements de votre club préféré en un clic
                </p>
            </div>
            <div class="hero__header-cta">
                <?php if (!isset($_SESSION['utilisateur_id'])): ?>

                    <button class="btn btn-signup">S'inscrire</button>
                    <button class="action-button pro">Plus d'informations</button>
                <?php else: ?>
                    <a href="events.php" class="action-button">Voir les événements</a>
                <?php endif; ?>
            </div>
        </div>
        <!-- SECTION CLUB: Inscription des clubs -->
        <div class="hero__main">
            <div class="hero__main-left">
                <h2>Vous êtes un club ?</h2>
                <p>
                    Inscrivez votre équipe chez nous et permettez à ses supporters de
                    réserver chaque match,<br />évènements et rencontres. Grâce à nos
                    services, vous bénéficiez :
                </p>
                <ul class="hero__main-left-list">
                    <li>
                        <img src="/img/basketballicon.svg" alt="Basket icon" />
                        <p>D’un processus de réservation complet.</p>
                    </li>
                    <li>
                        <img src="/img/basketballicon.svg" alt="Basket icon" />
                        <p>
                            Une traçabilité mais aussi sécurité grâce à notre système de QR
                            Code.
                        </p>
                    </li>
                    <li>
                        <img src="/img/basketballicon.svg" alt="Basket icon" />
                        <p>
                            Vos supporters au plus proche de vous avec des services conçus
                            pour eux.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="hero__main-right">
                <img src="/img/basketclub.webp" alt="" />
            </div>
        </div>
    </section>
    <!-- SECTION ÉVÉNEMENTS: Gestion des événements -->
    <section class="features">
        <div class="features__main">
            <div class="features__main-left">
                <img src="/img/basketevents.webp" alt="" />
            </div>
            <div class="features__main-right">
                <h2>Vous controllez vos événements !</h2>
                <p>
                    Un calendrier intéractif sera mis à votre disposition et vous
                    permettra d’avoir la main mise sur vos événements en temps réel :
                </p>
                <ul class="features__main-right-list">
                    <li>
                        <img src="/img/basketballicon.svg" alt="Basket icon" />
                        <p>
                            Créer, modifier et supprimer vos événements grâce à notre
                            calendrier intéractif.
                        </p>
                    </li>
                    <li>
                        <img src="/img/basketballicon.svg" alt="Basket icon" />
                        <p>
                            Classification par type d’événement (match, compétition, gala).
                        </p>
                    </li>
                    <li>
                        <img src="/img/basketballicon.svg" alt="Basket icon" />
                        <p>Profiter d’un affichage disponible en temps réel.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- SECTION FAN: Fonctionnalités pour les supporters -->
    <section class="last__section">
        <div class="last__main">
            <div class="last__main-left">
                <h2>Vous êtes un fan ?</h2>
                <p></p>
                <ul class="last__main-left-list">
                    <li>
                        <p>
                            Profitez d’une expérience spécialement conçue pour vous : <br />
                            en créant votre compte, bénéficiez d’un accès à tous les
                            événements sportifs. <br />
                            Interagir avec vos amis et participer aux mêmes matchs est
                            maintenant possible !
                        </p>
                    </li>
                    <li>
                        <img src="/img/basketballicon.svg" alt="Basket icon" />
                        <p>Réservez vos places et recevez votre QR code !</p>
                    </li>
                    <li>
                        <img src="/img/basketballicon.svg" alt="Basket icon" />
                        <p>Suivez vos amis et allez aux mêmes événements qu’eux !</p>
                    </li>
                    <li>
                        <img src="/img/basketballicon.svg" alt="Basket icon" />
                        <p>
                            Notez pour votre joueur préféré mais aussi l’événement lui-même
                            !
                        </p>
                    </li>
                </ul>
            </div>
            <div class="last__main-right">
                <img src="/img/basketfan.webp" alt="calendrier" />
            </div>
        </div>
    </section>
    <!-- SECTION FAQ: Questions fréquentes -->
    <section id="foire_aux_questions" class="section__faq">
        <div class="faq">
            <h3>Questions fréquemment posées, classées par popularité :</h3>
            <input id="faq-a" type="checkbox" />
            <label for="faq-a">
                <p class="faq-heading">
                    Comment puis-je réserver une place pour un événement sportif ?
                </p>
                <div class="faq-arrow"></div>
                <p class="faq-text">
                    1.Créer un compte ou se connecter si vous en avez déjà un. (...)<br />
                    2.Parcourir les événements disponibles via le calendrier
                    interactif.<br />
                    3.Sélectionner l’événement souhaité et consulter les places
                    disponibles par catégorie (tribune, VIP, standard).<br />
                    4. Choisir votre place (limité à 2 places par adhérent ).<br />
                    5. Confirmer votre réservation et recevoir un email de confirmation
                    avec votre QR code d’accès. <br />
                    <strong>
                        Le jour de l’événement, présentez votre QR code à l’entrée pour
                        valider votre présence !</strong>
                </p>
            </label>
            <input id="faq-b" type="checkbox" />
            <label for="faq-b">
                <p class="faq-heading">
                    Puis-je annuler ou modifier ma réservation après confirmation ?
                </p>
                <div class="faq-arrow"></div>
                <p class="faq-text">
                    Oui, vous pouvez annuler ou modifier votre réservation sous
                    certaines conditions : (...)<br />
                    1.Annulation : Vous pouvez annuler votre réservation directement
                    depuis votre espace utilisateur, dans la section "Mes réservations".
                    Une confirmation vous sera envoyée par email. Attention, des délais
                    d’annulation peuvent s’appliquer en fonction de l’événement.<br />
                    2.Modification : Si vous souhaitez changer de place ou d’événement,
                    vous devrez d’abord annuler votre réservation actuelle, puis
                    effectuer une nouvelle réservation (sous réserve de
                    disponibilité).<br />
                    <strong>
                        En cas de question, n’hésitez pas à contacter le support via
                        l’application.
                    </strong>
                </p>
            </label>
            <input id="faq-c" type="checkbox" />
            <label for="faq-c">
                <p class="faq-heading">
                    Comment fonctionne le QR code pour accéder au stade ?
                </p>
                <div class="faq-arrow"></div>
                <p class="faq-text">
                    Une fois votre réservation confirmée, vous recevrez un QR code
                    unique par email et dans votre espace utilisateur. (...) <br />
                    <strong> Le jour de l’événement : </strong><br />
                    1.Présentez votre QR code à l’entrée du stade (sur votre téléphone
                    ou imprimé). <br />
                    2.Un agent ou une borne automatique scannera votre code pour valider
                    votre accès. <br />
                    3.Une fois validé, vous pourrez entrer et profiter du match ! <br />
                    <strong>
                        Ce système permet un accès rapide et sécurisé, tout en
                        garantissant la traçabilité des présences.</strong>
                </p>
            </label>
            <input id="faq-d" type="checkbox" />
            <label for="faq-d">
                <p class="faq-heading">
                    Puis-je voir quels événements mes amis ont réservés ?
                </p>
                <div class="faq-arrow"></div>
                <p class="faq-text">
                    Oui ! Grâce à la fonctionnalité "Mes amis", vous pouvez voir à quels
                    événements ils assisteront. (...) <br />
                    <strong> Voici comment ça fonctionne : </strong><br />
                    1.Ajoutez des amis à votre liste via leur nom d’utilisateur ou
                    email.
                    <br />
                    2.Consultez la liste des événements auxquels ils ont réservé des
                    places. <br />
                    3.Réservez à votre tour pour les rejoindre et vivre l’expérience
                    ensemble ! <br />
                    <strong>
                        Cette fonctionnalité vous permet de partager des moments sportifs
                        avec vos proches et de mieux organiser vos sorties.
                    </strong>
                </p>
            </label>
            <input id="faq-e" type="checkbox" />
            <label for="faq-e">
                <p class="faq-heading">
                    Quels moyens de paiement sont acceptés pour les réservations ?
                </p>
                <div class="faq-arrow"></div>
                <p class="faq-text">
                    Nous acceptons plusieurs modes de paiement pour faciliter vos
                    réservations : (...)<br />
                    1.Carte bancaire (Visa, Mastercard, etc.) <br />
                    2.Paiement en ligne sécurisé via des plateformes comme PayPal ou
                    Stripe <br />
                    3.Portefeuilles numériques (Apple Pay, Google Pay) <br />
                    4.Possibilité de paiement sur place (si disponible pour certains
                    événements) <br />
                    <strong>Toutes les transactions sont sécurisées et protégées selon les
                        normes en vigueur. Vous recevrez une confirmation par email dès
                        que votre paiement sera validé.</strong>
                </p>
            </label>
        </div>
    </section>
    <hr />
    <?php require_once "_footer.html.php"; ?>

    <script src="script.js"></script>
</body>

</html>