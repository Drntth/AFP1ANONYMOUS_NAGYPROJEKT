# Követelmény specifikáció

## 1. Áttekintés

## 2. A jelenlegi helyzet leírása

## 3. Vágyálomrendszer

## 4. Jelenlegi üzleti folyamatok modellje
3.1 Üzleti szereplők
Vásárló: Az oldal látogatói, akik elektronikai eszközöket keresnek, vásárlást kezdeményeznek, termékeket böngésznek, és időnként támogatási vagy információs kérésekkel élnek.
Adminisztrátor: Az oldal karbantartásáért felelős személy, aki termékeket tölt fel, kezeli a készletinformációkat, promóciókat állít be, valamint ellenőrzi a rendeléseket és kezeli az ügyfélszolgálati megkereséseket.
Beszállító: Az elektronikai eszközök szállításáért és készlet utánpótlásáért felelős külső fél, amely biztosítja a szükséges termékeket az oldal számára.
Futárszolgálat: A rendelések kiszállításáért felelős partner, amely a vásárlókhoz eljuttatja a megrendelt termékeket.
3.2 Üzleti folyamatok
Termékfeltöltés és készletkezelés

Bemenet: Beszállítók által biztosított terméklista, árinformációk, készletmennyiség.
Erőforrás: Adminisztrátor és a weboldal adminisztrációs rendszere.
Lefutás: Az adminisztrátor frissíti a termékeket, mennyiségi adatokat és beárazza az új termékeket a weboldalon, illetve akciókat állít be.
Kimenet: Naprakész termékadatok a weboldalon a vásárlók számára.
Termékböngészés és információszerzés

Bemenet: A vásárlók keresései, böngészési előzményei és érdeklődési körei.
Erőforrás: Weboldal keresőrendszere, kategóriák és szűrési lehetőségek.
Lefutás: A vásárlók az oldalon különböző termékeket kereshetnek, böngészhetnek kategóriák szerint, illetve szűrhetnek ár, márka és jellemzők alapján.
Kimenet: A vásárlók megtalálják a keresett terméket és részletes termékinformációkat, amelyek segítik a döntésüket.
Rendelés kezdeményezése és fizetés

Bemenet: Vásárlók által kiválasztott termékek és azok mennyisége.
Erőforrás: Online fizetési rendszer, amely biztonságos tranzakciót biztosít; kosár és rendelési folyamat.
Lefutás: A vásárlók a kosárba helyezik a kívánt termékeket, majd kiválasztják a fizetési módot, és leadják a rendelést.
Kimenet: Rendelési visszaigazolás és a vásárlók tájékoztatása a várható szállítási időről.
Szállítás és ügyféltájékoztatás

Bemenet: A leadott rendelések, vásárlók elérhetőségei és szállítási címei.
Erőforrás: Futárszolgálat, amely a kiszállítást végzi.
Lefutás: A rendelés kiszállításra kerül, a vásárló pedig nyomon követheti a szállítást az online felületen. A kiszállítást követően értesítést kap a rendelés kézbesítéséről.
Kimenet: A vásárlók kézhez kapják a megrendelt terméket, és az oldal visszajelzést kérhet tőlük a vásárlási élményről.
Ügyfélszolgálat és visszáru kezelés

Bemenet: Vásárlói kérdések, problémák és visszaküldési kérelmek.
Erőforrás: Az ügyfélszolgálat munkatársai, adminisztrátor, és a visszaküldési szabályzat.
Lefutás: Az ügyfélszolgálat kezeli a vásárlói megkereséseket, válaszol a kérdésekre, és ha szükséges, elindítja a visszáru folyamatot.
Kimenet: A vásárlók megfelelő segítséget kapnak, és az elégedettség növekszik a gördülékeny ügyféltámogatás révén.

## 5. Igényelt üzleti folyamatok modellje
4. Igényelt üzleti folyamatok modellje
4.1 Üzleti szereplők
Vásárló: Az oldal látogatói és vásárlói, akik könnyen navigálhatnak, böngészhetik a termékkategóriákat, egyéni ajánlásokat kaphatnak, és gyors vásárlási folyamaton mehetnek végig.
Adminisztrátor: Felelős a termékek és akciók frissítéséért, valamint az ügyfélszolgálati feladatokért. Az adminisztrátornak egy egyszerű, intuitív felületen lehetősége van termékeket, készleteket és promóciókat kezelni.
Beszállító: Az oldal termékellátását biztosítja, és közvetlenül is hozzáférhet a készletadatokhoz, hogy időben értesüljön az utánpótlás igényéről.
Futárszolgálat: Felelős a kiszállításért, értesítéseket küld a vásárlóknak a csomag állapotáról, hogy biztosítva legyen a nyomon követhetőség és a pontos kézbesítés.
4.2 Üzleti folyamatok
Termékfeltöltés és automatizált készletkezelés

Az adminisztrátor a termékeket egyszerűen töltheti fel és kezelheti, míg a rendszer figyelmeztetést küld, ha egy adott termék készlete csökken. A beszállítók szintén értesítést kapnak, hogy időben pótolhassák a készleteket.
Böngészés és személyre szabott ajánlások

A vásárlók fejlett szűrési lehetőségekkel böngészhetnek, és személyre szabott ajánlatokat láthatnak, amelyek az előző kereséseik és vásárlásaik alapján jönnek létre.
Rendelés és fizetés integrált folyamatban

A vásárlási folyamat gördülékeny, a kosár funkcióval és a biztonságos fizetési rendszerrel. A vásárlók gyorsan végigvihetik a vásárlási lépéseket, és értesítést kapnak a rendelés státuszáról.
Szállítási értesítések és nyomon követés

A rendelés után a futárszolgálat értesítést küld a vásárlónak a csomag várható érkezéséről. A nyomon követés folyamatos, így a vásárlók naprakész információkat kapnak.
Ügyfélszolgálati rendszer és visszáru folyamat

Az ügyfélszolgálat modern, gyors válaszlehetőségekkel segíti a vásárlókat, illetve könnyen kezelhető visszaküldési folyamatot biztosít, hogy a vásárlási élmény egyszerű és átlátható maradjon.

## 6. Követelménylista

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


## 7. Fogalomtár
