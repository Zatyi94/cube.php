<!-- Szia Zsolt! Nóra és Sándor vagyunk. :) Együtt dolgoztunk a házin.
     Argumentum név-érték párokat sajnos nem tudunk készíteni, illetve ezek sorrendje sem cserélhető fel egyelőre.
     Kérlek, a megoldást beszéljük át a következő órán!
     Köszönjük! -->

<?php

echo "Üdvözlöm! Ez itt a cube PHP program. A program működésének leírásához üsse be a terminálba a 'php cube.php --help' vagy 'php cube.php --h' parancsot!".PHP_EOL;

$help =
    "
    A cube.php egy parancssoros program, amely dobokockákkal való dobás működését hivatott szimulálni.
    A program argumentumok alapján dolgozik és véletlen számokat generál.
    Az agrgumentumokkal azt határozzuk meg, hogy hány kockával történik a dobás (count), és mi a legnagyobb (max),
    ... valamint a legkisebb érték (min), amit dobhatunk.
    Az argumentumok default értékei: count=1, max=6, min=1. Ha csak a 'php cube.php' parancsot futtatjuk a terminálban,
    ... a program ezekkel a paraméterekkel dolgozik.
    Az argumentumoknak tetszőleges értéket adhatunk: pl. dobhatunk 2x egy olyan speciális (10 oldalú) kockával,
    ... amin a legkisebb érték 0, a legnagyobb pedig 9.
    Az argumentumoknak nevet és értéket adva argumentum párokkal dolgozunk:
    ... pl. a következő paranccsal futtathatjuk a programot:
	    php cube.php --min 0 --max 9 --count 2
	Az egyszavas argumentumok helyettesíthetőek 1-1 betűvel is: --min = --i, --max = --a, --count = --c, pl.:
	    php.cube php --i 0 --a 9 --c 2
	Az argumentum párok sorrendje felcserélhető: pl. a 'php cube.php --count 2 --max 9 --min 0' parancs is működik.
	Az argumentum párok bármelyike el is hagyható, ebben az esetben a program a default értékekkel dolgozik.
	A dobást követően a program kiírja a dobás számát és hogy hanyast dobott: pl. 1. dobás: 5, 2. dobás: 8 stb.
	Amennyiben a dobás értéke kisebb 7-nél azt * karakterekkel is kirajzolja a terminálra!
	Jó szórakozást!".PHP_EOL;
$min = 1;
$max = 6;
$count = 1;

/* for ($i = 1; $i<4; $i++) {
    switch ($argv[$i]) {
        case "--min":
            $min = "--min";
            break;
        case "--i":
            $min = "--i";
            break;
        default:
            $min = 1;
    }
    switch ($argv[$i]) {
        case "--max":
            $max = "--max";
            break;
        case "--a":
            $max = "--a";
            break;
        default:
            $max = 6;
    }
    switch ($argv[$i]) {
        case "--count":
            $count = "--count";
            break;
        case "--c":
            $count = "--c";
            break;
        default:
            $count = 1;
    }
} */

// $argv[1] - Help: leírja a program működését
// --help
// --h
if (isset($argv[1]) && ($argv[1] == "--help" || $argv[1] == "--h")){
    echo($help);
} else{
    // $argv[1] - Legkisebb érték a kockán
    // --min
    // --i
    if (isset($argv[1]) && is_integer((integer)$argv[1])){
        $min = (integer)$argv[1];
    }
    // $argv[2] - Legnagyobb érték a kockán
    // --max
    // --a
    if (isset($argv[2]) && is_integer((integer)$argv[2])) {
        $max = (integer)$argv[2];
    }
    // $argv[3] - Dobások száma
    // --count
    // --c
    if (isset($argv[3]) && is_integer((integer)$argv[3])){
        $count = (integer)$argv[3];
    }
    for ($i = 1; $i <= $count; $i++){
        $r = rand($min, $max);
        echo ($i) . ". dobás: " . $r . "\n";
        if ($r < 7) {
            if ($r == 6)
            {
                $k = " *     * ". "\n";
                $k.= " *     * ". "\n";
                $k.= " *     * ". "\n";
                echo $k;
            }
            else if ($r == 5)
            {
                $k = " *     * ". "\n";
                $k.= "    *    ". "\n";
                $k.= " *     * ". "\n";
                echo $k;
            }
            else if ($r == 4)
            {
                $k = " *     * ". "\n";
                $k.= "         ". "\n";
                $k.= " *     * ". "\n";
                echo $k;
            }
            else if ($r == 3)
            {
                $k = " *       ". "\n";
                $k.= "    *    ". "\n";
                $k.= "       * ". "\n";
                echo $k;
            }
            else if ($r == 2)
            {
                $k = " *       ". "\n";
                $k.= "         ". "\n";
                $k.= "       * ". "\n";
                echo $k;
            }
            else if ($r == 1)
            {
                $k = "         ". "\n";
                $k.= "    *    ". "\n";
                $k.= "         ". "\n";
                echo $k;
            }
        }
    }
}