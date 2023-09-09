<?php
require 'partials/head.php';
?>
<nav>
    <ul class="container">
        <li id="title"><h1>Energie Constultant</h1></li>
        <li><a href="/">Home</a></li>
        <li><a href="/">Over Ons</a></li>
        <li><a href="/">Afspraak Maken</a></li>
    </ul>
</nav>

<header >
    <div class="container header_content">
        <div class="header_text">
            <h1>Besparen op uw energiefactuur?</h1>
            <p>Dat is onze expertise!</p>
        </div>
        <img src="../public/images/headerimg.png" alt="">
    </div>
</header>

<section>
    <h2>Wie ben ik?</h2>
    <div class="container about_me">
        <div class="about_me_content">
            <p>
                Hallo! Mijn naam is John Doe, en ik ben uw persoonlijke besparingsadviseur. Als u ooit het gevoel hebt gehad dat u te veel betaalt voor uw maandelijkse rekeningen, ben ik hier om te helpen. Ik weet hoe moeilijk het kan zijn om tijd te vinden om alle verschillende aanbiedingen en tarieven te vergelijken. Dat is waar ik in beeld kom.
            </p>
            <img src="../public/images/headshot.jpg" alt="picture of me" width="300px">
        </div>
    </div>
</section>

<section>
    <h2>Hoe gaan we te werk?</h2>
    <div class="container how_it_works">
        <div class="step">
            <img src="../public/images/edit-list-icon.svg" alt="icon of form and pencil">
            <h3>Afspraak Plannen</h3>
            <p>Neem contact met me op om een geschikt tijdstip te vinden voor onze afspraak.</p>
        </div>
        <div class="step">
            <img src="../public/images/chat-message-icon.svg" alt="chatboxes indicating conversation">
            <h3>Persoonlijk Bezoek</h3>
            <p>Ik kom bij u thuis langs voor een grondige analyse van uw huidige contracten en uitgaven.</p>
        </div>
        <div class="step">
            <img src="../public/images/reload-sync-icon.svg" alt="comparison icon">
            <h3>Vergelijking & Aanbevelingen</h3>
            <p>Na onze ontmoeting zal ik de beste alternatieven voor u opzoeken en aanbevelingen doen die bij uw behoeften passen.</p>
        </div>
        <div class="step">
            <img src="../public/images/party-hat-icon.svg" alt="">
            <h3>Veranderingen Doorvoeren</h3>
            <p>Indien gewenst, kan ik u helpen met het overschakelen naar een nieuwe leverancier, zodat u meteen kunt beginnen met besparen.</p>
        </div>
    </div>
</section>

<section>
    <div class="container values">
        <h2>Waarom zou u voor mij kiezen?</h2>
        <div class="values_content">
            <span>PERSOONLIJKE AANPAK</span>
            <p>Iedere klant is uniek, en ik zorg ervoor dat mijn adviezen op maat gemaakt zijn voor uw specifieke situatie.</p>
            <span>TRANSPIRANTIE</span>
            <p> Geen verborgen kosten, geen verrassingen. Ik leg alles duidelijk en eerlijk uit.</p>
            <span>TIJD & GELD BESPAREN</span>
            <p> Ik neem het zware werk van u over, zodat u zich kunt focussen op wat echt belangrijk is in uw leven.</p>
        </div>
    </div>
</section>

<section>
    <form action="">
        <label for="name">Voor & achternaam:</label>
        <input type="text" id="name" name="name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <label for="gsm">Mobiel nr:</label>
        <input type="text" id="gsm" name="gsm">


    </form>
</section>

<?php
require 'partials/footer.php';
?>