<!-- Section: news -->
<?php
include 'dbconnect.php';
?>

<div class="heading-about marginbot-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="section-heading text-center">
                    <h2>Video</h2><br>
                    <div class="mx-auto" style="padding-bottom: 40px">
                        Terkini dan terpopuler
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM video ORDER BY id_video DESC");
        while ($hasil = mysqli_fetch_array($sql)) {
            $judul = stripslashes($hasil['judul']);
            $file = stripslashes($hasil['link']);
        ?>
            <div class="col-lg-6 col-md-4 col-sm-12 mb-4">
                <div class="video">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="<?php echo $file; ?>" title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <br>
                    <h3 class="text-center" style="padding-bottom: 40px"><?php echo $judul; ?></h3>
                </div>
            </div>
        <?php } ?>
    </div>
</div>