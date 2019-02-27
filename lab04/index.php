<?php
    include './upload.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" media="screen" href="style-lab04.css"> -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>What about your money?</title>
</head>
<body style="background: url(https://images.pexels.com/photos/434337/pexels-photo-434337.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260)fixed; background-size: cover; ">

    <div class="container">
        <div class="row">
            <h1>WHAT ABOUT YOUR MONEY?</h1> <br>
        </div>
        <p style="padding-left: 300px; font-size: 25px;">By calculating your income, outcome ,and your balance with csv file. </p>
        <div class="row">
            <div style="right: 500px;>
                <button type="button" class="btn btn-danger" onclick="location.href='download.php'">Download CSV File</button>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-5">
            <?php
                if ($name != "") {
            ?>
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="<?php echo $target_img;?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $name . " " . $lastname;?></h5>
                        <p class="card-text"><?php echo $email;?></p>
                        <p class="card-text"> <strong>Balance</strong> <?php echo number_format($balance, 2);?> Baht.</p>
                    </div>
                </div>
            <?php
                }
            ?>
            </div>

            <div class="card-form">
                
            </div>



            <div class="col-sm-5">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">First Name:</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="name" aria-describedby="nameHelpBlock">
                        <small id="nameHelpBlock" class="form-text text-muted" style="color: red;">
                            <?php echo $nameErr;?>
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Lastname:</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="lastname" aria-describedby="lastnameHelpBlock">
                        <small id="lastnameHelpBlock" class="form-text text-muted" style="color: red;">
                            <?php echo $lastnameErr;?>
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" aria-describedby="emailHelpBlock">
                        <small id="emailHelpBlock" class="form-text text-muted" style="color: red;">
                            <?php echo $emailErr;?>
                        </small>
                    </div>

                    <div class="form-group">
                        <label>Gender:</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" value="female"> Female
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="gender" value="male"> Male
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="img">Profile Image:</label>
                        <input type="file" class="form-control-file" id="img" name="img" required aria-describedby="imgHelpBlock">
                        <small id="imgHelpBlock" class="form-text text-muted" style="color: red;">
                            <?php echo $imgErr;?>
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="fileToUpload">CSV file:</label>
                        <input type="file" class="form-control-file" id="fileToUpload" name="fileToUpload" required aria-describedby="fileHelpBlock">
                        <small id="fileHelpBlock" class="form-text text-muted" style="color: red;">
                            <?php echo $fileErr;?>
                        </small>
                    </div>
                    <button type="submit" class="btn btn-primary" value="submit" name="submit">Processing</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>