<?php
$pageTitle = "Contact";
$pageSubtitle = "Zin om langs te komen of om een afspraak te maken? Neem contact met ons op.";

include 'includes/head.php';
include 'includes/header.php';
?>

<!-- Contactopties -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Waarmee kunnen we u van dienst zijn?</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
      <div class="bg-gray-50 p-8 rounded-lg shadow-md">
        <div class="text-accent text-4xl mb-4"><i class="fas fa-envelope"></i></div>
        <h3 class="text-xl font-bold mb-3">Stuur een e-mailbericht</h3>
        <p class="mb-4">Vragen, opmerkingen, suggesties of een afspraak maken? Stuur een e-mailbericht en we laten binnen 48 uur van ons horen.</p>
        <a href="mailto:info@vklight.elite.com" class="inline-flex items-center px-6 py-2 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors rounded">
          E-mail versturen <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>

      <div class="bg-gray-50 p-8 rounded-lg shadow-md">
        <div class="text-accent text-4xl mb-4"><i class="fas fa-exclamation-triangle"></i></div>
        <h3 class="text-xl font-bold mb-3">Melden storing</h3>
        <p class="mb-4">Heeft u een storing aan uw verlichting?</p>
        <button class="inline-flex items-center px-6 py-2 bg-primary text-white font-bold hover:bg-opacity-90 transition-colors rounded">
          Meld storing <i class="fas fa-arrow-right ml-2"></i>
        </button>
      </div>

      <div class="bg-gray-50 p-8 rounded-lg shadow-md">
        <div class="text-accent text-4xl mb-4"><i class="fas fa-comment-dots"></i></div>
        <h3 class="text-xl font-bold mb-3">Melden klacht</h3>
        <p class="mb-4">Heeft u een klacht? Wij lossen het op!</p>
        <button class="inline-flex items-center px-6 py-2 bg-primary text-white font-bold hover:bg-opacity-90 transition-colors rounded">
          Meer info <i class="fas fa-arrow-right ml-2"></i>
        </button>
      </div>

      <div class="bg-gray-50 p-8 rounded-lg shadow-md">
        <div class="text-accent text-4xl mb-4"><i class="fas fa-undo"></i></div>
        <h3 class="text-xl font-bold mb-3">Bestelling retour</h3>
        <p class="mb-4">Stuur een bericht over uw retourzending.</p>
        <button class="inline-flex items-center px-6 py-2 bg-primary text-white font-bold hover:bg-opacity-90 transition-colors rounded">
          Meer info <i class="fas fa-arrow-right ml-2"></i>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Contactformulier -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Contactformulier</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>

      <form class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="md:col-span-2">
          <label for="subject" class="block text-sm font-medium mb-1">Onderwerp</label>
          <select id="subject" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-accent focus:border-accent">
            <option>Algemene vraag</option>
            <option>Offerte aanvraag</option>
            <option>Afspraak maken</option>
            <option>Klacht</option>
            <option>Storing</option>
          </select>
        </div>
        <div>
          <label for="name" class="block text-sm font-medium mb-1">Naam*</label>
          <input type="text" id="name" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-accent focus:border-accent">
        </div>
        <div>
          <label for="email" class="block text-sm font-medium mb-1">E-mailadres*</label>
          <input type="email" id="email" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-accent focus:border-accent">
        </div>
        <div>
          <label for="phone" class="block text-sm font-medium mb-1">Telefoonnummer</label>
          <input type="tel" id="phone" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-accent focus:border-accent">
        </div>
        <div>
          <label for="company" class="block text-sm font-medium mb-1">Bedrijf</label>
          <input type="text" id="company" class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-accent focus:border-accent">
        </div>
        <div class="md:col-span-2">
          <label for="message" class="block text-sm font-medium mb-1">Bericht*</label>
          <textarea id="message" rows="5" required class="w-full px-4 py-2 border border-gray-300 rounded focus:ring-accent focus:border-accent"></textarea>
        </div>
        <div class="md:col-span-2">
          <button type="submit" class="inline-flex items-center px-8 py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors rounded">
            Versturen <i class="fas fa-paper-plane ml-2"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- Contactgegevens + FAQ -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-12">
      <div>
        <h2 class="text-3xl font-bold mb-6">Contactgegevens</h2>
        <div class="space-y-4">
          <div class="flex items-start">
            <div class="text-accent text-xl mt-1 mr-4"><i class="fas fa-map-marker-alt"></i></div>
            <div>
              <h3 class="font-bold">Adres</h3>
              <p>Rijnstraat 44</p>
              <p>4191 CL Geldermalsen</p>
            </div>
          </div>
          <div class="flex items-start">
            <div class="text-accent text-xl mt-1 mr-4"><i class="fas fa-phone-alt"></i></div>
            <div>
              <h3 class="font-bold">Telefoon</h3>
              <p>0488-745117</p>
              <p>Werkdagen 09:00 - 18:00</p>
            </div>
          </div>
          <div class="flex items-start">
            <div class="text-accent text-xl mt-1 mr-4"><i class="fas fa-envelope"></i></div>
            <div>
              <h3 class="font-bold">E-mail</h3>
              <p>info@vklicht.nl</p>
            </div>
          </div>
        </div>
      </div>

      <div>
        <h2 class="text-3xl font-bold mb-6">Veelgestelde vragen</h2>
        <div class="space-y-4">
          <div class="border-b border-gray-200 pb-4">
            <h3 class="font-bold mb-1">Is VK Licht een lampenwinkel?</h3>
            <p>Helaas niet, we werken uitsluitend op projectbasis voor onze eindgebruikers en opdrachtgevers.</p>
          </div>
          <div class="border-b border-gray-200 pb-4">
            <h3 class="font-bold mb-1">Kunnen we spontaan langskomen in uw showroom?</h3>
            <p>Er dient een afspraak gemaakt te worden. Via ons contactformulier of op werkdagen van 09:00 tot 18:00 uur bellen naar: 0488-745117</p>
          </div>
          <div>
            <h3 class="font-bold mb-1">Krijg ik na een bestelling ook een track- en tracé code?</h3>
            <p>Als het goed is, ontvangt u direct na uw bestelling van onze transporteur een track- en tracé code. Niets ontvangen? Check dan uw spamberichten.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Google Maps -->
<section class="h-96 bg-gray-200">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2457.847485315687!2d5.301632881164551!3d51.88819986513973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDUzJzE3LjUiTiA1wrAxOCcwNS45IkU!5e0!3m2!1snl!2snl!4v1620000000000!5m2!1snl!2snl"
    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>

<?php include 'includes/footer.php'; ?>
