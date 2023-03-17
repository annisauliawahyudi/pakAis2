<?php 
require 'kon.php';

$id = $_GET["id"];

if( delet( $id ) > 0 ) {
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 't17.php';
        </script>
        ";
    }else {
    echo "
        <script> 
            alert{'data gagal dihapus');
            document.location.href = 't17.php';
        </script>
    ";
}



?>