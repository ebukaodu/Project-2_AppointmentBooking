<?php
/**
 * Created by PhpStorm.
 * User: chuka
 * Date: 04/10/2018
 * Time: 9:45 PM
 *
 * This program is for confirming if the record entered exists
 */


require_once('db_config.php');

if (isset($_POST['confirm_Record'])) {
    $id = $_POST['id'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];


    $query = "SELECT * FROM std_record WHERE id = :id AND lastname = :lastname AND email = :email";
    $result = $db_connection->prepare($query);
    $result->execute([
        'id' => $id,
        'lastname' => $lastname,
        'email' => $email
    ]);

    $result = $result->fetch();


    $fail_page = file_get_contents('confirm_error.php');

    if ($result) {

       echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"UTF-8\">
    <title>Check appointment</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css\" integrity=\"sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"style/appoint.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
</head>


<body>

<header>
    <h2>Confirm appointment</h2>
</header>

<section>

    <article style=\"height: 50%; position: relative; padding-bottom: 30%\">
        <h1>Welcome back</h1>
        <div class=\"container\">
            <p>Confirmation number:" .  $result['id'] . "</p>
            <p>Hello  <g style='text-transform: capitalize'>". $result['firstname']." " . $result['lastname'] ."</g>,
                you have an appointment booked by ". date_format(new DateTime($result['datetime'] ), 'g:ia \o\n l jS F Y') ." (in person)
                with Kim Ealy.
            </p>
            <p> <b>Office location:</b> WSU Ogden Campus - ET Engineering Technology Building Room 118</p>

            <p>
                Click here to go to main page
                <a href=\"main.html\" > <button type=\"submit\" name=\"bookRecord\" class=\"btn btn-success\">Home</button></a>
            </p>


        </div>
    </article>
</section>

<footer style=\"bottom: 0px\">
    <p><div>Copyright &copy; Ebuka_Odu</div></p>
</footer>

</body> <!––//**layout from www.w3schools.com **/-->

</html>
";

    } else {
        echo $fail_page;
    }
}