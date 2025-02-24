<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('partials/banner.php') ?>

<main>
  <div class="relative w-full slider-container">
    <div class="slider-track">
      <img src="images/AzadiLogoBred.png" alt="Azadi Swim Academy" class="slider-image">
      <img src="images/GruppeBillede.jpg" alt="Gruppe Billede" class="slider-image">
      <img src="images/PoolForsideBillede.jpg" alt="Pool Forside Billede" class="slider-image">
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
    <span id="dot-3" class="dot"></span>
    <span id="dot-4" class="dot"></span>
  </div>

  <!-- Ny sektion med to kolonner til åbningstider og jubilæum -->
  <section class="two-columns">
    <div class="column">
      <p><strong>Træningstider:</strong></p>
      <p>Mandag &emsp; 16.30-20.00</p>
      <p>Tirsdag &emsp; 16.30-20.00</p>
      <p>Onsdag &emsp; 16.30-20.00</p>
      <p>Torsdag &emsp; 16.30-20.00</p>
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
      <img src="images/ForsideBillede.jpg" alt="Forsidebillede" class="forsidebillede" style="width: 100%; margin: 20px 0;">

      <!-- Kontakt din træner sektionen -->
      <h3 style="margin-top: 30px; font-weight: bold;">Kontakt din træner</h3>
      <p>Har du spørgsmål eller brug for hjælp kan du kontakte din træner her.</p>
      <a href="/contact" class="signup-button"> 
        Kontakt din træner</a>
      </a>
    </div>

    <div class="column">
      <p><strong>Hos Azadi Swim Academy handler svømning ikke om baner – det handler om teknik, ro og personlig udvikling i vandet. Vi lejer hele svømmehallen, så du får en uforstyrret og fokuseret svømmeoplevelse uden kaos fra banesvømning.</strong></p>
      <p>Vores undervisning er skræddersyet til både børn og voksne, uanset niveau. Uden forstyrrelser fra andre svømmere skaber vi et trygt miljø, hvor du kan forbedre din teknik i dit eget tempo.</p>
      <p style="margin-top: 20px;"><strong>Hvad gør os unikke?</strong></p>
      <p>🌊 Ingen banesvømning – kun fokus på dig</p>
      <p>🎯 Teknik og ro i centrum – lær korrekt svømning uden stress</p>
      <p>💡 Hele svømmehallen for dig selv – ingen distraktioner</p>
      <p>🏊 Personlig undervisning – skræddersyet til dine mål</p>
      <p>Oplev svømning på en ny måde – book din første session i dag!</p>

      <!-- Adresse og Google Maps visning -->
      <h3 style="margin-top: 57px;">Vores placering</h3>
      <p>Arnhem Alle 11, 2791</p>
      <div class="map-container" style="margin-top: 20px;">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2244.1234567890123!2d12.1234567890123!3d55.1234567890123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1234567890123456!2sArnhem%20Alle%2011%2C%202791!5e0!3m2!1sen!2sdk!4v1611234567890!5m2!1sen!2sdk"
          width="728"
          height="540"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </div>
  </section>
</main>

<?php require('partials/footer.php') ?>

<script>
  // Slider JavaScript
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
</script>

<style>
  body {
    background-color: #f1f5f9;
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

  .slider-image,
  .slider-video {
    width: 100%;
    height: auto;
    min-width: 100%;
    object-fit: cover;
    user-select: none;
    -webkit-user-drag: none;
  }

  .forsidebillede {
    height: 540px;
    object-fit: cover;
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

  .two-columns {
    display: flex;
    justify-content: space-between;
    padding: 20px;
    margin-top: 20px;
  }

  .column {
    flex: 1;
    padding: 10px;
    font-size: 1.2rem;
  }

  .column p {
    display: flex;
    justify-content: space-between;
    margin: 5px 0;
  }

  .column p:first-child {
    font-weight: bold;
  }
</style>
