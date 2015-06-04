<?php
	// tema sistemini çağırıyoruz
    //$_StringTema =  TEMA_FULL_YOL.'/view/index/index.html';
    //echo  $_StringTema;
    //exit();
    //$_StringTema =  "tema/default/view/index/index.html";
    //$tema = new temaSistem($_StringTema);
    $tema->veriEkle("TEMA_FULL_YOL",TEMA_FULL_YOL);
    $tema->veriEkle("icerik"," içerik alanı");
 ?>