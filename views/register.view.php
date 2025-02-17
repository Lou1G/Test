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
        <div class="register-box" id="registrationBox">
            <h2>Anmod om tilmeldelse</h2>
            <form id="registerForm" method="POST">
                <label for="name">Fulde navn (på eleven)</label>
                <input type="text" id="name" name="name" placeholder="Indtast fulde navn">
                <div class="error-message" id="nameError"></div>

                <label for="age">Alder</label>
                <input type="date" id="age" name="age">
                <div class="error-message" id="ageError"></div>

                <label for="level">Nuværende svømmeniveau</label>
                <input type="text" id="level" name="level" placeholder="Beskriv svømmeniveau">
                <div class="error-message" id="levelError"></div>

                <label for="goal">Mål med svømmeundervisningen</label>
                <input type="text" id="goal" name="goal" placeholder="Hvad ønsker du at opnå?">
                <div class="error-message" id="goalError"></div>

                <label for="phone">Telefonnummer</label>
                <input type="tel" id="phone" name="phone" placeholder="Indtast telefonnummer" maxlength="11" oninput="formatPhoneNumber()">
                <div class="error-message" id="phoneError"></div>

                <label for="email">Mail</label>
                <input type="email" id="email" name="email" placeholder="Indtast e-mail">
                <div class="error-message" id="emailError"></div>

                <label for="comment">Kommentar</label>
                <textarea id="comment" name="comment" placeholder="Tilføj eventuelle kommentarer"></textarea>

                <button type="submit">Send tilmelding</button>
            </form>
        </div>

        <div id="successMessage" class="success-message" style="display: none;">
            Din tilmelding er sendt, du får hermed svar så snart vi har en ledig træner til dig!
            <br>
            <button class="new-registration-button" onclick="resetForm()">Tilmeld flere</button>
        </div>
    </main>

    <?php require('partials/footer.php') ?>

    <script>
        const form = document.getElementById('registerForm');
        const registrationBox = document.getElementById('registrationBox');
        const successMessage = document.getElementById('successMessage');

        function formatPhoneNumber() {
            const phoneInput = document.getElementById('phone');
            let phoneValue = phoneInput.value.replace(/\D/g, ''); // Remove non-numeric characters

            // Format phone number as xx xx xx xx
            if (phoneValue.length <= 2) {
                phoneInput.value = phoneValue;
            } else if (phoneValue.length <= 4) {
                phoneInput.value = phoneValue.substring(0, 2) + ' ' + phoneValue.substring(2, 4);
            } else if (phoneValue.length <= 6) {
                phoneInput.value = phoneValue.substring(0, 2) + ' ' + phoneValue.substring(2, 4) + ' ' + phoneValue.substring(4, 6);
            } else {
                phoneInput.value = phoneValue.substring(0, 2) + ' ' + phoneValue.substring(2, 4) + ' ' + phoneValue.substring(4, 6) + ' ' + phoneValue.substring(6, 8);
            }
        }

        function validateField(field) {
            const input = document.getElementById(field);
            const errorMessageElement = document.getElementById(`${field}Error`);

            input.classList.remove('error');
            errorMessageElement.innerText = '';

            if (field !== 'comment' && input.value === '') {
                input.classList.add('error');
                errorMessageElement.innerText = 'Dette felt er påkrævet.';
                return false;
            }

            if (field === 'email') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(input.value)) {
                    input.classList.add('error');
                    errorMessageElement.innerText = 'Denne e-mailadresse er ikke gyldig.';
                    return false;
                }
            }

            return true;
        }

        form.addEventListener('submit', function(e) {
            e.preventDefault();

            let valid = true;
            const fields = ['name', 'age', 'level', 'goal', 'phone', 'email'];
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

        const fields = ['name', 'age', 'level', 'goal', 'phone', 'email'];
        fields.forEach(field => {
            const input = document.getElementById(field);
            input.addEventListener('blur', function() {
                validateField(field);
            });
        });

        function resetForm() {
            registrationBox.style.display = 'block';
            successMessage.style.display = 'none';
            form.reset();
        }
    </script>
</body>

</html>
