<?php
$pageTitle = "VK Licht | Light up your world";
$isHomePage = true; // Speciale variabele voor homepagina

include 'includes/head.php';
include 'includes/header.php';
?>

<!-- Hero Slider -->
<section class="relative h-screen w-full overflow-hidden">
<!-- Main Slider -->
<div class="swiper hompark-slider h-full w-full">
  <div class="swiper-wrapper h-full">
    <!-- Slide 1 -->
    <div class="swiper-slide relative h-full w-full bg-gray-900">
      <div class="absolute inset-0 bg-[url('assets/img/slide-1.jpg')] bg-cover bg-center z-0"></div>
      <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>
      <div class="container mx-auto px-4 h-full flex items-center relative z-20">
        <div class="slider-content text-white">
          <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-4 leading-tight">
            <span class="text-accent">Verlichting</span> op maat
          </h1>
          <p class="text-lg sm:text-xl md:text-2xl mb-8">Compleet naar wens; daar gaan we voor!</p>
          <a href="contact.php" class="inline-flex items-center px-6 sm:px-8 py-2 sm:py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors text-sm sm:text-base">
            Ontdek alle lichtopties!
          </a>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="swiper-slide relative h-full w-full bg-gray-900">
      <div class="absolute inset-0 bg-[url('assets/img/slide-2.jpg')] bg-cover bg-center z-0"></div>
      <div class="absolute inset-0 bg-black bg-opacity-40 z-10"></div>
      <div class="container mx-auto px-4 h-full flex items-center relative z-20">
        <div class="slider-content text-white">
          <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold mb-4 leading-tight">
            De juiste <span class="text-accent">verlichting</span> voor uw ruimte's?
          </h1>
          <p class="text-lg sm:text-xl md:text-2xl mb-8">Niets is ons te gek. De door ons ontworpen lichtplannen leiden tot de meest ideale verlichting.</p>
          <a href="contact.php" class="inline-flex items-center px-6 sm:px-8 py-2 sm:py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors text-sm sm:text-base">
            Start nu uw lichtproject!
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
  
  <!-- Diagonal Social Links (Left) -->
  <div class="absolute top-1/2 transform diagonal-layout z-20 hidden sm:block">
    <div class="flex items-center space-x-4 sm:space-x-8">
      <span class="text-white text-xs sm:text-sm font-medium tracking-widest">SOCIAL MEDIA</span>
      <div class="flex space-x-2 sm:space-x-4">
        <a href="#" class="text-white hover:text-accent transition-colors text-sm"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-white hover:text-accent transition-colors text-sm"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-white hover:text-accent transition-colors text-sm"><i class="fab fa-instagram"></i></a>
        <a href="#" class="text-white hover:text-accent transition-colors text-sm"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>
  </div>
  
  <!-- Diagonal Navigation (Right) -->
  <div class="absolute top-1/2 transform diagonal-layout-right z-20 hidden sm:block">
    <div class="flex items-center space-x-4 sm:space-x-8">
      <button class="hompark-slider-prev text-white hover:text-accent transition-colors text-xs sm:text-sm font-medium tracking-widest">VORIGE</button>
      <button class="hompark-slider-next text-white hover:text-accent transition-colors text-xs sm:text-sm font-medium tracking-widest">VOLGENDE</button>
    </div>
  </div>
  
  <!-- Pagination (Bottom Right) -->
  <div class="absolute right-8 bottom-8 z-20 flex items-center">
    <div class="hompark-slider-pagination text-white text-xl sm:text-2xl font-bold mr-2 sm:mr-4"></div>
    <span class="text-white text-sm sm:text-lg">/</span>
    <div class="text-white text-sm sm:text-lg ml-2 sm:ml-4">2</div>
  </div>
</section>

<!-- Section 1: Verlichting op maat -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-3xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Verlichting op maat, compleet naar wens; daar gaan we voor!</h2>
      <a href="#" class="inline-flex items-center px-8 py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors rounded">
        Ontdek alle lichtopties! Begin nu met eigen lichtplan!
        <i class="fas fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>
</section>

<!-- Section 2: Juiste verlichting -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center">
      <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10">
        <h2 class="text-3xl font-bold mb-6">Voor uw specifieke ruimte de juiste verlichting?</h2>
        <p class="text-lg mb-6">Niets is ons te gek. De door ons ontworpen lichtplannen leiden tot de meest ideale verlichting. Praktisch iedere ruimte wordt voortaan optimaal verlicht, ongeacht uw situatie.</p>
        <p class="text-lg font-medium mb-8">Nieuwsgierig? Zet ons op scherp!</p>
        
        <ul class="space-y-3 mb-8">
          <li class="flex items-start">
            <span class="text-accent mr-2">•</span>
            <span>Kosteloos intakegesprek</span>
          </li>
          <li class="flex items-start">
            <span class="text-accent mr-2">•</span>
            <span>Afspraak binnen 48 uur</span>
          </li>
          <li class="flex items-start">
            <span class="text-accent mr-2">•</span>
            <span>Persoonlijk lichtadvies, volledig op maat</span>
          </li>
        </ul>
        
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
          <a href="#" class="px-6 py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors rounded text-center">
            Start nu uw lichtproject!
          </a>
          <span class="text-gray-500 text-sm flex items-center justify-center">Eenvoudig, binnen een paar minuten geregeld!</span>
        </div>
      </div>
      <div class="lg:w-1/2 lg:pl-10">
        <img src="assets/img/img-1.jpg" alt="Lichtadvies" class="rounded-lg shadow-xl w-full">
      </div>
    </div>
  </div>
