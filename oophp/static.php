<?php

// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halloWorld()
//     {
//         return "Hallo World " . self::$angka++ . " Kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halloWorld();
// echo "<hr>";

// echo ContohStatic::halloWorld();


class Contoh
{
    public static $angka = 1;

    public function halo()
    {
        return "Halo " . self::$angka++ . " kali.";
    }
}

$obj = new Contoh();

echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo $obj->halo();
echo "<br>";
echo "<hr>";
$obj2 = new Contoh();
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();
echo "<br>";
echo $obj2->halo();
echo "<br>";

?>