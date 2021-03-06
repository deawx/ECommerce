<!DOCTYPE html>
<?php include 'core/init.php';?>
<html>
<head>
  <title>Khadi Premium | Treasures of India</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="icon/png" href="images/logo.PNG">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash|Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
    html,body{
      overflow-x: hidden;
    }
    body{
      font-family: 'Montserrat', sans-serif;
    }
    .container{
      width: 90%;
    }
    .title{
      font-family: 'Berkshire Swash', cursive;
      font-size: 3em;
      text-align: center;
      padding: 1em;
      color: #805a26;
    }
    .title-text{
      font-family: 'Berkshire Swash', cursive;
      font-size: 1.4em;
      text-align: center;
      font-weight: normal;
    }
    .col-lg-4, .col-md-4, .col-md-6, .col-sm-12, .col-xs-12{
      padding: 0.75em;
    }
    .regime h2, .featured h2, .knowledge h2, .testimonials h2{
      font-family: Trajan Pro;
      font-size: 3em;
      text-align: center;
      padding: 1em;
    }
    .beauty-regime{
      line-height: 1.5em;
      padding: 1em;
    }

    .btn-success, .btn-warning, .btn-primary, .btn{
      color:#fff;
      background-color: #805a26;
      border-radius: 2px;
      border: 1px solid #805a26;
      padding: 1em 1.5em;
    }

    .btn-success:hover, .btn-warning:hover, .btn-primary:hover, .btn:hover{
      color: #805a26;
      background-color: #fff;     
      transition-duration: 0.4s;
      text-decoration: none;
    }

    .regime-shop{
      color:#fff;
      background-color: #805a26;
      border-radius: 2px;
      border: 1px solid #805a26;
      padding: 1em 1.75em;
    }
    .regime-shop:hover{
      color: #805a26;
      background-color: #fff;     
      transition-duration: 0.4s;
      text-decoration: none;
    }
    .know-title{
      font-family: Trajan Pro;
      font-size: 2.5em;
      text-align: center;
      padding: 0.5em;
    }
    .know-desc{
      text-align: justify;
      padding: 1.5em;
    }
    .know-more{
      text-align: center;
    }
    .know-more a{
      color:#fff;
      background-color: #805a26;
      border-radius: 2px;
      border: 1px solid #805a26;
      padding: 0.75em 1.25em;
    }
    .know-more a:hover{
      color: #805a26;
      background-color: #fff;     
      transition-duration: 0.4s;
      text-decoration: none;
    }
    .know-head{
      font-size: 1.5em;
    }
    .know{
      width: 5em;
      border-style: smooth;
      border-color: #805a26;
      border-width: 0.25em;
      border-radius: 10px;
    }
    .testimonials-head{
      font-size: 2.25em;
      font-family: Trajan Pro;
      text-align: center;
    }
    .testimonials-text{
      font-size:  18px;
      padding: 10em;
      font-family: 'Berkshire Swash', cursive;
      text-align: center;
      line-height: 1.5em;
    }
    .navbar{
      border: none;
    }
    .navbar-inverse{
      background-color: #fff;
    }
    .navbar-inverse .navbar-nav > li > a{
      color: #805a26;
      font-family: Trajan Pro;
      font-size: 0.9em;
      text-transform: uppercase;
    }
    .navbar-inverse .navbar-nav > li > a:hover{
      color: #fff;
      background-color: #805a26;
      transition-duration: 0.4s;
    }
    .blog{
      box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.4);
      padding: 1.5em;
      border-radius: 5px;
    }

    .products{
      box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.4);
      padding: 0.5em;
      border-radius: 5px;
    }
    .add-to-cart{
      padding: 0.75em;
    }
    .prod{
      color: #805a26;
    }
    .blog-title{
      text-align: center;
      font-family: Trajan Pro;
      font-weight: bold;
      padding: 0.5em;
    }
    .blog-desc{
      text-align: justify;
    }
    .foot-widget ul{
      padding: 0;
    }
    .foot-widget ul li{
      padding: 0.5em;
    }

    .foot-widget ul h4{
      font-family: Trajan Pro;
    }

    .foot-widget ul li a{
      font-family: Trajan Pro;
      color: #805a26;
      text-decoration: none;
    }

    .footer-rights{
      background: #a4814c; 
      color: #fff;
      padding: 0.75em;
    }
    footer{
      background: #e7eae3;
    }
  </style>
</head>
<body>
  <div>
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <a href="index.php"><img src="images/download.png" class="img-responsive"></a>
        </div>
    </div>
  </div>
  <br>
  <!--Navigation Bar-->
  <?php
    $sql = "SELECT * FROM categories WHERE parent = 0";
    $pquery = $db->query($sql); 
  ?>
  <nav class="navbar navbar-inverse">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>                        
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav">
                  <li><a href="about.php">About</a></li>
                  <li><a href="skin-care.php">Skin Care</a></li>
                  <li><a href="hair-care.php">Hair Care</a></li>
                  <li><a href="body-care.php">Body Care</a></li>
                  <li><a href="bath-and-beauty.php">Bath and Beauty</a></li>
                  <!-- <li><a href="blog.php">Blog</a></li> -->
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a></li>
              </ul>
            </div>
        </nav>