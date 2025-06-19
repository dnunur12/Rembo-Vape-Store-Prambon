<?php require "header.php"; ?>
<style>
    .banner .img {
        width: 100%;
        height: 250px;
        background-image: url('assets/img/vape2.jpg');
        padding: 0px;
        margin: 0px;
    }

    .img .box {
        height: 250px;
        background-color: rgb(41, 41, 41, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        padding-top: 70px;
    }

    .box a {
        color: #0066FF;
    }

    .box a:hover {
        text-decoration: none;
        color: rgb(6, 87, 209);
    }

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .row>[class^="col-sm-4"] {
        padding-left: 0;
        padding-right: 0;
    }

    .row>[class^="col-sm-8"] {
        padding-right: 100px;
    }
</style>

<div class="banner mb-3">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>ABOUT US</h3>
            <p>Home > <a href="#">About Us</a></p>
        </div>
    </div>
</div>

<div class="container bg-white rounded pt-4 pb-4">
    <div class="row no-gutter">
        <div class="col-sm-8 text-justify">
            <h4>ABOUT REMBO VAPE STORE</h4>
            <p>Rembo Vape Store adalah toko yang menyediakan berbagai pilihan rokok elektrik (vape)
                dan perlengkapannya dengan kualitas terbaik. Kami hadir untuk memenuhi kebutuhan para pengguna vape,
                baik pemula maupun yang berpengalaman, dengan produk-produk yang aman, legal, dan terjamin keasliannya.
                Di Rembo Vape Store, kami percaya bahwa pengalaman vaping yang baik dimulai dari produk yang terpercaya
                dan layanan yang ramah.

.</p>
            <p>Dengan berbagai merek dan varian yang selalu diperbarui, kami siap menjadi partner utama Anda dalam menjelajahi dunia vaping.
                Kami juga memberikan edukasi dan konsultasi bagi pelanggan yang ingin beralih dari rokok konvensional ke rokok elektrik secara bijak.
                Komitmen kami adalah menghadirkan kenyamanan berbelanja dan pelayanan terbaik, baik secara langsung di toko maupun melalui platform online.</p>
        </div>
        <div class="col-sm-4">
            <img src="assets/img/14.jpg" height="300px" width="100%">
        </div>
    </div>
</div>
<?php require "footer.php"; ?>