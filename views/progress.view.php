<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('partials/head.php') ?>
    <style>
        .two-columns {
            display: flex;
            justify-content: space-between;
            max-width: 1200px;
            margin: 0 auto;
            gap: 20px;
            padding: 20px;
        }

        .column {
            flex: 1;
            padding: 10px;
            text-align: left;
        }

        .column ul {
            list-style-type: none;
            padding: 0;
        }

        .signup-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 90px;
        }
    </style>
</head>

<body>
    <?php require('partials/nav.php') ?>
    <?php require('partials/banner.php') ?>

    <main style="text-align: center; margin-top: 20px;">
        <!-- To-kolonne layout -->
        <section class="two-columns">
            <!-- Første kolonne -->
            <div class="column">
                <p><strong>Velkommen til Azadi Swim Academy!</strong></p>
                <p>Hos Azadi Swim Academy er vi glade for at byde dig velkommen og ser frem til at hjælpe dig med at forbedre dine eller dit barns svømmefærdigheder. Vi tilbyder professionel svømmeundervisning til alle aldersgrupper – fra spædbørn til voksne, der ønsker vandtilvænding og forbedring af deres teknikker.</p>
                <p>Vores undervisning finder sted i Vestamager Svømmehal, hvor vi tilbyder fleksible undervisningsmuligheder for at imødekomme dine behov. Du kan vælge mellem individuelle sessioner af forskellig varighed samt pakker, der giver mulighed for at planlægge en struktureret træningsperiode.</p>
            </div>

            <!-- Anden kolonne -->
            <div class="column">
                <p><strong>Priser for svømmeundervisning i Vestamager Svømmehal:</strong></p>
                <ul>
                    <li>10 gange 15 minutters undervisning: 1.250 kr.</li>
                    <li>10 gange 30 minutters undervisning: 2.500 kr.</li>
                    <li>10 gange 45 minutters undervisning: 3.750 kr.</li>
                </ul>
                <p>Vi anbefaler typisk 30 minutters undervisning ugentligt, da det giver en god balance mellem intensitet og indlæring. Vores træningstider er planlagt med faste tider, da vi arbejder med flere kunder for at sikre den bedste oplevelse.</p>
                <p>Kontakt os for at bekræfte denne tid eller for at finde et tidspunkt, der passer til dine behov. Vi tilpasser undervisningen efter dine specifikke mål og behov og ser frem til at arbejde sammen med dig for at opnå fremgang og sikkerhed i vandet.</p>
            </div>
        </section>

        <!-- Knappen nedenfor -->
        <p style="font-weight: bold; font-size: 1.2rem; margin-top: 20px;">Tryk her og fortæl os om dine behov eller noget i den stil</p>
        <a href="/register" class="signup-button">
            Tilmeld dig her
        </a>
    </main>

    <?php require('partials/footer.php') ?>
</body>

</html>
