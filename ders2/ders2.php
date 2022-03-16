<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
 
<?php

echo "<h4>tırnak iertleri arasındaki farklar</h4>";
$uni="adnan menderes ünüversitesi";
echo " değişken içeriği:$uni";
echo "<br>";

echo "1kazandığınız ünüversitesi:" . '$uni';/*değişken ismini yazdırı*/
echo "<br>";
echo "2kazandığınız ünüversite:"."$uni";/*değişken içeriğini yazdırı*/
echo "<br>";
echo "3kazandığınız ünüversite:".$uni;/*değişken içeriğini yazdırı*/
echo "<br>";
echo "4kazandığınız ünüversite:.$uni";/*değişken içerğini yazdırı*/

echo "<hr><h4>temel matematiksel işlemeler</h4>";
echo "<h5>toplama işlemi</h5>";

$sayi1 = 10;
$sayi2 = 20;

echo "$sayi1 + $sayi2 = " . ( $sayi1 + $sayi2);
$sonuc = $sayi1 + $sayi2;
echo "<br>";
echo "$sayi1 + $sayi2 = $sonuc";

echo "<h5>çıkarma işlemi</h5>";
echo "$sayi1 - $sayi2 = " . ( $sayi1 - $sayi2);
$sonuc = $sayi1 - $sayi2;
echo "<br>";
echo "$sayi1 - $sayi2 = $sonuc";

echo "<h5>çarpma işlemi</h5>";
echo "$sayi1 * $sayi2 = " . ( $sayi1 * $sayi2);
$sonuc = $sayi1 * $sayi2;
echo "<br>";
echo "$sayi1 * $sayi2 = $sonuc";

echo "<h5>bölme işlemi</h5>";
echo "$sayi1 / $sayi2 = " . ( $sayi1 / $sayi2);
$sonuc = $sayi1 / $sayi2;
echo "<br>";
echo "$sayi1 / $sayi2 = $sonuc";

echo "<h5>üst alma işlemi(pow)</h5>";
$x=3;
$y="2";
echo "<br> değişken tipi: $y >>> " . gettype($y) . "<br>";
echo "$x<sup>$y</sup>=". (pow($x,$y));

echo "<h5>karekök alma işlemi(pow)</h5>";
$x=25;
$karekok=sqrt($x);
echo "$x'in karkökü: $karekok";

echo "<h5>mutlak değer işlemi(abs)</h5>";
$x = (-4);
$mutlak=abs($x);
echo "|$x|'in mutlak değeri: $mutlak";

echo "<h5>taban değişim işlemi(base_convert(x,taban1,taban2))</h5>";
echo "27 sayısının 2'lik tabanındaki karşlığı:" . base_convert(27,10,2);
echo "<br>";
$sayi=50;
$taban=10;
$yenitaban=2;
$sonuc=base_convert($sayi,$taban,$yenitaban);
echo "($sayi)<sub>$taban</sub> : ($sonuc)<sub>$yenitaban</sub> ";

echo "<h5>mod işlemi(fmod(x,y))</h5>";
$x=20;
$y=4;
$mod=fmod($x,$y);
echo "$x mod $y = $mod";

echo "<br>$x sayısı :" . ((fmod($x,2)==0)? "çifttir." : "tektir");

echo "<h5>yuvarlama işlemi(round(x,y))</h5> ";
$x=15.315;
$y=15.385;
echo "<br>$x bir ondalık basamak yuvarlaması: " .round($x,1);
echo "<br>$y bir ondalık basamak yuvarlaması: " .round($y,1);
echo "<br>$x bir ondalık basamak yuvarlaması: " .round($x,2);
echo "<br>$y bir ondalık basamak yuvarlaması: " .round($y,2);

echo "<h5>yuvarlama işlemi(floor(x,))</h5> ";
/*her zaman en yakın aşağı tam sayı değerine yuvarlama işlemi yapar.*/
$x= 15.315;
echo "$x :" . floor($x);

echo "<h5>yuvarlama işlemi(ceil(x,))</h5> ";
/*her zaman en yakın yukarı tam sayı değerine yuvarlama işlemi yapar.*/
$x= 15.315;
echo "$x :" . ceil($x);

echo "<h5>rastgele sayı üretme (rand())</h5>";
echo "10-100 arasında rastgele değer:" . rand(10,100);

for ($i=1; $i <=10; $i++) { 
    echo "<br>$i eleman: " .rand(10,100);
}





?>

</body>
</html>