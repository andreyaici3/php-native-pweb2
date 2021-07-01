<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db_blog";


    $koneksi = mysqli_connect($host,$user,$pass,$db);

    function keys($data = []){
        $key = "";
        for ($i=0; $i<count($data); $i++){
            $key .= "`" . array_keys($data)[$i] . "`,";  
        }
        return rtrim($key, ",");
    }

    function values($data = []){
        $val = "";
        foreach ($data as $key){
            $val .= "'".$key."',";
        }
        return rtrim($val, ",");
    }

    function insert($tabel, $data = []){
        global $koneksi;
        mysqli_query($koneksi, "INSERT INTO `" . $tabel . "` (" . keys($data) . ") VALUES (" . values($data) . ")");
    }

    function select($table, $id = []){
        global $koneksi;
        if ($id == []){
            $sql = "SELECT * FROM " . $table;
        } else {
            $sql = "SELECT * FROM " . $table . " WHERE " . str_replace('`', '',keys($id) . "=" .values($id));
        }
        $data = mysqli_query($koneksi, $sql );
		while($x = mysqli_fetch_array($data)){
			$hasil[] = $x;
		}
		$hasil = json_encode($hasil);
        return json_decode($hasil);
    }

    function update($table, $data = [], $koneksidisi = [] ){
        global $koneksi;
        $val = "";
        $i = 0;
        foreach ($data as $key) {
            $val .= "`" . array_keys($data)[$i] . "`='". $key . "', ";  
            $i++;
        }
        $sql = "UPDATE `". $table . "` SET " . rtrim(rtrim($val, " "), ",") . " WHERE " . str_replace('`', '',keys($koneksidisi) . "=" .values($koneksidisi));
        mysqli_query($koneksi, $sql );
    }

    function delete($table, $data = []){
        global $koneksi;
        $sql = "DELETE FROM `". $table . "` WHERE "  . str_replace('`', '',keys($data) . "=" .values($data));
        mysqli_query($koneksi, $sql);
    }

    function last_id(){
        global $koneksi;
        return mysqli_insert_id($koneksi);
    }