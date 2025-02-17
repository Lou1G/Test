<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<main style="display: flex; flex-wrap: wrap; justify-content: center; gap: 55px; padding: 20px; margin-top: 50px;">
    <!-- Trænerkort 1 -->
    <div class="feature-card">
        <img src="/images/AzadiLogo.png" alt="Azadi Logo" class="img-fluid" />
        <h3>Bla bla bla</h3>
    </div>

    <!-- Trænerkort 2 -->
    <div class="feature-card">
        <img src="/images/Trainer1.jpg" alt="Trainer 1" class="img-fluid" />
        <h3><strong>Jeg hedder Caroline Koch.</strong></h3>
        <p>
            Jeg har erfaring med både hold- og eneundervisning. Særligt er jeg rutineret i undervisning af yngre børn i alderen 2 - 10 år,
            og har mange kompetencer indenfor vandtilvænning, samt den grundlæggende basis for at lære børn at svømme.
            Derudover har jeg erfaring med undervisning af børn som er ramt af vandskræk, samt børn der er ekstra utrygge ved vand,
            og som behøver undervisning indenfor stabile og trygge rammer.
        </p>
    </div>

    <!-- Trænerkort 3 -->
    <div class="feature-card">
        <img src="/images/Trainer2.jpg" alt="Trainer 2" class="img-fluid" />
        <h3><strong>Mit navn er Karl-Emil Sterll</strong></h3>
        <p>
            Jeg har erfaring i både hold og med en undervisning, især for børn i alderen 8-12 år.
            Jeg underviser i de grundlæggende ting inden for svømning, samtidig med at jeg også kigger på de lidt mere tekniske ting inden for svømning.
            Du finder mig altid smilende og glad på kanten.
        </p>
    </div>

    <!-- Trænerkort 4 -->
    <div class="feature-card">
        <img src="/images/AzadiLogo.png" alt="Azadi Logo" class="img-fluid" />
        <h3>Bla bla bla</h3>
    </div>
</main>

<?php require('partials/footer.php') ?>

<style>
    .feature-card {
        background-color: #f8f9fa;
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
