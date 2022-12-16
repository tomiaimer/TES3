<?php 
require 'koneksi.php';
$id = $_GET['ID'];

if ( hapus ($id) > 0) {
    echo "<script>
    alert ('berhasil di hapus');
    document.location.href = 'sql.php'
    </script>"
    ;
}
else {
    echo "<script>
    alert ('gagal di hapus');
    document.location.href = 'sql.php'
    </script>";
}

?>