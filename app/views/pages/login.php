<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo URI_ROOT .  "public/style/style.css"; ?>">
    <title>IFriend - Login</title>
</head>

<body>
    <div class="wrapper">
        <form action="<?php echo URI_ROOT . "account/login/user"; ?>" method="post">
            <!-- Email input -->
            <div class="form-outline mb-4 row">
                <label class="form-label col-3 me-4" for="form2Example1">Username</label>
                <input type="text" name="username" id="form2Example1" autocomplete="off" class="form-control col" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4 row">
                <label class="form-label col-3 me-4" for="form2Example2">Password</label>
                <input type="password" name="password" id="form2Example2" autocomplete="off" class="form-control col" />
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="mb-4 w-100">
                <div class="col d-flex justify-content-start">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" name="remember" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>

            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4 w-100">Login</button>

            <div class="col">
                <!-- Simple link -->
                <a href="#!">Forgot password?</a>
            </div>
            <!-- Register buttons -->
            <div class="text-left w-100 mb-4">
                <p>Not a member? <a href="<?php echo URI_ROOT . "account/sign/user"; ?>">Register</a></p>
            </div>
            <?php
            if (isset($_SESSION["error"]) and !empty($_SESSION["error"])) {
            ?>
                <div class="error bg-danger text-left w-100 py-2 px-3 text-white rounded-2">
                    <?php echo $_SESSION["error"]; ?>
                </div>
            <?php
            }
            ?>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>