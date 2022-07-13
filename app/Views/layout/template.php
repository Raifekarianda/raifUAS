<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= $title; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My Css -->
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <script type='text/javascript'>
    </script>
</head>

<body>
    <div id="container">
        <header>
            <img src="https://www.hariansib.com/photo/berita/dir102021/_8554_BPJS-Kesehatan-Ikut-Kontribusi-Dalam-Penanganan-Pandemi-Covid-19.jpg" alt="" height="50px" width="90px" align="right">
            <h3>Sistem Antrian BPJS</h3>
        </header>
        <?= $this->include('layout/navbar'); ?>
        
        <?= $this->renderSection('content'); ?>
        <center>
        <footer>
            <p>&copy; Satuan Tugas Puskesmas - © Copyright 2022. All Rights Reserved.</p>
        </footer></center>
        
    </div>
</body>

</html>