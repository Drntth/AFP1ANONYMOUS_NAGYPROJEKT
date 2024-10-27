# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása

Az elektronikai cikkeket árusító webáruház fejlesztése jelenleg kezdeti szakaszban van. A projekt célja egy modern, reszponzív platform létrehozása, amely egyszerűsíti és hatékonyabbá teszi a felhasználók számára az elektronikai termékek online vásárlását. A technológiai háttér kialakítása megkezdődött, amely a következő technológiákra és keretrendszerekre épül:

- **Laravel:** A webáruház fejlesztése Laravel keretrendszerrel valósul meg, amely gyors fejlesztést és jól strukturált kódot biztosít. A Laravel használatával egyszerűen létrehozhatók a backend folyamatok, például a felhasználók regisztrációja és kezelése, a termékkatalógus kezelése, valamint a rendelésfolyamat.

- **Laravel Breeze:** Az oldal felhasználói fiókok kezelését a Laravel Breeze autentikációs rendszerével valósítjuk meg, amely könnyen beépíthető regisztrációs és bejelentkezési funkciókat biztosít. A Breeze segítségével egyszerűen kezelhetők a felhasználók fiókadatai és bejelentkezési folyamatai, beleértve a jelszó visszaállítást is, így kényelmes, biztonságos fiókkezelést kínálunk.

- **Blade (Laravel View Engine):** Az oldal megjelenítéséhez a Laravel Blade sablonmotorját használjuk. A Blade lehetőséget biztosít dinamikus HTML sablonok létrehozására, amelyek gyorsítják az oldal fejlesztését és fenntartását, és segítik az új elemek integrációját, mint például a termékek listázása, részletes oldalak megjelenítése és kosárfunkciók.

- **MySQL:** A webáruház adatkezelése egy MySQL alapú adatbázisban történik. Az adatbázis tárolja a felhasználói fiókok, a termékek és azok tulajdonságai, valamint a rendelések adatait. A Laravel Eloquent ORM (Object-Relational Mapping) megkönnyíti az adatbáziskezelést és a dinamikus lekérdezések végrehajtását.

Az oldal fejlesztése több fázisban valósul meg: először a frontend és az alapvető termékstruktúra kialakítása, majd ezt követi a Laravel alapú backend és a dinamikus adatkezelés integrálása. Végül a fizetési és szállítási modulok integrációja következik.

Jelenleg a fejlesztés tervezési fázisban van, amelyben a technológiai követelmények és funkcionális specifikációk meghatározása folyik. A cél egy könnyen használható, gyors, modern webáruház létrehozása, amely skálázható, reszponzív, és képes megfelelni a modern e-kereskedelmi elvárásoknak.

## 2. Vágyálomrendszer leírása

- A célunk egy olyan online platform létrehozása, amely a felhasználók számára kényelmes és intuitív vásárlási élményt nyújt, miközben széleskörű
 termékkínálattal és versenyképes árakkal vonzza a vásárlókat.

- A webáruház kiemelkedő funkciói között szerepel a részletes termék információk, a kategóriák szerinti keresési lehetőség, az ajánlott termékek
 megjelenítése, a felhasználói fiókok kezelése, a kosár funkció, a biztonságos fizetési lehetőségek, valamint az adminisztrációs felület, amely a
 termékek, rendelések és felhasználók kezelését teszi lehetővé.

- A webáruház megvalósításához a következő technológiákat tervezzük alkalmazni: Laravel, MySQL, Laravel Breeze, Blade (Laravel View Engine), Git
 és Kanban. Ezek a technológiák együttesen biztosítják a webáruház stabilitását, biztonságát, gyorsaságát és skálázhatóságát.

- A vásárlási folyamat egyszerű és áttekinthető, a kosárkezelés intuitív, a fizetési módok biztonságosak, és a rendeléskövetés lehetővé teszi,
 hogy a felhasználók nyomon követhessék csomagjuk útját. Az adminisztrációs felület átfogó eszközöket biztosít a termékek, kategóriák, rendelések 
 és ügyfelek kezeléséhez, valamint a webáruház teljesítményének nyomon követéséhez.

