# Projekt DT197G - Wordpress Tema

### Välkommen till mitt projekt i kursen DT197G :wave:
Detta projekt är skapat som en sista del i kursen DT197G på Mittuniversitetet. Syftet var att skapa ett eget Wordpress tema. 
 
### :open_book: Projektöversikt 
Repot innehåller endast ett Wordpress tema.

### :rocket: Funktioner 
* Användaren kan välja mellan två olika `page templates`. "Undersida nyheter - en kolumn" och "Aktiviteter - En kolumn". 
* Header och logga går att anpassa till valfri bild.
* Det finns en rad olika kategorier för att skriva ut inläggen för att temat ska fungera, se tabellen nedan. 

| Kategorier | Slug |
| --------- |:----------|
| Boende    | boende |
| Boende inforuta | boende-inforuta|
| Nyheter | nyheter |
| Sommar aktiviteter | sommar-aktiviteter |
| Vinter aktiviteter | vinter-aktiviteter |


### :wrench: Teknologier och Verktyg 
+ **PHP**: För att bygga upp temats alla olika undersidor.
+ **Wordpress**: Används som CMS och medför en del av funktionerna för temat. 
+ **JavaScript**: För att skapa en mobilmeny.
+ **CSS**: För styling av temat. 

### :file_folder: Struktur 
+ **css**: Innehåller stilfiler för temat. 
+ **images**: Innehåller bilder för temat. 
+ **js**: Innehåller  en JavaScript fil.
+ **rot-mappen**: Innehåller alla undersidor, header, footer m.m och templates filerna.

### :star: Vidareutveckling / Förbättrnignar 
+ Skapa fler möjligheter för användaren att ändra temat, tex färg osv. 

### :gear: Installation och körning
1. Klona ner repot: 
    
    `https://github.com/maha404/projekt-dt191g`

2. Om du inte redan har wordpress installerat kan du göra det [här](https://wordpress.org/download/).

3. XAMPP för lokal körning behöver också finnas installerat. Om du inte redan har det installerat går det att installera [här](https://www.apachefriends.org/download.html).

4. Flytta Wordpress installationen till `htdocs` mappen.

5. Skapa en user i `phpMyAdmin` med valfritt namn och skapa samtidigt en databas i samma namn. 

6. Starta sedan Appache och MYSQL via XAMPP och gå till `http://localhost/wordpress` för att slutföra installationen av Wordpress, följ anvisningarna som ges. Här behöver du bland annat ange namnet ochg lösenord på databasen du skapade i tidigare steg!

7. Repot som klonades i steg 1 läggs sedan Wordpress mappen i `htdocs` under `themes`.

8. Gå sedan till `themes` inne i Wordpress och ändra till temat som klonades i steg 1. 
