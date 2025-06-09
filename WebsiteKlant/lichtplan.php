<?php
$pageTitle = "Lichtplan";
$pageSubtitle = "Een doordacht lichtplan brengt uw ruimte tot leven";

include 'includes/head.php';
include 'includes/header.php';
?>

<!-- Intro Sectie -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Een lichtplan op maat? Daar gaan we voor!</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-6">
        Sommige ruimtes missen net dat beetje sfeer of warmte. Met een lichtplan op maat van VK Licht zorgen we voor de juiste balans tussen sfeer, karakter en functionaliteit.
      </p>
      <p class="text-lg">
        Zowel voor woningen als bedrijven creëren we doordachte verlichtingsplannen die volledig aansluiten op interieur, architectuur en gebruiksdoel.
      </p>
    </div>
  </div>
</section>

<!-- Wat is een Lichtplan -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Wat is een lichtplan?</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-6">
        Een lichtplan is een compleet ontwerp waarin we bepalen hoeveel verlichting nodig is, waar lichtpunten komen en welk type verlichting geschikt is – van basis- tot accentverlichting.
      </p>
      <p class="text-lg">
        Alles wordt afgestemd op de bouwstijl, het interieur en de specifieke functie van de ruimte. Zo ontstaat een verlichtingsplan dat in harmonie is met uw omgeving.
      </p>
    </div>
  </div>
</section>

<!-- Waarom kiezen voor VK Licht -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Waarom kiezen voor een lichtplan van VK Licht?</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>

      <div class="grid md:grid-cols-2 gap-8 mt-12">
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-pencil-ruler"></i></div>
          <h3 class="text-xl font-bold mb-3">Maatwerk en persoonlijk</h3>
          <p>Geen standaardoplossingen, maar een lichtplan afgestemd op uw wensen en interieur.</p>
        </div>
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-sync-alt"></i></div>
          <h3 class="text-xl font-bold mb-3">Alles onder één dak</h3>
          <p>Van ontwerp tot uitvoering – wij regelen het gehele traject en werken samen met ervaren installateurs.</p>
        </div>
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-lightbulb"></i></div>
          <h3 class="text-xl font-bold mb-3">Functioneel en sfeervol</h3>
          <p>Verlichting die niet alleen praktisch is, maar ook zorgt voor warmte en beleving in elke ruimte.</p>
        </div>
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-coins"></i></div>
          <h3 class="text-xl font-bold mb-3">Kostenbesparend</h3>
          <p>Dankzij één aanspreekpunt voor ontwerp, levering én installatie bespaart u tijd én kosten.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stappenplan -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Fases van het lichtplan</h2>

      <div class="relative timeline pl-12">
        <?php
        $steps = [
          [ "title" => "Afspraak in onze showroom", "desc" => "We plannen een afspraak in onze showroom om uw wensen en situatie goed te bespreken." ],
          [ "title" => "Ontwerpen van het lichtplan", "desc" => "Na overleg gaan we aan de slag met een doordacht ontwerp dat past bij uw ruimte en stijl." ],
          [ "title" => "Realisatie van het lichtplan", "desc" => "Na uw akkoord starten we de montage en installatie, volledig verzorgd door ons team en partners." ]
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
      <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Veelgestelde vragen over ons lichtplan</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>

      <div class="space-y-8 text-lg">
        <div>
          <h3 class="font-bold text-lg mb-2">Kan mijn lichtplan snel gerealiseerd worden?</h3>
          <p>Kleine projecten kunnen vaak snel worden uitgevoerd. Grotere trajecten vragen wat meer tijd voor een perfect resultaat.</p>
        </div>
        <div>
          <h3 class="font-bold text-lg mb-2">Wat zijn de kosten van een lichtplan?</h3>
          <p>Wanneer u het project volledig door ons laat uitvoeren, is het opstellen van het lichtplan meestal kosteloos.</p>
        </div>
        <div>
          <h3 class="font-bold text-lg mb-2">Doen jullie ook de installatie?</h3>
          <p>Zeker. Wij werken samen met ervaren en betrouwbare elektrotechnische partners en begeleiden de volledige uitvoering.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-20 bg-primary text-white">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Samen uw lichtplan tot leven brengen?</h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Plan een afspraak met ons in en ontdek hoe wij uw ruimte volledig kunnen transformeren met verlichting.
    </p>
    <a href="contact.php" class="inline-flex items-center px-8 py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors rounded">
      Neem contact op
      <i class="fas fa-arrow-right ml-2"></i>
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
