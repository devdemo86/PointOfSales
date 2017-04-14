<?php
require 'database/connect.php';
?>
<html>
<head>
    <title>Employee Account</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/loadNavBar.js"></script>
    <script src="js/custom.js"></script>
</head>

<body>
    <div id="navigation-bar"></div>

    <!--Table for report-->
    <div class="container-fluid">
        <!--8 column width for the sales register container-->
        <div class="col-lg-8">
            <h2>Personal Information</h2>
            <hr>
            <div class="well">
                <div class="container">
                <div class="col-lg-4">
                    <form>
                    <input type = "text" class = "form-control" placeholder = "First Name"> 
                    <input type = "text" class = "form-control" placeholder = "Last Name"> 
                    <input type = "text" class = "form-control" placeholder = "Title"> 
                    <input type = "text" class = "form-control" placeholder = "DOB">
                    <input type = "text" class = "form-control" placeholder = "Address">
                    <input type = "text" class = "form-control" placeholder = "City">
                    <input type = "text" class = "form-control" placeholder = "Postal Code"> 
                    <input type = "text" class = "form-control" placeholder = "Phone">
                    <input type = "text" class = "form-control" placeholder = "Email">    
                    </form>
                    <button type="button" class="btn btn-primary" ;">Save</button>
                </div>
                </div> 
            </div>
            <div class = "clearfix"></div>
            <div class="well">
                <div class="container">
                <div class="col-lg-4">
                    <form>
                        <input type = "text" class = "form-control" placeholder = "First Name"> 
                        <input type = "text" class = "form-control" placeholder = "Last Name"> 
                        <input type = "text" class = "form-control" placeholder = "DOB">
                        <input type = "text" class = "form-control" placeholder = "Address">
                        <input type = "text" class = "form-control" placeholder = "City">
                        <input type = "text" class = "form-control" placeholder = "Postal Code"> 
                        <input type = "text" class = "form-control" placeholder = "Phone">
                        <input type = "text" class = "form-control" placeholder = "Email">    
                    </form>
                    <button type="button" class="btn btn-primary" ;">Save</button>
                </div> 
                </div>
            </div>
        </div>
           

        <!--4 column width for the whole customer details, etc..container-->
        <div class="col-lg-4">
            <div class="well">
            <h2>Customer Details:</h2>
            </div>
        </div>

    </div>
</body>

</html>