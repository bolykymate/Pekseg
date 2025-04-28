# Projekt
**WEBALKALMAZÁS HASZNÁLATA/INDÍTÁSA**  
Előfeltételek a webalkalmazás futtatáshoz/telepítéshez:  
-	XAMPP (Apache + MySQL) telepítése
-	PHP (XAMPP részeként települ)
-	Visual Studio Code telepítése
-	Composer telepítése (Laravel függőségekhez)
-	Angular CLI telepítése
-	Node.js és npm telepítése (Angular futtatásához)

  
**XAMPP konfigurálása:**
1.	Indítsa el a XAMPP Control Panelt, az Apache és MySQL szolgáltatásokat
2.	Nyissa meg a http://localhost/phpmyadmin felületet
  
**Laravel backend indítása:**  
1.	Projektmappa megnyitása Visual studio Code-ban
2.	Ellenőrizzük, hogy az env-ben a pekseg adatbázis van megadva
3.	Új terminál nyitása
4.	Adatbázis migrálása és feltöltése: „php artisan migrate –seed” paranccsal
5.	Laravel szerver indítása: „php artisan serve” paranccsal
6.	A terminálban ekkor megjelenik egy visszajelzés, amely mutatja, hogy a szerver fut
Ezután a backend elérhető lesz
  
**Angular frontend indítása:**  
1.	Projektmappa megnyitása Visual studio Code-ban
2.	Új terminál nyitása
3.	Függőségek telepítése: npm install
4.	Fejlesztői szerver indítása: ng serve
5.	A terminál visszajelzést ad a sikeres indításról
Ezután a frontend a terminálban megadott címen (alapértelmezetten http://localhost:4200) lesz elérhető