- A felhasználói élmény fokozása érdekében a webáruház mobilbarát felülettel, kereső funkcióval is rendelkezik. Az adminisztrációs felület
 segítségével a webáruház könnyedén kezelhető és fejleszthető. A felhasználók számára számos kényelmi funkciót biztosítunk, mint például a 
 gyors betöltődés.

- Összefoglalva, az elektronikai webáruházunk célja, hogy a vásárlók számára egy átfogó, felhasználóbarát és biztonságos online vásárlási élményt
 nyújtson, miközben a legmodernebb technológiák alkalmazásával a piacon meghatározó szereplővé váljon. A folyamatos fejlesztésnek köszönhetően a
 webáruház képes lesz alkalmazkodni a változó piaci igényekhez és újabb innovációkat bevezetni.

## 3. Jelenlegi üzleti folyamatok modellje
1. Üzleti szereplők
Felhasználó: Az oldal látogatója, aki keres, böngészik, és megtekinti az elérhető termékeket, illetve megrendelést adhat le.
Rendszergazda/Adminisztrátor: A termékkínálat kezelését, a készletek nyomon követését és a promóciók beállítását végzi, illetve hozzáfér az ügyféladatokhoz és a rendelési információkhoz.
Beszállító: Ellátja a webáruházat az elektronikai eszközökkel, figyeli a készleteket, és biztosítja a szükséges árufeltöltést.

2. Üzleti folyamatok
Termékfeltöltés és -kezelés

Az adminisztrátor új termékeket tölt fel az adatbázisba, frissíti a meglévő termékek adatait és árát, illetve figyeli a készleteket, hogy elérhetőek legyenek a termékek.
Termékböngészés és kosárba helyezés

A felhasználók böngészik a különböző kategóriákat, és hozzáadhatják a kívánt termékeket a kosarukhoz.
Rendelés és fizetési folyamat

A felhasználó végigmegy a rendelési folyamaton, kiválasztja a fizetési módot, majd véglegesíti a rendelését. Az adminisztrátor figyeli az új rendelések státuszát.
Szállítás és rendeléskövetés

A rendelés leadása után a rendszer automatikusan értesíti a beszállítót, illetve a szállító céget a csomag kiküldéséről.
Visszaküldés és ügyfélszolgálat

A felhasználók a vásárlás után panaszt nyújthatnak be, illetve visszaküldési kérelmet indíthatnak, amelyet az adminisztrátor kezel.


## 4. Igényelt üzleti folyamatok modellje
1. Üzleti szereplők
Felhasználó: Az oldal látogatói, akik különböző kategóriákban böngészhetnek termékek között, és személyre szabott ajánlásokat kapnak.
Adminisztrátor: Az adminisztrátor számára továbbfejlesztett admin felület áll rendelkezésre a termékek, készletek és felhasználói visszajelzések kezelésére.
Beszállító: Valós idejű hozzáféréssel rendelkezik a termékkészletekhez, és közvetlen értesítést kap a készletek utánpótlásáról.
Futárszolgálat: Értesíti a vásárlókat a szállítás állapotáról, amely megjelenik a felhasználói fiókokban is.

2. Üzleti folyamatok
Automatizált termékfeltöltés és készletkezelés

Az adminisztrátor hozzáférhet egy automatizált készletfigyelő rendszerhez, amely automatikus értesítéseket küld alacsony készlet esetén, és közvetlen kapcsolatot biztosít a beszállítók felé.
Intelligens termékkeresés és személyre szabott ajánlások

A felhasználók fejlett szűrési lehetőségekkel böngészhetnek, és a rendszer korábbi keresési és vásárlási adatok alapján releváns ajánlatokat jelenít meg.
Egyszerűsített fizetési folyamat és kosárkezelés

A fizetési folyamat gyors és biztonságos, a felhasználók könnyedén kezelhetik a kosaruk tartalmát, és többféle fizetési mód közül választhatnak.
Rendeléskövetés és valós idejű szállítási értesítések

A rendszer nyomon követi a rendeléseket, és automatikus értesítéseket küld a vásárlóknak, beleértve a szállítási frissítéseket is. A vásárlók valós idejű információt kapnak a csomag állapotáról.
Bővített ügyfélszolgálat és egyszerűsített visszaküldés

Az ügyfélszolgálati modul új funkciókat tartalmaz, amelyek egyszerűsítik a visszaküldési és reklamációs folyamatokat, így gyorsabban és hatékonyabban kezelhetők a felhasználói kérések.


