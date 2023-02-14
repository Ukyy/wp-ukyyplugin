<?php
function menuadminwa() {
	add_menu_page('Whatsapp Setting','Whatsapp Setting','','wasetting','aturwa','dashicons-format-chat');
	add_submenu_page('wasetting','Pengaturan Whatsapp','Atur Whatsapp','manage_options','aturwa','aturwa');
	add_submenu_page('wasetting','Tambah Member Baru','Tambah Member','manage_options','tambahmember','tambahmember');
}

function aturwa() {
	if($_POST['nohp'] != '') {
		update_option('wa_nohp',$_POST['nohp']);
		update_option('wa_pesan',$_POST['pesan']);
		update_option('wa_text',$_POST['text']);
		echo 'Update Berhasil';
	}
		echo '<h2>Pengaturan Whatsapp</h2>
		<form action="" method="POST">
			Nomor Whatsapp 	: <input type="text" name="nohp" value="'.get_option('wa_nohp').'"/><br>
			Pesan Default 	: <input type="text" name="pesan" value="'.get_option('wa_pesan').'"/><br>
			Text yg Muncul 	: <input type="text" name="text" value="'.get_option('wa_text').'"/><br>
			<input type="submit" value="Simpan">
		</form>';

}

function tambahmember() {
	global $wpdb;
	include('tambahmember.php');
}

add_action('admin_menu','menuadminwa');

function fungsi_iklan() {
	$show = 'Ini Adalah Iklan';
	return $show;
}
add_shortcode('iklan','fungsi_iklan');

function whatsapp($atts) {
	$nohp = get_option('wa_nohp');
	$pesan = get_option('wa_pesan');
	$text = get_option('wa_text');
	$var = shortcode_atts(
		array(
			'nohp' => $nohp,
			'pesan' => $pesan,
			'text' => $text
		),$atts
	);
	return '<a href="https://wa.me/'.$var['nohp'].'?text='.urlencode($var['pesan']).'" target="_blank">'.$var['text'].'</a>';
}
add_shortcode('whatsapp','whatsapp');

?> 