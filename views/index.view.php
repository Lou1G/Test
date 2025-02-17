<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
  <div class="relative w-full slider-container">
    <div class="slider-track">
      <img src="images/AzadiLogoBred.png" alt="Azadi Swim Academy" class="slider-image">
      <img src="images/GruppeBillede.jpg" alt="Gruppe Billede" class="slider-image">
      <!-- Tilføj videoen her -->
      <video class="slider-video" autoplay loop muted>
        <source src="images/GruppeVid.mp4" type="video/mp4">
        Din browser understøtter ikke video tag.
      </video>
    </div>
  </div>

  <!-- Dots container under billedet -->
  <div class="dots flex justify-center space-x-2 mt-4">
    <span id="dot-1" class="dot filled"></span>
    <span id="dot-2" class="dot"></span>
    <span id="dot-3" class="dot"></span> <!-- Tilføjet ekstra prik -->
  </div>

  <!-- Ny sektion med to kolonner til åbningstider og jubilæum -->
  <section class="two-columns">
    <div class="column">
      <p><strong>Træningstider:</strong></p>
      <p>Mandag &emsp; 16.30-20.30</p>
      <p>Tirsdag &emsp; 16.30-20.30</p>
      <p>Onsdag &emsp; 16.30-20.30</p>
      <p>Torsdag &emsp; 16.30-20.30</p>
      <p>Fredag &emsp; Lukket</p>
      <p>Lørdag &emsp; Lukket</p>
      <p>Søndag &emsp; Lukket</p>

      <p style="margin-top: 20px;"><strong>Telefontider:</strong></p>
      <p>Mandag &emsp; 14.00-20.00</p>
      <p>Tirsdag &emsp; 14.00-20.00</p>
      <p>Onsdag &emsp; 14.00-20.00</p>
      <p>Torsdag &emsp; 14.00-20.00</p>
      <p>Fredag &emsp; Lukket</p>
      <p>Lørdag &emsp; Lukket</p>
      <p>Søndag &emsp; Lukket</p>

      <!-- Tilføj billedet her -->
      <img src="images/ForsideBillede.jpg" alt="Forsidebillede" style="width: 100%; margin: 20px 0;">

      <!-- Kontakt din træner sektionen -->
      <h3 style="margin-top: 30px; font-weight: bold;">Kontakt din træner</h3>
      <p>Har du spørgsmål eller brug for hjælp kan du kontakte din træner her.</p>
      <a href="/contact" style="text-decoration: none;">
        <button style="
        margin-top: 10px;
        padding: 10px 20px;
        font-size: 1rem;
        font-weight: bold;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      ">Kontakt din træner</button>
      </a>
    </div>

    <div class="column">
      <p><strong>Jubilæum:</strong></p>
      <p style="margin-bottom: 15px; font-size: 1.5rem; font-weight: bold;">Vi fejrer 1 år 🥳</p>
      <p style="margin-bottom: 15px;">Wow, hvor skal jeg starte! Jeg er simpelthen så taknemmelig og fyldt med glæde over alt det, vi har opnået siden jeg startede Azadi Swim Academy den 8. september 2023. Det har været en uforglemmelig rejse, og jeg vil gerne sige tusind, tusind tak til jer alle – uden jeres støtte, ville dette ikke have været muligt! ❤️</p>
      <p style="margin-bottom: 15px;">Som 17-årig grundlagde jeg akademiet med en drøm om at skabe et sted, hvor både børn og voksne kan lære at svømme på en tryg, sjov og motiverende måde. Efter syv år med erfaring fra forskellige svømmeklubber og en brændende passion for svømning, vidste jeg, at det var tid til at gøre noget anderledes – og det er præcis, hvad vi har gjort! 🙌</p>
      <p style="margin-bottom: 15px;">Jeg vil gerne rette en særlig stor tak til mine fantastiske trænere, der hver dag arbejder utrætteligt for at hjælpe med at bringe min drøm til live. I gør det muligt at skabe et akademi, hvor hver enkelt elev føler sig set, hørt og motiveret – og uden jeres engagement ville vi ikke være, hvor vi er i dag. Tak for jeres dedikation, jeres kærlighed til faget og jeres støtte – det betyder alt for mig! 🌟</p>
      <p style="margin-bottom: 15px;">I har alle været en del af denne fantastiske rejse, og det betyder alt for mig. Til hver eneste elev, forælder, træner og alle, der har støttet os – tak! Jeg kunne ikke være mere stolt af vores lille, men stærke svømmefamilie. Sammen har vi undervist over 80 elever, set dem udvikle deres færdigheder i vandet, og skabt et fællesskab, hvor alle føler sig velkomne. 💙</p>
      <p style="margin-bottom: 15px;">Jeg tror på, at tålmodighed, positiv forstærkning og personlig tilpasning er nøglen til at opnå store resultater i svømning. Og jeg ser frem til at fortsætte med at hjælpe jer alle med at nå jeres fulde potentiale – vi er kun lige begyndt! 🚀</p>
      <p style="margin-bottom: 15px;">Endnu en gang – tusind tak for jeres tillid, støtte og loyalitet. Jeg glæder mig til at se, hvad fremtiden bringer for Azadi Swim Academy, og jeg er så spændt på at tage jer alle med på den næste del af rejsen.</p>
      <p style="margin-bottom: 15px;">Med kærlighed og taknemmelighed,</p>
      <p style="margin-bottom: 15px;">Anita Azadi</p>
    </div>
  </section>

  <?php require('partials/footer.php') ?>
