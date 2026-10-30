# WordPress-portfolio

live link: https://u250003.gluwebsite.nl

Dit is de mijn officiële portfolio website waar ik al mijn projecten wil laten zien die ik heb gemaakt.
Momenteel staat er alleen dummy data in, omdat ik nog niet genoeg tijd heb gehad om mijn eigen projecten erbij te zetten, maar die komen er zo snel mogelijk in.

**Welke plugins gebruik ik en waarom**

**ACF**

ACF is de plugin die ik het meest gebruik. ACF is heel handig om custom fields te maken waar je tekst in kan stoppen om in laden op de website zonder hardcoded tekst in je html te hebben.

Ik maak gebruik van post types, field groups en taxonomies.

Post types zijn de basis van je project, met alleen een post type zonder dat er iets is aan gekoppeld is kan je wat standaard dingen invullen: titel, description en een plaatje.
De rest kan je invullen als je field groups hebt gekoppeld aan je custom post type.
Zelf gebruik ik 1 custom post type om mijn projecten aan te maken.

Field groups zijn de dingen die je wil gebruiken om in je custom post type extra data mee te geven. Ik heb 2 field groups gemaakt voor alle tekst velden en 1 field group, waarmee je kan kiezen of je een project featured wil maken (op de home pagina).

Als laatste heb ik nog gebruik gemaakt van taxonomies die worden gebruikt om data bij elkaar te houden. Ik gebruik het om een selectie veld van gebruikte skills te maken. Daar kan ik makkelijk extra skills mee toevoegen die je overal kan zien wanneer je een project aan het maken /aanpassen bent.

Ik had erover nagedacht om zelf een plugin te schrijven voor alle tekst velden, omdat ik dan veel meer over wordpress zou leren en dat ik later misschien ook meer kan snappen hoe ACF werkt, alleen heb ik dat uiteindelijk niet gedaan, omdat het me zoveel tijd zou hebben gekost en zou nooit net zo goed worden als ACF.

**Code Snippets**

deze extension is er voor maar 1 reden. Ik had namelijk een probleem dat de featured image veld niet kwam opdagen wanneer ik een project aan het bijwerken was. En dit moest gefixed worden door 3 regels code toe te voegen aan een bestand wat ik nog niet had. Inplaats van een function.php aan te maken heb ik deze plugin gebruikt waarmee ik makkelijk kleine stukjes custom code kan uitvoeren.

**Dark-mode**

Dit is een custom-plugin die ik zelf heb gemaakt.
Deze plugin zorgt ervoor dat je de website kan wisselen van licht naar donker en andersom.
De plugin is voornamelijk javascript met logica die tracked of de knop is gedrukt, waarna de body een class krijgt genaamd darkmode. Als de body die class krijgt veranderen de kleuren door gebruik van css. daarna wordt je thema nog opgeslagen in je local storage, waardoor je het thema houdt als je van pagina wisselt of de pagina hebt weg geklikt en je later terug komt.

Ik heb gekozen om niet een bestaande plugin te gebruiken die dit doet, omdat ik graag zelf wou weten hoe ik css properties kan aanpassen wanneer er op iets geklikt wordt.
