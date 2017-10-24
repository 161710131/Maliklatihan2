<?php

require_once 'iden.php';

$identitas = new identitas('Malik', 'Bandung' , 'XI RPL 2' , 'Pelajar');
    	echo "______________________BIODATA______________________".'<br>'.'<br>';
    	echo "Nama          : " .$identitas->get_Nama().'<br>';
        echo "Kelas         :  " .$identitas->get_Kelas().'<br>';
        echo "Tempat Lahir  : " .$identitas->get_Tl().'<br>';
        echo "Status        :  " .$identitas->get_Status().'<br>';
        echo "_____________________________________________________".'<br>'.'<br>';
$identitas1 = new identitas('Thuer', 'Bandung' , 'XI RPL 2' , 'Pelajar');
    	echo "Nama          : " .$identitas1->get_Nama().'<br>';
        echo "Kelas         :  " .$identitas1->get_Kelas().'<br>';
        echo "Tempat Lahir  : " .$identitas1->get_Tl().'<br>';
        echo "Status        :  " .$identitas1->get_Status().'<br>';
        echo "_____________________________________________________".'<br>'.'<br>';
$identitas2 = new identitas('Hadir', 'Bandung' , 'XI RPL 2' , 'Mahasiswa');
    	echo "Nama          : " .$identitas2->get_Nama().'<br>';
        echo "Kelas         :  " .$identitas2->get_Kelas().'<br>';
        echo "Tempat Lahir  : " .$identitas2->get_Tl().'<br>';
        echo "Status        :  " .$identitas2->get_Status().'<br>';
        echo "_____________________________________________________".'<br>'.'<br>';
$identitas3 = new identitas('Oneng', 'Bandung' , 'XI RPL 2' , 'Janda');
    	echo "Nama          : " .$identitas3->get_Nama().'<br>';
        echo "Kelas         :  " .$identitas3->get_Kelas().'<br>';
        echo "Tempat Lahir  : " .$identitas3->get_Tl().'<br>';
        echo "Status        :  " .$identitas3->get_Status().'<br>';
        echo "_____________________________________________________".'<br>'.'<br>';
$identitas4 = new identitas('Udin', 'Bandung' , 'XI RPL 2' , 'Duda');
    	echo "Nama          : " .$identitas4->get_Nama().'<br>';
        echo "Kelas         :  " .$identitas4->get_Kelas().'<br>';
        echo "Tempat Lahir  : " .$identitas4->get_Tl().'<br>';
        echo "Status        :  " .$identitas4->get_Status().'<br>';
        echo "_____________________________________________________";



?>