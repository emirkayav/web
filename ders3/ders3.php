<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders3</title>
</head>


<?php
    
/*uygulama ödevi
kuyruk ve yığın veri yapılarının php üzerinde dizileri kullanarak örneklendirilmesini gerçekleştiriniz*/

/*uygulama:rastgele üretilen sayı 
50 den büyükse
geçtiniz:notunuz xx
50 den küçükse 
kaldınız:notunuz xx
uygulamasını gerçekleştiriniz
*/






$rasgele_sayı=rand(10,100);

if($rasgele_sayı >=50) {
    echo "geçtiniz - notunuz: $rasgele_sayı ";

}else {
    echo "kaldınız - notunuz : $rasgele_sayı ";
}


echo "<h3>sık kullanılan string fonksiyonlar</h3>";
$yazi = "aydın adnan menderes ünüversitesi";
echo "\$yazi değişkenin içeriği: $yazi";
echo "<br>\$yazi değişkenin türü:" . gettype($yazi);

/* içeriğin büyük harfe dönüştürülmesi */
echo "<br> \$yazi değişkeninin büyük harfle yazılması: " .$byazi= strtoupper($yazi);
echo "<br> \$yazi değişkeninin büyük harfle yazılması: " .$byazi= mb_strtoupper($yazi);
echo "<br>";

/* içeriğin küçük harfe dönüştürülmesi */
echo "<br> \$yazi değişkeninin küçük harfle yazılması: " .$kyazi= strtolower($byazi);
echo "<br> \$yazi değişkeninin küçük harfle yazılması: " .$kyazi= mb_strtolower($byazi);
echo "<br>";

/*içeriğin ilk harfini büyük harfe dönüştürülmesi */
echo "<br> \$yazi değişkeninin ilk harfi büyük: " .$yazi= ucfirst ($kyazi);
echo "<br>";

/*içerikteki her kelimenin büyük harfe dönüştürülmesi */
echo "<br> \$yazi değişkeninin her kelimesinini ilk harfi büyük: " .$yazi= ucwords ($kyazi);
echo "<br>";


/*içeriğin harf sayısı;*/
echo "<br> \$yazının harf sayısı : " . strlen($yazi);
echo "<br>";

/*ascıı char dönüşümü */
echo "karakterr karşılığı (65): " . chr(65);
echo "<br>";
echo "karakterr karşılığı (100): " . chr(100);
echo "<br>";

/*0-255 arasındaki değerleri bir chr fonksiyonununa sokarark satır satır yazıyoruz.*/

for ($i = 33;  $i <= 126 ; $i++) {
    echo "$i:" . chr($i) ." ";

}

/* metini parçalanmak diziye dönüştülmesi */
echo"<br><br>";
echo $yazi . "<br>";
$dizi=explode(" ",$yazi );

echo "<pre>";
print_r($dizi);
echo "</pre>";

/* uygulama : metin içerisindeki kelime ve cümle sayısını alt alta yazınız*/
$metin = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, facere sapiente! Veritatis natus minus, quasi, eveniet fugit facilis voluptates magnam est odit sunt ipsa laborum dignissimos! Impedit esse voluptatum culpa. ";

$kelimedizisi= explode (" ",$metin);
$cumledizisi= explode(".",$metin);

echo "kelime sayısı: " . count($kelimedizisi);
echo "<br>";
echo "cümle sayısı:" .count($cumledizisi);

/*uygulama : veri tabanında 2022-11-20 şeklinde gelen tarihi 20.11.222 şeklinde gösteriniz.*/

$tarih = "2022-11-20";
$tarihdizisi = explode("-",$tarih);
echo "<pre>";
print_r($tarihdizisi);
echo "</pre>";
   
echo "tarih: $tarihdizisi[2].$tarihdizisi[1].$tarihdizisi[0]";

/*dizinini metne dönüştüülmesi*/
echo "<br>";
$aylardizisi = array(
"ocak",
"subat",
"mart",
"nisan"
);

echo "<pre>";
print_r($aylardizisi);
echo "</pre>";

echo $aylarstring = implode ("-",$aylardizisi);

/*str_split string parçalama işlemi yapar .*/
echo "<br>";

$iban="TR000000111122223333";
$yeniiban= str_split($iban, 4);
echo "<pre>";
print_r($yeniiban);
echo "</pre>";

echo "<br>foreach iban: ";

foreach ($yeniiban as $parca){
    echo  "$parca";

}

echo "<br>";
echo "implode iban:" . implode("-", $yeniiban);

echo "<br> for iban: ";
for($i = 0; $i < count($yeniiban); $i++){
    echo $yeniiban[$i] . " ";
}









?>


</body>

</html>