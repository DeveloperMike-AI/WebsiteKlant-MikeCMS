<!-- includes/header.php -->
<?php 
$activePage = basename($_SERVER['PHP_SELF']); 
$isHomePage = $isHomePage ?? false; // Standaard false als niet gedefinieerd
?>

<!-- Mobile Menu Overlay -->
<div id="mobileMenuOverlay" class="fixed inset-0 bg-black bg-opacity-75 z-40 hidden"></div>

<!-- Mobile Menu -->
<div id="mobileMenu" class="mobile-menu fixed top-0 left-0 w-64 h-screen bg-primary text-white z-50 shadow-xl overflow-y-auto">
  <div class="p-6">
    <div class="flex justify-between items-center mb-8">
      <a href="index.php" class="text-2xl font-bold">VK LICHT</a>
      <button id="closeMobileMenu" class="text-2xl">&times;</button>
    </div>

    <nav>
      <ul class="space-y-4">
        <li><a href="index.php" class="block py-2 <?= $activePage == 'index.php' ? 'text-accent font-semibold' : 'text-white hover:text-accent' ?>">Home</a></li>
        <li><a href="onze-aanpak.php" class="block py-2 <?= $activePage == 'onze-aanpak.php' ? 'text-accent font-semibold' : 'text-white hover:text-accent' ?>">Onze Aanpak</a></li>
        
        <!-- Mobiel dropdown Expertises -->
        <li class="relative">
          <button class="menu-toggle flex justify-between items-center w-full py-2 text-white hover:text-accent font-medium">
            Expertises <i class="fas fa-chevron-down text-xs transition-transform transform"></i>
          </button>
          <ul class="pl-4 mt-2 hidden space-y-2">
            <li><a href="domotica.php" class="block py-1 hover:text-accent <?= $activePage == 'domotica.php' ? 'text-accent' : '' ?>">Domotica</a></li>
            <li><a href="lichtadvies.php" class="block py-1 hover:text-accent <?= $activePage == 'lichtadvies.php' ? 'text-accent' : '' ?>">Lichtadvies</a></li>
            <li><a href="lichtplan.php" class="block py-1 hover:text-accent <?= $activePage == 'lichtplan.php' ? 'text-accent' : '' ?>">Lichtplan</a></li>
          </ul>
        </li>

        <!-- Mobiel dropdown Verlichting voor -->
        <li class="relative">
          <button class="menu-toggle flex justify-between items-center w-full py-2 text-white hover:text-accent font-medium">
            Verlichting voor <i class="fas fa-chevron-down text-xs transition-transform transform"></i>
          </button>
          <ul class="pl-4 mt-2 hidden space-y-2">
            <li><a href="automotive.php" class="block py-1 hover:text-accent <?= $activePage == 'automotive.php' ? 'text-accent' : '' ?>">Automotive</a></li>
            <li><a href="onderwijs.php" class="block py-1 hover:text-accent <?= $activePage == 'onderwijs.php' ? 'text-accent' : '' ?>">Onderwijs</a></li>
            <li><a href="retail.php" class="block py-1 hover:text-accent <?= $activePage == 'retail.php' ? 'text-accent' : '' ?>">Retail</a></li>
            <li><a href="tuin.php" class="block py-1 hover:text-accent <?= $activePage == 'tuin.php' ? 'text-accent' : '' ?>">Tuin</a></li>
            <li><a href="woning.php" class="block py-1 hover:text-accent <?= $activePage == 'woning.php' ? 'text-accent' : '' ?>">Woning</a></li>
          </ul>
        </li>

        <li><a href="contact.php" class="block py-2 <?= $activePage == 'contact.php' ? 'text-accent font-semibold' : 'text-white hover:text-accent' ?>">Contact</a></li>
      </ul>
    </nav>

    <div class="mt-8 pt-6 border-t border-gray-700">
      <div class="flex items-center space-x-2 mb-4">
        <i class="fas fa-phone-alt text-accent"></i>
        <div>
          <p class="text-sm">0488-745117</p>
          <p class="text-xs">info@vklicht.nl</p>
        </div>
      </div>
      <div class="flex space-x-4">
        <a href="#" class="text-white hover:text-accent"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-white hover:text-accent"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white hover:text-accent"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
</div>

