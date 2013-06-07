Lydia - PHPMVC
====================================

## Ladda ner Lydia

Först måste du ladda ner eller klona Lydia från Github. Det kan enklast du göra på Github (https://github.com/Nuben/projekt
genom att ladda ner ramverket som ZIP eller klona till Windows. Alternativt kan du använda följande kommando:
 
 > git clone git://github.com/Nuben/projekt.git

## Installation

Att installera Lydia görs genom att följa tre enkla steg. 

### .HTACCESS

Öppna filen .htaccess som hittas i Lydia huvudmapp. I koden hittar du följande rad:

 > RewriteBase /~chro13/phpmvc/projekt
 
Här måste du ändra sökvägen till platsen där du valt att lägga Lydia på den server du använder eller i dina lokala filer.

### Gör databasen skrivbar

För att kunna komma åt databasen måste du göra den skrivbar. Databasen som används ligger i site/data och rättigheterna som bör användas är 777.
Detta kan du ordna genom att antingen ändra filrättigheter på datamappen i Filezilla eller genom följande kommando:

 > cd Lydia; chmod 777 site/data 
 
 Både mappen samt innehållet måste vara skrivbart.
 
### Initiera modulerna

Du måste även initiera modulerna. Det här gör du genom att peka din webbläsare till module/install. Du kan antingen göra det manuellt eller använda den knapp som finns på indexsidan.
När du gör detta skapas två användare, root:root samt doe:doe.

## Ändra utseende och konfigurera Lydia

Lydia är anpassat för att du som användare enkelt ska kunna konfigurera utseendet och inställningarna så att de passar dig.
För detta finns det mesta tillgängligt i site/config.php. 

### Logo

Om du vill ändra din logo måste du först ladda upp den logo du vill använda till site/themes/mytheme/.
Därefter går du till site/config.php och ser till att din logga används där. Du kan samtidigt välja en favicon.

### Titel

I site/config.php kan du även ändra din titel. Detta görs på raden för 'header'. 

### Footer

Du kan också ändra den footer som används. Även detta görs i site/config.php, där du bör hitta följande rad.

	'footer' => '<p>Lydia &copy; by Chris Rosenlind</p>'
	
Där kan du redigera till valfri footer du vill använda. 

### Navigeringsmenyn

Vill du ändra innehållet i navigeringsmenyn görs detta i site/config.php. Hitta följande sektion i koden:

 > $ly->config['menus']

I arrayen för 'my-navbar' kan du själv enkelt välja vad som ska finnas i din navigeringsmeny.

### CSS

CSS-filen där du själv kan välja vilka färger samt typsnitt som ska användas hittar du i site/themes/mytheme/style.css.

## Skapa innehållet

Lydia innehåller redan innehåll som exempel, men du vill givetvis också kunna skapa ditt eget innehåll. I Lydia kan du skapa två typer av innehåll,
blogginlägg samt sidor.

### Blogg

För att skapa ett blogginlägg måste du peka din webbläsare till content/create. Länk för detta finns i controllermenyn. När du gjort detta kan du
skriva ett blogginlägg med valfri text. Som filter bör du använda 'plain' och type bör vara 'post'.

### Sida

Vill du skapa en sida gör du även detta med content/create i controllern. För att en sida ska skapas måste du använda 'page' som type. 



 
 
 



