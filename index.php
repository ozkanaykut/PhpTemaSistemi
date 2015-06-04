<?php
	//	Üst düzey gerekli ayarlar
	require_once("system/temasistemi.php");         // tema sistem çekirdeğinin yer aldığı çekirdek dosya
	require_once("system/sabitler.php");            // projenin define sabitlerinin bulunduğu dosya
    require_once("system/boot.php");                // proje ile ilgili varsayılan tema düzenlemelerinin bulunduğu yer
    define("DIZIN_DOSYAYOL", __FILE__);             // Dosyanın tam yolunu verir

	/*// tema sistemini çağırıyoruz
	/*$tema = new temaSistem(TEMA_YOL.'default/view/index/index.html');
	
	$tema->veriEkle("TEMA_FULL_YOL",TEMA_FULL_YOL);
	$tema->veriEkle("icerik"," içerik alanı");
	$tema->goster();*/
    //echo DIZIN_ANAYOL;
    //exit();*/

    // tema sistemini çağırıyoruz
    $_StringTema =  TEMA_FULL_YOL.'/view/index/index.html';
    $tema = new temaSistem($_StringTema);

    $klasor = (!empty($_GET["klasor"]))? $_GET["klasor"]    :   "";
    if(empty($klasor)){ // eğer kullanıcı anasayfadaysa yani başka sayfaya gitmemişse ilgili sayfayı çağır
        $tema = new temaSistem($_StringTema);
        require_once(TEMA_FULL_YOL."/model/index/index.php");
        projeSabitleri($tema);
        $tema->goster();
    }
    else{
        $_StringTema =  TEMA_FULL_YOL.'/view/'.$klasor.'/index.html';
        $tema = new temaSistem($_StringTema);
        define("AKTIF_SAYFA",$klasor);
        require_once(TEMA_FULL_YOL."/model/".AKTIF_SAYFA."/".AKTIF_SAYFA.'.php');
            projeSabitleri($tema);
        $tema->goster();
    }
 ?>