<?php
define('DB_SEVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','students');

$link = mysqli_connect(DB_SEVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if(!$link){
    die("Khong the ket noi " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Error</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper {
            width: 750px;
            margin: 0 auto;
        }
    </style>
</head>

<body>
<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Invalid Request</h1>
                </div>
                <div class="alert alert-danger fade in">
                    <p>Sorry, you've made an invalid request. Please <a href="../index.php" class="alert-Link">go back</a> and try again.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>