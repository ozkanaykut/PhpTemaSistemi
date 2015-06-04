<?php
if (!defined('CONFIG_CLASS_INCLUDED')) { // bu kod doğrudan dosya içerisine girilmesi engelliyo yani doğrudan ulaşım yapılamıyor
    die(header('Location: http://www.besteknoloji.com.tr'));
}
/**
 * Created by PhpStorm.
 * User: PcDell
 * Date: 21.04.2014
 * Time: 10:32
 */

// language çerez kontrolü
// eger $_COOKIE["language"] yoksa veya boş ise $_COOKIE["language"]="tr" ataması yapıyoruz
if(empty($_COOKIE["language"]) || $_COOKIE["language"]==""){ setcookie("language","tr",time()+3600); }
function dilAyariYap($dlVri="tr"){
    if($dlVri=="tr"){
        return("tr");
    }
    else{
        if($dlVri=="en"){
            return("en");
        }
        else{
            return("tr");
        }
    }
}
// yeşillik olsun diye ekliyoruz :D
if(empty($_COOKIE["browser"]) || $_COOKIE["browser"]==""){ setcookie("browser",$_SERVER["HTTP_USER_AGENT"],time()+7200);}


$dilAyari=(!empty($_COOKIE["language"]))? $vt->veriKes($vt->veriTemizle($_COOKIE["language"]),0,2) : "tr";
$dilAyari=dilAyariYap($dilAyari);
$icerikDil=($dilAyari=="tr")? '': 'E';
$icerikDegeri=$icerikDil."KIcerikDetay";

?>