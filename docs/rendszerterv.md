# Rendszerterv
## 1. A rendszer célja
A rendszer célja, hogy egy felhasználóbarát, megbízható és könnyen navigálható webáruházat biztosítson az elektronikai eszközök értékesítéséhez. A weboldal lehetőséget nyújt a vásárlóknak a termékek részletes keresésére, összehasonlítására, valamint egyszerű és biztonságos rendelés leadására. Emellett a rendszer támogatja az adminisztrátorokat a készletkezelésben és a rendelési folyamat nyomon követésében.

Nem cél a rendszernek egyedi szervizelési szolgáltatások biztosítása vagy a termékek egyéb technikai támogatása; a rendszer kizárólag a termékek online megjelenítését, értékesítését és szállítási folyamatainak támogatását célozza.

## 2. Projektterv

### 2.1 Projektszerepkörök, felelősségek:
Scrum Masters: Feladata a projekt gördülékeny vezetése, a fejlesztési ütemek betartatása és a csapat közötti kommunikáció támogatása.
Product Owner: A termékfejlesztés irányítása a felhasználói igények és a funkcionális követelmények figyelembevételével. Közvetítő a fejlesztőcsapat és a megrendelők között.
Üzleti szereplő: Az elektronikai áruházat üzemeltető vállalkozás képviselője, aki meghatározza a funkcionális és üzleti igényeket, illetve biztosítja a releváns adatokat és erőforrásokat.

### 2.2 Projektmunkások és felelősségek:
Frontend:

Feladata: A webáruház felhasználói felületének kialakítása (HTML, CSS, JavaScript), a reszponzív dizájn biztosítása, valamint a vásárlói élmény optimalizálása.
Felelős: Frontend fejlesztő csapat, UX/UI dizájnerek
Backend:

Feladata: A szerveroldali folyamatok fejlesztése és karbantartása, mint a felhasználói fiókok kezelése, adatbázis integráció, és a rendelési folyamat háttérben történő menedzselése.
Felelős: Backend fejlesztő csapat
Tesztelés:

Feladata: A webáruház funkcióinak tesztelése, hibák azonosítása és javítása, valamint a felhasználói élmény biztosítása különböző eszközökön.
Felelős: Tesztelési csapat
     
### 2.3 Ütemterv:

|Funkció                  | Feladat                                | Prioritás | Becslés (nap) | Aktuális becslés (nap) | Eltelt idő (nap) | Becsült idő (nap) |
|-------------------------|----------------------------------------|-----------|---------------|------------------------|------------------|---------------------|
|Követelmény specifikáció |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |             
|Funkcionális specifikáció|Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Rendszerterv             |Megírás                                 |         1 |             1 |                      1 |                1 |                   1 |
|Program                  |Képernyőtervek elkészítése              |         2 |             1 |                      1 |                1 |                   1 |
|Program                  |Prototípus elkészítése                  |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Alapfunkciók elkészítése                |         3 |             8 |                      8 |                8 |                   8 |
|Program                  |Tesztelés                               |         4 |             2 |                      2 |       
## 3. Üzleti folyamatok modellje

### 3.1 Üzleti szereplők
Felhasználók (vásárlók): Az oldal látogatói, akik böngészhetik a termékeket, kosárba helyezhetik azokat, és rendelést adhatnak le.
Adminisztrátor: Felelős a termékinformációk feltöltéséért, frissítéséért és készletkezeléséért, valamint a felhasználói visszajelzések és rendelési folyamatok követéséért.
Beszállítók: Az elektronikai eszközök ellátásáért felelős szereplők, akik biztosítják az elérhető termékeket és azok utánpótlását a raktárban.

### 3.2 Üzleti folyamatok
Termékfeltöltés és -kezelés: Az adminisztrátor rendszeresen frissíti a termékkínálatot és ellenőrzi a készletadatokat. Új termékek felvételekor a termékleírás, ár és elérhetőség kerül rögzítésre.

Termékböngészés és keresés: A vásárlók böngészhetik és szűrhetik a termékeket kategóriák, árak és egyéb szempontok szerint, így gyorsan megtalálják az igényeiknek megfelelő eszközöket.

