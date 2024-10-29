<?php
/*
Plugin Name: Belirli Gün ve Haftalar
Plugin URI: http://wordpress.org/extend/plugins/belirli-gun-ve-haftalar/
Description: Millî Eğitim Bakanlığı, İlköğretim ve Ortaöğretim Kurumları Sosyal Etkinlikler Yönetmeliği Çerçevesinde İlköğretim ve Ortaöğretim Kurumlarında Kutlanacak Belirli Gün ve Haftalar Çizelgesinden faydalanılarak hazırlanan ve Türkiye ve Dünya'da kutlanan Belirli Gün ve Haftaları gösteren bir eklentidir.
Version: 1.0
Author: Süleyman ÜSTÜN
Author URI: http://www.suleymanustun.com
*/

add_action('admin_menu', 'bgh_create_menu');

function bgh_create_menu() {
	add_options_page('Belirli Gün ve Haftalar Ayarları', 'Belirli Gün ve Haftalar', 'manage_options', 'bgh', 'bgh_settings_page');
	add_action('admin_init', 'bgh_register_settings');
}


function bgh_register_settings() {
	register_setting('bgh_settings', 'bgh_settings_shown');
}

function bgh_settings_page() {
?>
<div class="wrap">
<h2>Belirli Gün ve Haftalar</h2>

<form method="post" action="options.php">

	<?php settings_fields('bgh_settings'); ?>	

	<table class="form-table">
		<tr valign="top">
			<th scope="row">Otomatik Gösterim</th>
			<td>
				<select name="bgh_settings_shown">
					<option <?php if(get_option('bgh_settings_shown')=='Gösterme') echo 'selected'; ?>>Gösterme</option>
					<option <?php if(get_option('bgh_settings_shown')=='Yazıdan Önce') echo 'selected'; ?>>Yazıdan Önce</option>
					<option <?php if(get_option('bgh_settings_shown')=='Yazıdan Sonra') echo 'selected'; ?>>Yazıdan Sonra</option>
				</select>
			</td>
		</tr>
	</table>
	
	<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Değişiklikleri Kaydet') ?>" /></p>
	
</form>
</div>
<?php } 

