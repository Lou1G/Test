<!DOCTYPE html>
<html lang="en">

<head>
  <?php require('partials/head.php') ?>
  <style>
    .register-box {
      background-color: #f8f9fa;
      border-radius: 8px;
      padding: 30px;
      width: 550px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 0 auto 100px;
    }

    .register-box form {
      display: flex;
      flex-direction: column;
      gap: 15px;
    }

    .register-box label {
      font-weight: bold;
      margin-bottom: -8px;
    }

    .register-box input,
    .register-box textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 14px;
    }

    .register-box textarea {
      height: 100px;
    }

    .register-box button {
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
    }

    .register-box button:hover {
      background-color: #0056b3;
    }

    .error {
      border-color: red !important;
    }

    .error-message {
      color: red;
      font-size: 12px;
      margin-top: -12px;
    }

    .success-message {
      font-size: 18px;
      color: green;
      margin-top: 20px;
    }

    .new-registration-button {
      background-color: #28a745;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      margin-top: 10px;
    }

    .new-registration-button:hover {
      background-color: #218838;
    }
  </style>
</head>

<body>
  <?php require('partials/nav.php') ?>
  <?php require('partials/banner.php') ?>

  <main style="text-align: center; margin-top: 50px;">
    <p>Skriv til os på mail:
      <a href="mailto:kbhmedhjaelp@gmail.com" style="color: #007BFF; text-decoration: none;">kbhmedhjaelp@gmail.com</a>
    </p>
    <p>eller ring på vores telefon:
      <a href="tel:41151519" style="color: #007BFF; text-decoration: none;">41151519</a>
    </p>

    <div class="register-box" id="registrationBox">
      <h2>Kontakt din træner</h2>
      <form id="registerForm" method="POST">
        <label for="trainer">Hvem er din træner?</label>
        <input type="text" id="trainer" name="trainer" placeholder="Indtast trænerens navn">
        <div class="error-message" id="trainerError"></div>

        <label for="phone">Telefonnummer (der skal ringes op til)</label>
        <input type="tel" id="phone" name="phone" placeholder="xx xx xx xx" oninput="formatPhoneNumber()" maxlength="11">
        <div class="error-message" id="phoneError"></div>

        <label for="reason">Hvorfor skal de ringes op?</label>
        <textarea id="reason" name="reason" placeholder="Beskriv hvorfor personen skal ringes op"></textarea>
        <div class="error-message" id="reasonError"></div>

        <button type="submit">Send anmodning</button>
      </form>
    </div>

    <div id="successMessage" class="success-message" style="display: none;">
      Din anmodning er sendt! Du får svar, så snart vi har mulighed for at kontakte træneren.
      <br>
      <button class="new-registration-button" onclick="resetForm()">Anmod om kontakt igen</button>
    </div>
  </main>

  <?php require('partials/footer.php') ?>

  <script>
    const form = document.getElementById('registerForm');
    const registrationBox = document.getElementById('registrationBox');
    const successMessage = document.getElementById('successMessage');

    // Funktion til formatering af telefonnummer
    function formatPhoneNumber() {
      const phoneInput = document.getElementById('phone');
      let phoneValue = phoneInput.value.replace(/\D/g, ''); // Fjern alle ikke-numeriske tegn

      // Begræns til maks. 8 cifre
      if (phoneValue.length > 8) {
        phoneValue = phoneValue.slice(0, 8);
      }

      // Formater som xx xx xx xx
      if (phoneValue.length <= 2) {
        phoneInput.value = phoneValue;
      } else if (phoneValue.length <= 4) {
        phoneInput.value = phoneValue.slice(0, 2) + ' ' + phoneValue.slice(2);
      } else if (phoneValue.length <= 6) {
        phoneInput.value = phoneValue.slice(0, 2) + ' ' + phoneValue.slice(2, 4) + ' ' + phoneValue.slice(4);
      } else {
        phoneInput.value = phoneValue.slice(0, 2) + ' ' + phoneValue.slice(2, 4) + ' ' + phoneValue.slice(4, 6) + ' ' + phoneValue.slice(6);
      }
    }

    // Funktion til validering af inputfelter
    function validateField(field) {
      const input = document.getElementById(field);
      const errorMessageElement = document.getElementById(`${field}Error`);

      input.classList.remove('error');
      errorMessageElement.innerText = '';

      if (field !== 'reason' && input.value.trim() === '') {
        input.classList.add('error');
        errorMessageElement.innerText = 'Dette felt er påkrævet.';
        return false;
      }

      if (field === 'phone' && input.value.replace(/\D/g, '').length < 8) {
        input.classList.add('error');
        errorMessageElement.innerText = 'Telefonnummer skal være gyldigt.';
        return false;
      }

      return true;
    }

    form.addEventListener('submit', function(e) {
      e.preventDefault();

      let valid = true;
      const fields = ['trainer', 'phone', 'reason'];

      fields.forEach(field => {
        if (!validateField(field)) {
          valid = false;
        }
      });

      if (valid) {
        registrationBox.style.display = 'none';
        successMessage.style.display = 'block';
      }
    });

    function resetForm() {
      registrationBox.style.display = 'block';
      successMessage.style.display = 'none';
      form.reset();
    }
  </script>
</body>

</html>