<?php if ($isHomePage): ?>
  <!-- Homepage Special Navigation -->
  <div id="homepage-header" class="absolute top-0 left-0 right-0 z-20 py-4 sm:py-6 transition-all duration-300">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center">
        <div class="flex items-center">
          <a href="index.php" class="text-xl sm:text-2xl font-bold text-white">VK LICHT</a>
          
          <!-- Desktop Menu -->
          <nav class="hidden lg:block ml-12">
            <ul class="flex space-x-8">
              <li><a href="index.php" class="<?= $activePage == 'index.php' ? 'text-accent' : 'text-white hover:text-accent' ?> font-medium">Home</a></li>
              <li><a href="onze-aanpak.php" class="<?= $activePage == 'onze-aanpak.php' ? 'text-accent' : 'text-white hover:text-accent' ?> font-medium">Onze Aanpak</a></li>
              
              <!-- Desktop Dropdown 1 -->
              <li class="relative group">
                <button class="text-white hover:text-accent transition-colors font-medium flex items-center <?= in_array($activePage, ['domotica.php', 'lichtadvies.php', 'lichtplan.php']) ? 'text-accent' : '' ?>">
                  Expertises <i class="fas fa-chevron-down text-xs ml-1 transition-transform duration-200"></i>
                </button>
                <ul class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 ease-out z-30">
                  <li><a href="domotica.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'domotica.php' ? 'font-bold' : '' ?>">Domotica</a></li>
                  <li><a href="lichtadvies.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'lichtadvies.php' ? 'font-bold' : '' ?>">Lichtadvies</a></li>
                  <li><a href="lichtplan.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'lichtplan.php' ? 'font-bold' : '' ?>">Lichtplan</a></li>
                </ul>
              </li>

              <!-- Desktop Dropdown 2 -->
              <li class="relative group">
                <button class="text-white hover:text-accent transition-colors font-medium flex items-center <?= in_array($activePage, ['automotive.php', 'onderwijs.php', 'retail.php', 'tuin.php', 'woning.php']) ? 'text-accent' : '' ?>">
                  Verlichting voor <i class="fas fa-chevron-down text-xs ml-1 transition-transform duration-200"></i>
                </button>
                <ul class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 ease-out z-30">
                  <li><a href="automotive.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'automotive.php' ? 'font-bold' : '' ?>">Automotive</a></li>
                  <li><a href="onderwijs.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'onderwijs.php' ? 'font-bold' : '' ?>">Onderwijs</a></li>
                  <li><a href="retail.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'retail.php' ? 'font-bold' : '' ?>">Retail</a></li>
                  <li><a href="tuin.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'tuin.php' ? 'font-bold' : '' ?>">Tuin</a></li>
                  <li><a href="woning.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'woning.php' ? 'font-bold' : '' ?>">Woning</a></li>
                </ul>
              </li>

              <li><a href="contact.php" class="<?= $activePage == 'contact.php' ? 'text-accent' : 'text-white hover:text-accent' ?> font-medium">Contact</a></li>
            </ul>
          </nav>
        </div>
        
        <div class="hidden sm:flex items-center space-x-6">
          <div class="flex items-center space-x-2">
            <i class="fas fa-phone-alt text-accent text-sm"></i>
            <div class="text-white">
              <p class="text-sm">0488-745117</p>
              <p class="text-xs">info@vklicht.nl</p>
            </div>
          </div>
          
          <div class="flex items-center space-x-2">
            <button class="text-white text-sm font-medium">EN</button>
            <span class="text-white">/</span>
            <button class="text-white text-sm font-medium">NL</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Sticky Header (hidden initially) -->
  <div id="sticky-header" class="fixed top-0 left-0 right-0 z-30 py-4 bg-primary shadow-md transform transition-transform duration-300 -translate-y-full">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center">
        <div class="flex items-center">
          <a href="index.php" class="text-xl sm:text-2xl font-bold text-white">VK LICHT</a>
          <nav class="hidden lg:block ml-12">
            <ul class="flex space-x-8">
              <li><a href="index.php" class="<?= $activePage == 'index.php' ? 'text-accent border-b-2 border-accent' : 'text-white hover:text-accent' ?> font-medium">Home</a></li>
              <li><a href="onze-aanpak.php" class="<?= $activePage == 'onze-aanpak.php' ? 'text-accent border-b-2 border-accent' : 'text-white hover:text-accent' ?> font-medium">Onze Aanpak</a></li>
              
              <li class="relative group">
                <button class="text-white hover:text-accent transition-colors font-medium flex items-center <?= in_array($activePage, ['domotica.php', 'lichtadvies.php', 'lichtplan.php']) ? 'border-b-2 border-accent text-accent' : '' ?>">
                  Expertises <i class="fas fa-chevron-down text-xs ml-1 transition-transform duration-200"></i>
                </button>
                <ul class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 ease-out z-30">
                  <li><a href="domotica.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'domotica.php' ? 'font-bold' : '' ?>">Domotica</a></li>
                  <li><a href="lichtadvies.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'lichtadvies.php' ? 'font-bold' : '' ?>">Lichtadvies</a></li>
                  <li><a href="lichtplan.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'lichtplan.php' ? 'font-bold' : '' ?>">Lichtplan</a></li>
                </ul>
              </li>

              <li class="relative group">
                <button class="text-white hover:text-accent transition-colors font-medium flex items-center <?= in_array($activePage, ['automotive.php', 'onderwijs.php', 'retail.php', 'tuin.php', 'woning.php']) ? 'border-b-2 border-accent text-accent' : '' ?>">
                  Verlichting voor <i class="fas fa-chevron-down text-xs ml-1 transition-transform duration-200"></i>
                </button>
                <ul class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-200 ease-out z-30">
                  <li><a href="automotive.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'automotive.php' ? 'font-bold' : '' ?>">Automotive</a></li>
                  <li><a href="onderwijs.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'onderwijs.php' ? 'font-bold' : '' ?>">Onderwijs</a></li>
                  <li><a href="retail.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'retail.php' ? 'font-bold' : '' ?>">Retail</a></li>
                  <li><a href="tuin.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'tuin.php' ? 'font-bold' : '' ?>">Tuin</a></li>
                  <li><a href="woning.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'woning.php' ? 'font-bold' : '' ?>">Woning</a></li>
                </ul>
              </li>

              <li><a href="contact.php" class="<?= $activePage == 'contact.php' ? 'text-accent border-b-2 border-accent' : 'text-white hover:text-accent' ?> font-medium">Contact</a></li>
            </ul>
          </nav>
        </div>

        <div class="hidden sm:flex items-center space-x-6">
          <div class="flex items-center space-x-2">
            <i class="fas fa-phone-alt text-accent text-sm"></i>
            <div class="text-white">
              <p class="text-sm">0488-745117</p>
              <p class="text-xs">info@vklicht.nl</p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <button class="text-white text-sm font-medium">EN</button>
            <span class="text-white">/</span>
            <button class="text-white text-sm font-medium">NL</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const homepageHeader = document.getElementById('homepage-header');
      const stickyHeader = document.getElementById('sticky-header');
      let lastScroll = 0;
      const scrollThreshold = 100; // Pas deze waarde aan voor wanneer de header moet verschijnen

      window.addEventListener('scroll', function() {
        const currentScroll = window.scrollY;
        
        if (currentScroll > scrollThreshold) {
          // Scrolling down - show sticky header
          stickyHeader.classList.remove('-translate-y-full');
          stickyHeader.classList.add('translate-y-0');
          homepageHeader.style.opacity = '0';
          homepageHeader.style.pointerEvents = 'none';
        } else {
          // Scrolling up - show homepage header
          stickyHeader.classList.add('-translate-y-full');
          stickyHeader.classList.remove('translate-y-0');
          homepageHeader.style.opacity = '1';
          homepageHeader.style.pointerEvents = 'auto';
        }

        lastScroll = currentScroll;
      });
    });
  </script>
