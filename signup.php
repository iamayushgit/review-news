<?php
//     if(isset($_POST['name'])){
//     $server = "localhost";
//     $username = "root";
//     $password = "";

//     $con = mysqli_connect($server, $username, $password);

//     // if(!$con){
//     //     die("connection to this database failed due to" . mysqli_connect_error());
//     // }   
//     // echo "Success connecting to the db";
//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $username = $_POST['username'];
//     $pass = $_POST['pass'];
//     $city = $_POST['city'];
//     $country = $_POST['country'];


    
//     $sql = "INSERT INTO `details'.'details' (`fname`, `lname`, `username`, `pass`, `city`, `country`) VALUES ('$fname', '$lname', '$username', '$pass', '$city', '$country');"
   
//     // echo $sql;

//     // if($con->query($sql) == true){
//     //     // echo "Successfully Inserted";

//     // }
//     // else{
//     //      "Error: $sql <br> $con->error";
//     // }
//     // $con->close();
//     // }
// }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="signup.css">
    <title>Review News</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.html">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="women.html">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Celebrity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Travel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Food</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Technology</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sport</a>
                    </li>
                    <div class="extra">
                        <form class="search">
                            <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">
                                <p>Search</p>
                            </button>
                        </form>
                        <div class="account">
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">My account</a>
                            </li>
                            <button class="btn btn-outline-success" type="submit">
                                <p>SUSCRIBE</p>
                            </button>
                        </div>
                    </div>
                </ul>

            </div>
        </div>
    </nav>
    <br> <br>
    

    <!-- html code for contact -->
    <!-- ...................................................... -->

    <form class="row g-3 contact" action="adddata.php" method="post">
        <div class="col-md-6 col-sm-12">
            <label for="validationServer01" class="form-label">First name</label>
            <input type="text" name="fname" class="form-control is-valid" id="validationServer01" value="" required>
            <div class="valid-feedback">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="validationServer02" class="form-label">Last name</label>
            <input type="text" name="lname" class="form-control is-valid" id="validationServer02" value="" required>
            <div class="valid-feedback">
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                <input type="text" name="username" class="form-control is-invalid" id="validationServerUsername"
                    aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" name="pass" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"
            required>
        <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers.
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="validationServer03" class="form-label">City</label>
            <input type="text" name="city" class="form-control is-invalid" id="validationServer03"
                aria-describedby="validationServer03Feedback" required>
            <div id="validationServer03Feedback" class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="validationServer04" class="form-label">Country</label>
            <select class="form-select is-invalid" name="country" id="validationServer04"
                aria-describedby="validationServer04Feedback" required>
                <option selected disabled value="">Choose...</option>
                <option>Nepal</option>
                <option>India</option>
                <option>Australia</option>
                <option>USA</option>
                <option>UAE</option>
                <option>Pakistan</option>
                <option>Bangladesh</option>
                <option>Sri Lanka</option>
            </select>
            <div id="validationServer04Feedback" class="invalid-feedback">
                Please select a valid state.
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input is-invalid" type="checkbox" value="" id="invalidCheck3"
                    aria-describedby="invalidCheck3Feedback" required>
                <label class="form-check-label" for="invalidCheck3">
                    Agree to terms and conditions
                </label>
                <div id="invalidCheck3Feedback" class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
    <table>
        <tr>
            <th>S.N.</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Username</th>
            <th>Password</th>
            <th>City</th>
            <th>Country</th>
            <th>Action</th>
        </tr>

        <?php
        include 'db.php';
        $sql ="SELECT * FROM details";
        $result = mysqli_query($con, $sql);

        if($result){
            while ($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $fname = $row['fname'];
                $lname = $row['lname'];
                $username = $row['username'];
                $pass = $row['pass'];
                $city = $row['city'];
                $country = $row['country'];

                ?>

                <tr>
            <td> <?php echo $id ?> </td>
            <td> <?php echo $fname ?> </td>
            <td> <?php echo $lname ?> </td>
            <td> <?php echo $username ?> </td>
            <td> <?php echo $pass ?> </td>
            <td> <?php echo $city ?> </td>
            <td> <?php echo $country ?> </td>
            <td>
                <a href="edit.php?id=<?php echo $id ?>">Update</a>
                <a href="delete.php?id=<?php echo $id ?>">Delete</a>
                </td>
                
        </tr>
                <?php

            }
        }


        ?>

        
    </table>


    <!-- html code for footer -->
    <div class="footer">
        <div class="social-media">
            <img src="./photoes/NEWS.png" alt="logo">
            <a href="#">
                <p><i class="fa-brands fa-facebook"></i></p>
            </a>
            <a href="#">
                <p><i class="fa-brands fa-instagram"></i></p>
            </a>
            <a href="#">
                <p><i class="fa-brands fa-twitter"></i></p>
            </a>
            <a href="#">
                <p><i class="fa-brands fa-youtube"></i></p>
            </a>
        </div>
        <div class="quick-menu">
            <a href="#">News</a>
            <a href="#">Women</a>
            <a href="#">Travel</a>
            <a href="#">Food</a>
            <a href="#">Celebrity</a>
            <a href="#">Technology</a>
            <a href="#">Sport</a>
        </div>
        <div class="footer-content">
            <div class="row">
                <div class="col-md-4 fcb fcb-company">
                    <h3>Company</h3>
                    <p class="fcb-company">Each template in our ever growing studio library can be added and moved
                        around within any page effortlessly with one
                        click.</p>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3 fcb">
                    <h3>Latest</h3>
                    <a href="#">iTunes is now the Second Biggest Name in New Artist promotion</a>
                    <p>MUSIC</p>
                    <a href="#">Concert Shows Will Stream on Netflix, Amazon and Hulu this Year</a>
                    <p>MUSIC</p>
                    <a href="#">Pixar brings it's Animated Movies to life with Studio Music </a>
                    <p>Music</p>
                </div>
                <div class="col-md-3 fcb">
                    <h3>Popular</h3>
                    <a href="#">Customer Engagement Marketing: New Strategy for the economy</a>
                    <p>MARKETING</p>
                    <a href="#">The Scars of War Will Remain There for Life, Published Study Finds</a>
                    <p>POLITICS</p>
                    <a href="#">What You Didn't Know About the True Reasons for the War in Ukraine</a>
                    <p>POLITICS</p>
                </div>
                <div class="col-md-2 fcb">
                    <h3>Sitemap</h3>
                    <ul>
                        <li><a href="#">News</a></li>
                        <li><a href="women.html">Women</a></li>
                        <li><a href="#">Celebrity</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Technolgy</a></li>
                        <li><a href="#">Sport</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p> &copy; 2022 tagDiv. All Rights Reserved. Made with Newspaper Theme.</p>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>