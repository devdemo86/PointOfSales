<?php
require 'database/connect.php';
?>

<html>

<head>
    <title>Account</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
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
        <!--one huge column for the whole container-->
        <div class="col-lg-12">

            <!--tabs navigation-->
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#report1">Sales</a></li>
              <li><a data-toggle="tab" href="#report2">Memberships</a></li>
              <li><a href="#">Menu 2</a></li>
              <li><a href="#">Menu 3</a></li>
            </ul>
            <!--end tabs navigation-->

            <!--tab content-->
            <div class="tab-content">
            <!-- tab 1 -->
            <div id="report1" class="tab-pane fade in active">
                <div class="panel panel-default">
                    <h2>Sales per Year ($)</h2>
                    <div class="form-group">
                        <select style="width:100px;" class="form-control" name="Year">
                        <? php 
                        ?>
                            <option>2017</option>
                            <option>2016</option>
                        </select>
                    </div>
                    <div id="sales-chart" class="ct-chart ct-double-octave"></div>
                </div>
            </div><!--end tab 1-->
            <!-- tab 2 -->
            <div id="report2" class="tab-pane fade in">
                <div class="panel panel-default">
                    <h2>Memberships Per Year</h2>
                    <div class="form-group">
                        <select style="width:100px;" class="form-control">
                            <option value="volvo">2017</option>
                            <option value="saab">2016</option>
                        </select>
                    </div>
                    <div id="customer-chart" class="ct-chart ct-double-octave"></div>
                </div>
            </div><!--end tab 2-->
            </div> <!--end tab content-->

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <? php
        $year = $_POST['Year'];
    ?>
    <script>
        //Define chart data
        var salesData = {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          series: [
            [5, 2, 4, 2, 0, 6, 2, 8, 1, 7, 3, 2]
          ]
        };

        var customerData = {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          series: [
            [5, 2, 4, 2, 0, 6, 2, 8, 1, 7, 3, 2]
          ]
        };

        //Create charts
        new Chartist.Bar('#sales-chart', salesData);
        new Chartist.Bar('#sales-chart', customerData);

        //Needed for when new tabs are selected, so the charts can resize
        $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
            new Chartist.Bar('#sales-chart', salesData);
            new Chartist.Bar('#customer-chart', customerData);
        });

    </script>
</body>

</html>