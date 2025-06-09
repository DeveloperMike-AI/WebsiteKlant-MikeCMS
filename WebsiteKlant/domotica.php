<?php
// domotica.php

$pageTitle = "Domotica";
$pageSubtitle = "Controle over uw verlichting met het grootste bedieningsgemak";

include 'includes/head.php';
include 'includes/header.php';
?>

<!-- Intro Sectie -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Domotica en slim lichtbediening systeem</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-6">
        Zoekt u een slimme manier om uw verlichting te bedienen? Bij VK Light kunt u terecht voor slimme lichtsturing, oftewel domotica. 
        Als favoriete dienstverlener bij particulier, installateur, interieurbouwer en interieurontwerper bedenken we slimme domotica-oplossingen.
      </p>
      <p class="text-lg">
        Uw eenvoudig te bedienen en centraal geregelde verlichting vindt plaats vanuit een fysieke plek of via een app op uw smartphone of tablet.
        Op deze manier controleert u al uw slimme apparaten, inclusief uw verlichting, compleet naar eigen wens.
      </p>
    </div>
  </div>
</section>

<!-- Voordelen -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Slimme verlichting bediend met domotica</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-8">
        Wanneer u thuis of op kantoor aankomt, hoeft u nooit meer het hele pand te doorlopen voor het inschakelen van uw verlichting. 
        Via één centrale plaats of via onze handige app kunt u niet alleen uw verlichting bedienen maar ook al uw andere elektrische apparaten.
        Kortom; op en top comfort in een handomdraai.
      </p>

      <div class="grid md:grid-cols-2 gap-8 mt-12">
        <div class="bg-white p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-lightbulb"></i></div>
          <h3 class="text-xl font-bold mb-3">Complete controle</h3>
          <p>Bedien al uw verlichting vanaf één centraal punt of via uw smartphone.</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md feature-card">
          <div class="text-accent text-4xl mb-4"><i class="fas fa-mobile-alt"></i></div>
          <h3 class="text-xl font-bold mb-3">Mobiele bediening</h3>
          <p>Regel uw verlichting vanaf anywhere ter wereld via onze app.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Toepassingen -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto">
      <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Een domotica oplossing is overal toepasbaar</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-8 text-center">
        Dankzij onze domotica-app staan alle slimme technieken met elkaar in verbinding, zoals onze slimme verlichting, streamingsdiensten voor muziek en video, verwarming en CV, camera's, TV's, schermen, beveiligingssystemen en meer. 
        Volledige controle betekent in de praktijk meer vrijheid om alles zelf te bepalen, precies hoe u het wilt.
      </p>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-12">
        <?php
        $features = [
          "Slimme verlichting" => "Uw verlichting eenvoudig bediend via één platform of app.",
          "Verwarming of CV" => "Volledige temperatuurcontrole in huis of op kantoor.",
          "Multimedia" => "Streamingsdiensten en media volledig geïntegreerd in uw domotica-netwerk.",
          "Camera's en beveiligingssysteem" => "Altijd zicht op uw eigendom, waar u ook bent.",
          "Zonwering" => "Automatische regeling van zonwering voor optimaal comfort.",
          "Toegangscontrole" => "Regel wie wanneer toegang heeft tot uw pand.",
          "Aanwezigheidsdetectie" => "Geautomatiseerde acties op basis van aanwezigheid."
        ];
        foreach ($features as $title => $desc): ?>
          <div class="border-l-4 border-accent pl-6">
            <h3 class="text-xl font-bold mb-3"><?= $title ?></h3>
            <p><?= $desc ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- Nieuwbouw & Renovatie -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Domotica voor nieuwbouw en renovatie</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-8">
        Onze slimme domotica-systemen zijn toepasbaar voor zowel nieuwbouw als renovatieprojecten. 
        Bij nieuwbouw kan al geanticipeerd worden op de ruimtes waar apparaten bediend worden. 
        Ook bij bestaande bouw en renovatie kan domotica zonder veel moeite geïnstalleerd worden.
      </p>

      <div class="grid md:grid-cols-2 gap-8 mt-12">
        <div class="bg-white p-8 rounded-lg shadow-md">
          <h3 class="text-xl font-bold mb-3">Nieuwbouw</h3>
          <p>Perfecte integratie in uw bouwplannen voor een naadloze ervaring.</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-md">
          <h3 class="text-xl font-bold mb-3">Renovatie</h3>
          <p>Eenvoudige implementatie in bestaande woningen en gebouwen.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Doelgroepen -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Domotica-systeem voor bedrijven en particulieren</h2>
      <div class="w-24 h-1 bg-accent mx-auto mb-8"></div>
      <p class="text-lg mb-8">
        Onze domotica-producten kunnen slim worden aangestuurd voor bedrijven en particulieren. 
        Of het nu uw kantoor, woning, winkel of restaurant betreft, onze systemen zijn bijna overal toepasbaar.
      </p>

      <div class="grid md:grid-cols-2 gap-8 mt-12">
        <div class="bg-primary text-white p-8 rounded-lg">
          <h3 class="text-xl font-bold mb-3">Particulieren</h3>
          <p>Wooncomfort verhogen met slimme automatisering.</p>
        </div>
        <div class="bg-primary text-white p-8 rounded-lg">
          <h3 class="text-xl font-bold mb-3">Bedrijven</h3>
          <p>Efficiënt beheer van uw zakelijke ruimtes.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="py-20 bg-primary text-white">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Benieuwd naar onze service?</h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Lees wat klanten over ons vertellen of neem direct contact met ons op voor meer informatie.
    </p>
    <a href="contact.html" class="inline-flex items-center px-8 py-3 bg-accent text-primary font-bold hover:bg-opacity-90 transition-colors rounded">
      Neem contact op
      <i class="fas fa-arrow-right ml-2"></i>
    </a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
