
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Check appointment</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="style/appoint.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>


<body>

<header>
    <h2>Confirm appointment</h2>
</header>

<section>

    <article style="height: 50%; position: relative; padding-bottom: 20%">
        <h1>Welcome back</h1>
        <div class="container">
            <form method="post" action="confirmphp.php">

                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">Confirmation NO:</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="id" name="id" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="last_name" class="col-sm-2 col-form-label">Last name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="lastname" name="lastname" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email address:</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="email"  value="">
                    </div>
                </div>


                <button type="submit" name="confirm_Record" class="btn btn-success">Confirm</button>
                <button type="submit" name="deleteRecord" class="btn btn-success" formaction="delete_confirm.php">Cancel</button>

            </form>
        </div>
    </article>
</section>

<footer style="bottom: 0px">
    <p><div>Copyright &copy; Ebuka_Odu</div></p>
</footer>

</body> <!––//**layout from www.w3schools.com **/-->

</html>
