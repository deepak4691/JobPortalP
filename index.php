
<!DOCTYPE HTML>
<html>
<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title> Job Portal </title>
        </head>
        
<nav class="navbar" id="insidenav">
  <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#main1">Job Portal</a>
      </div>

    <ul class="nav navbar-nav">
      <!-- <li class="active"><a data-toggle="tab" href="#main1">Home</a></li> -->

    </ul>

    <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="glyphicon glyphicon-user"></span> Register <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="jobseeker/register_user.php">Jobseeker</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="employer/register_emp.php">Employer</a></li>
                    </ul>
                </li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    <!--- -------------------------------------------------------------------------------------------------- -->
    <body id="indexbody" data-spy="scroll" data-target=".navbar" data-offset="60">


<div class="container-fluid" id="main1"> <!-- jumbotron fluid -->
<div class="jumbotron text-center" id="searchjum">
<h1>Job Portal</h1>
    <p>Search for Jobs</p>
    <form class="form-inline" id="homesearch">
        <input type="text" class="form-control" size="50" placeholder="Enter your search keyword" name="keyword" id="keyword">
        <button type="button" onclick="search()" class="btn btn-lg " style="color: black"><span class="glyphicon glyphicon-search"></span> Search</button>
    </form>
</div>
</div> <!-- jumbotron -->

<div class="container" id="subcontent" style="background: transparent">
    <!-- div for search contents -->
</div>
<div class="page-header" style="background:#1abc9c"></div>
<div class="container-fluid" style="background: transparent">
    <div class="text-center">
        <h2>Register</h2>
        <h4>Register in this website for a better experience</h4>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Employers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Register today and post a job in easy steps and start receiving applications the same day.
                        Find the right candidates easily and quickly through our Search feature.</p>
                </div>
                <div class="panel-footer">
                   <a href="employer/register_emp.php" style="color: inherit"> <button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h1>Job Seekers</h1>
                </div>
                <div class="panel-body">
                    <p style="font-size: 16px">Helps passive and active jobseekers find better jobs. Get connected with over 45000 recruiters.
                        Apply to jobs in just one click. Apply to thousands of jobs posted daily.</p>
                </div>
                <div class="panel-footer">
                    <a href="jobseeker/register_user.php" style="color: inherit"><button class="btn btn-lg">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container bg-grey" id="contact">
        <div class="page-header" style="background: #f4511e"></div>
        <h2 class="text-center">CONTACT US</h2>
        <div class="page-header"></div>
        <div class="row">
            <div class="col-sm-5">
                <p>Contact us and we'll get back to you within 24 hours.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span> Kozhikode, India</p>
                <p><span class="glyphicon glyphicon-phone"></span> +91 8943 202726</p>
                <p><span class="glyphicon glyphicon-envelope"></span> info@jobportal.com</p>
            </div>

            <div class="col-sm-7">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> 
 <div class="page-header" style="background: #f4511e"></div>
</div> 
<footer class="container-fluid text-center">
    <a href="#insidenav" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>
    <p>Job Portal</p>
</footer>
</body>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/search.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.min.css">
</html>
