<?php
/*
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
 *
 * CLOUD YAZILIM
 *
 * +--------------------------------------------------------------------------------------------------------------+
 *  Session İsim Değişikliği :      http://stackoverflow.com/questions/964272/how-to-rename-phpsessid
 * +--------------------------------------------------------------------------------------------------------------+
 * */

class temaSistem{
		var $temaVerileri       =   array();
		var $temaIcerik	        =   "";
        var $sayfaCagirIcerik   =   "";

		function __construct($_yol=""){
            $this->cloudYazilimSession();
			if(!empty($_yol)){
				if(file_exists($_yol)){
					$this->temaIcerik = file_get_contents($_yol);
				}
				else
				{
					echo "<b>Tema Bulunamadı!</b>";
				}
			}
		}

        private function cloudYazilimSession(){
            //CloudYazilimTemaMotoruV1
            if(!isset($_COOKIE["CloudYzlm_TemaMotoruV1"])){
                session_name('CloudYzlm_TemaMotoruV1');
                @session_start();
                /*if(isset($_COOKIE["CloudYazilimTemaMotoruV1"])){
                    echo "Tanımlı";
                }else{echo "Tanımsız";}*/
            }
        }

		function veriEkle($_arananKelime,$_degistirilecekKelime){
			if(!empty($_arananKelime)){
				$this->temaVerileri[strtoupper($_arananKelime)] = $_degistirilecekKelime;
			}
		}

		function goster(){
			if(count($this->temaVerileri)>0){
				foreach ($this->temaVerileri as $key => $value) {
					$this->temaIcerik = str_replace('{'.$key.'}', $value, $this->temaIcerik);
				}
			}
		echo $this->temaIcerik;
		}

		public function ver8(){
			echo "merhaba";
		}

        /***
         * Dinamik olarak html sayfası çağırmak için kullanılır
         */
        function sayfaCagirHtml($_yol=""){
            if(!empty($_yol)){
                if(file_exists($_yol)){
                    $this->sayfaCagirIcerik =   file_get_contents($_yol);
                }
            }
            else{
                echo "<b>Sayfa Bulunamadı!</b>";
            }
        }

        function gosterSayfaHtml(){
            if(!empty($this->sayfaCagirIcerik)){
                echo $this->sayfaCagirIcerik;
            }
        }
	}
	
 ?>