</main>


<script>
  // Slider JavaScript (som tidligere)
  const sliderTrack = document.querySelector('.slider-track');
  const dots = document.querySelectorAll('.dot');
  let currentIndex = 0;
  let startX = 0;
  let currentTranslate = 0;
  let isDragging = false;

  function updateSlider() {
    sliderTrack.style.transform = `translateX(-${currentIndex * 100}%)`;
    dots.forEach(dot => dot.classList.remove('filled'));
    dots[currentIndex].classList.add('filled');
  }

  function startDrag(event) {
    isDragging = true;
    startX = event.type.includes('touch') ? event.touches[0].clientX : event.clientX;
    sliderTrack.style.transition = 'none';
    event.preventDefault();
  }

  function onDrag(event) {
    if (!isDragging) return;
    const currentX = event.type.includes('touch') ? event.touches[0].clientX : event.clientX;
    const diffX = startX - currentX;
    currentTranslate = -currentIndex * 100 - (diffX / window.innerWidth) * 100;
    sliderTrack.style.transform = `translateX(${currentTranslate}%)`;
  }

  function endDrag() {
    if (!isDragging) return;
    isDragging = false;
    sliderTrack.style.transition = 'transform 0.5s ease';
    if (currentTranslate < -currentIndex * 100 - 20) {
      currentIndex = Math.min(currentIndex + 1, dots.length - 1);
    } else if (currentTranslate > -currentIndex * 100 + 20) {
      currentIndex = Math.max(currentIndex - 1, 0);
    }
    updateSlider();
  }

  sliderTrack.addEventListener('mousedown', startDrag);
  sliderTrack.addEventListener('mousemove', onDrag);
  sliderTrack.addEventListener('mouseup', endDrag);

  sliderTrack.addEventListener('touchstart', startDrag);
  sliderTrack.addEventListener('touchmove', onDrag);
  sliderTrack.addEventListener('touchend', endDrag);

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      currentIndex = index;
      updateSlider();
    });
  });

  setInterval(() => {
    currentIndex = (currentIndex + 1) % dots.length;
    updateSlider();
  }, 5000);
</script>

<style>
  .slider-container {
    overflow: hidden;
    width: 100%;
    position: relative;
  }

  .slider-track {
    display: flex;
    transition: transform 0.5s ease;
    will-change: transform;
  }

  .slider-image {
    width: 100%;
    height: auto;
    min-width: 100%;
    object-fit: cover;
    user-select: none;
    -webkit-user-drag: none;
  }

  .dots {
    display: flex;
    justify-content: center;
    gap: 4px;
    margin-top: 10px;
  }

  .dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: transparent;
    border: 2px solid black;
    opacity: 0.5;
  }

  .filled {
    background-color: black;
    opacity: 1;
  }

  /* Styling til sektioner med hvid baggrund */
  section {
    background-color: #ffffff;
  }

  /* Styling til to-kolonne sektion */
  .two-columns {
    display: flex;
    justify-content: space-between;
    /* Sørger for, at kolonnerne er på samme linje med plads imellem */
    padding: 20px;
    margin-top: 70px;
    /* Justeret margin-top for at rykke sektion 2 ned */
  }

  .column {
    flex: 1;
    padding: 10px;
    font-size: 1.2rem;
  }

  .column p {
    display: flex;
    justify-content: space-between;
    /* Placerer tekstene på hver sin side */
    margin: 5px 0;
  }

  .column p:first-child {
    font-weight: bold;
  }
</style>
