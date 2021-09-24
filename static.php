<?php

// class ContohStatic {
//     public static $angka = 1;   

//     public static function Halo() {   
//     return "Halo " . self::$angka . " kali";
//       }
//      }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::Halo();
// echo <"hr>";

class Contoh {
    public static $angka = 1;

    public function Halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh();
echo $obj->Halo();
echo $obj->Halo();
echo $obj->Halo();

echo "<hr>";

$obj = new Contoh();
echo $obj->Halo();
echo $obj->Halo();
echo $obj->Halo();

?>