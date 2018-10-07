<?php
/**
 * Created by PhpStorm.
 * User: chuka
 * Date: 04/10/2018
 * Time: 9:45 PM
 *
 * This program is the php page for deleting the records
 */

require_once ("db_config.php");

if(isset($_POST['deleteRecord'])) {

    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];



        $query1 = "SELECT * FROM std_record WHERE id = :id AND lastname = :lastname AND email = :email";
        $results = $db_connection->prepare($query1);
        $results->execute([
            'id' => $id,
            'lastname' => $lastname,
            'email' => $email
        ]);

        $results = $results->fetch();

        $fail_page = file_get_contents('confirm_error.php');

        if ($results) {

            $query = "DELETE FROM std_record
              WHERE id = :id AND lastname = :lastname AND email = :email";


            $results = $db_connection->prepare($query);
            $results->execute([
                'id' => $id,
                'lastname' => $lastname,
                'email' => $email]);


            $confirm_page = file_get_contents('deleted.html');
            $fail_page = file_get_contents('confirm_error.php');

            if ($db_connection->prepare($query)) {
                echo $confirm_page;
            } else {
                echo $fail_page;
            }

        } else {
            echo $fail_page;
        }



}
$db_connection= NULL;