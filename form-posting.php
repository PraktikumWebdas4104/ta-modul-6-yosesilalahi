<form method="post" name="posting_form" action="submit.php">
        Judul Artikel<br>
        <input type="text" name="judul_artikel" size="30"><br>
        Isi Artikel<br>
        <textarea name="isi_artikel" cols="60" rows="10"></textarea><br>
        <form method="post" enctype="multipart/form-data" action="upload.php">
    	<input type="file" name="gambar">
    	<input type="submit" value="Upload">
  		</form>
        <input type="submit" name="submit" value="submit artikel">
</form>