## 5. Követelménylista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| #1 | Főoldal | Főoldal | A főoldalon kiemelt termékek, akciók és új termékek megjelenítése, valamint kategóriák szerinti böngészés |
| #2 | Kategóriakezelés | Kategóriák megjelenítése a navigációs sávban | Termékek kategóriák szerinti szűrése, például processzorok, memóriák, videokártyák. |
| #3 | Különálló termékoldal | Termék részleteinek megjelenítése | A kiválasztott termék részletes adatainak (ár, leírás, specifikációk) megjelenítése. |
| #4 | Kosárkezelés | A kosár tartalmának kezelése | A felhasználók hozzáadhatják a termékeket a kosárhoz, és kezelhetik a kosár tartalmát. |
| #5 | Fizetés | Online fizetési tranzakció lebonyolítása | A vásárlás lebonyolításához szükséges fizetési lehetőségek biztosítása, például kártyás fizetés. |
| #6 | Felhasználói fiók | Regisztráció és bejelentkezés | Új felhasználók regisztrációja, meglévők bejelentkezése, jelszókezelés |
| #7 | Admin felület | Termékkezelés | Adminisztrátorok számára termékek hozzáadása, módosítása és törlése. |
| #8 | Admin felület | Megrendelések kezelése | Az adminisztrátorok a megrendelések nyomon követése és státuszuk frissítése. |

## 6. Használati esetek

- **ADMIN:** Az Admin feladata a rendszer teljes körű felügyelete. Képes bármely felhasználói szerepkörbe belépni, hogy ellenőrizze a hibamentes működést. Az Admin korlátlan hozzáféréssel rendelkezik az egész rendszerhez, így szabadon módosíthatja a felhasználók profiljait, beleértve a jogosultságokat, szerepköröket, felhasználóneveket és jelszavakat. Emellett új felhasználókat adhat a rendszerhez, illetve eltávolíthat már meglévő felhasználókat. Az Admin kezelheti a termékeket, például új termékeket adhat hozzá, meglévőket módosíthat vagy törölhet.

- **Felhasználó:** A Felhasználó jogában áll az oldalon megjelenő összes termék megtekintése, valamint az interakciók végrehajtása. A Felhasználó regisztrálhat a rendszerbe, bejelentkezhet, termékeket rendelhet, vásárlási kosarat hozhat létre, és értékelheti a termékeket. Az online boltban kereshet a termékek között, és hozzáférhet a vásárlási előzményeihez.

- **Megtekintő:** Az oldalt szabadon látogathatja, elolvashatja a termékekről írt véleményeket, azonban regisztráció nélkül nem tudja értékelni azokat, illetve nem tud személyes adatokat elmenteni későbbi vásárlásokhoz, nem tudja megtekinteni a vásárlási előzményeit.

## 7. Megfeleltetés, hogyan fedik le a használati esetek a követelményeket

- #1: A weboldal minden látogatója hozzáférhet a főoldalhoz, ahol böngészheti a kiemelt termékeket és akciókat.
- #2: A felhasználók a navigációs sáv segítségével könnyen böngészhetik a különböző kategóriákat, hogy megtalálják a számukra releváns termékeket.
- #3: A felhasználók rákattinthatnak egy termékre, hogy megtekinthessék annak részletes leírását és specifikációit.
- #4: A felhasználók termékeket adhatnak a kosarukhoz, módosíthatják a mennyiségeket, vagy eltávolíthatják azokat a kosárból.
- #5: A felhasználók kiválaszthatják a fizetési módot, és biztonságosan lebonyolíthatják a tranzakciót.
- #6: A felhasználók regisztrálhatnak új fiókot, illetve bejelentkezhetnek a meglévő fiókjukba.
- #7: Az adminisztrátorok képesek új termékeket hozzáadni a webáruházhoz, valamint meglévő termékek adatait módosítani vagy törölni.
- #8: Az adminisztrátorok ellenőrizhetik a beérkezett megrendeléseket, frissíthetik azok státuszát, és kezelhetik a vásárlói igényeket.

