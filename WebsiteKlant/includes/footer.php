<!-- includes/footer.php -->
<footer class="bg-gray-900 text-white py-12">
  <div class="container mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
      <div>
        <h3 class="text-xl font-bold mb-4">VK LICHT</h3>
        <p class="mb-4">Light up your world with our premium lighting solutions.</p>
        <div class="flex space-x-4">
          <a href="#" class="hover:text-accent"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="hover:text-accent"><i class="fab fa-instagram"></i></a>
          <a href="#" class="hover:text-accent"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div>
        <h4 class="font-bold mb-4">Menu</h4>
        <ul class="space-y-2">
          <li><a href="index.php" class="hover:text-accent">Home</a></li>
          <li><a href="onze-aanpak.php" class="hover:text-accent">Onze Aanpak</a></li>
          <li><a href="contact.php" class="hover:text-accent">Contact</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-4">Expertises</h4>
        <ul class="space-y-2">
          <li><a href="domotica.php" class="hover:text-accent">Domotica</a></li>
          <li><a href="lichtadvies.php" class="hover:text-accent">Lichtadvies</a></li>
          <li><a href="lichtplan.php" class="hover:text-accent">Lichtplan</a></li>
        </ul>
      </div>
      <div>
        <h4 class="font-bold mb-4">Contact</h4>
        <address class="not-italic">
          <p class="mb-2">Rijnstraat 44</p>
          <p class="mb-4">4191 CL Geldermalsen</p>
          <p class="mb-1"><i class="fas fa-phone-alt mr-2 text-accent"></i> 0488-745117</p>
          <p><i class="fas fa-envelope mr-2 text-accent"></i> info@vklicht.nl</p>
        </address>
      </div>
    </div>
    <div class="border-t border-gray-700 mt-8 pt-8 text-center text-sm">
      <p>© 2025 VK Licht. Alle rechten voorbehouden.</p>
    </div>
  </div>
</footer>

</div> <!-- einde .min-h-screen -->

<!-- JS -->
<?php if ($isHomePage ?? false): ?>
  <!-- Swiper JS - Alleen voor homepagina -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script>
    // Initialize Hompark-style slider
    const homparkSlider = new Swiper('.hompark-slider', {
      loop: true,
      autoplay: {
        delay: 5000,
      },
      speed: 1000,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      pagination: {
        el: '.hompark-slider-pagination',
        type: 'custom',
        renderCustom: function(swiper, current, total) {
          return `<span class="text-accent">${current}</span>`;
        }
      },
      navigation: {
        nextEl: '.hompark-slider-next',
        prevEl: '.hompark-slider-prev',
      },
    });
  </script>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script>
  // Mobile menu functionality (same as before)
  const mobileMenuButton = document.getElementById('mobileMenuButton');
  const closeMobileMenu = document.getElementById('closeMobileMenu');
  const mobileMenuOverlay = document.getElementById('mobileMenuOverlay');
  const mobileMenu = document.getElementById('mobileMenu');
  const menuToggles = document.querySelectorAll('.menu-toggle');

  mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.add('open');
    mobileMenuOverlay.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  });

  closeMobileMenu.addEventListener('click', () => {
    mobileMenu.classList.remove('open');
    mobileMenuOverlay.classList.add('hidden');
    document.body.style.overflow = '';
  });

  mobileMenuOverlay.addEventListener('click', () => {
    mobileMenu.classList.remove('open');
    mobileMenuOverlay.classList.add('hidden');
    document.body.style.overflow = '';
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    // Verbeterde dropdown functionaliteit voor alle pagina's
    const initDropdowns = () => {
      // Voor reguliere pagina's (dropdowns met IDs)
      const initIDBasedDropdowns = () => {
        const dropdowns = [
          {
            btn: 'expertiseDropdownBtn',
            menu: 'expertiseDropdown',
            icon: 'dropdownIcon'
          },
          {
            btn: 'verlichtingDropdownBtn',
            menu: 'verlichtingDropdown',
            icon: 'verlichtingIcon'
          }
        ];

        dropdowns.forEach(dropdown => {
          const btn = document.getElementById(dropdown.btn);
          const menu = document.getElementById(dropdown.menu);
          const icon = document.getElementById(dropdown.icon);

          if (btn && menu) {
            setupDropdown(btn, menu, icon);
          }
        });
      };

      // Voor homepagina (dropdowns met group class)
      const initGroupBasedDropdowns = () => {
        document.querySelectorAll('.group').forEach(group => {
          const btn = group.querySelector('button');
          const menu = group.querySelector('ul');
          const icon = group.querySelector('i');

          if (btn && menu) {
            setupDropdown(btn, menu, icon);
          }
        });
      };

      // Basis dropdown setup
      const setupDropdown = (btn, menu, icon) => {
        let timeout;
        const show = () => {
          clearTimeout(timeout);
          menu.style.transition = 'opacity 200ms ease';
          menu.classList.remove('opacity-0', 'invisible');
          menu.classList.add('opacity-100', 'visible');
          if (icon) icon.classList.add('rotate-180');
        };

        const hide = () => {
          timeout = setTimeout(() => {
            menu.style.transition = 'opacity 150ms ease';
            menu.classList.remove('opacity-100', 'visible');
            menu.classList.add('opacity-0', 'invisible');
            if (icon) icon.classList.remove('rotate-180');
          }, 300); // Langere timeout van 300ms
        };

        // Event listeners
        btn.addEventListener('mouseenter', show);
        btn.addEventListener('mouseleave', hide);
        menu.addEventListener('mouseenter', show);
        menu.addEventListener('mouseleave', hide);
        
        // Voor keyboard navigatie
        btn.addEventListener('focus', show);
        menu.addEventListener('focusin', show);
        menu.addEventListener('focusout', (e) => {
          if (!menu.contains(e.relatedTarget) && e.relatedTarget !== btn) {
            hide();
          }
        });

        // Sluit dropdown wanneer er buiten wordt geklikt
        document.addEventListener('click', (e) => {
          if (!btn.contains(e.target) && !menu.contains(e.target)) {
            hide();
          }
        });
      };

      // Initialiseer beide typen dropdowns
      initIDBasedDropdowns();
      initGroupBasedDropdowns();
    };

    // Mobiele dropdown functionaliteit
    const initMobileDropdowns = () => {
      document.querySelectorAll('.menu-toggle').forEach(toggle => {
        toggle.addEventListener('click', (e) => {
          e.stopPropagation();
          const icon = toggle.querySelector('i');
          const submenu = toggle.nextElementSibling;
          icon.classList.toggle('rotate-180');
          submenu.classList.toggle('hidden');
        });
      });
    };

    // Initialiseer alles
    initDropdowns();
    initMobileDropdowns();
  });
</script>
</body>
</html>