</section>

<!-- Section 3: Succesvolle projecten -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center">
      <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10">
        <img src="assets/img/img-2.jpg" alt="Succesvolle projecten" class="rounded-lg shadow-xl w-full">
      </div>
      <div class="lg:w-1/2 lg:pl-10">
        <h2 class="text-3xl font-bold mb-6">Succesvol afgeronde projecten nader belicht</h2>
        <p class="text-lg mb-6">We scheppen niet graag op, maar zijn best wel trots op wat we tot nu gerealiseerd hebben. Op zoek naar overtuigend bewijs? Neem voor de broodnodige inspiratie een kijkje achter de schermen!</p>
        <a href="#" class="inline-flex items-center px-6 py-3 bg-primary text-white hover:bg-opacity-90 transition-colors rounded">
          Bekijk onze projecten!
          <i class="fas fa-arrow-right ml-2"></i>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Section 4: Klanttevredenheid -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <p class="text-lg mb-8">We streven altijd naar opperste klanttevredenheid en zijn puur resultaatgericht. Hoe? Door al uw wensen te verwerken in het lichtplan, waarbij onderlinge communicatie de boventoon voert.</p>
    </div>
  </div>
</section>

<!-- Section 5: Samen creëren -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center">
      <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10">
        <h2 class="text-3xl font-bold mb-6">Samen creëren vormt de basis</h2>
        <p class="text-lg mb-6">De ruimte die wij voor u gaan verlichten gaat volledig in samenspraak. De beleving van licht is immers subjectief, waarbij een uitgekiend lichtplan voor ons een vanzelfsprekendheid is.</p>
        <p class="text-lg">Door samen uw wensen en behoeften mee te nemen in het uiteindelijke lichtontwerp zal dit in de praktijk naadloos aansluiten op uw smaak en beleving. Co-creatie leidt tot exact de verlichting die u voor ogen hebt!</p>
      </div>
      <div class="lg:w-1/2 lg:pl-10">
        <img src="assets/img/img-3.jpg" alt="Samenwerken" class="rounded-lg shadow-xl w-full">
      </div>
    </div>
  </div>
</section>

<!-- Section 6: Waarom ons advies -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center">
      <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10">
        <img src="assets/img/img-4.png" alt="Lichtadvies" class="rounded-lg shadow-xl w-full">
      </div>
      <div class="lg:w-1/2 lg:pl-10">
        <h2 class="text-3xl font-bold mb-6">Waarom ons lichtadvies de juiste keuze is?</h2>
        <p class="text-lg mb-6">Uw ruimte verdient absoluut de nodige aandacht. Met onze persoonlijke werkwijze en nauwkeurig tot stand gekomen lichtadvies bedienen wij u op uw wenken.</p>
        <p class="text-lg">Met barstensvol creativiteit ontwerpen wij voor u een waanzinnig mooi lichtplan die voor de beoogde ruimte helemaal tegemoetkomt aan uw wensen.</p>
      </div>
    </div>
  </div>
</section>

<!-- Section 7: Geavanceerde lichtsturing -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="flex flex-col lg:flex-row items-center">
      <div class="lg:w-1/2 mb-10 lg:mb-0 lg:pr-10">
        <h2 class="text-3xl font-bold mb-6">Geavanceerde lichtsturing</h2>
        <p class="text-lg mb-6">Eerst een lichtplan, maar hoe staat het met de bediening van uw toekomstige verlichting? Maakt u zich geen zorgen want ook voor de lichtsturing bedenken we een slim en geavanceerd plan.</p>
        <p class="text-lg mb-8">Of het nu voor kantoorruimtes of bestemd is voor de oprit van uw woning, voor elke situatie bedenken we een uitgekiend systeem waarmee u de verlichting op de meest eenvoudige manier kunt sturen.</p>
        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
          <a href="domotica.php" class="px-6 py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors rounded text-center">
            Meer informatie over domotica
          </a>
        </div>
      </div>
      <div class="lg:w-1/2 lg:pl-10">
        <img src="assets/img/img-5.jpg" alt="Domotica" class="rounded-lg shadow-xl w-full">
      </div>
    </div>
    <div class="max-w-3xl mx-auto mt-12 text-center">
      <p class="text-lg mb-6">Bent u ook toe aan nieuwe verlichting? Reageer vandaag nog en stel een lichtplan samen op maat!</p>
      <div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">
        <h3 class="text-2xl font-bold mb-4">Inspiratie opdoen? Meld je aan voor onze nieuwsbrief!</h3>
        <form class="flex flex-col sm:flex-row gap-4">
          <input type="email" placeholder="Je e-mailadres" class="flex-grow px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-accent">
          <button type="submit" class="px-6 py-2 bg-primary text-white font-bold hover:bg-opacity-90 transition-colors rounded">
            Aanmelden nieuwsbrief
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php 
// Voeg Swiper JS toe voor de homepagina
echo '<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>';
include 'includes/footer.php'; 
?>