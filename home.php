<!DOCTYPE html>
<html>
<head>
	<title>Health insurance</title>
	<link rel="stylesheet" href="styling.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
        <style>
            #pic{
                width: 100%;
                height: 100%;
            }
            body{
                font-size: 16px;
                font-family: 'Raleway', sans-serif;
                background-image: url("s3.jpg"); 
                background-repeat: no-repeat;
                background-size: cover;
            }
            
            
            h2{
                color: #ffbd33;
                text-decoration: underline;
            }
            h1{
                color:#ffbd33;
            }
            h3{
                color:#ffbd33;
            }
        </style>
</head>
<body>
        <div class="container1">
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="predictor.php">Predictor</a></li>
                    <li><a href="FAQs.php">FAQs</a></li>
                </ul>
            </div>
            
        </div><br><br><br>
        <center><h1>Welcome!</h1></center>
        <!-- <img src="picture1.png" id="pic"> -->
<div class="container" >
    <h2><center>Heatlh Insurance Plans</center></h2>
    <div class="row" style="background-color: wheat;">
        <div class="col-sm-4">
            <div class="col">
            <img src="data:image/png;base64,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" alt="Individual" style="width:95%">
            <div class="caption">
                <h4><b>Health Insurance for Individuals</b></h4>
                Choose from award-winning plans offering comprehensive coverage and wellness-oriented services.<br>
                <p><a href="https://www.policybazaar.com/health-insurance/individual-health-insurance/articles/individual-health-insurance-a-quick-guide/?pb_source=organic">Read More</a></p>

            </div>
        </div>
        </div>
        <div class="col" >
            <div class="thumbnail">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSQO6B7MvBCy-llmWPtUqB5lXq4wqIxEc1E1A&usqp=CAU" alt="Family">
            <div class="caption">
                <h4><b>Health Insurance for Families</b></h4>
                Protect your family under a single plan. We offer plans that save for your future, cover OPD and much more.<br>
                <p><a href="https://www.policybazaar.com/health-insurance/family-health-insurance-plan/?pb_source=organic">Read More</a></p>
            </div>
        </div>
        </div>
        <div class="col">
            <div class="thumbnail">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRD9b5J0at2m5lmEyZY0uUln78udDI0_TQvGQ&usqp=CAU" alt="covid-19">
            <div class="caption">
                <h4><b>Health Insurance for Covid-19</b></h4>
                Protect yourself and your family with our Corona Insurance Plan- a standard health insurance plan for COVID-19 treatment.<br>
                <p><a href="https://www.policybazaar.com/health-insurance/corona-kavach-policy/?pb_source=organic">Read More</a><p>
                
            </div>
        </div>
        </div>
    </div>
    </div>
    
</body>
</html>