Kosárkezelés és fizetés: A vásárlók kiválasztják a termékeket, és a kosár segítségével könnyedén kezelhetik azokat. A rendelés véglegesítésekor különböző fizetési módok állnak rendelkezésre.

Rendelésfeldolgozás és szállítás: A rendelés leadása után az adminisztrátor és a futárszolgálat értesítést kap, és a szállítási folyamat megkezdődik. A vásárlók a rendelés státuszáról értesítést kapnak.

Visszaküldés és ügyfélszolgálat: A vásárlók kérhetnek visszatérítést vagy termékcserét. Az adminisztrátor felügyeli a folyamatot, és biztosítja az ügyfélszolgálati támogatást az esetleges problémák megoldására.



## 4. Követelmények

### Funkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| #1 | Regisztráció és bejelentkezés | Felhasználók regisztrálhatnak, bejelentkezhetnek és hozzáférhetnek fiókadataikhoz. |
| #2 | Termékkategóriák böngészése | A felhasználók kategóriák szerint böngészhetik a számítógép-alkatrészeket. |
| #3 | Kosár kezelés | A felhasználók termékeket adhatnak a kosárhoz, eltávolíthatják azokat, és módosíthatják a darabszámot. |
| #4 | Online fizetés | Biztonságos fizetési lehetőségek, például bankkártyás fizetés. |
| #5 | Adminisztrátori termékkezelés | Az adminisztrátorok új termékeket adhatnak hozzá, illetve módosíthatják és törölhetik azokat. |
| #6 | Megrendelések nyomon követése | A rendszer biztosítja a megrendelések kezelését, státuszuk követését mind felhasználók, mind adminisztrátorok számára. |


### Nemfunkcionális követelmények

| ID | Megnevezés | Leírás |
| --- | --- | --- |
| #1 | Rendelkezésre állás | A webáruháznak legalább 99,5%-os rendelkezésre állást kell biztosítania napi szinten. |
| #2 | Teljesítmény | Az oldal betöltési ideje nem haladhatja meg a 3 másodpercet az elsődleges oldalak esetén. |
| #3 | Felhasználói élmény | Az oldal felülete könnyen használható, logikus navigációt és konzisztens megjelenést biztosít. |
| #4 | Biztonság | 	A felhasználói adatok, tranzakciók biztonságát titkosítás és megfelelő biztonsági protokollok garantálják. |

### Támogatott eszközök

Eszközök:

+ Asztali számítógépek és laptopok,
+ Telefonok és tabletek

Böngészők:

+ Google Chrome,
+ Mozilla Firefox,
+ Microsoft Edge,
+ Safari,
+ Opera

## 5. Funkcionális terv

### 5.1 Rendszerszereplők

1. Felhasználók (vásárlók):

   + Nem regisztrált vásárlók:
   Böngészhetik a termékeket, kereshetnek a kategóriák között, és megtekinthetik a termékek részletes adatait,
   de **nem tudnak vásárolni** vagy a kosarat használni.

   + Regisztrát vásárlók:
   Hozzáférhetnek **minden** vásárlással kapcsolatos funkcióhoz,
   például termékek kosárba helyezéséhez és a fizetési lehetőségekhez.

2. Adminisztrátorok:

   **Teljes hozzáféréssel** rendelkeznek a termékkezeléshez, megrendelés kezeléséhez és felhasználói fiókok kezeléséhez.



### 5.2 Menühierarchiák

 + Nem regisztrált vásárlók esetén:

   - Kiemelt termékek és akciók a **főoldalon**,
   - Kategóriák szerinti böngészés a **navigációs sávban**

 + Regisztrált vásárlók esetén:

   - Kiemelt termékek és akciók a **főoldalon**,
   - Kategóriák szerinti böngészés a **navigációs sávban**,
   - Vásárláskor a **kosaruk tartalmának** megtekintése és szerkesztése
   - **Profiloldalukon** kezelhetik felhasználói adataikat

 + Adminisztrátori felület: 

   - **Termékkezelés:** Termékek hozzáadása, módosítása, törlése
   - **Felhasználókezelés:** Felhasználói jogosultságok kezelése, profilok szerkesztése



