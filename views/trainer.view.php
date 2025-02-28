<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<main style="display: flex; flex-wrap: wrap; justify-content: center; gap: 55px; padding: 20px; margin-top: 30px;">
    <!-- Trænerkort 1 -->
    <div class="feature-card">
        <img src="/images/Trainer1.jpg" alt="Trainer 1" class="img-fluid" />
        <h3><strong>Jeg hedder Karina Azadi</strong></h3>
        <p>
            Jeg underviser både børn og voksne på alle niveauer og har stor erfaring med at tilpasse undervisningen til den enkelte. Mit fokus er at skabe en tryg og motiverende læringsoplevelse, hvor du kan udvikle dig i dit eget tempo.
        </p>
    </div>

    <!-- Trænerkort 2 -->
    <div class="feature-card">
        <img src="/images/Trainer2.jpg" alt="Trainer 2" class="img-fluid" />
        <h3><strong>Jeg hedder Caroline Koch</strong></h3>
        <p>
            Jeg har erfaring med både hold- og eneundervisning. Særligt er jeg rutineret i undervisning af yngre børn i alderen 2 - 10 år,
            og har mange kompetencer indenfor vandtilvænning, samt den grundlæggende basis for at lære børn at svømme.
            Derudover har jeg erfaring med undervisning af børn som er ramt af vandskræk, samt børn der er ekstra utrygge ved vand,
            og som behøver undervisning indenfor stabile og trygge rammer.
        </p>
    </div>

    <!-- Trænerkort 3 -->
    <div class="feature-card">
        <img src="/images/Trainer3.jpg" alt="Trainer 3" class="img-fluid" />
        <h3><strong>Mit navn er Karl-Emil Sterll</strong></h3>
        <p>
            Jeg har erfaring i både hold og med en undervisning, især for børn i alderen 8-12 år.
            Jeg underviser i de grundlæggende ting inden for svømning, samtidig med at jeg også kigger på de lidt mere tekniske ting inden for svømning.
            Du finder mig altid smilende og glad på kanten.
        </p>
    </div>

    <!-- Trænerkort 4 -->
    <div class="feature-card">
        <img src="/images/Trainer4.jpg" alt="Trainer 4" class="img-fluid" />
        <h3><strong>Jeg hedder Kimia Zolfaghari</strong></h3>
        <p>
            Jeg underviser babyer, børn og voksne på alle niveauer – fra nybegyndere til elitesvømmere. Derudover hjælper jeg personer med vandskræk med at opbygge tryghed i vandet.
            Min undervisning handler om teknik, selvtillid og glæde ved svømning. Jeg er tålmodig og engageret i at hjælpe alle med at udvikle sig, uanset udgangspunkt.
        </p>
    </div>
</main>

<?php require('partials/footer.php') ?>

<style>
    body {
        background-color: #f1f5f9;
    }

    .feature-card {
        background-color: #f9fbfc;
        border: 1px solid #eee;
        border-radius: 8px;
        padding: 30px;
        width: 400px;
        height: auto;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .feature-card:hover {
        transform: translateY(-5px);
    }

    .feature-card img {
        width: 100%;
        height: auto;
        max-width: 320px;
        margin: 15px auto;
    }

    .feature-card h3 {
        font-size: 16px;
        padding-top: 10px;
        margin-bottom: 10px;
    }

    .feature-card p {
        font-size: 14px;
        line-height: 1.5;
        text-align: center;
    }
</style>
