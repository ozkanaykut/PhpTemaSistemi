<?php
/**
 * Created by PhpStorm.
 * User: PcDell
 * Date: 01.12.2014
 * Time: 09:36
 */

    // tema sistemini çağırıyoruz
    $_StringTema =  TEMA_FULL_YOL.'/view/tablo/index.html';
    //echo  $_StringTema;
    //exit();
    //$_StringTema =  "tema/default/view/index/index.html";
    $tema = new temaSistem($_StringTema);
    $tema->veriEkle("ANASAYFA_LINK",ANASAYFA_LINK);
    $tema->veriEkle("DIZIN_ANAYOL",DIZIN_ANAYOL);
    $tema->veriEkle("TEMA_FULL_YOL",TEMA_FULL_YOL);
    $tema->veriEkle("icerik"," içerik alanı");
    //$tema->goster();

?>