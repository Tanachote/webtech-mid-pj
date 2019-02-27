<?php
    include 'validation.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" media="screen" href="style-lab04.css"> -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/materia/bootstrap.min.css">

    <title>What about your money?</title>
</head>

<!-- <body style='background: #c31432; background: -webkit-linear-gradient(to right, #240b36, #c31432); background: linear-gradient(to right, #240b36, #c31432);'> -->
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./index.php"> <h1>THAI IDOL GROUP</h1></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./otherpage.php">Add</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-10">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name">Firstname:</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="name" aria-describedby="nameHelpBlock">
                            <small id="nameHelpBlock" class="form-text text-muted" style="color: red;">
                                <?php echo $nameErr;?>
                            </small>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="lastname">Lastname:</label>
                            <input type="text" name="lastname" id="lastname" class="form-control" placeholder="lastname" aria-describedby="lastnameHelpBlock">
                            <small id="lastnameHelpBlock" class="form-text text-muted" style="color: red;">
                                <?php echo $lastnameErr;?>
                            </small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="nickname">Nickname:</label>
                            <input type="text" name="nickname" id="nickname" class="form-control" placeholder="nickname" aria-describedby="nicknameHelpBlock">
                            <small id="nicknameHelpBlock" class="form-text text-muted" style="color: red;">
                                <?php echo $nicknameErr;?>
                            </small>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="dob">Date of birth:</label>
                            <input type="text" name="dob" id="dob" class="form-control" placeholder="date of birth" aria-describedby="dobHelpBlock">
                            <small id="dobHelpBlock" class="form-text text-muted" style="color: red;">
                                <?php echo $dobErr;?>
                            </small>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="height">Height (cm):</label>
                            <input type="number" name="height" id="height" class="form-control" placeholder="height" aria-describedby="heightHelpBlock">
                            <small id="heightHelpBlock" class="form-text text-muted" style="color: red;">
                                <?php echo $heightErr;?>
                            </small>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="blood_group">Blood group:</label>
                            <input type="text" name="blood_group" id="blood_group" class="form-control" placeholder="blood group" aria-describedby="blood_groupHelpBlock">
                            <small id="blood_groupHelpBlock" class="form-text text-muted" style="color: red;">
                                <?php echo $blood_groupErr;?>
                            </small>
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="group_name">Group name:</label>
                            <input type="text" name="group_name" id="group_name" class="form-control" placeholder="group name" aria-describedby="group_nameHelpBlock">
                            <small id="group_nameHelpBlock" class="form-text text-muted" style="color: red;">
                                <?php echo $group_nameErr;?>
                            </small>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="province">Province:</label>
                        <input type="text" name="province" id="province" class="form-control" placeholder="province" aria-describedby="provinceHelpBlock">
                        <small id="provinceHelpBlock" class="form-text text-muted" style="color: red;">
                            <?php echo $provinceErr;?>
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