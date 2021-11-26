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

// Rules:
// if($_POST['umur'] > 0 && $_POST['umur'] < 15) {
//     if(($_POST['dm1']="Tidak" || $_POST['dm1']="Ada") && ($_POST['dm2']="Tidak" || $_POST['dm2']="Ada") && $_POST['poliuria']="Tidak" && $_POST['polidipsia']="Tidak" && $_POST['polifagia']="Tidak") {
//         echo "Normal";
//     }
//     if($_POST['dm1']="Ada" && $_POST['dm2']="Tidak" && ($_POST['poliuria']="Tidak" || $_POST['poliuria']="Ada") && ($_POST['polidipsia']="Tidak" || $_POST['polidipsia']="Ada") && ($_POST['polifagia']="Tidak" || $_POST['polifagia']="Ada")) {
//         echo "Diabetes Melitus Tipe 1";
//     }
//     else if($_POST['dm1']="Tidak" && $_POST['dm2']="Ada" && ($_POST['poliuria']="Tidak" || $_POST['poliuria']="Ada") && ($_POST['polidipsia']="Tidak" || $_POST['polidipsia']="Ada") && ($_POST['polifagia']="Tidak" || $_POST['polifagia']="Ada")) {
//         echo "Diabetes Melitus Tipe 2";
//     }
//     else {
//         echo "Error";
//     }
// }
// else {
//     if(($_POST['dm1']="Tidak" || $_POST['dm1']="Ada") && ($_POST['dm2']="Tidak" || $_POST['dm2']="Ada") && $_POST['poliuria']="Tidak" && $_POST['polidipsia']="Tidak" && $_POST['polifagia']="Tidak") {
//         echo "Normal";
//     }
//     else if($_POST['dm1']="Ada" && $_POST['dm2']="Tidak" && ($_POST['poliuria']="Tidak" || $_POST['poliuria']="Ada") && ($_POST['polidipsia']="Tidak" || $_POST['polidipsia']="Ada") && ($_POST['polifagia']="Tidak" || $_POST['polifagia']="Ada")) {
//         echo "Diabetes Melitus Tipe 1";
//     }
//     else if($_POST['dm1']="Tidak" && $_POST['dm2']="Ada" && ($_POST['poliuria']="Tidak" || $_POST['poliuria']="Ada") && ($_POST['polidipsia']="Tidak" || $_POST['polidipsia']="Ada") && ($_POST['polifagia']="Tidak" || $_POST['polifagia']="Ada")) {
//         echo "Diabetes Melitus Tipe 2";
//     }
//     else {
//         echo "Diabetes Melitus Tipe 2";
//     }
// }

?>