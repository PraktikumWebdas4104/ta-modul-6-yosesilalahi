<?php
        $dbhost                = 'localhost';
        $dbuser                = 'root';
        $dbpassword    = 'password';
        $dbname                = 'posting';
        $koneksi               = mysql_connect($dbhost,$dbuser,$dbpassword);
        mysql_select_db($dbname,$koneksi);
        $judul         = $_POST['judul_artikel'];
        $isi           = $_POST['isi_artikel'];
        $tgl           = date('dd-mm-yyyy H:i:s');
        $query = mysql_query("INSERT INTO artikel (`id_artikel`, `judul_artikel`, `isi_artikel`, `tgl_artikel`) VALUES ('id_artikel', '$judul', '$isi', NOW()");
        if ($query) {
               echo 'berhasil membuat artikel dengan judul '.$judul ;
        } else {
               
               echo 'gagal membuat artikel dengan judul '.$judul ;
        }

mysql_close();
?>
<html><head></head><body>
<p><a href="form-posting.php">Buat artikel baru</a></p><br>
<?php

        $dbhost                = 'localhost';
        $dbuser                = 'root';
        $dbpassword    = 'password';
        $dbname                = 'posting';
        $koneksi               = mysql_connect($dbhost,$dbuser,$dbpassword);
        mysql_select_db($dbname,$koneksi);
        $query = mysql_query("SELECT * FROM artikel");
        if (mysql_num_rows($query) == 0) {
              
               echo 'maaf, belum ada artikel';
        } else {
            
               while ($data = mysql_fetch_array($query)) {
                       echo '<p><strong>'.$data['judul_artikel'].'</strong></p>';
                    
                       echo '<p><em>'.date('j, F Y',strtotime($data['tgl_artikel'])).'</em></p>';
                      
                      
                       echo '<p>'.$data['isi_artikel'].'</p>';
               }
        }
       
       
        mysql_close();
?>
</body></html>