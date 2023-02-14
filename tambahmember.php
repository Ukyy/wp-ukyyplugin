<h2>Tambah Member</h2>
<?php
if (isset($_POST) && $_POST['nama'] != '' && $_POST['email'] != ''){
    $email = sanitize_email($_POST['email']);
    if (is_email($email)) {
        $username = $_POST['nama'];
        $user_id = username_exists( $username );

        if ( ! $user_id and email_exists( $email ) == false  ) {

            $random_password = wp_generate_password( $length = 12, $include_standard_special_chars = false );
            $user_id = wp_create_user( $username, $random_password, $email );
            $wpdb->query("INSERT INTO `anggota` (`id_wp`,`tgl_pendaftaran`,`nama`,`email`,`tgl_lahir`,`no_hp`,`alamat`,`kota`,`provinsi`) 
        VALUES (".$user_id.",
        NOW(), 
        '".sanitize_text_field($_POST['nama'])."',
        '".$email."',
        '".sanitize_text_field($_POST['tgl_lahir'])."',
        '".sanitize_text_field($_POST['no_hp'])."', 
        '".sanitize_text_field($_POST['alamat'])."',
        '".sanitize_text_field($_POST['kota'])."',
        '".sanitize_text_field($_POST['provinsi'])."')"); 

        echo '<p>Pendaftaran Member Berhasil</p>
        <p>Username : '.$username.'<br>
           Password : '.$random_password.'</p>';
           

        } else {
            echo 'Username Dan Email Sudah Dipakai Sebelumnya';
        }
    }

}

?>
<form action="" method="post">
    Nama : <input type="text" name="nama"> <br> <br>
    Email : <input type="text" name="email"> <br> <br>
    Tanggal lahir : <input type="text" name="tgl_lahir"> <br> <br>
    Nomor HP : <input type="text" name="no_hp"> <br> <br>
    Alamat : <input type="text" name="alamat"> <br> <br>
    Kota : <input type="text" name="kota"> <br> <br>
    Provinsi : <input type="text" name="provinsi"> <br> <br>
    <button >Simpan</button>
</form>

<?php
$data =$wpdb->get_results("SELECT * FROM `anggota` LIMIT 0,10");
foreach ($data as $data) {
    echo '<li>' .$data->nama. ' (' .$data->email. ')</li>';
}
?>
</ol>