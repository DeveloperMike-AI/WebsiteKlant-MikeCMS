<?php
$pageTitle = "Onze Aanpak";
$pageSubtitle = "Van ontwerp tot uitvoering";

include 'includes/head.php';
include 'includes/header.php';
?>

<!-- Intro Sectie -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Onze strategische aanpak</h2>
      <p class="text-xl text-gray-600 mb-8">Vertaling van uw wensen naar een lichtplan op maat waarbij ruimtes volledig tot hun recht komen</p>
      <div class="w-24 h-1 bg-accent mx-auto mb-12"></div>

      <p class="text-lg mb-8 text-left">
        Onze beproefde aanpak of werkwijze brengt structuur aan in de manier waarop wij werken. Door stapsgewijs alles af te handelen zien wij niets over het hoofd. We leveren kwaliteit en hanteren strenge normen. Door al uw wensen in kaart te brengen begrijpen wij waar u behoefte aan heeft.
      </p>
      <p class="text-lg text-left">
        Dit principe is tijdens het hele traject leidend en leidt ook tot het beste eindresultaat waar onze klanten meer dan tevreden over zijn. Door goed onderling overleg en de juiste samenwerking met onze opdrachtgevers wordt ieder maatwerk lichtplan een succes.
      </p>
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
            "title" => "Concept ontwerp",
            "desc" => "We werken een eerste lichtplan uit als conceptvoorstel, afgestemd op uw wensen en ruimte(s)."
          ],
          [
            "title" => "Vervolgafspraak",
            "desc" => "We lichten het concept toe, verzamelen feedback en sturen bij waar nodig voor het definitieve ontwerp."
          ],
          [
            "title" => "Concreet lichtplan",
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

<!-- CTA -->
<section class="py-20 bg-primary text-white">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Start uw lichtproject vandaag nog</h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">Neem contact met ons op voor een vrijblijvend kennismakingsgesprek en ontdek wat wij voor u kunnen betekenen.</p>
    <a href="contact.html" class="inline-flex items-center px-8 py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors rounded">
      Neem contact op
      <i class="fas fa-arrow-right ml-2"></i>
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
