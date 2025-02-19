<!DOCTYPE html>
<html lang="en">

<?php require('partials/head.php') ?>

<style>
    .student-box {
        background-color: #f8f9fa;
        border-radius: 8px;
        padding: 30px;
        width: 400px;
        /* height: 850px; */
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s ease-in-out;
        position: relative;
        overflow: hidden;
    }

    .student-box:hover {
        transform: translateY(-5px);
    }

    .media-container {
        position: relative;
        width: 100%;
        padding-top: 125%;
        overflow: hidden;
    }

    .media-container img,
    .media-container .video-container {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .video-container {
        display: none;
        background-color: black;
    }

    .video-container video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .nav-button {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        font-size: 18px;
        cursor: pointer;
        width: 30px;
        height: 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        z-index: 2;
        transition: background-color 0.1s ease-in-out, box-shadow 0.1s ease-in-out;
    }

    .nav-button:hover {
        background-color: rgba(80, 80, 80, 1);
        /* Mørkegrå nuance */
        box-shadow: 0 0 10px rgba(80, 80, 80, 0.8);
        /* Lys grå skygge */
    }

    .nav-button.left {
        left: 5px;
    }

    .nav-button.right {
        right: 5px;
    }

    .student-box p {
        margin-top: 20px;
    }

    .student-details {
        background-color: #ffffff;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 400px;
        margin: 20px auto;
        font-size: 1.1rem;
    }

    .student-details p {
        margin: 10px 0;
        line-height: 1.5;
    }

    .student-details p strong {
        font-weight: bold;
    }
</style>

<body>
    <?php require('partials/nav.php') ?>
    <?php require('partials/banner.php') ?>

    <main style="display: flex; flex-wrap: wrap; justify-content: center; gap: 55px; padding: 20px; margin-top: 50px;">
        <!-- Boks 1 -->
        <div class="student-box" id="box1">
            <div class="media-container">
                <button class="nav-button left" onclick="navigateMedia('box1', -1)">&#10094;</button>
                <img src="images/Student1.jpg" alt="Student 1">
                <div class="video-container">
                    <video>
                        <source src="images/Student1Vid.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <button class="nav-button right" onclick="navigateMedia('box1', 1)">&#10095;</button>
            </div>
            <div class="student-details" style="padding-top: 20px; text-align: left;">
                <p><strong>Aya, 11 år – Svømmeforløb</strong></p>
                <p><strong>Forløbsperiode:</strong> 09/10/2023 - 24/01/2024</p>
                <p><strong>Mål og resultater:</strong> Forbedring af svømmeteknik, herunder flydning, afsætning og crawl.</p>
                <p><strong>Træner:</strong> Karina Anita Azadi</p>
            </div>
        </div>

        <!-- Boks 2 -->
        <div class="student-box" id="box2">
            <div class="media-container">
                <button class="nav-button left" onclick="navigateMedia('box2', -1)">&#10094;</button>
                <img src="images/Student2.jpg" alt="Student 2">
                <div class="video-container">
                    <video>
                        <source src="images/Student2Vid.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <button class="nav-button right" onclick="navigateMedia('box2', 1)">&#10095;</button>
            </div>
            <div class="student-details" style="padding-top: 20px; text-align: left;">
                <p><strong>Silas, 7 år – Svømmeforløb</strong></p>
                <p><strong>Forløbsperiode:</strong> 09/11/2023 - 03/04/2024</p>
                <p><strong>Mål og resultater:</strong> Silas har gennemført 10 træningssessioner, hvor han har arbejdet med at forbedre svømmefærdigheder og nået mål som at flyde, afsætte og hente en ring fra bunden.</p>
                <p><strong>Træner:</strong> Karl-Emil Sterll</p>
            </div>
        </div>

        <!-- Boks 3 -->
        <div class="student-box" id="box3">
            <div class="media-container">
                <div class="video-container" style="display: block;">
                    <video controls>
                        <source src="images/Student3Vid.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="student-details" style="padding-top: 20px; text-align: left;">
                <p><strong>Niclas, 31 år – Svømmeforløb</strong></p>
                <p><strong>Forløbsperiode:</strong> 30/11/2023 - 04/04/2024</p>
                <p><strong>Mål og resultater:</strong> Niclas har gennemført 10 træningssessioner og arbejdet med crawl, dykning, hovedspring og streamline.</p>
                <p><strong>Træner:</strong> Karina Anita Azadi</p>
            </div>
        </div>

        <!-- Boks 4 -->
        <div class="student-box" id="box4">
            <div class="media-container">
                <div class="video-container" style="display: block;">
                    <video controls>
                        <source src="images/Student4Vid.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
            <div class="student-details" style="padding-top: 20px; text-align: left;">
                <p><strong>Lisa, 52 år – Svømmeforløb</strong></p>
                <p><strong>Forløbsperiode:</strong> 13/01/2024 - 22/05/2024</p>
                <p><strong>Mål og resultater:</strong> Lisa har gennemført 10 træningssessioner og arbejdet med teknikker som flydning, crawl og rygcrawl.</p>
                <p><strong>Træner:</strong> Karina Anita Azadi</p>
            </div>
        </div>

        <!-- Boks 5 -->
        <div class="student-box" id="box5">
            <div class="media-container">
                <button class="nav-button left" onclick="navigateMedia('box5', -1)">&#10094;</button>
                <img src="images/Student5.jpeg" alt="Student 5">
                <div class="video-container">
                    <video>
                        <source src="images/Student5Vid.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <button class="nav-button right" onclick="navigateMedia('box5', 1)">&#10095;</button>
            </div>
            <div class="student-details" style="padding-top: 20px; text-align: left;">
                <p><strong>Sylvester, 7 år – Svømmeforløb</strong></p>
                <p>Sylvester har gennemført 10 træningssessioner og opnået mål som flydning, crawl, rygcrawl og hovedspring.</p>
                <p><strong>Forløbsperiode:</strong> 17/04/2024 - 14/08/2024</p>
                <p><strong>Træner:</strong> Karina Anita Azadi</p>
            </div>
        </div>

        <!-- Boks 6 -->
        <div class="student-box" id="box6">
            <div class="media-container">
                <button class="nav-button left" onclick="navigateMedia('box6', -1)">&#10094;</button>
                <img src="images/Student6.jpeg" alt="Student 6">
                <div class="video-container">
                    <video>
                        <source src="images/Student6Vid.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <button class="nav-button right" onclick="navigateMedia('box6', 1)">&#10095;</button>
            </div>
            <div class="student-details" style="padding-top: 20px; text-align: left;">
                <p><strong>Henry, 12 år – Svømmeforløb</strong></p>
                <p>Vi har i august måned haft fornøjelsen af at have besøg af Henry fra Madrid. Hans forældre og bedsteforældre kontaktede os, fordi det har været svært at finde svømmeundervisning i Spanien, og det har gjort det udfordrende for Henry at lære svømmeteknikkerne. Heldigvis tog vores dygtige træner Caroline imod ham med åbne arme, og wow hvor er han blevet dygtig! På bare 8 undervisningsdage har han gjort enorme fremskridt - alt sammen på under en måned!</p>
            </div>
        </div>

        <!-- Boks 7 -->
        <div class="student-box" id="box7">
            <div class="media-container">
                <button class="nav-button left" onclick="navigateMedia('box7', -1)">&#10094;</button>
                <img src="images/Student7.jpeg" alt="Student 7">
                <div class="video-container">
                    <video>
                        <source src="images/Student7Vid.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <button class="nav-button right" onclick="navigateMedia('box7', 1)">&#10095;</button>
            </div>
            <div class="student-details" style="padding-top: 20px; text-align: left;">
                <p><strong>Niklas, 8 år – Svømmeforløb</strong></p>
                <p><strong>Forløbsperiode:</strong> 25/01/2024 - 20/06/2024</p>
                <p><strong>Mål og resultater:</strong> Niklas har gennemført 10 træningssessioner og opnået mål som flydning, crawl, rygcrawl og svømning over 50 meter.</p>
                <p><strong>Træner:</strong> Karina Anita Azadi</p>
            </div>
        </div>
    </main>

    <?php require('partials/footer.php') ?>

    <script>
        // Funktion til at navigere mellem billede og video i hver boks
        function navigateMedia(boxId, direction) {
            const box = document.getElementById(boxId);
            const image = box.querySelector('img');
            const videoContainers = box.querySelectorAll('.video-container');
            const leftButton = box.querySelector('.nav-button.left');
            const rightButton = box.querySelector('.nav-button.right');
            const activeVideo = [...videoContainers].find(video => video.style.display !== 'none');

            // Find indekser for medierne
            const totalMedia = videoContainers.length + 1; // Billede + video(er)
            let currentIndex = 0;

            if (image.style.display !== 'none') {
                currentIndex = 0; // Billede vises
            } else if (activeVideo) {
                currentIndex = parseInt(activeVideo.getAttribute('data-index')) || 1;
            }

            // Naviger til næste eller forrige medie
            currentIndex += direction;

            // Skift medie
            if (currentIndex === 0) {
                image.style.display = 'block';
                videoContainers.forEach(video => {
                    video.style.display = 'none';
                    video.querySelector('video').pause();
                });
            } else if (currentIndex > 0 && currentIndex <= videoContainers.length) {
                image.style.display = 'none';
                videoContainers.forEach(video => {
                    video.style.display = 'none';
                    video.querySelector('video').pause();
                });
                const targetVideo = videoContainers[currentIndex - 1];
                targetVideo.style.display = 'block';
                targetVideo.querySelector('video').play();
            }

            // Skjul eller vis pile baseret på medieindeks
            leftButton.style.display = currentIndex > 0 ? 'flex' : 'none';
            rightButton.style.display = currentIndex < totalMedia - 1 ? 'flex' : 'none';
        }

        // Initialiser pile for alle bokse
        document.querySelectorAll('.student-box').forEach(box => {
            const leftButton = box.querySelector('.nav-button.left');
            const rightButton = box.querySelector('.nav-button.right');
            const image = box.querySelector('img');
            const videoContainers = box.querySelectorAll('.video-container');

            // Skjul venstre pil, hvis vi starter på billedet
            leftButton.style.display = 'none';

            // Skjul højre pil, hvis der kun er ét medie
            if (videoContainers.length === 0) {
                rightButton.style.display = 'none';
            }
        });
    </script>
</body>

</html>
