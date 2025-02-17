<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
    <!-- Sektion med billede og tekst -->
    <section class="about-section container px-4 text-center">
        <div class="row gx-5">
            <!-- Første kolonne: Billedet -->
            <div class="col">
                <div class="p-3 about-image-container">
                    <img src="images/KarinaBillede.jpg" alt="Anita Azadi" class="about-image">
                </div>
            </div>

            <!-- Anden kolonne: Teksten -->
            <div class="col">
                <div class="p-3 about-text">
                    <p>Jeg hedder Anita Azadi og er 18 år gammel. Jeg startede i 2019 på min svømmekarriere og blev færdiguddannet som svømmeinstruktør i 2023. Under min 5-årige rejse har jeg været en del af forskellige svømmeklubber og afdelinger. Her har jeg fået en stærk passion for svømning og en dyb forståelse for undervisningsteknikker, der er nødvendige for at hjælpe folk med at udvikle deres færdigheder i vandet. Jeg har arbejdet med både børn og voksne på forskellige færdighedsniveauer, og min erfaring har givet mig en god fornemmelse for at tilpasse undervisningen efter den enkelte elevs behov og tempo. Jeg mener, at mange svømmeklubber ikke gør det godt nok, og derfor valgte jeg at starte Azadi Swim Academy den 8. september 2023.</p>

                    <p>Jeg tror på, at en dygtig kommunikator kan forklare komplekse teknikker på en letforståelig måde, samtidig med at de opbygger tillid og skaber en positiv undervisningsatmosfære. Dette fører til fremragende resultater med eleverne. Jeg tror på, at positiv forstærkning og tålmodighed er nøglen til at inspirere eleverne til at nå deres fulde potentiale i vandet.</p>

                    <p>Vi har erfaring med undervisning i svømning på tværs af forskellige aldersgrupper, fra spædbørn til voksen vandtilvænning. Jeg og vores trænere ser frem til at arbejde sammen med dig og hjælpe dig med at forbedre dine svømmefærdigheder.</p>
                </div>
            </div>
        </div>
    </section>

    <?php require('partials/footer.php') ?>
</main>

<style>
    .about-section {
        background-color: #ffffff;
        padding: 40px 20px;
        margin-top: 50px;
        /* Tilføjer margin-top for at rykke sektionen ned */
    }

    .about-image {
        width: 100%;
        max-width: 380px;
        height: auto;
        border-radius: 0;
    }

    .about-text {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #333;
    }

    .about-text p {
        margin-bottom: 20px;
    }
</style>
