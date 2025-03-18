<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Felhasznalo;
use App\Models\Pekaru;
use App\Models\Cim;
use App\Models\Rendeles;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

      $felhasznalok = ['Kovács Sarolta','Vicc Elek','Pál Pál','Molnár Ödön','Para Zita'];
      $jelszo = ['S1234','V1234','P1234','Ö1234','Z1234'];
      $email = ['kovacssarolta@gmail.com','viccelek@gmail.com','palpal@gmail.com','molnarodon@gmail.com','parazita@gmail.com'];
      $fRows = count($felhasznalok);
      for ($i=0; $i < $fRows; $i++) { 
        Felhasznalo::create(['nev'=> $felhasznalok[$i], 'jelszo'=>$jelszo[$i], 'email'=>$email[$i]]);
      }

      $pnev = ['Kenyér','Kifli','Zsömle','Kenyér','Briós','Fánk','Pizzás csiga'];
      $tipus = ['Fehér','Nosztalgia','Rozsos','Barna','Fehér','Barackos','Csiga'];
      $ar = [800,80,120,820,200,250,275];
      $url = ['https://www.eldi.ro/wp-content/uploads/2020/03/P%C3%A2ine-alb%C4%83-1.png','https://balmaz-sutode.hu/wp-content/uploads/2021/09/VD4_6438-removebg-preview.png','https://m.kaloriabazis.hu/p/2/0/5/1002205_csaszarzsemlelidl_big.png','https://vargapekseg.hu/wp-content/uploads/2022/11/Teljes_kiorlesu_magvas_kenyer_forma_05kg.png','https://balmaz-sutode.hu/wp-content/uploads/2021/09/VD4_6822-removebg-preview.png','https://media.avokado.com/asset/barack_lekvarral_toltott_fank_webp_3dc2c345.webp','https://favoritpekseg.hu/wp-content/uploads/2022/11/pizzas-sajtos-csiga.webp'];
      $pRows = count($pnev);
      for ($i=0; $i < $pRows; $i++) { 
        Pekaru::create(['nev'=> $pnev[$i], 'tipus'=>$tipus[$i], 'ar'=>$ar[$i], 'kepUrl'=>$url[$i]]);
      }

      $felid = [3,1,4,5,2];
      $cim = ['Pál utca','Abigél utca','Fecske utca','Petőfi utca','Luther utca'];
      $telszam = ['06301234567','06307654321','06307564231','06303125467','06309273638'];
      $cRows = count($felid);
      for ($i=0; $i < $cRows; $i++) { 
        Cim::create(['felhasznalo'=> $felid[$i], 'cim'=>$cim[$i], 'telSzam'=>$telszam[$i]]);
      }
      $pekid = [7,5,6,2,3];
      $felId = [2,3,5,1,4];
      $cimid = [5,1,4,2,3];
      $szamlazasinev = ['Vicc Elek','Pál Pál','Para Zita','Kovács Sarolta','Molnár Ödön'];
      $rendelesD = ['2024.11.25','2024.11.26','2024.11.27','2024.11.28','2024.11.29'];
      $rendelesK = ['2024.11.26','2024.11.27','2024.11.28','2024.11.29','2024.11.30'];
      $fizetesiMod =[false,true,false,true,true];
      $rRows = count($pekid);
      for ($i=0; $i < $rRows; $i++) { 
        Rendeles::create(['pekaru'=> $pekid[$i], 'felhasznalo'=>$felId[$i], 'cim'=>$cimid[$i], 'szamlazasiNev'=>$szamlazasinev[$i], 'RDatum'=>$rendelesD[$i], 'KDatum'=>$rendelesK[$i], 'fizetesiMod'=>$fizetesiMod[$i] ]);
      }
      
    }
}
