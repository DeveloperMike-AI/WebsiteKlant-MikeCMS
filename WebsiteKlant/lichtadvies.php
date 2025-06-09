<?php
$pageTitle = "Lichtadvies";
$pageSubtitle = "Professioneel lichtadvies maakt mogelijkheden duidelijk";

include 'includes/head.php';
include 'includes/header.php';
?>

<!-- Intro Sectie -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Ons lichtadvies verschaft een helder en duidelijk inzicht</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-6">
        Zoekt u een deskundig en op maat gemaakt lichtadvies? Dan bent u bij VK Licht aan het juiste adres.
        Wij nemen alle componenten mee in een verhelderend lichtadvies dat volledig aansluit op uw specifieke wensen.
      </p>
      <p class="text-lg">
        Niet voor niets vertrouwen architecten, installateurs en interieurontwerpers op ons voor professioneel lichtadvies. Zullen we eens afspreken?
      </p>
    </div>
  </div>
</section>

<!-- Maatwerk Lichtadvies -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Lichtplan op maat voor elke ruimte</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-6">
        Bij VK Licht geen standaardoplossingen, maar een persoonlijk lichtadvies dat naadloos aansluit op de ruimte, het interieur en uw wensen.
      </p>
      <p class="text-lg">
        Deze persoonlijke benadering, in combinatie met onze creatieve expertise en brede selectie aan verlichtingsmerken, maakt ons dé specialist voor uw lichtplan.
      </p>
    </div>
  </div>
</section>

<!-- Voordelen Sectie -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Waarom kiezen voor VK Licht?</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>

      <div class="grid md:grid-cols-2 gap-8 mt-12">
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-lightbulb"></i></div>
          <h3 class="text-xl font-bold mb-3">Volledige ontzorging</h3>
          <p>Van het eerste advies tot en met de uitvoering van het lichtplan – wij begeleiden elke stap.</p>
        </div>
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-cogs"></i></div>
          <h3 class="text-xl font-bold mb-3">Lichtplan op maat</h3>
          <p>Passend binnen uw budget én afgestemd op stijl, ruimte en toepassing.</p>
        </div>
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-user-check"></i></div>
          <h3 class="text-xl font-bold mb-3">Deskundig team</h3>
          <p>Meer dan 15 jaar ervaring en specialisten met kennis van verlichting, sfeer en techniek.</p>
        </div>
        <div class="bg-gray-50 p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-store"></i></div>
          <h3 class="text-xl font-bold mb-3">Inspirerende showroom</h3>
          <p>Beleef onze verlichting in de praktijk en ontdek welke oplossingen bij u passen.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stappenplan Lichtplan -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Ons stappenplan voor lichtadvies</h2>

      <div class="relative timeline pl-12">
        <?php
        $steps = [
          [
            "title" => "Aanvraag lichtadvies",
            "desc" => "Vraag eenvoudig online uw lichtadvies aan in slechts een paar stappen via onze website."
          ],
          [
            "title" => "Afspraak in onze showroom",
            "desc" => "Tijdens een afspraak in onze showroom bespreken we uw wensen en laten we verschillende verlichtingsmogelijkheden zien."
          ],
          [
            "title" => "Vrijblijvend intakegesprek",
            "desc" => "In een persoonlijk gesprek brengen we uw situatie, wensen en ruimtes goed in kaart. Dit gesprek is geheel vrijblijvend."
          ],
          [
            "title" => "Concept lichtplan",
            "desc" => "We werken een eerste lichtplan uit als conceptvoorstel, afgestemd op uw wensen en ruimte(s)."
          ],
          [
            "title" => "Bespreking & optimalisatie",
            "desc" => "We lichten het concept toe, verzamelen feedback en sturen bij waar nodig voor het definitieve ontwerp."
          ],
          [
            "title" => "Concreet voorstel",
            "desc" => "Het volledige ontwerp is af en klaar voor uitvoering. We presenteren het plan inclusief armaturen en technische onderbouwing."
          ],
          [
            "title" => "Uitvoering en montage",
            "desc" => "Wij nemen het hele traject op ons – van levering tot installatie en nazorg. U wordt volledig ontzorgd."
          ]
        ];

        foreach ($steps as $index => $step): ?>
          <div class="mb-16 relative<?= $index + 1 === count($steps) ? '' : '' ?>">
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
      <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Veelgestelde vragen over lichtadvies</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>

      <div class="space-y-8 text-lg">
        <div>
          <h3 class="font-bold text-lg mb-2">Wat zijn de kosten van lichtadvies?</h3>
          <p>In veel gevallen is ons lichtadvies gratis – vooral als u uw verlichting via ons afneemt.</p>
        </div>
        <div>
          <h3 class="font-bold text-lg mb-2">Geven jullie ook lichtadvies op locatie?</h3>
          <p>Zeker! Toch raden we aan eerst de showroom te bezoeken voor inspiratie & oriëntatie.</p>
        </div>
        <div>
          <h3 class="font-bold text-lg mb-2">Kan ik zonder afspraak langskomen?</h3>
          <p>We werken op afspraak, zodat we voldoende tijd kunnen nemen voor persoonlijk advies.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-20 bg-primary text-white">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Samen brainstormen over uw lichtplan?</h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Maak een afspraak en ervaar hoe wij uw ruimte kunnen transformeren met licht.
    </p>
    <a href="contact.html" class="inline-flex items-center px-8 py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors rounded">
      Neem contact op
      <i class="fas fa-arrow-right ml-2"></i>
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
