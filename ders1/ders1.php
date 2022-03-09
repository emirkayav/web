<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Teknolojileri ve Programama-1</title>
</head>

<body>
    <!-- Açıklama Satırı -->
    <?php
    // açıklama satırı
    /*açıkalama satırı bloğu
shift+alt+a
*/
    /*kullanılan komutlar 
echo: ekrana yazdırma işlemi yapar
içerisinde html etiketleri kullanılabilir
çift veya tek tırak ile kullanılabiir
çift tırnak içrisinde değişken içerikleri gösterilir
nokta işareti ile birleştirme yapıılabilir
\ kaçış karakteridir özel ifadelerden önce kullanılır
*/
    echo "<h4>Aydın adnan menderess üni</h4>";
    echo "<h3>Aydın adnan menderess üni</h3>";
    echo "bilgisayar programcılığı" . "web teknolojileri" . "<br>";
    echo "bigisayar prgramjılığıı " . "<br>" . "web teknolojileri";

    echo "<hr> <h4> değişken tanımlama kuralları</h4>";
    echo "<ol>
           <li>değiken isimleri $ ile başlar </li>
           <li> değişken isimleri sayısal bi ifadeyle başlayamaz</li>
           <li>değişken isimlerinde boşluk kullnılmaz.iki kelime varsa birinci_sinif birincisinif birinci-sinif 
           örneklerindeki kulanımlar öneriier </li>
           <li>değişken ve dosya ismlerinde türkçe karakter kullanılmamalıdır</li>
           <li>ddeğişken isimlerinde büyük küçük harf kullanımına duyarlıdır \$sayi !=\$sayi </li>
           <li>değişken içerisinde metinsel bir ifade varsa çift tırnaak (\") vveya tek tırnak (') kullanılır</li>
           <li>değişken içerisinde eğer sayısal bir ifade vrsa tırnak kullanılmadan yazılır</li>
           <li>değişken ismi değişkeni içeriğini ifade etmeli</li>
           <li>değişkenler ekrana echo komutu ile yazdrılır</li>
         


</ol>";
    echo "<hr> <h4> değişken tanımlama örnekleri</h4>";

    $isim = "emir";
    $soyisim = "kaya";
    $yas = 18;
    echo $isim . " " . $soyisim;
    echo "<br>";
    echo "$isim $soyisim";


    /*uygulama:
ünüversite -myo-adsoyad-numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz 
girilen bu değişkenlerin değerlerini bir html tabo içeriisnde gösteriniz
*/

    $ünüversite = "Adnan Menders Ünüvrsitesi";
    $myo = "Aydın Meslek Yüksekokulu";
    $numara = "216001058";
    $ad = "Emir";
    $soyad = "Kaya";


    ?>

    <form action="">
        <label for="üni">ünüversite</label>
        <input type="text" name="" disabled value="<?php echo $ünüversite; ?>" id="uni"><br>

        <label for="üni">myo</label>
        <input type="text" name="" disabled value="<?php echo $myo; ?>" id="uni"><br>

        <label for="üni">no</label>
        <input type="text" name="" disabled value="<?php echo $numara; ?>" id="uni"><br>

        <label for="üni">isim</label>
        <input type="text" name="" disabled value="<?php echo $ad; ?>" id="uni"><br>

        <label for="üni">soyisim</label>
        <input type="text" name="" disabled value="<?php echo $soyad; ?>" id="uni"><br>

    </form>





    <!--  -->
</body>

</html>