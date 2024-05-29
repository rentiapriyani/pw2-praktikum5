<?php
require_once "class_lingkaran.php";
echo "Nilai PHI" . Lingkaran::PHI;
$lingkaran1 = new Lingkaran(10);
$lingkaran2 = new Lingkaran(4);

echo "</br>Luas Lingkaran 1 " . $lingkaran1->getluas();
echo "</br>Luas Lingkaran 2 " . $lingkaran1->getluas();

echo "</br>keliling Lingkaran 1 " . $lingkaran1->getkeliling();
echo "</br>keliling Lingkaran 2 " . $lingkaran1->getkeliling();