if (date('n')==1) {
	if (date('j')>=1 and date('j')<=7) {
		$bgh .= '<li>Bu hafta Veremle Savaş Eğitimi Haftası</li>';
	}
	if (date('j')>=8 and date('j')<=14) {
		$bgh .= '<li>Bu hafta Enerji Tasarrufu Haftası</li>';
	}
	if (date('j')==10) {
		$bgh .= '<li>Bu gün Gazeteciler Günü</li>';
	}
	if (date('j')>=25 and date('j')<=31) {
		$bgh .= '<li>Bu hafta Cüzzam Haftası</li>';
	}
	if (date('j')==26) {
		$bgh .= '<li>Bu gün Dünya Gümrük Günü</li>';
	}
} elseif (date('n')==2) {
	if (date('j')==19) {
		$bgh .= '<li>Bu gün Milli Eğitim Vakfı Kuruluş Günü</li>';
	}
	if (date('j')==28) {
		$bgh .= '<li>Bu gün Sivil Savunma Günü</li>';
	}
} elseif (date('n')==3) {
	if (date('j')>=1 and date('j')<=7) {
		$bgh .= '<li>Bu hafta Girişimcilik Haftası</li>';
	}
	if (date('j')>=1 and date('j')<=7) {
		$bgh .= '<li>Bu hafta Deprem Haftası</li>';
	}
	if (date('j')>=1 and date('j')<=7) {
		$bgh .= '<li>Bu hafta Yeşilay Haftası</li>';
	}
	if (date('j')==8) {
		$bgh .= '<li>Bu gün Dünya Kadınlar Günü</li>';
	}
	if (date('j')>=8 and date('j')<=14) {
		$bgh .= '<li>Bu hafta Bilim ve Teknoloji Haftası</li>';
	}
	if (date('j')==12) {
		$bgh .= '<li>Bu gün İstiklâl Marşının Kabulü ve Mehmet Akif ERSOY\'u Anma Günü</li>';
	}
	if (date('j')==14) {
		$bgh .= '<li>Bu gün Tıp Bayramı</li>';
	}
	if (date('j')>=15 and date('j')<=21) {
		$bgh .= '<li>Bu hafta Tüketiciyi Koruma Haftası</li>';
	}
	if (date('j')==16) {
		$bgh .= '<li>Bu gün Öğretmen Okullarının Kuruluş Yıl Dönümü</li>';
	}
	if (date('j')==18) {
		$bgh .= '<li>Bu gün Çanakkale Zaferi</li>';
	}
	if (date('j')==18) {
		$bgh .= '<li>Bu gün Şehitler Günü</li>';
	}
	if (date('j')>=18 and date('j')<=24) {
		$bgh .= '<li>Bu hafta Yaşlılara Saygı Haftası</li>';
	}
	if (date('j')==21) {
		$bgh .= '<li>Bu gün Uluslararası Irk Ayırımı İle Mücadele Günü</li>';
	}
	if (date('j')>=21-4 and date('j')<=21+4) {
		$bgh .= '<li>Bu hafta Türk Dünyası ve Toplulukları Haftası</li>';
	}
	if (date('j')>=21 and date('j')<=26) {
		$bgh .= '<li>Bu hafta Orman Haftası</li>';
	}
	if (date('j')==22) {
		$bgh .= '<li>Bu gün Dünya Su Günü</li>';
	}
	if (date('j')==23) {
		$bgh .= '<li>Bu gün Dünya Meteoroloji Günü</li>';
	}
	if (date('j')==27) {
		$bgh .= '<li>Bu gün Dünya Tiyatrolar Günü</li>';
	}
	if (date('j')>=25 and date('j')<=31) {
		$bgh .= '<li>Bu hafta Kütüphaneler Haftası</li>';
	}
	if (date('j')>=25 and date('j')<=31) {
		$bgh .= '<li>Bu hafta Vergi Haftası</li>';
	}
} elseif (date('n')==4) {
	if (date('j')>=1 and date('j')<=7) {
		$bgh .= '<li>Bu hafta Kanserle Savaş Haftası</li>';
	}
	if (date('j')==4) {
		$bgh .= '<li>Bu gün NATO Günü</li>';
	}
	if (date('j')==5) {
		$bgh .= '<li>Bu gün Avukatlar Günü</li>';
	}
	if (date('j')==7) {
		$bgh .= '<li>Bu gün Dünya Sağlık Günü</li>';
	}
	if (date('j')>=7 and date('j')<=13) {
		$bgh .= '<li>Bu hafta Sağlık ve Sosyal Güvenlik Haftası</li>';
	}
	if (date('j')>=8 and date('j')<=14) {
		$bgh .= '<li>Bu hafta Sağlık Haftası</li>';
	}
	if (date('j')==10) {
		$bgh .= '<li>Bu gün Polis Teşkikatı\'nın Kuruluş Günü</li>';
	}
	if (date('j')==14) {
		$bgh .= '<li>Bu hafta Şehitler Haftası</li>';
	}
	if (date('j')>=15 and date('j')<=22) {
		$bgh .= '<li>Bu hafta Turizm Haftası</li>';
	}
	if (date('j')>=20 and date('j')<=26) {
		$bgh .= '<li>Bu hafta Kutlu Doğum Haftası</li>';
	}
	if (date('j')>=21 and date('j')<=28) {
		$bgh .= '<li>Bu hafta Ebeler Haftası</li>';
	}
	if (date('j')>=23 and date('j')<=26) {
		$bgh .= '<li>Bu gün Ulusal Egemenlik ve Çocuk Bayramı</li>';
	}
	if (date('j')==23) {
		$bgh .= '<li>Bu hafta Dünya Kitap Günü</li>';
	}
	if (date('j')==25) {
		$bgh .= '<li>Bu gün Türkiye İstatistik Günü</li>';
	}
	if (date('j')>=28 and date('j')<=31) {
		$bgh .= '<li>Bu hafta Kardeşlik Haftası</li>';
	}
} elseif (date('n')==5) {
	if (date('j')>=1 and date('j')<=4) {
		$bgh .= '<li>Bu hafta Kardeşlik Haftası</li>';
	}
	if (date('j')>=1 and date('j')<=7) {
		$bgh .= '<li>Bu hafta Bilişim Haftası</li>';
	}
	if (date('j')>=1 and date('j')<=7) {
		$bgh .= '<li>Bu hafta Trafik ve İlk Yardım Haftası</li>';
	}
	if (date('j')>=4 and date('j')<=10) {
		$bgh .= '<li>Bu hafta İş Güvenliği Haftası</li>';
	}
	if (date('j')==5) {
		$bgh .= '<li>Bu gün Avrupa Günü</li>';
	}
	if (date('j')==6) {
		$bgh .= '<li>Bu gün Hıdrellez</li>';
	}
	if (date('j')>=8 and date('j')<=14) {
		$bgh .= '<li>Bu hafta Vakıflar Haftası</li>';
	}
	if (date('W')==2 and date('w')==0) {
		$bgh .= '<li>Bu gün Anneler Günü</li>';
	}
	if (date('j')==10) {
		$bgh .= '<li>Bu gün Danıştay ve İdari Yargı Haftası</li>';
	}
	if (date('j')>=10 and date('j')<=16) {
		$bgh .= '<li>Bu hafta Engelliler Haftası</li>';
	}
	if (date('j')>=12 and date('j')<=18) {
		$bgh .= '<li>Bu hafta Hemşireler Haftası</li>';
	}
	if (date('j')==14) {
		$bgh .= '<li>Bu gün Dünya Eczacılık Günü</li>';
	}
	if (date('j')==15) {
		$bgh .= '<li>Bu gün Hava Şehitlerini Anma Günü</li>';
	}
	if (date('j')==15) {
		$bgh .= '<li>Bu gün Uluslararası Aile Günü</li>';
	}
	if (date('j')>=12 and date('j')<=18) {
		$bgh .= '<li>Bu hafta Aile Haftası</li>';
	}
	if (date('j')>=18 and date('j')<=24) {
		$bgh .= '<li>Bu hafta Müzeler Haftası</li>';
	}
	if (date('j')==19) {
		$bgh .= '<li><li>Bu gün Atatürk\'ü Anma ve Gençlik ve Spor Bayramı</li>';
	}
	if (date('j')>=19 and date('j')<=25) {
		$bgh .= '<li><li>Bu hafta Gençlik Haftası</li>';
	}
	if (date('j')==25) {
		$bgh .= '<li><li>Bu gün Etik Günü</li>';
	}
	if (date('j')==29) {
		$bgh .= '<li><li>Bu gün İstanbul\'un Fethi</li>';
	}
} elseif (date('n')==6) {
	if (date('j')==5) {
		$bgh .= '<li><li>Bu gün Dünya Çevre Günü</li>';
	}
	if (date('j')>=8 and date('j')<=14) {
		$bgh .= '<li><li>Bu hafta Çevre Koruma Haftası</li>';
	}
	if (date('W')==3 and date('w')==0) {
		$bgh .= '<li>Bu gün Babalar Günü</li>';
	}
	if (date('j')==26) {
		$bgh .= '<li>Bu gün Uluslararası Uyuşturucu Kullanımı ve Kaçakçılığı İle Mücadele Günü</li>';
	}
} elseif (date('n')==7) {
	if (date('j')==1) {
		$bgh .= '<li>Bu gün Kabotaj ve Deniz Bayramı</li>';
	}
	if (date('j')==10) {
		$bgh .= '<li>Bu gün Dünya Nüfus Günü</li>';
	}
	if (date('j')==24) {
		$bgh .= '<li>Bu gün Gazeteciler ve Basın Bayramı</li>';
	}
} elseif (date('n')==8) {
	if (date('j')>=26 and date('j')<=30) {
		$bgh .= '<li>Bu hafta Zafer Haftası</li>';
	}
	if (date('j')==30) {
		$bgh .= '<li>Bu gün Zafer Bayramı</li>';
	}
} elseif (date('n')==9) {
	if (date('j')==1) {
		$bgh .= '<li>Bu gün Dünya Barış Günü</li>';
	}
	if (date('j')==19) {
		$bgh .= '<li>Bu gün Gaziler Günü</li>';
	}
	if (date('j')>=15 and date('j')<=21) {
		$bgh .= '<li>Bu hafta İlköğretim Haftası</li>';
	}
	if (date('j')>=25 and date('j')<=30) {
		$bgh .= '<li>Bu hafta Yangından Korunma Haftası (İtfaiyecilik Haftası)</li>';
	}
	if (date('j')==26) {
		$bgh .= '<li>Bu gün Türk Dil Bayramı</li>';
	}
	if (date('j')==27) {
		$bgh .= '<li>Bu gün Dünya Turizm Günü</li>';
	}
} elseif (date('n')==10) {
	if (date('j')>=1 and date('j')<=7) {
		$bgh .= '<li>Bu hafta Camiiler Haftası</li>';
	}
	if (date('W')==1 and date('w')==1) {
		$bgh .= '<li>Bu gün Dünya Çocuk Günü</li>';
	}
	if (date('j')==4) {
		$bgh .= '<li>Bu gün Hayvanları Koruma Günü</li>';
	}
	if (date('j')==4) {
		$bgh .= '<li>Bu gün Dünya Mimarlık Günü</li>';
	}
	if (date('j')==5) {
		$bgh .= '<li>Bu gün Uluslararası Öğretmenler Günü</li>';
	}
	if (date('j')>=8 and date('j')<=12) {
		$bgh .= '<li>Bu hafta Ahilik Kültür Haftası</li>';
	}
	if (date('j')==13) {
		$bgh .= '<li>Bu gün Ankara\'nın Başkent Oluşu</li>';
	}
	if (date('j')==13) {
		$bgh .= '<li>Bu gün Dünya Konut Günü</li>';
	}
	if (date('j')==14) {
		$bgh .= '<li>Bu gün Dünya Standartlar Günü (Tüketiciyi Koruma Haftası)</li>';
	}
	if (date('j')==16) {
		$bgh .= '<li>Bu gün Dünya Gıda Günü</li>';
	}
	if (date('j')>=15 and date('j')<=21) {
		$bgh .= '<li>Bu hafta Standartlar Haftası</li>';
	}
	if (date('j')==24) {
		$bgh .= '<li>Bu gün Birleşmiş Milletler Günü</li>';
	}
	if (date('j')>=29 and date('j')<=31) {
		$bgh .= '<li>Bu hafta Kızılay Haftası</li>';
	}
	if (date('j')==29) {
		$bgh .= '<li>Bu gün Cumhuriyet Bayramı</li>';
	}
	if (date('j')==31) {
		$bgh .= '<li>Bu gün Dünya Tasarruf Günü</li>';
	}
} elseif (date('n')==11) {
	if (date('j')>=1 and date('j')<=4) {
		$bgh .= '<li>Bu hafta Kızılay Haftası</li>';
	}
	if (date('j')>=1 and date('j')<=7) {
		$bgh .= '<li>Bu hafta Türk Harf Devrimi Haftası</li>';
	}
	if (date('j')>=2 and date('j')<=8) {
		$bgh .= '<li>Bu hafta Lösemili Çocuklar Haftası</li>';
	}
	if (date('j')>=3 and date('j')<=9) {
		$bgh .= '<li>Bu hafta Organ Nakli Haftası</li>';
	}
	if (date('j')==6) {
		$bgh .= '<li>Bu gün Dünya Şehircilik Günü</li>';
	}
	if ((date('W')==2 and date('w')==1)<=(date('W')==2 and date('w')==1)+7) {
		$bgh .= '<li>Bu hafta Dünya Çocuk Kitapları Haftası</li>';
	}
	if (date('j')==10) {
		$bgh .= '<li>Bu gün Atatürk\'ün Ölüm Günü</li>';
	}
	if (date('j')>=10 and date('j')<=16) {
		$bgh .= '<li>Bu hafta Atatürk Haftası</li>';
	}
	if (date('j')==12) {
		$bgh .= '<li>Bu gün Afet Eğitimi Hazırlık Günü</li>';
	}
	if (date('j')==16) {
		$bgh .= '<li>Bu gün UNESCO\'nun Kuruluş Günü</li>';
	}
	if (date('j')==20) {
		$bgh .= '<li>Bu gün Dünya Felsefe günü</li>';
	}
	if (date('j')==20) {
		$bgh .= '<li>Bu gün Çocuk Hakları Günü</li>';
	}
	if (date('j')>=22 and date('j')<=27) {
		$bgh .= '<li>Bu hafta Ağız ve Diş Sağlığı Haftası</li>';
	}
	if (date('j')==24) {
		$bgh .= '<li>Bu gün Öğretmenler Günü</li>';
	}
	if (date('j')>=1 and date('j')<=4) {
		$bgh .= '<li>Bu hafta Kızılay Haftası</li>';
	}
} elseif (date('n')==12) {
	if (date('j')==1) {
		$bgh .= '<li>Bu gün Dünya AIDS Günü</li>';
	}
	if (date('j')>=2 and date('j')<=9) {
		$bgh .= '<li>Bu hafta Mevlana Haftası</li>';
	}
	if (date('j')==3) {
		$bgh .= '<li>Bu gün Dünya Özürlüler Günü</li>';
	}
	if (date('j')==5) {
		$bgh .= '<li>Bu gün Kadın Hakları Günü</li>';
	}
	if (date('j')>=3 and date('j')<=9) {
		$bgh .= '<li>Bu hafta Vakıf Haftası</li>';
	}
	if (date('j')==4) {
		$bgh .= '<li>Bu gün Dünya Madenciler Günü</li>';
	}
	if (date('j')>=7 and date('j')<=13) {
		$bgh .= '<li>Bu hafta İnsan Hakları ve Demokrasi Haftası</li>';
	}
	if (date('j')==10) {
		$bgh .= '<li>Bu gün Dünya İnsan Hakları Günü</li>';
	}
	if (date('j')>=12 and date('j')<=18) {
		$bgh .= '<li>Bu hafta Tutum, Yatırım ve Türk Malları Haftası</li>';
	}
	if (date('j')==21) {
		$bgh .= '<li>Bu gün Dünya Kooperatifcilik Günü</li>';
	}
	if (date('j')==27) {
		$bgh .= '<li>Bu gün Atatürk\'ün Ankara\'ya Gelişi</li>';
	}
}

