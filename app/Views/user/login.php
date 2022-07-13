<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/stylelogin.css');?>">
</head>
<body>
    <div class="form">
        
           
            <center>
        <img src="https://gencil.news/wp-content/uploads/2018/05/logo-puskesmas.png" alt="" height="200px" widht="200px" srcset="">
        </center>
                <center><p><h1>LOGIN SISTEM  BPJS</h1></p></center>
                <?php if(session()->getFlashdata('flash_msg')):?>
    <div class="alert alert-danger"><?=
         session()->getFlashdata('flash_msg') ?>
         </div>
        <?php endif;?>
   
                <form action="/pages/daftar" method="post" name="login">
                    
                    <center>
                        <input type="text" name="username" placeholder="Username" required />
                    </center>
                    <center><input type="password" name="password" placeholder="Password" required /></center>
                        <input name="submit" type="submit" value="Login" />
                </form>
               

        </div><br><br><br><br><br><br><br>
        <center>
        <footer>
            <p>&copy; Satuan Tugas Puskesmas - © Copyright 2022. All Rights Reserved.</p>
        </footer></center>
    </body>
</html>


