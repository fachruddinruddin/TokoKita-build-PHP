<!-- Section: news -->
<?php
include 'dbconnect.php';
?>


<div class="heading-about marginbot-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="section-heading">
                    <h2>Berita Terbaru</h2><br>
                    <p>terkini dan terupdate</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM berita ORDER BY id_berita DESC");
        while ($hasil = mysqli_fetch_array($sql)) {
            $judul  = stripslashes($hasil['judul']);
            $gambar = stripslashes($hasil['gambar']);
            $hl = stripslashes($hasil['headline']);
            $isi = stripslashes($hasil['isi']);
        ?>
            <div class="col-sm-3 col-md-3"><br><br>

                <div class="service-box">
                    <div class="service-icon">
                        <img src="<?php echo $gambar; ?>" width="200px" height="200px">
                        <br><br>
                        <h5><?php echo $judul; ?></h5><br>
                        <p><?php echo $hl; ?></p>
                        <p><?php echo $isi; ?></p>
                    </div>
                </div>

            </div>
        <?php } ?>
    </div>
</div>