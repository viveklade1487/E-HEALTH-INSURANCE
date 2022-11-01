<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
        <link rel="stylesheet" href="styling.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<style>
	body{
		overflow: hidden;
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
                background-image: url("s2.jpg"); 
                background-repeat: no-repeat;
                background-size: cover;
	}
	#hey{
                background-color: #ffdd99
        }
        #hello{
                position: absolute;
                margin-top: 10%;
                margin-left: 35%;
        }
        .thaks{
                margin-bottom: 20%;
        }
        .row{
                border: 3px solid black;
                padding: 10px;
                margin: 10px;
                background-color: blanchedalmond;
                border-radius:31px;
        }
        </style>
</head>
<body>
        <div class="container1">
                <ul class="nav navbar-nav navbar-right">
                        <li><a href="home.php">Home</a></li>
                        <li class="active"><a href="#">Services</a></li>
                        <li><a href="predictor.php">Predictor</a></li>
                        <li><a href="FAQs.php">FAQs</a></li>
                </ul>
        </div>
        <div class="container" id="hello">
        <div class="row">
        	<div class="col-sm-6">
        	<center><h3>Kindly enter your information here</h3></center><br>
        	<form method="post" action="submitted2.php">
        	<div class="form-group">
                        <input type="text" name="fname" class="form-control" placeholder="Full Name" required="required" />
                </div><br>
                <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email" required="required" />
                </div><br>
                <div class="form-group">
                        <input type="text" name="mobile" class="form-control" placeholder="Mobile" required="required" />
                </div><br>
                <input type="submit" value="Submit" class="btn btn-info btn-block btn-large"></input>
                </form>
                </div>
        </div>
        </div>
        
</body>
</html>