## 6. Fizikai környezet

### Vásárolt softwarekomponensek és külső rendszerek

- Mi kizárólag saját fejlesztésű komponensekkel dolgozunk, nem használunk megvásárolt elemeket. 
Így biztosak lehetünk benne, hogy minden megoldásunk egyedi és teljesen a mi elképzeléseink szerint működik. 
Ez lehetővé teszi, hogy rugalmasabbak legyünk és jobban tudjunk alkalmazkodni az igényekhez.

### Hardver topológia

- **Szerver**: A webáruház "szíve", amelyen az összes alkalmazás fut. A processzor sebessége, a memória kapacitása és a tárhely mérete határozza
 meg a szerver teljesítményét. A választáskor figyelembe kell venni a várható forgalmat és az alkalmazás igényeit.
- **Operációs rendszer**: A szerver szoftveres alapja. A Linux disztribúciók (Ubuntu, Debian, CentOS) népszerűek a stabilitásuk és a nyílt
 forráskódú ökoszisztémájuk miatt.
- **Webszerver**: Az a szoftver, amely a kéréseket fogadja és a megfelelő tartalmat küldi vissza a kliensnek. Az Apache és az Nginx a
 legelterjedtebb webszerverek.
- **Adatbázis**: A termékek, felhasználók és egyéb adatok tárolására szolgál. A MySQL a leggyakrabban használt adatbázis, de a PostgreSQL és a
 NoSQL adatbázisok (MongoDB, Cassandra) is népszerűek.
- **Laravel Framework**: A PHP nyelvű webfejlesztő keretrendszer, amely jelentősen egyszerűsíti a webáruház fejlesztését. A Composer csomagkezelő
 segítségével könnyen kezelhetők a Laravel és egyéb függőségek.

### Fizikai alrendszerek

- **Backend alrendszer**: PHP alapú rendszer, amely a webszerveren fut és kezeli az üzleti logikát, adatbázis-műveleteket és a felhasználói
 kéréseket.
- **Frontend alrendszer**: A HTML, CSS és JavaScript technológiákkal készült felhasználói felület, amely a böngészőkben jelenik meg, és interaktív
 elemeket biztosít a felhasználók számára.
- **Adatbázis alrendszer**: A MySQL vagy PL/SQL adatbázis felelős az adatok tárolásáért, lekérdezéséért, frissítéséért és kezeléséért

### Fejlesztő eszközök

- Visual Studio Code
- XAMPP
- phpMyAdmin
- Oracle SQL Developer
- Git
- KanBan

## 8. Architekturális terv

### Webszerver

- Technológia:
   - Apache: A legtöbb Laravel projekt ezeket a webszervereket használja.
   - PHP: A Laravel PHP-ben íródott, így a webszervernek támogatnia kell ezt a nyelvet.
- Konfiguráció:
   - Virtual host: Minden Laravel projektnek saját virtuális hostot kell kapnia.
   - .htaccess konfiguráció: A kérések átirányítása a public könyvtárba, URL rewriting, egyéb szükséges beállítások.

### Adatbázis rendszer

- Technológia:
   - MySQL: Ez az egyik leggyakrabban használt adatbázis Laravel projektekben.
- Táblák:
   - products: id, name, description, price, category_id, image, stock
   - users: id, name, email, password, role
   - orders: id, user_id, total_price, shipping_address, payment_method
   - order_items: id, order_id, product_id, quantity, price
   - categories: id, name
- Kapcsolatok:
   - Egy-több: Egy kategóriához több termék tartozhat.
   - Egy-egy: Egy termék csak egy kategóriához tartozhat.
   - Migrációk és seederek: Az adatbázis szerkezetének és adatainak kezelésére.

### A program elérése, kezelése

- Frontend:
   - Blade templating engine: A Laravel alapértelmezett sablonmotorja.
   - CSS framework: A felhasználói felület kialakításához.
   - JavaScript framework: Dinamikus elemekhez, például a kosárhoz.
