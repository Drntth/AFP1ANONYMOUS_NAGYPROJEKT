# Tesztelési Jegyzőkönyv

## 1. Áttekintés

**Projekt neve:** Számítógépalkatrész webáruház  
**Verzió:** 1.0  
**Dátum:** 2024.12.03.
**Készítette:** 

+ Plasku Dominik (AEEBES)
+ Cserni Boglárka Anna (MVTNRT)
+ Borsodi István (F0M774)
+ Nagy Péter (TDNLEN)

**Tesztelő:** Plasku Dominik
              Cserni Boglárka Anna

## 2. Tesztelési Célok

- [ ] Az adatbázis elvártaknak megfelelő működése
- [ ] Szerepkörök megfelelő működése (admin/guest user)
- [ ] Elérhető funkciók megfelelő működése, elérése
- [ ] Route-ok elváratan való működése

## 3. Tesztelési Módszerek

- **Manuális tesztelés:** Felhasználói útvonalak ellenőrzése, végigjárása manuálisan, megfelelő jogosultsági körrel rendelkező felhasználói fiók segítségével.
- **Automatizált tesztelés:** PHPUnit használata a backend és adatbázis logika tesztelésére.
- **Biztonsági tesztek:** Hibás adatbevitel, SQL injection próbálkozások.

## 4. Tesztelési Környezet

- Operációs rendszer: Windows 11 64-bit
- Böngésző verzió: Opera GX: LVL 6 (core: 114.0.5282.233)
- Szoftververzió: 
    - Laravel: 5.9.1
    - Tailwind CSS: 3.4.15
    - VS Code: 1.95.3
    - NPM: 10.8.2
- Hardver: PC/Laptop

## 5. Tesztesetek

| Teszteset azonosító | Leírás                                                  | Elvárt eredmény                                                           | Aktuális eredmény | Megjegyzések  |
|---------------------|---------------------------------------------------------|---------------------------------------------------------------------------|-------------------|---------------|
| TC-001              | Felhasználó regisztráció helyes adatokkal.              | Regisztráció sikeres, belépés engedélyezett.                              | Sikeres teszt     |               |
| TC-002              | Admin bejelentkezés helyes adatokkal.                   | Admin dashboard megjelenik.                                               | Sikeres teszt     |               |
| TC-003              | Kosár funkció: termék hozzáadása.                       | Termék megjelenik a kosárban.                                             | Sikeres teszt     |               | 
| TC-004              | Rendelés leadása.                                       | A rendelés sikeresen bekerül az adatbázisba                               | Sikeres teszt     |               | 
| TC-005              | Guest bejelentkezés helyes adatokkal.                   | A vásárló csak ahhoz fér hozzá amihez szükséges.                          | Sikeres teszt     |               | 
| TC-006              | Felhasználói jogkör módosítása adminként dashboard-on.  | A felhasználó jogköre sikeresen megváltozik.                              | Sikeres teszt     |               |
| TC-007              | Felhasználó fiók törlése adminként dashboard-on.        | A felhasználó sikeresen törölve lett az adatbázisból.                     | Sikeres teszt     |               |
| TC-008              | Navágicós bar tesztelése.                               | A felhasználó jogkörhöz, oldalhoz igazodik a tartalma.                    | Sikeres teszt     |               |
| TC-009              | Termék törlése a kosárból.                              | A termék törlődött a kosárból.                                            | Sikeres teszt     |               |
| TC-010              | Termék automata törlése rendelés leadása után.          | A kosár session sikeresen törlődik.                                       | Sikeres teszt     |               |
| TC-011              | Rendelés kifizetése                                     | Sikeres fizetés esetén a rendelés státusza megváltozik.                   | Sikeres teszt     |               |
| TC-012              | Route-ok ellenőrzése, tesztelése                        | Adott url-eket csak megfelelő jogkörrel érnek el a felhasználók           | Sikeres teszt     |               | 
| TC-013              | Kosár: Termék mennyiség módosítása                      | A mennyiség sikeresen megváltozik, nem engedélyez helytelen mennyiséget   | Sikeres teszt     |               | 
| TC-014              | Adatbázis feltöltése adatokkal (seeder)                 | Seedelés sikeresen megtörténik, sikeresen eltárolja az adatbázis          | Sikeres teszt     |               |


## 6. Tesztelési Eredmények

- **Sikeres tesztek:** 14
- **Sikertelen tesztek:** 0  
- **Kérdések és észrevételek:** Nincs 

## 7. Következő lépések

- [ ] Kosár továbbfejlesztése (fizetési rész átalakítása)
- [ ] Dashboard bővítése (admin, user kezelhesse a számukra megfelelő rendeléseket)