add_filter('the_content', 'bgh_show');
function bgh_show($content) {
	global $bgh;
	if (!$bgh) {
		$bgh = '<li>Şu sıralar belirli bir gün ya da hafta yoktur.</li>';
	}
	if (get_option('bgh_settings_shown')=='Yazıdan Önce') {
		$content = '<div id="bgh"><ul><h2>Belirli Gün ve Haftalar</h2>'.$bgh.'</ul></div>'.$content;
	} elseif (get_option('bgh_settings_shown')=='Yazıdan Sonra') {
		$content = $content.'<div id="bgh"><ul><h2>Belirli Gün ve Haftalar</h2>'.$bgh.'</ul></div>';
	}
	return $content;
}

add_filter('the_content', 'bgh_tag');
function bgh_tag($content) {
	global $bgh;
	$content = preg_replace('@\[bgh\]@', '<div id="bgh"><ul>'.$bgh.'</ul></div>', $content);
	return $content;
}

function the_bgh() {
	global $bgh;
	if (!$bgh) {
		$bgh = '<li>Şu sıralar belirli bir gün ya da hafta yoktur.</li>';
	}
	echo '<div id="bgh"><ul><h2>Belirli Gün ve Haftalar</h2>'.$bgh.'</ul></div>';
}

add_action("plugins_loaded", "bgh_widget_create");
function bgh_widget_create() {
	$options = array('classname' => 'bgh_widget', 'description' => "Belirli Gün ve Haftalar'ı yan menüde gösterir." );
	wp_register_sidebar_widget('bgh_widget', 'Belirli Gün ve Haftalar', 'bgh_widget_init', $options);
}

function bgh_widget_init($args) {
	extract($args);
	echo $before_widget;
	echo $before_title.'Belirli Gün ve Haftalar'.$after_title;
	bgh_widget_show();
	echo $after_widget;
}

function bgh_widget_show() {
	global $bgh;
	if ($bgh) {
		echo '<ul>'.$bgh.'</ul>';
	} else {
		echo '<ul><li>Şu sıralar belirli bir gün ya da hafta yoktur.</li></ul>';
	}
}
?>