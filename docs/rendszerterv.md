# Rendszerterv
## 1. A rendszer célja

## 2. Projektterv

### 2.1 Projektszerepkörök, felelőségek:
   * Scrum masters:
   * Product owner: 
   * Üzleti szereplő:
     
### 2.2 Projektmunkások és felelőségek:
   * Frontend:
   * Backend:
   * Tesztelés:
     
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

### 3.2 Üzleti folyamatok

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

### Hardver topológia

### Fizikai alrendszerek

### Fejlesztő eszközök


## 8. Architekturális terv

### Webszerver

### Adatbázis rendszer

### A program elérése, kezelése

## 9. Adatbázis terv

## 10. Implementációs terv

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

Fizikai telepítési terv: 

Szoftver telepítési terv: 

## 13. Karbantartási terv

