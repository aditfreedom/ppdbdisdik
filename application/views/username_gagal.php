<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url()?>assets/img/favicon.png" rel="icon">
</head>
<body>
<script src="<?=base_url('/asset/plugins/sweetalert2/sweetalert2.all.min.js')?>"></script>
<script type="text/javascript">
function jsFunction(){
    setTimeout(function() {
        swal.fire({
            title: 'Gagal!',
            text: 'NIK dan NISN sudah terdaftar sebelumnya!',
            icon: 'error'
        }, function() {
            window.location.href = "./";
        });
    }, 0);

}
</script>



<?php
echo '<script type="text/javascript">jsFunction();</script>';
?>  
</body>
</html>



