<!DOCTYPE html>
<html>
<head>
  <title>Services</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <link rel="stylesheet" href="styling.css">
  <style>
    body {
      font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      background-image:url("s4.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
.loading {
  font-family: "Arial Black", "Arial Bold", Gadget, sans-serif;
  text-transform:uppercase;
  
  width:150px;
  text-align:center;
  line-height:50px;
  
  position:absolute;
  left:0;right:0;top:15%;
  margin:auto;
  transform:translateY(-50%);
}

.loading span {
  position:relative;
  z-index:999;
  color:#fff;
}
.loading:before {
  content:'';
  background:#61bdb6;
  width:128px;
  height:36px;
  display:block;
  position:absolute;
  top:0;left:0;right:0;bottom:0;
  margin:auto;
  
  animation:2s loadingBefore infinite ease-in-out;
}

@keyframes loadingBefore {
  0%   {transform:translateX(-14px);}
  50%  {transform:translateX(14px);}
  100% {transform:translateX(-14px);}
}


.loading:after {
  content:'';
  background:#ff3600;
  width:14px;
  height:60px;
  display:block;
  position:absolute;
  top:0;left:0;right:0;bottom:0;
  margin:auto;
  opacity:.5;
  
  animation:2s loadingAfter infinite ease-in-out;
}

@keyframes loadingAfter {
  0%   {transform:translateX(-50px);}
  50%  {transform:translateX(50px);}
  100% {transform:translateX(-50px);}
}
#hey{
                background-color: #ffdd99
            }
.row{
  margin-top: 20%
}
  </style>
</head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top" id="hey">
        <div class="container1">
            <div class="navbar-header">
            
            </div>
            <div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php">Home</a></li>
                    <li class="active"><a href="#">Services</a></li>
                    <li><a href="predictor.php">Predictor</a></li>
                    <li><a href="FAQs.php">FAQs</a></li>
                </ul>
            </div>
            
        </div>
    </nav>
<div class="loading">
  <span>Services</span>
</div>
<div class="container">
  
  <div class="row" id="hey2">
  <div class="col21">
    <div class="thumbnail">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSGWi-IstXlubRB4F2INtfUd_CY8XAluBw76g&usqp=CAU" >
      <div class="caption">
        <h4><b><center><a href="submission1.php">Request a call</a></center></b></h4>
      </div>
    </div>
  </div>
  <div class="col22">
  <div class="thumbnail">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcShmFhdIfeB_TmK-u1-fFKC6-J2sDi6WeI7a8ZZVSAmj00_lflPtS6TknwH9tV_-UiMCPntlM2lk9GX4fCPhoK5YCeHhPDTBmjCn1zJhZM&usqp=CAU&ec=45714080">
      <div class="caption">
        <h4><b><center><a href="submission2.php">Subscribe</a></center></b></h4>
      </div>
    </div>
  
  </div>
  
</div>
</div>
</div>
</body>
</html>