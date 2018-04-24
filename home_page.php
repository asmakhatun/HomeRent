<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/font-awesome.min" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link href="css/design.css" type="text/css" rel="stylesheet">

        <style>
            .duplex{
              width: 23%;
              float: left;
              margin-left: 1.5%;
              height: 200px;
              color:black;
              background: #f9fafc;
              
              text-align: center;
            }
            .footer{
                background: #121316;
                padding-bottom: 20px;
                color:white;
                height: 300px;
            }
            
            
            .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
        </style>

    </head>
    <body>
        <div class="container-fluid">
            <div class="row slider">
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">HomeRent</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class=""><a href="#">Home</a></li>
                            <li class=""><a href="#">About</a></li>
                            <li class=""><a href="#">Contact Us</a></li>
                            <li class="dropdown"><a href="#">Location</a>

                                <ul class="dropdown-content">

                                    <li class=""><a href="#">Home</a>
                                    </li>
                                    <li class=""><a href="#">About</a>
                                    </li>
                                    <li class=""><a href="#">Contact Us</a></li>


                                </ul>

                            </li>

                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Services</a>

                                <ul class="dropdown-content">
                                    <a href="#">Shifting</a>
                                    <a href="#">Electritian</a>

                                </ul>

                            </li>

                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="#"><span class="glyphicon glyphicon-log-in "></span> Login</a></li>
                            
                            
                             <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div> 
                            
                            &nbsp;&nbsp;
                            <a class="navbar-brand" href="#"><i class="fa fa-phone caf"></i></a>
                            <a class="navbar-brand" href="#"><i class="fa fa-facebook caf"></i></a>
                            <a class="navbar-brand" href="#"><i class="fa fa-twitter caf"></i></a>
                        </ul>
                    </div>
                </nav>

            </div>



            <div class="row banner" >
                <img src="image/pic3.jpg">
            </div>
           



            <div class="row" style="background:#ffffff;padding: 10px 0px 40px; height: 400px;">
                <div class="col-md-12">
                    <h1 class="text-center" style="color: black;">Our Services</h1>
                    <hr style="width:30%;margin: 0 auto;margin-bottom: 40px;">
                    <div class="col-md-4" style="width: 30%; float: left;margin:20px;">
                        <img src="image/ser_pic.jpg"style="border-radius: 6px;height: 250px;width: 100%;">
                       
                    </div>
                    <div class="col-md-4" style="width: 30%; float: left;margin:20px;">
                        <img src="image/duplex.png" style="height: 250px;width: 100%;border-radius: 6px;">
                    </div>
                    <div class="col-md-4" style="width: 30%; float: left;margin:20px;">
                        <img src="image/ser_pic.jpg" style="height: 250px;width: 100%;border-radius: 6px;">
                    </div>
                </div>
            </div>




            <div class="row" style="background:#ffffff;padding: 10px 0px 40px; height: 500px;">
                <div class="col-md-12">          
                    
                    <hr style="width:100%;margin: 0 ;margin:50px;">
                    <div class="col-md-3 duplex">
                       
                            <h3>Duplex</h3>
                            <p>Our home furnishing consultants can help you with advice on your refurnishing or decorating project.</p>
                        
                    </div>
                    <div class="col-md-3 duplex" style="">
                       
                   
                            <h3>Appartment</h3>
                             <p>Our home furnishing consultants can help you with advice on your refurnishing or decorating project.</p>
                        </div>
                    
                    <div class="col-md-3 duplex">
                       
                        
                            <h3>Sublet</h3>
                             <p>Our home furnishing consultants can help you with advice on your refurnishing or decorating project.</p>
                        
                    </div>
                    <div class="col-md-3 duplex">
                        
                        
                            <h3>Other Services</h3>
                             <p>Our home furnishing consultants can help you with advice on your refurnishing or decorating project.</p>
                        
                    </div>
                </div>
            </div>

            <div class="row footer">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <h3>Contact us</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quidem at rerum. Fugiat culpa maxime voluptatem iure voluptates, quaerat magni.</p>
                    </div>
                    <div class="col-md-3">
                        <h3>Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quidem at rerum. Fugiat culpa maxime voluptatem iure voluptates, quaerat magni.</p>
                    </div>
                    <div class="col-md-3">
                        <h3>Other Information</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quidem at rerum. Fugiat culpa maxime voluptatem iure voluptates, quaerat magni.</p>
                    </div>
                    <div class="col-md-3">
                        <h3>Social Icon</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non quidem at rerum. Fugiat culpa maxime voluptatem iure voluptates, quaerat magni.</p>
                    </div>
                </div>
            </div>


        </div>



    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">
    
    $(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
    
    </script>
</body>
</html>
