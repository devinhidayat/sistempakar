<?php 

class User extends CI_Model {
    
    public function get_data($table) {
        return $this->db->get($table);
    }

    public function insert_data($data,$table) {
        $this->db->insert($table,$data);
    }

}

?>

<?php

// if($umur="Young") {
//     if($dm1="Tidak" || $dm1="Ada" && $dm2="Tidak" || $dm2="Ada" && $poliuria="Tidak" && $polidipsia="Tidak" && $polifagia="Tidak") {
//         $penyakit = "Normal";
//         echo $penyakit;
//     }
//     else if($dm1="Ada" && $dm2="Tidak" && $poliuria="Ada" || $polidipsia="Ada" || $polifagia="Ada") {
//         $penyakit = "Diabetes Melitus Tipe 1";
//         echo $penyakit;
//     }
//     else if($dm1="Tidak" && $dm2="Ada" && $poliuria="Ada" || $polidipsia="Ada" || $polifagia="Ada") {
//         $penyakit = "Diabetes Melitus Tipe 2";
//         echo $penyakit;
//     }
// }
// else {
//     if($dm1="Tidak" || $dm1="Ada" && $dm2="Tidak" || $dm2="Ada" && $poliuria="Tidak" && $polidipsia="Tidak" && $polifagia="Tidak") {
//         $penyakit = "Normal";
//         echo $penyakit;
//     }
//     else if($dm1="Ada" && $dm2="Tidak" && $poliuria="Ada" || $polidipsia="Ada" || $polifagia="Ada") {
//         $penyakit = "Diabetes Melitus Tipe 1";
//         echo $penyakit;
//     }
//     else if($dm1="Tidak" && $dm2="Ada" && $poliuria="Ada" || $polidipsia="Ada" || $polifagia="Ada") {
//         $penyakit = "Diabetes Melitus Tipe 2";
//         echo $penyakit;
//     }
// }

?>