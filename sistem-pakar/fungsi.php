<?php

function answer($kode){
    if($kode=='q1'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q5'>Tidak</a>";
    }
    if($kode=='q2'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q3'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q10'>Tidak</a>";
    }
    if($kode=='q3'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q12'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q4'>Tidak</a>";
    }
    if($kode=='q4'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s1'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s7'>Tidak</a>";
    }
    if($kode=='q12'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q13'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s7'>Tidak</a>";
    }
    if($kode=='q13'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s2'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q14'>Tidak</a>";
    }
    if($kode=='q14'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s3'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s7'>Tidak</a>";
    }

    if($kode=='q5'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q6'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s7'>Tidak</a>";
    }
    if($kode=='q6'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q7'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q8'>Tidak</a>";
    }
    if($kode=='q7'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s5'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s7'>Tidak</a>";
    }

    if($kode=='q8'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q9'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s7'>Tidak</a>";
    }
    if($kode=='q9'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s6'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s7'>Tidak</a>";
    }
    if($kode=='q10'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='question.php?kode=q11'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s7'>Tidak</a>";
    }
    if($kode=='q11'){
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s4'>Ya</a>";
        echo "<a class='btn col-sm-1 mrg btn-lg btn-outline-light' href='solusi.php?kode=s7'>Tidak</a>";
    }


}



function solusi($kode,$kd_informasi){    
    if ($kode=='s1') {
        $jurusan = "GYM";
        $kd_informasi = "1";        
    }
    if ($kode=='s2') {
        $jurusan = "YOGA";
    }
    if ($kode=='s3') {
        $jurusan = "RENANG";
    }
    if ($kode=='s4') {
        $jurusan = "JOGGING";
    }
    if ($kode=='s5') {
        $jurusan = "OLAHRAGA TIM";
    }
    if ($kode=='s6') {
        $jurusan = "BOXING";
    }
    if ($kode=='s7') {
        $jurusan = "Not Found";
    }
}


?>