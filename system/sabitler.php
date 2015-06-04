<?php
/**
 ********************************
 *      CLOUD YAZILIM           *
 *  AÇIK KAYNAK TEMA MOTORU     *
 ********************************
 * 24/10/2014
 * Bu sistem cloudyazilim.com tarafından açık kaynak olarak kodlanmıştır. Hiçbir ücret gözetilmemiştir.
 * Tamamen kaynağı açık olarak sizlerin kullanımına sunulmuştur. Sistemi kullanmanızdan ötürü hiçbir şekilde
 * ücret ödemeniz gerekmemektedir ve hiç bir şekilde de ücret talep edilmemektedir.
 * Aksi bir durumda lütfen bizimle iletişime geçiniz.
 * Referans gösterilerek kullanılmasında hiçbir sakınca yoktur.
 * Ayrıca harcanan emeği göz önünde bulundurarak sayfa üst açıklamalarında bulununa bu içeriği silmeyiniz.
 * Açık kaynak olarak kodlanan sisteme destek vererek güncel bir tema motoru yazılmasında sizinde
 * katkınız olabilir.
 * Sistemi indirdiğiniz ve kullandığınız için teşekkür eder sizleri aramızda görmekten mutluluk duyarız.
 *
 * İyi çalışmalar.
 ***************************
 *      CLOUD YAZILIM      *
 ***************************
 * +--------------------------------------------------------------------------------------------------------------+
 *  Dosya Yol Bilgileri Kaynak :      http://www.r10.net/php/356078-path-bulma.html
 * +--------------------------------------------------------------------------------------------------------------+
*/
    define("TEMA_YOL", "tema/");
    $_temaAdi = "blog";  // default | blog
    $_guvenliUrl = $secure =    (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 1 : 0;
    define("TEMA_FULL_YOL", TEMA_YOL.$_temaAdi);
    define("AD_SUNUCU", $_SERVER['HTTP_HOST']);
    define("YOL_HOST", (($secure) ? 'https://' : 'http://'));
    define("DIZIN_ANAYOL", YOL_HOST.$_SERVER["HTTP_HOST"].dirname($_SERVER['PHP_SELF']));
    define("DIZIN_ROOT", $_SERVER['DOCUMENT_ROOT']);
    define("AD_AKTIFDOSYA", $_SERVER['PHP_SELF']);
    define("YOL_AKTIFDOSYA",$_SERVER["SCRIPT_FILENAME"]); // Aktif Dosya Yolu
    define("ANASAYFA_LINK", DIZIN_ANAYOL.'/home');
    define("PROJE_LOGO","Cloud Tema");