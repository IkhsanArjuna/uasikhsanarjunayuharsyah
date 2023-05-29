<?php 


class database{

var $host = "localhost";
var $uname = "root";
var $pass = "";
var $db ="peminjamanbuku";
var $koneksi = "";

    function __construct(){
        $this->koneksi = mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
        
        if(!$this->koneksi){
            echo"KOneksi database gagal";
        }else{
            
        }
    }

    function tampilData(){
        $statment = $this->koneksi->prepare("SELECT * FROM t_tambah ORDER BY idNama ASC");
        $statment->execute(); 

        $hasil=$statment->get_result();
        while($baris = mysqli_fetch_array($hasil)){
            $tampilan[] = $baris;
        }

        
		return $tampilan;
        
        
    }

    function cariData($cari){
        $perintah = $this->koneksi->prepare("SELECT * FROM t_tambah WHERE NamaPengguna='$cari'");
        $perintah->execute();

        $hasil=$perintah->get_result();
		return $hasil;
       
    }


    function editData($data){
        $statment = $this->koneksi->prepare("SELECT * FROM t_tambah WHERE idNama='$data'");
        $statment->execute();

        $hasil=$statment->get_result();
        return $hasil;
    }


    function updateDosen($id,$NamaPengguna,$NamaBuku,$noHP){
        $statment = $this->koneksi->prepare("UPDATE t_tambah SET NamaPengguna = '$NamaPengguna', NamaBuku='$NamaBuku', noHP = '$noHP' WHERE idNama = '$id'");
        $statment->execute();

        $hasil=$statment->get_result();
        return $hasil;
    }


}



?>