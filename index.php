<?php
// Initialize the session
session_start();
// var_dump($_SESSION);die();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: signin.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    
    .navbar {
      width: 100%;
      background-color: rgb(24, 110, 24);
      overflow: auto;
    }
    
    .navbar a {
      float: left;
      padding: 12px;
      color: rgb(235, 241, 241);
      text-decoration: none;
      font-size: 17px;
    }
    
    .navbar a:hover {
      background-color: #000;
    }
    
    .active {
      background-color: #04AA6D;
    }
    
    @media screen and (max-width: 500px) {
      .navbar a {
        float: none;
        display: block;
      }
    }
    </style>
</head>
<body>
<div class="navbar">
    <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
    <form class="form-inline" action="/action_page.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form> 
    <a href="#"><i class="fa fa-fw fa-poem"></i> Poem</a>
    <a href="#"><i class="fa fa-fw fa-gallery"></i> Gallery</a>
    <a href="#"><i class="fa fa-fw fa-envelope"></i> Music</a>
     <a href="#"><i class="fa fa-fw fa-Videos"></i> Video</a> 
    <a href="#"><i class="fa fa-fw fa-user"></i> Login/Signup</a>
  </div>  
  <div class="container-fluid">
    
    <div class="row">
      <div class="col-sm-4" style="background-color:rgb(244, 250, 230);">.Discover</div>
      <div class="col-sm-8" style="background-color:rgb(12, 192, 42);">.Postmyart</div>
  <h2>Trending Music</h2>
  
  <div class="row">
    <div class="col bg-success">
        <p>street hype vol 2</p>
        <audio controls>
            <source src="street hype vol 2 (hearthis.at).mp3" type="audio/mpeg">
          Your browser does not support the audio element.
          </audio>
    </div>
    <div class="col bg-warning">
      <p>song name</p>
        <audio controls>
            <source src=".mp3" type="audio/mpeg">
          Your browser does not support the audio element.
          </audio>
    </div>
    <div class="col bg-success">
      <p>song name</p>
        <audio controls>
            <source src=".mp3" type="audio/mpeg">
          Your browser does not support the audio element.
          </audio>
    </div>
    <div class="col bg-warning">
      <p>song name</p>
      <audio controls>
          <source src=".mp3" type="audio/mpeg">
        Your browser does not support the audio element.
        </audio>
      </div>
    <div class="col bg-success">
      <p>song name</p>
        <audio controls>
            <source src=".mp3" type="audio/mpeg">
          Your browser does not support the audio element.
          </audio>
    </div>
  </div>
  <br>
  <h2>Trending Videos</h2>
  <br>
  <div class="row">
    <div class="col bg-success">
        <p>The Hitman's Wife's Bodyguard</p>
        <video controls autoplay muted>
            <source src="Watch The Hitman's Wife's Bodyguard (2021).mp4" type="video/mp4">
            
          Your browser does not support the video tag.
          </video>
    </div>
    <div class="col bg-warning">
        <p>Goosebumps 1</p>
        <video controls autoplay muted>
            <source src="Goosebumps 1.mp4" type="video/mp4">
            
          Your browser does not support the video tag.
          </video>
    </div>
    <div class="col bg-success">
        <p>Goosebumps 2</p>
        <video controls autoplay muted>
            <source src="Goosebumps 2.mp4" type="video/mp4">
            
          Your browser does not support the video tag.
          </video>
    </div>
    <div class="col bg-warning">
        <video controls autoplay muted>
            <source src="Watch The Hitman's Wife's Bodyguard (2021).mp4" type="video/mp4">
            
          Your browser does not support the video tag.
          </video>
    </div>
    <div class="col col bg-success">
        <video controls autoplay muted>
            <source src="Watch The Hitman's Wife's Bodyguard (2021).mp4" type="video/mp4">
            
          Your browser does not support the video tag.
          </video>
    </div>
    
    </div>
    <br>
    <h2>Trending Reels</h2>
    <br>
    <div class="row">
        <div class="col bg-success">
          <p>Reel name 1</p>
          <video  autoplay muted>
            <source src=".mp4" type="video/mp4">
            
          Your browser does not support the video tag.
          </video>
        </div>
        <br>
        <div class="col bg-warning">
          
            <p>Reel name</p>
            <video  autoplay muted>
              <source src=".mp4" type="video/mp4">
              
            Your browser does not support the video tag.
            </video>
        </div>
        <br>
          <div class="col bg-success">
            <p>Reel name</p>
            <video  autoplay muted>
              <source src=".mp4" type="video/mp4">
              
            Your browser does not support the video tag.
            </video>
        </div>
        <br>
        <div class="col bg-warning">
          
            <p>Reel name</p>
            <video  autoplay muted>
              <source src=".mp4" type="video/mp4">
              
            Your browser does not support the video tag.
            </video>
        </div>
        <br>
        <div class="col bg-success">
          
            <p>Reel name</p>
            <video  autoplay muted>
              <source src=".mp4" type="video/mp4">
              
            Your browser does not support the video tag.
            </video>
        </div>
        <br>
        <div class="col bg-warning">
          
            <p>Reel name</p>
            <video  autoplay muted>
              <source src=".mp4" type="video/mp4">
              
            Your browser does not support the video tag.
            </video>
        
        </div>
        </div>
        <br>
    <h2>Trending memes</h2>
    <br>
    <div class="row">
        <div class="col bg-success">
          <p>caption</p>
            <img src=".jpg">
        </div>
        <br>
        <div class="col bg-warning">
          <p>caption</p>
            <img src=".jpg">
        </div>
        <br>
        <div class="col bg-success">
          <p>caption</p>
            <img src=".jpg">
        </div>
        <br>
        <div class="col bg-warning">
          <p>caption</p>
            <img src=".jpg">
        </div>
        <br>
        <div class="col bg-success">
          <p>caption</p>
            <img src=".jpg">
        </div>
        </div>
        <br>
    <h2>Trending photos</h2>
    <br>
    <div class="row">
        <div class="col bg-success">
          <p>caption</p>
            <img src=".jpg">
        </div>
        <br>
        <div class="col bg-warning">
          <p>caption</p>
            <img src=".jpg">
        </div>
        <br>
        <div class="col bg-success">
          <p>caption</p>
            <img src=".jpg">
        </div>
        <br>
        <div class="col bg-warning">
          <p>caption</p>
            <img src=".jpg">
        </div>
        <br>
        <div class="col bg-success">
          <p>caption</p>
            <img src=".jpg">
        </div>
        </div>
        <br>
      </div>
    </div>


</div>

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["name"]); ?></b>. Welcome to the Welcome page.</h1>
    <p>
    <a href="Account-settings.php" class="btn btn-primary">View your profile</a>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
</body>
</html>