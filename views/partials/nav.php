<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    nav a {
      text-decoration: none;
    }

    nav a:hover {
      text-decoration: none;
    }

    .active-dropdown {
      background-color: #4b5563;
      color: white;
    }

    /* Skjul dropdown-knapperne i mobilversionen */
    .desktop-dropdown {
      display: none;
    }

    /* Vis dropdown-links direkte i mobilversionen */
    .mobile-link {
      display: block;
    }

    @media (min-width: 768px) {
      .mobile-link {
        display: none;
      }

      .desktop-dropdown {
        display: inline-block;
      }
    }
  </style>
</head>

<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <a href="/" class="flex items-center">
          <span class="text-white text-lg font-bold">Azadi Swim Academy</span>
        </a>
      </div>
      <div class="hidden md:block relative">
        <div class="ml-10 flex items-baseline space-x-4">
          <!-- Desktop dropdown for Vores Academy -->
          <div class="relative group desktop-dropdown">
            <button class="text-gray-300 hover:bg-gray-700 rounded-md px-3 py-2 text-sm font-medium">
              Vores Academy
            </button>
            <div class="absolute left-0 z-10 hidden w-32 bg-gray-800 rounded-md shadow-lg group-hover:block">
              <a href="/trainer" class="<?= urlIs('/trainer') ? 'active-dropdown' : 'text-gray-300' ?> block px-3 py-2 text-sm font-medium">Trænere</a>
              <a href="/about" class="<?= $_SERVER['REQUEST_URI'] === '/about' ? 'active-dropdown' : 'text-gray-300' ?> block px-3 py-2 text-sm font-medium">About</a>
              <a href="/students" class="<?= $_SERVER['REQUEST_URI'] === '/students' ? 'active-dropdown' : 'text-gray-300' ?> block px-3 py-2 text-sm font-medium">Elever</a>
            </div>
          </div>
          <!-- Desktop dropdown for Undervisning -->
          <div class="relative group desktop-dropdown">
            <button class="text-gray-300 hover:bg-gray-700 rounded-md px-3 py-2 text-sm font-medium">
              Undervisning
            </button>
            <div class="absolute left-0 z-10 hidden w-32 bg-gray-800 rounded-md shadow-lg group-hover:block">
              <a href="/individualsessions" class="<?= $_SERVER['REQUEST_URI'] === '/individualsessions' ? 'active-dropdown' : 'text-gray-300' ?> block px-3 py-2 text-sm font-medium">Individuelle sessioner</a>
              <a href="/packages" class="<?= $_SERVER['REQUEST_URI'] === '/packages' ? 'active-dropdown' : 'text-gray-300' ?> block px-3 py-2 text-sm font-medium">Pakker</a>
              <a href="/duogroupsessions" class="<?= $_SERVER['REQUEST_URI'] === '/duogroupsessions' ? 'active-dropdown' : 'text-gray-300' ?> block px-3 py-2 text-sm font-medium">Duo-/gruppetimer</a>
              <a href="/babyswimming" class="<?= $_SERVER['REQUEST_URI'] === '/babyswimming' ? 'active-dropdown' : 'text-gray-300' ?> block px-3 py-2 text-sm font-medium">Babysvømning</a>
              <a href="/privateevent" class="<?= $_SERVER['REQUEST_URI'] === '/privateevent' ? 'active-dropdown' : 'text-gray-300' ?> block px-3 py-2 text-sm font-medium">Privat event</a>
            </div>
          </div>
          <!-- Ny knap til "Lej Pool" -->
          <a href="/pool" class="<?= $_SERVER['REQUEST_URI'] === '/pool' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Leje af pool</a>
          <a href="/contact" class="<?= $_SERVER['REQUEST_URI'] === '/contact' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Kontakt</a>
          <a href="https://azadi-swim-academy.planway.com/" class="hover:bg-gray-700 hover:text-white text-gray-300 rounded-md px-3 py-2 text-sm font-medium">Tilmeld</a>
        </div>
      </div>
      <div class="-mr-2 flex md:hidden">
        <button type="button" id="mobile-menu-button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
          <span class="sr-only">Open main menu</span>
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <div class="md:hidden" id="mobile-menu" style="display: none;">
    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
      <a href="/" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium">Home</a>
      <a href="/trainer" class="mobile-link <?= urlIs('/trainer') ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Trænere</a>
      <a href="/about" class="mobile-link <?= $_SERVER['REQUEST_URI'] === '/about' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
      <a href="/students" class="mobile-link <?= $_SERVER['REQUEST_URI'] === '/students' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Elever</a>
      <a href="/individualsessions" class="mobile-link <?= $_SERVER['REQUEST_URI'] === '/individualsessions' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Individuelle sessioner</a>
      <a href="/packages" class="mobile-link <?= $_SERVER['REQUEST_URI'] === '/packages' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Pakker</a>
      <a href="/duogroupsessions" class="mobile-link <?= $_SERVER['REQUEST_URI'] === '/duogroupsessions' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Duo-/gruppetimer</a>
      <a href="/babyswimming" class="mobile-link <?= $_SERVER['REQUEST_URI'] === '/babyswimming' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Babysvømning</a>
      <a href="/privateevent" class="mobile-link <?= $_SERVER['REQUEST_URI'] === '/privateevent' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Privat event</a>
      <a href="/pool" class="mobile-link <?= $_SERVER['REQUEST_URI'] === '/pool' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Leje af pool</a>
      <a href="/contact" class="mobile-link <?= $_SERVER['REQUEST_URI'] === '/contact' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Kontakt</a>
      <a href="https://azadi-swim-academy.planway.com/" class="mobile-link hover:bg-gray-700 hover:text-white 'text-gray-300 block rounded-md px-3 py-2 text-base font-medium">Tilmeld</a>
    </div>
  </div>
</nav>

<script>
  const button = document.getElementById('mobile-menu-button');
  const menu = document.getElementById('mobile-menu');

  button.addEventListener('click', () => {
    menu.style.display = (menu.style.display === 'none' || menu.style.display === '') ? 'block' : 'none';
  });
</script>
