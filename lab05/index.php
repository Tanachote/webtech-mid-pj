<?php
    include 'database.php';
    include 'search.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- <link rel="stylesheet" media="screen" href="style-lab05.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/materia/bootstrap.min.css">

    <!-- background: #c31432;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #240b36, #c31432);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #240b36, #c31432); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ -->

    <!-- background: #005AA7;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #FFFDE4, #005AA7);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #FFFDE4, #005AA7); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */ -->
</head>

<!-- <body style='background: #005AA7;  background: -webkit-linear-gradient(to right, #FFFDE4, #005AA7);background: linear-gradient(to right, #FFFDE4, #005AA7);'> -->
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"> <h1>THAI IDOL GROUP</h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./otherpage.php">Add</a>
        </li>
        </ul>
        <form action="" method='get' class="my-2 my-lg-0">
            <div class="form-inline">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Inspiration for advanced search</a>
                    <div class="dropdown-menu " x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 44px, 0px);">
                        <a class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="chBoxN" name="name">
                                <label class="custom-control-label float-left" for="chBoxN">Name</label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="chBoxLN"  name="lastname">
                                <label class="custom-control-label float-left" for="chBoxLN">Lastname</label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="chBoxNN" name="nickname">
                                <label class="custom-control-label float-left" for="chBoxNN">Nickname</label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="chBoxDOB" name ="dob">
                                <label class="custom-control-label float-left" for="chBoxDOB">Date of Birth</label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="chBoxH" name="height">
                                <label class="custom-control-label float-left" for="chBoxH">Height</label>
                            </div>
                        </a>
                        <a class="dropdown-item" >
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="chBoxP" name="province">
                                <label class="custom-control-label float-left" for="chBoxP">Province</label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="chBoxBG" name="blood_group">
                                <label class="custom-control-label float-left" for="chBoxBG">Blood Group</label>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="chBoxGN" name="group_name">
                                <label class="custom-control-label float-left" for="chBoxGN">Group Name</label>
                            </div>
                        </a>
                    </div>
                </li>
                <input type="text" name='search' id="search" placeholder="Search..." class="form-control mr-sm-2">
                <button type="submit" class="btn btn-secondary my-2 my-sm-0" id="searchBtn" name='button'>search</button>
            </div>
        </form>
    </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <table class="table table-striped table-hover">
                <thead>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Lastname</th>
                    <th>Nickname</th>
                    <th>Date of Birth</th>
                    <th>Height</th>
                    <th>Province</th>
                    <th>Blood Group</th>
                    <th>Group</th>
                </thead>
                <tbody id="table">

                <?php
                    foreach ($result as $column)
                    {
                        ?>
                        <tr>
                            <td><?= $column->id ?></td>
                            <td><?= $column->name ?></td>
                            <td><?= $column->lastname ?></td>
                            <td><?= $column->nickname ?></td>
                            <td><?= $column->dob ?></td>
                            <td><?= $column->height ?></td>
                            <td><?= $column->province ?></td>
                            <td><?= $column->blood_group ?></td>
                            <td><?= $column->group_name ?></td>
                        </tr>
                        <?php
                    }
                
                ?> 

                </tbody>
            </table>
        </div>
        
        <div class="footer text-center">
            <h4>Reference</h4>
            <p>www.bnk48.com</p>
            <p>Create by Tanachote Chawanachote 5810450270</p>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        var arr
        var advStatus = false

        $(document).ready(function () {
            $('.dropdown-item').click(function(e) {
                e.stopPropagation();
            });
            // $.ajax({
            //     url: './data.json',
            //     success: function (data) {
            //         arr = data
            //         $('#table').text('')
            //         data.forEach(element => {
            //             addDataRowToTable(element)
            //         })
            //     }
            // })

            $('#searchBtn').on('click', function() {
                $('#table').text('')
                let val = $('#search').val()
                val = val.toLowerCase()
                search(val)
            })

            $('#search').on('keypress', function(e) {
                if (e.which === 13) {
                    $('#table').text('')
                    let val = $(this).val()
                    val = val.toLowerCase()
                    search(val)
                }
            })

            // $('#advsearchCheckBox').on('click', function() {
            //     if (!advStatus) {
            //         advStatus = true
            //         $('#checkboxes').show()
            //     } else {
            //         advStatus = false
            //         $('#checkboxes input:checked').prop('checked', false)
            //         $('#checkboxes').hide()
            //     }
            // })

            // function checkVal(input, val, nameVal = "") {
            //     let isFound = input.toLowerCase().includes(val)
            //     let isChecked = $('#checkboxes input[name=' + nameVal + ']').is(':checked')
            //     return (isFound && !advStatus) || (isFound && isChecked && advStatus)
            // }

            // function addDataRowToTable(element) {
            //     $('#table').append('<tr>')
            //     $('#table').append('<td style="padding: 25px 10px 25px 10px; border: 1px solid #fbf0fa; border-radius: 10px;">' + element.name + '</td>')
            //     $('#table').append('<td style="border: 1px solid #fbf0fa; border-radius: 5px;">' + element.lastname + '</td>')
            //     $('#table').append('<td style="border: 1px solid #fbf0fa; border-radius: 5px;">' + element.nickname + '</td>')
            //     $('#table').append('<td style="border: 1px solid #fbf0fa; border-radius: 5px;">' + element.dateOfBirth + '</td>')
            //     $('#table').append('<td style="border: 1px solid #fbf0fa; border-radius: 5px;">' + element.height + ' cm</td>')
            //     $('#table').append('<td style="border: 1px solid #fbf0fa; border-radius: 5px;">' + element.province + '</td>')
            //     $('#table').append('<td style="border: 1px solid #fbf0fa; border-radius: 5px;">' + element.bloodGroup + '</td>')
            //     $('#table').append('</tr>')
            // }
        })
    </script>
</body>
</html>
