# Funkcionális specifikáció
## 1. Jelenlegi helyzet leírása

## 2. Vágyálomrendszer leírása

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

## 7. Megfeleltetés, hogyan fedik le a használati eseteket a követelményeket

## 8. Képernyőtervek

![Bejelentkezés][(https://github.com/Drntth/AFP1ANONYMOUS_NAGYPROJEKT/blob/main/kepek/BEJELENTKEZES.jpg)]
![Regisztráció] [(https://github.com/Drntth/AFP1ANONYMOUS_NAGYPROJEKT/blob/main/kepek/REGISZTRACIO.jpg)]
![Főoldal] [(https://github.com/Drntth/AFP1ANONYMOUS_NAGYPROJEKT/blob/main/kepek/ELSO.jpg)]
![TermekOldal] [(https://github.com/Drntth/AFP1ANONYMOUS_NAGYPROJEKT/blob/main/kepek/TERMEK.jpg)]



## 9. Forgatókönyvek

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