## 8. Képernyőtervek
| Kép | Leírás |
| :-----------: | :-----------: |
| ![Bejelentkezés](https://github.com/Drntth/AFP1ANONYMOUS_NAGYPROJEKT/blob/main/kepek/BEJELENTKEZES.jpg) |  A bejelentkező oldal tervezete. |
| ![Regisztráció](https://github.com/Drntth/AFP1ANONYMOUS_NAGYPROJEKT/blob/main/kepek/REGISZTRACIO.jpg) |  A regisztrációs oldal tervezete. |
| ![Főoldal](https://github.com/Drntth/AFP1ANONYMOUS_NAGYPROJEKT/blob/main/kepek/ELSO.jpg) |  A főoldal tervezete. |
| ![TermekOldal](https://github.com/Drntth/AFP1ANONYMOUS_NAGYPROJEKT/blob/main/kepek/TERMEK.jpg) |  A termékoldal  tervezete. |



## 9. Forgatókönyvek

- **Felhasználói regisztráció és bejelentkezés:**
    -  Felhasználó ellátogat a weboldalra, ráklikkel a "Regisztráció" gombra. Kitölti a szükséges mezőket (név, e-mail, jelszó), elfogadja a
     felhasználási feltételeket, majd ráklikkel a "Regisztráció" gombra. A rendszer ellenőrzi az adatokat, létrehozza az új felhasználói fiókot.
     A felhasználó bejelentkezik az új fiókjával.

- **Böngészés és termékkeresés:**
    - A felhasználó a főoldalon vagy a kategóriák menüben böngészi a termékeket. A felhasználó szűrőket használhat a termékek szűkítésére 
     (ár, márka, tulajdonságok). A termékek részletes leírását és képeit megtekintheti.

- **Kosárba helyezés és vásárlás:**
    - A felhasználó kiválaszt egy terméket, megadja a kívánt mennyiséget, majd a "Kosárba" gombra kattint. A kosár tartalmát bármikor
     megtekintheti és módosíthatja. A vásárlás folytatásakor kiválasztja a szállítási és fizetési módot, majd leadja a rendelést. 
     A felhasználó vendégként is vásárolhat, de a regisztrált felhasználóknak több előnyük van (pl. kedvezmények, rendelési előzmények).

- **Fizetés:**
    - A felhasználó kiválaszt egy fizetési módot (bankkártya, utánvét, online átutalás).

- **Szállítás:**
    - A rendszer kiszámítja a szállítási költséget és a várható szállítási időt. A felhasználó kiválasztja a kívánt szállítási címet és módot.

- **Vevőszolgálat:**
    - A felhasználó felveszi a kapcsolatot a vevőszolgálattal e-mailben. A vevőszolgálat munkatársa válaszol a kérdésekre és megoldja a
     problémákat. A rendszerben van egy gyakori kérdések (FAQ) rész.

- **Profil kezelése:**
    - A felhasználók egy személyre szabott felhasználói fiókkal rendelkeznek, ahol központi helyen tárolhatják és kezelhetik személyes adataikat,
     beleértve a nevüket, e-mail címüket és szállítási címüket. Ezen felül gyorsabban vásárolhatnak, mivel nem kell minden alkalommal újra megadni
      adataikat.

## 10. Funkció - követelmény megfeleltetése

| Id | Követelmény | Funkció |
| :---: | --- | --- |
| #1 | A főoldalon kiemelt termékek, akciók és kategóriák megjelenítése | Főoldal betöltése, kiemelt és akciós termékek listázása |
| #2 | Termékek kategóriák szerinti szűrése | Kategóriák megjelenítése és szűrési opciók |
| #3 | A kiválasztott termék részletes adatainak megjelenítése | Termékoldal, részletes termékleírás és specifikációk |
| #4 | Kosár tartalmának kezelése | Termék hozzáadása, eltávolítása és módosítása a kosárban |
| #5 | Online fizetési lehetőségek biztosítása | Fizetési felület, tranzakciós folyamat |
| #6 | Felhasználók regisztrációja és bejelentkezése | Fiók regisztráció és bejelentkezési funkciók |
| #7 | Adminisztrátorok számára termékek hozzáadása, módosítása | Admin termékkezelő felület |
| #8 | Megrendelések nyomon követése és státuszkezelése | Admin megrendelés-kezelő felület |


## 11 Fogalomszótár
