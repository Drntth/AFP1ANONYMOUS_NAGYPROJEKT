# Tesztelési Jegyzőkönyv

## 1. Áttekintés

**Projekt neve:** Számítógépalkatrész webáruház 

**Verzió:** 1.0  

**Dátum:**  2024.12.03.

**Készítette:**  

+ Plasku Dominik (AEEBES)
+ Cserni Boglárka Anna (MVTNRT)
+ Borsodi István (F0M774)
+ Nagy Péter (TDNLEN)

**Tesztelő:** Borsodi István

## 2. Tesztelési Célok

- [ ] Ellenőrizni a lapozási funkció megfelelő működését.
- [ ] Ellenőrizni a rendezési funkció megfelelő működését.
- [ ] Tesztelni az About oldal helyes működését, a leírás megjelenítését és a gomb átnavigációs funkcióját a Contact oldalra.

## 3. Tesztelési Módszerek

- Funkcionális tesztelés manuális végrehajtása különböző böngészőkben (Chrome, Firefox, Edge, Opera).
- Tesztkörnyezet ellenőrzése különböző képernyőméretek (mobil, tablet, desktop) esetén.
- Az URL manipulálásával kapcsolatos sebezhetőségek vizsgálata (pl. lapozásnál érvénytelen oldalszámok beírása)

## 4. Tesztelési Környezet

- Operációs rendszer: Windows 11 64-bit 
- Böngésző verzió: Google Chrome (Verzió: 131.0.6778.86)
- Szoftververzió:
    - Laravel: 5.9.1
    - Tailwind CSS: 3.4.15
    - VS Code: 1.95.3
    - NPM: 10.8.2  
- Hardver:  
    - CPU: Intel Core i5-11320H
    - RAM: 16 GB
    - GPU: NVIDIA GeForce RTX 3050

## 5. Tesztesetek

| Teszteset azonosító | Leírás                       | Elvárt eredmény          | Aktuális eredmény | Megjegyzések  |
|---------------------|-----------------------------|--------------------------|-------------------|---------------|
| TC-001              | Lapozás az első oldalra.          | Az első oldal jelenik meg.          | Sikeres teszt |               |
| TC-002              | Lapozás az utolsó oldalra.          | Elvárt eredmény          | Sikeres teszt |               |
| TC-003              | Érvénytelen oldalszám megadása URL-ben.         | Az alapértelmezett oldal megjelenik.          | Sikeres teszt |               |
| TC-004              | A lapozó komponens reszponzivitása.          | Mobilon és asztali nézetben is helyesen jelenik meg.          | Sikeres teszt |               |
| TC-005              | Lapozás nagy mennyiségű adat esetén.          | Az oldal gördülékenyen betöltődik.          | Sikeres teszt |               |
| TC-006              | Rendezés név szerint növekvő sorrendben.          | Az adatok helyesen növekvő sorrendben jelennek meg.          | Sikeres teszt |               |
| TC-007              | Rendezési megfelelő megjelenítése.          | A helyesen jelenik meg az aktuális rendezés szerint.          | Sikeres teszt |               |
| TC-008              | Rendezés nagy adatmennyiséggel.          | A rendezés gördülékenyen működik.          | Sikeres teszt |               |
| TC-009              | Rendezés szűrés alkalmazása után.          | A rendezés helyesen működik a szűrt adatokra.	          | Sikeres teszt |               |
| TC-010              | Rendezés név szerint csökkenő sorrendben.          | Az adatok helyesen csökkenő sorrendben jelennek meg.          | Sikeres teszt |               |
| TC-011              | Az About oldal betöltődése.          | Az oldal tartalma helyesen jelenik meg.          | Sikeres teszt |               |
| TC-012              | Az About oldal reszponzív megjelenése.          | A tartalom helyesen igazodik különböző képernyőméretekhez.          | Sikeres teszt |               |
| TC-013              | A gomb működése helyes URL-re navigál.          | A gomb a Contact oldalra navigál.          | Sikeres teszt |               |
| TC-014              | 	Az About oldal helyessége különböző böngészőkben.          | Az oldal tartalma azonos minden böngészőben.          | Sikeres teszt |               |
| TC-015              | A gomb láthatósága.          | A gomb mindig látható a felhasználó számára.          | Sikeres teszt |               |

## 6. Tesztelési Eredmények

- **Sikeres tesztek:** 15 
- **Sikertelen tesztek:** 0 
- **Kérdések és észrevételek:** Nincs 

## 7. Következő lépések

- [ ] **Keresési funkció implementálása:** Egy keresőmező hozzáadása, amely lehetővé teszi az adatok gyors szűrését a felhasználó által beírt kulcsszavak alapján.
- [ ] **Dark mode támogatás:** Egy világos/sötét téma váltási lehetőség hozzáadása, amely növeli a felhasználói élményt.
- [ ] **További reszponzív design optimalizáció:** A Tailwind CSS-t használva finomítani az oldal megjelenését különböző eszközökön