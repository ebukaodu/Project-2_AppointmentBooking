
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book appointment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="style/appoint.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>


<body>

<header>
    <h2>Book appointment</h2>
</header>

<section>
    <nav>
        <ul>
            if you already have an appointment, and you want to confirm your appointment, or you want
            to cancel your appointment, click this button
            <p><a href="check_confirm.php" >
                    <button type="submit" name="confirmRecord" class="btn btn-success" formaction="check_confirm.php">Confirm</button></i></a>
            </p>
        </ul>
    </nav>

    <article>
        <h1>Make an appointment</h1>
        <div class="container">
            <form method="post" action="book_Record.php">

                <div class="form-group row">
                    <label for="first_name" class="col-sm-2 col-form-label">First name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="fname" name="fname" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-sm-2 col-form-label">Last name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastname" name="lastname" value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="college" class="col-sm-2 col-form-label">College name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="college" name="college" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email address:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="email"  value="" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="phone" class="col-sm-2 col-form-label">Phone number:</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="phone" name="phone" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="calendar" class="col-sm-2 col-form-label">Date and Time:</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" class="form-control" id="calendar" name="calendar" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <textarea id="comments" rows="4" cols="92" name="comments" STYLE="color: #777777"> Special notes, concerns, or requirements </textarea>
                    </div>

                </div>


                <button type="submit" name="bookRecord" class="btn btn-success">Book</button>

            </form>
        </div>
    </article>
</section>

<footer>
    <p><div>Copyright &copy; Ebuka_Odu</div></p>
</footer>

</body> <!––//**layout from www.w3schools.com **/-->

</html>
