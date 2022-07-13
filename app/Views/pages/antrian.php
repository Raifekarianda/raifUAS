<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="section">
    <div class="container">
        <iframe width="700" height="270px"
src="https://disk.mediaindonesia.com/thumbs/600x400/news/2021/12/3b488d74156a960f126676fa249cd2d4.jpg" align="center">
</iframe>
        <aside id="sidebar">

    <div class="widget-box">
        <center>
            <h5 class="title"></h5>
            <h1>
                Pendaftaran
            </h1>
            
        <button onclick="myFunction1()" class="btn btn-warning">Loket 1</button>
       

            </div>
    <br>
    <div class="widget-box">
        <center>
            <h5 class="title"></h5>
            <h1>
                Perpanjangan
            </h1>
            
        <button onclick="myFunction2()" class="btn btn-warning">Loket 2</button>
        </center></div><br>
        <div class="widget-box">
        <center>
            <h5 class="title"></h5>
            <h1>
                Panduan 
            </h1>
            
        <button onclick="myFunction3()"class="btn btn-warning">Loket 3</button>
        </center>
        
    </div>
</aside>

<script>
alert("SELAMAT DATANG DI DEMO SISTEM ANTRIAN");
function myFunction1() {
  alert("SEGERA TUNGGU DI LOKET 1 ");
}
function myFunction2() {
  alert("SEGERA TUNGGU DI LOKET 2 ");
}
function myFunction3() {
  alert("Maaf Loket Sudah Di Tutup Karena Sudah Habis ");
}
</script>
</div>
</div>

        </div>
    </div>
    <br>
    <br>
    <?= $this->endSection(); ?>