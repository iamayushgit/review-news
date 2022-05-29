<?php
 include 'db.php';
 $id = $_GET['id'];
$sql = "SELECT * FROM details WHERE id = " .$id;
$result = mysqli_query($con, $sql);

if($result){
    $row = mysqli_fetch_assoc($result);
    $confname = $row['fname'];
    $conlname = $row['lname'];
    $conusername = $row['username'];
    $conpass = $row['pass'];
    $concity = $row['city'];
    $concountry = $row['country'];
}



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
<form class="row g-3 contact" action="editaction.php" method="post">
        <div class="col-md-6 col-sm-12">
            <label for="validationServer01" class="form-label">First name</label>
            <input type="text" name="fname" class="form-control is-valid" id="validationServer01" value="<?php global $confname; echo $confname ?>" required>
            <div class="valid-feedback">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="validationServer02" class="form-label">Last name</label>
            <input type="text" name="lname" class="form-control is-valid" id="validationServer02" value="<?php global $conlname; echo $conlname ?>" required>
            <div class="valid-feedback">
            </div>
        </div>
        <div class="col-md-12">
            <label for="validationServerUsername" class="form-label">Username</label>
            <div class="input-group has-validation">
                <span class="input-group-text" id="inputGroupPrepend3">@</span>
                <input type="text" name="username" class="form-control is-invalid"  value="<?php global $conusername; echo $conusername ?>" id="validationServerUsername"
                    aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    Please choose a username.
                </div>
            </div>
        </div>
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" name="pass" id="inputPassword5" class="form-control" value="<?php global $conpass; echo $conpass ?>" aria-describedby="passwordHelpBlock"
            required>
        <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers.
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="validationServer03" class="form-label">City</label>
            <input type="text" name="city" class="form-control is-invalid" value="<?php global $concity; echo $concity ?>" id="validationServer03"
                aria-describedby="validationServer03Feedback" required>
            <div id="validationServer03Feedback" class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <label for="validationServer04" class="form-label">Country</label>
            <select class="form-select is-invalid" name="country"  id="validationServer04"
                aria-describedby="validationServer04Feedback" required>
                <option selected disabled><?php global $concountry; echo $concountry ?></option>
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
        <input type="hidden" name ="id" id="id" value="<?php global $id; echo $id ?>"   >
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
    
</body>
</html>
 