<?php
/**
 * Created by PhpStorm.
 * User: chuka
 * Date: 04/10/2018
 * Time: 11:13 AM
 * this pages handles the inputs from the index page and post it to the database
 */

require_once ('db_config.php');

if (isset($_POST['bookRecord'])) {
    $fname = $_POST['fname'];
    $lastname = $_POST['lastname'];
    $college = $_POST['college'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $calendar = $_POST['calendar'];
    $comments = $_POST['comments'];
    $fail_page = file_get_contents('confirm_error.php');

/* check if records exist*/
    $check = $db_connection->prepare('SELECT * FROM std_record WHERE email= :email');
    $check->bindParam(":email",$email,  PDO::PARAM_STR);
    $check->execute(['email' => $email]);
    $row = $check->fetch(PDO::FETCH_ASSOC);

    if($row)
    {
        /*echo $fail_page ;*/
        echo ("<script>alert('Record Exist, you might have booked appointment before!');
                     window.location.href='index.php';</script>");
    }
    else {
        $query = "INSERT INTO  std_record(id,firstname,lastname,collegename,email,phone,datetime,comments)
              VALUES ( NULL, '$fname', '$lastname', '$college','$email','$phone','$calendar', '$comments')";

        if (isset($_POST['bookRecord'])) {
            setcookie('fname', $_POST['fname'], time() + (3600), "/");
            setcookie('lastname', $_POST['lastname'], time() + (3600), "/");
            setcookie('email', $_POST['email'], time() + (3600), "/");
            setcookie('phone', $_POST['phone'], time() + (3600), "/");
        }


        /* get the id and print a confirmation*/

        if ($db_connection->exec($query)) {

            $id = $db_connection->lastInsertId();

            $query2 = "SELECT * FROM std_record WHERE id = :id ";
            $result = $db_connection->prepare($query2);

            $result->execute([
                'id' => $id
            ]);
            $result = $result->fetch();

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
        <h1>Appointment confirmed</h1>
        <div class=\"container\">
            <p>Confirmation number:" . $result['id'] . "</p>
            <p>Hello  <g style='text-transform: capitalize'>" . $result['firstname'] . " " . $result['lastname'] . "</g>,
                you have an appointment booked by " . date_format(new DateTime($result['datetime']), 'g:ia \o\n l jS F Y') . " (in person)
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
            }
            else {
                echo $fail_page;
            }


        } else {
            echo $fail_page;
        } $db_connection = NULL;
    }

}