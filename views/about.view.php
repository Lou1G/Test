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
                    <p>Jeg hedder Anita Azadi og er grundlægger af Azadi Swim Academy.
                    Min svømmekarriere begyndte i 2019, og efter flere års erfaring i forskellige svømmeklubber blev jeg færdiguddannet som svømmeinstruktør i 2023. Gennem min rejse har jeg opbygget en stærk passion for svømning og en dyb forståelse for undervisningsteknikker, der hjælper folk med at udvikle deres færdigheder i vandet.
                    Jeg har arbejdet med både børn og voksne på forskellige færdighedsniveauer, og min erfaring har givet mig en god fornemmelse for at tilpasse undervisningen til den enkelte elevs behov og tempo. Jeg mener, at mange svømmeklubber ikke leverer den kvalitet, som svømmere fortjener, og derfor valgte jeg at starte Azadi Swim Academy den 8. september 2023.</p>

                    <p>Jeg tror på, at en dygtig kommunikator kan forklare komplekse teknikker på en letforståelig måde, samtidig med at de opbygger tillid og skaber en positiv undervisningsatmosfære. Dette fører til fremragende resultater for eleverne. Positiv forstærkning og tålmodighed er nøglen til at inspirere svømmere til at nå deres fulde potentiale i vandet.</p>

                    <p>Vi har erfaring med undervisning i svømning på tværs af forskellige aldersgrupper, fra spædbørn til voksen vandtilvænning. Mit team og jeg ser frem til at hjælpe dig med at forbedre dine svømmefærdigheder.</p>
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