- Backend:
   - Routes: Az URL-ek és a hozzájuk tartozó kontroller metódusok közötti kapcsolatot definiálják.
   - Controllers: A HTTP kérések kezelése, az üzleti logika megvalósítása.
   - Models: Az adatbázis táblákkal való interakció.
   - Migrations: Az adatbázis szerkezetének módosítására.
   - Seeders: Az adatbázis feltöltésére tesztadatokkal.

## 9. Adatbázis terv

![ADATBÁZISTERV](https://github.com/Drntth/AFP1ANONYMOUS_NAGYPROJEKT/blob/main/kepek/adatbazis_terv.png)

## 10. Implementációs terv

**Felhasználó felület:**

- A webáruház felhasználói felülete a Laravel Blade sablonmotor segítségével készül, amely lehetővé teszi a dinamikus és könnyen karbantartható oldalstruktúrák létrehozását. A HTML biztosítja az oldalak szerkezetét, míg a CSS gondoskodik a weboldal vizuális megjelenéséről és a reszponzivitásról, így az oldal különböző eszközökön is optimálisan jelenik meg. A felhasználói felület alapvető célja, hogy a vásárlók számára egyszerű és átlátható böngészési, keresési és vásárlási élményt nyújtson, minimalista és jól strukturált dizájnnal.

- A bejelentkezés és regisztráció a Laravel Breeze csomag segítségével kerül kialakításra, amely előre beépített felhasználói hitelesítést biztosít. A regisztrált felhasználók elérhetik fiókjukat, ahol kezelhetik személyes adataikat és megrendeléseiket. A webáruház emellett egy különálló adminisztrációs felülettel is rendelkezik, amely kizárólag az adminisztrátorok számára érhető el. Itt az adminisztrátorok képesek új termékeket hozzáadni, módosítani, vagy törölni, valamint kezelni a megrendeléseket és ellenőrizni a felhasználói aktivitást.

**Adatbázis:**

- Az adatbázis MySQL rendszerben kerül kialakításra, amely tárolja a termékek, kategóriák, megrendelések, valamint a felhasználói profilok adatait. A termékek részletes információi, mint például a név, ár, leírás és készlet, mind az adatbázisban kerülnek tárolásra. Az egyes kategóriák lehetővé teszik a termékek egyszerű szűrését és böngészését, így segítik a felhasználókat a keresett termékek gyors megtalálásában.

- A megrendelésekkel kapcsolatos adatok nyilvántartása, mint például a termékek, vásárlási dátumok, és a vásárlói információk, szintén az adatbázisban kap helyet. A fizetési tranzakciókat a Laravel Cashier csomag kezeli, amely Stripe integrációval biztosít biztonságos és gyors online fizetési megoldást. A rendszer az összes felhasználói adatot és tranzakciós információt biztonságosan tárolja, garantálva a személyes adatok védelmét és a megfelelő adatkezelést.

## 11. Tesztterv

1. Egységtesztelés (*Unit testing*):
   
   + **Célja:** Az egyes funkciók és modulok helyes működésének ellenőrzése külön-külön.
   + **Példa:** Az egyes funkciók (pl. regisztráció, termék hozzáadása kosárba) helyes működésének tesztelése külön-külön.

2. Integrációs tesztelés (*Integration testing*):

   + **Célja:** Annak ellenőrzése, hogy az egységek hogyan működnek együtt a rendszeren belül.
   + **Példa:** Regisztráció és bejelentkezés összekapcsolt működésének, illetve kosár és fizetési rendszer közötti           kommunikáció tesztelése.

3. Rendszertesztelés (*System testing*):

   + **Célja:** Az egész rendszer működésének tesztelése annak érdekében, hogy minden funkció helyesen működjön együttesen.
   + **Példa:** A teljes vásárlási folyamat tesztelése, a böngészéstől a fizetésig.

4. Funkcionális tesztelés (*Functional testing*):

   + **Célja:** Az összes üzleti funkció tesztelése a specifikáció szerint.
   + **Példa:** Termékek kereshetőségének, kategóriák közötti szűrésének és adminisztrációs műveletek ellenőrzése.

5. Terheléses tesztelés (*Performance testing*):

   + **Célja:** A rendszer teljesítőképességének tesztelése nagy felhasználói terhelés mellett (például JMeter-rel).
   + **Példa:** Az oldal teljesítményének vizsgálata magas számú egyidejű felhasználó esetén.

6. Biztonsági tesztelés (*Security testing*):

   + **Célja:** Az adatvédelmi és biztonsági előírások teljesülésének vizsgálata.
   + **Példa:** A bejelentkezési adatok titkosításának és a fizetési folyamat biztonságának ellenőrzése.

### Konkrét tesztesetek

| ID | Teszt típus | Modul | Leírás | Elvárt eredmény |
| ---| --- | --- | --- | --- |
| #1 | Funkcionális teszt | Regisztráció | Felhasználó sikeresen regisztrál | Új felhasználó létrejön |
| #2 | Egységteszt | Kosár | Termék kosárba helyezése | Termék megjelenik a kosárban |
| #3 | Integrációs teszt | Fizetés | Kosárban lévő termékek kifizetése | Sikeres fizetés és visszaigazolás |
| #4 | Terheléses teszt | Weboldal betöltés | Az oldal terhelés alatt is gyorsan betölt | Az oldal 3 másodperc alatt betölt |
| #5 | Biztonsági teszt | Bejelentkezés | Rossz jelszó megadása | Hibaüzenet jelenik meg |

## 12. Telepítési terv

**Fizikai telepítési terv:** A webáruház működéséhez először szükség van egy adatbázis-szerverre és egy webszerverre, amelyek együttműködnek a felhasználói igények kiszolgálása érdekében.

- **Szoftver telepítési terv:**
   - A felhasználók számára nem szükséges külön szoftver telepítése; a webáruház teljes mértékben böngészőn keresztül érhető el (pl. Microsoft Edge, Google Chrome, Mozilla Firefox, Safari).
   - A webáruház reszponzív kialakítása lehetővé teszi, hogy asztali és mobil platformokon egyaránt használható legyen, egyszerű és biztonságos hozzáférést biztosítva minden eszközről.

- **Adatbázis-szerver:**
   - Az adatbázis-szerver tárolja a termékek, felhasználók, rendelések és kategóriák adatait.
   - Laravel használatával a webalkalmazás közvetlen kapcsolatot létesít az adatbázis-szerverrel, amely lehetővé teszi a gyors adatkezelést és biztonságos tranzakciókezelést.
   - **Adatbázis:** MySQL (alapértelmezett), de szükség esetén támogatott más SQL alapú rendszerek is, például PostgreSQL.

- **Webszerver:**
   - A webszerver biztosítja a Laravel-alapú alkalmazás futtatását és a felhasználói interakciók kiszolgálását.
   - A webszerver futtatja a Laravel alkalmazást, amely fogadja a HTTP-kéréseket a kliensektől, és feldolgozza azokat, beleértve a termékkeresést, kosárkezelést és felhasználói profilműveleteket.
   - A szerver emellett felelős a beépített Laravel Blade sablonmotor által létrehozott dinamikus HTML-oldalak megjelenítéséért.
   - **SSL tanúsítvány telepítése** ajánlott a biztonságos fizetési folyamatok támogatásához, amelyek a Stripe alapú Laravel Cashier fizetési rendszeren keresztül valósulnak meg.

- **Hálózati kapcsolat:**
   - A webszerver közvetlen internetkapcsolattal rendelkezik, és publikus IP-címmel érhető el.
   - A felhasználók böngészőiken keresztül kapcsolódnak a webszerverhez, és HTTP/HTTPS protokollon keresztül érhetik el a webáruházat.

**Szoftver telepítési terv:**
   - A felhasználók számára nem szükséges külön szoftver telepítése; a webáruház teljes mértékben böngészőn keresztül érhető el (pl. Microsoft Edge, Google Chrome, Mozilla Firefox, Safari).
   - A webáruház reszponzív kialakítása lehetővé teszi, hogy asztali és mobil platformokon egyaránt használható legyen, egyszerű és biztonságos hozzáférést biztosítva minden eszközről.

## 13. Karbantartási terv

