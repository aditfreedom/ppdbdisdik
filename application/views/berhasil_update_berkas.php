<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?=base_url()?>assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="<?=base_url('/asset/plugins/sweetalert2/sweetalert2.min.css')?>">
    <script src="<?=base_url('/asset/plugins/sweetalert2/sweetalert2.all.min.js')?>"></script>
</head>
<body>
<script type="text/javascript">
function jsFunction(){
    Swal.fire(
        'Berhasil!',
        'Sukses Menyimpan Upload Berkas',
        'success'
).then(function() {
    window.history.back();});
}
</script>


<?php
echo '<script type="text/javascript">jsFunction();</script>';
?> 
 
</body>
</html>



