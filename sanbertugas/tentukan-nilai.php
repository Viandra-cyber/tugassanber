<?php
function tentukan_nilai($number)
{
    //  kode disini
     if ($nilai1 == "") {
                echo "";
            } else if ($nilai1 >= 76 && $nilai1 <= 98) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = A.  <br> Keterangan = Sangat baik. ';
            } else if ($nilai1 >= 67 && $nilai1 <= 76) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = B.  <br> Keterangan = Baik. ';
            } else if ($nilai1 >= 43 && $nilai1 <= 67) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = C.  <br> Keterangan = Cukup. ';
            } else if ($nilai1 >= 0 && $nilai1 <= 43) {
                echo 'Nilai : ' . $nilai1 . ' <br> Grade = D.  <br> Keterangan = Kurang. ';
            
}

//TEST CASES
echo tentukan_nilai(98); //Sangat Baik
echo tentukan_nilai(76); //Baik
echo tentukan_nilai(67); //Cukup
echo tentukan_nilai(43); //Kurang
?>