<?php else: ?>
  <!-- Regular Sticky Navigation -->
  <div class="sticky top-0 left-0 right-0 z-20 py-4 bg-primary shadow-md">
    <div class="container mx-auto px-4">
      <div class="flex justify-between items-center">
        <div class="flex items-center">
          <a href="index.php" class="text-xl sm:text-2xl font-bold text-white">VK LICHT</a>
          <nav class="hidden lg:block ml-12">
            <ul class="flex space-x-8">
              <li><a href="index.php" class="<?= $activePage == 'index.php' ? 'text-accent border-b-2 border-accent' : 'text-white hover:text-accent' ?> font-medium">Home</a></li>
              <li><a href="onze-aanpak.php" class="<?= $activePage == 'onze-aanpak.php' ? 'text-accent border-b-2 border-accent' : 'text-white hover:text-accent' ?> font-medium">Onze Aanpak</a></li>
              
              <li class="relative group">
                <button id="expertiseDropdownBtn" class="text-white hover:text-accent transition-colors font-medium flex items-center focus:outline-none <?= in_array($activePage, ['domotica.php', 'lichtadvies.php', 'lichtplan.php']) ? 'border-b-2 border-accent text-accent' : '' ?>">
                  Expertises <i class="fas fa-chevron-down text-xs ml-1 transition-transform duration-200" id="dropdownIcon"></i>
                </button>
                <ul id="expertiseDropdown" class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible transition-opacity duration-200 ease-out z-30">
                  <li><a href="domotica.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'domotica.php' ? 'font-bold' : '' ?>">Domotica</a></li>
                  <li><a href="lichtadvies.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'lichtadvies.php' ? 'font-bold' : '' ?>">Lichtadvies</a></li>
                  <li><a href="lichtplan.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'lichtplan.php' ? 'font-bold' : '' ?>">Lichtplan</a></li>
                </ul>
              </li>

              <li class="relative group">
                <button id="verlichtingDropdownBtn" class="text-white hover:text-accent transition-colors font-medium flex items-center focus:outline-none <?= in_array($activePage, ['automotive.php', 'onderwijs.php', 'retail.php', 'tuin.php', 'woning.php']) ? 'border-b-2 border-accent text-accent' : '' ?>">
                  Verlichting voor <i class="fas fa-chevron-down text-xs ml-1 transition-transform duration-200" id="verlichtingIcon"></i>
                </button>
                <ul id="verlichtingDropdown" class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible transition-opacity duration-200 ease-out z-30">
                  <li><a href="automotive.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'automotive.php' ? 'font-bold' : '' ?>">Automotive</a></li>
                  <li><a href="onderwijs.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'onderwijs.php' ? 'font-bold' : '' ?>">Onderwijs</a></li>
                  <li><a href="retail.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'retail.php' ? 'font-bold' : '' ?>">Retail</a></li>
                  <li><a href="tuin.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'tuin.php' ? 'font-bold' : '' ?>">Tuin</a></li>
                  <li><a href="woning.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-100 <?= $activePage == 'woning.php' ? 'font-bold' : '' ?>">Woning</a></li>
                </ul>
              </li>

              <li><a href="contact.php" class="<?= $activePage == 'contact.php' ? 'text-accent border-b-2 border-accent' : 'text-white hover:text-accent' ?> font-medium">Contact</a></li>
            </ul>
          </nav>
        </div>

        <div class="hidden sm:flex items-center space-x-6">
          <div class="flex items-center space-x-2">
            <i class="fas fa-phone-alt text-accent text-sm"></i>
            <div class="text-white">
              <p class="text-sm">0488-745117</p>
              <p class="text-xs">info@vklicht.nl</p>
            </div>
          </div>
          <div class="flex items-center space-x-2">
            <button class="text-white text-sm font-medium">EN</button>
            <span class="text-white">/</span>
            <button class="text-white text-sm font-medium">NL</button>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<!-- Mobile Menu Button -->
<button id="mobileMenuButton" class="sm:hidden absolute top-4 right-4 z-20 text-white">
  <i class="fas fa-bars text-xl sm:text-2xl"></i>
</button>

<!-- Page Content Start -->
<div class="min-h-screen">
  <?php if (!$isHomePage): ?>
    <!-- Hero/Header afbeelding - Alleen voor niet-homepagina's -->
    <header class="relative h-96 bg-gray-900 flex items-center">
      <div class="absolute inset-0 bg-[url('assets/img/banner.jpg')] bg-cover bg-center opacity-70"></div>
      <div class="container mx-auto px-4 relative z-10 text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4"><?= $pageTitle ?? 'VK Light' ?></h1>
        <?php if (isset($pageSubtitle)): ?>
          <p class="text-xl md:text-2xl max-w-2xl"><?= $pageSubtitle ?></p>
        <?php endif; ?>
      </div>
    </header>
  <?php endif; ?>