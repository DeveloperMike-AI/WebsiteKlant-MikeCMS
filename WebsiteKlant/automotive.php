<?php
$pageTitle = "Automotive";
$pageSubtitle = "Uw wagenpark perfect uitgelicht met een slim lichtplan";

include 'includes/head.php';
include 'includes/header.php';
?>

<!-- Intro Sectie -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Lichtplannen op maat voor de automotive sector</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-6">Laat uw wagenpark schitteren met een doordacht lichtplan van VK Licht.</p>
      <p class="text-lg">Of het nu gaat om een showroom, garage of autobedrijf – wij zorgen voor de optimale verlichting die bijdraagt aan beleving én verkoop.</p>
    </div>
  </div>
</section>

<!-- Verlichting is cruciaal -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Verlichting is van cruciaal belang</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-6">Een warm welkom, een sfeervolle beleving en een krachtige productpresentatie – dát is het effect van een goed lichtplan in de automotive.</p>
      <p class="text-lg">Wij creëren een uitgebalanceerd geheel waarbij kleuren, lichtverdeling en reflectie samenkomen tot de juiste sfeer en presentatie.</p>
    </div>
  </div>
</section>

<!-- Waarom kiezen voor LED -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Waarom kiezen voor LED-verlichting?</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>

      <div class="grid md:grid-cols-2 gap-8 mt-12">
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-tools"></i></div>
          <h3 class="text-xl font-bold mb-3">Volledige ontzorging</h3>
          <p>Van lichtplan tot realisatie – alles wordt geregeld door VK Licht en partners.</p>
        </div>
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-eye"></i></div>
          <h3 class="text-xl font-bold mb-3">Constante verlichting</h3>
          <p>Uw showroom is altijd perfect en egaal verlicht – geen flikkering of onrustig licht.</p>
        </div>
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-car"></i></div>
          <h3 class="text-xl font-bold mb-3">Perfecte presentatie</h3>
          <p>Uw auto’s komen optimaal tot hun recht door slimme plaatsing en de juiste lichtkleur.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fases -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Zo pakken we het aan</h2>
      <div class="relative timeline pl-12">
        <?php
        $steps = [
          [ "title" => "Inventarisatie", "desc" => "We bespreken uw wensen en ruimte tijdens een afspraak in onze showroom." ],
          [ "title" => "Lichtplan ontwerp", "desc" => "Na akkoord ontwerpen we een maatwerk lichtplan voor uw showroom of garage." ],
          [ "title" => "Uitvoering", "desc" => "We verzorgen montage en installatie – van armaturen tot afstemming van lichtkleur." ],
        ];

        foreach ($steps as $index => $step): ?>
          <div class="mb-16 relative">
            <div class="flex items-start">
              <div class="step-number"><?= $index + 1 ?></div>
              <div>
                <h3 class="text-2xl font-bold mb-4"><?= $step['title'] ?></h3>
                <p class="text-lg"><?= $step['desc'] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Veelgestelde vragen over automotive verlichting</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>

      <div class="space-y-8 text-lg">
        <div><h3 class="font-bold mb-2">1. Welke verlichting is het meest geschikt voor autoshowrooms?</h3><p>LED-railspots met hoge kleurweergave zijn perfect om voertuigen optimaal uit te lichten.</p></div>
        <div><h3 class="font-bold mb-2">2. Wat is de beste lichtkleur voor mijn showroom?</h3><p>Neutraal wit licht tussen 4000K en 5000K zorgt voor een heldere, representatieve uitstraling.</p></div>
        <div><h3 class="font-bold mb-2">3. Is showroomverlichting altijd LED?</h3><p>Ja, LED biedt het beste rendement en is duurzaam én onderhoudsarm.</p></div>
        <div><h3 class="font-bold mb-2">4. Hoe werkt het bij hoge plafonds?</h3><p>We passen armaturen en lichtsterkte hierop aan, zodat het licht gelijkmatig wordt verdeeld.</p></div>
        <div><h3 class="font-bold mb-2">5. Levert LED echt een besparing op?</h3><p>Absoluut! Door lager verbruik en langere levensduur bespaart u fors op uw energiekosten.</p></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-20 bg-primary text-white">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Klaar om uw showroom naar een hoger niveau te tillen?</h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">Laat ons uw wagenpark het podium geven dat het verdient. Neem contact met ons op en ontdek de mogelijkheden.</p>
    <a href="contact.php" class="inline-flex items-center px-8 py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors rounded">
      Neem contact op
      <i class="fas fa-arrow-right ml-2"></i>
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
