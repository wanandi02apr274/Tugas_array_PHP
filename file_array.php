<?php
echo 'Belajar array';
//membuat array scalar(satu dimensi)
$ar_buah =['pepaya', 'mangga', 'pisang', 'jambu'];

foreach($ar_buah as $id => $buah){
    echo '<br> Tampilkan key' .$id;
}

echo '<hr>';

foreach($ar_buah as $buah){
    echo '<br> Tmpilkan data ' .$buah;
}
?>