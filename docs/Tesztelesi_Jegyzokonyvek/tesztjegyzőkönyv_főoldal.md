# Tesztelési Jegyzőkönyv

## 1. Áttekintés

**Projekt neve:  Számítógépalkatrész webáruház**  
**Verzió: 1.0**  
**Dátum: 2024.12.03**  
**Készítette: [Plasku Dominik (AEEBES),
Cserni Boglárka Anna (MVTNRT),
Borsodi István (F0M774),
Nagy Péter (TDNLEN)]**  
**Tesztelő: Nagy Péter**  

## 2. Tesztelési Célok

- [Az akciós termékeket tartalmazó panelek helyes megjelenítése. ] Cél 1
- [Az akciós termékek meghatározási logikájának ellenőrzése (készlet < 3). ] Cél 2
- [ Véletlenszerű árengedmény generálásának tesztelése. ] Cél 3

## 3. Tesztelési Módszerek

- Manuális tesztelés különböző termékadatbázisokkal.
- Automatikus tesztelési szkriptek futtatása az akciós logikák ellenőrzésére.
- Felhasználói felület vizuális ellenőrzése különböző böngészőkben.

## 4. Tesztelési Környezet

- Operációs rendszer:  Windows 10
- Szoftververzió: Google Chrome (v119.0), Mozilla Firefox (v118.0) 
- Hardver:  Intel Core i9-12900K, GeForce RTX 4060 Ti 8GB GDDR6 DLSS3, 16GB RAM


## 5. Tesztesetek

| Teszteset azonosító | Leírás                       | Elvárt eredmény          | Aktuális eredmény | Megjegyzések  |
|---------------------|-----------------------------|--------------------------|-------------------|---------------|
| TC-001              | Akciós panelek megjelenése a főoldalon| Az akciós panelek hibátlanul jelennek meg.| Az akciós panelek hibátlanul megjelennek |   |
| TC-002              | Akciós termék meghatározás logikája| Csak a készlet < 3 termékek kerülnek listázásra | Csak a készlet < 3 termékek kerültek listázásra. |  |
| TC-003              | Árengedmény generálása véletlenszerűen          | Az árengedmények véletlenszerűek, egyediek.          | Az árengedmények megfelelően generálódtak. |  |
| TC-004              | Vizsgálat különböző böngészőkben          | Az akciós panelek minden böngészőben megfelelően jelennek meg.          | Az akciós panelek minden böngészőben megfelelően jelentek meg. |Tesztelve: Chrome, Firefox, Safari  |
| TC-005              | Akciós termékek lista frissítése készletváltozás után        | Az új akciós termékek megjelennek, a régiek eltűnnek.         | Az új termékek helyesen megjelentek. |Tesztelve: Chrome, Firefox, Safari  |


## 6. Tesztelési Eredmények

- **Sikeres tesztek: 5**  
- **Sikertelen tesztek: 0**  
- **Kérdések és észrevételek: Az akciós panelek vizuális megjelenése funkcionálisan megfelelő, azonban egy vizuális ikon (pl. „Akció!”) hozzáadása javíthatná a felhasználói élményt.**  

## 7. Következő lépések

- [Felhasználói visszajelzések begyűjtése és értékelése. ] Lépés 1
- [Automatikus tesztesetek bővítése további funkciók ellenőrzésére. ] Lépés 2
- [Az éles környezetbe történő implementálás előtti teljes tesztcsomag futtatása. ] Lépés 3

