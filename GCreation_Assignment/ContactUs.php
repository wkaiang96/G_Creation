<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="contactus.css" />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"/>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script><title>Contact Us</title>
</head>

<body>
	<?php
		require('header.php');
	
	session_start();
	
	$servername="localhost";		
	$username="root";
	$password="";
	$dbname="gcreation";
	
	//create connection
	$conn= new mysqli($servername,$username,$password,$dbname);
	
	//check connection
	if($conn->connect_error)
	{
		die("Connection failed:".$conn->connect_error);
	}
	if (!empty($_SESSION['email']))
	{
	$phpEmail=$_SESSION['email'];
	//select all the data according to the session
	$sql="SELECT * FROM userdata WHERE email='$phpEmail'";
	
	$result=$conn->query($sql);
	
	$row=mysqli_fetch_assoc($result);
	

echo '
	
<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>A bridge that link us together</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="senddetail.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="UserName" value="'.$row['name'] .'" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="UserEmail" value="'.$row['email'] .'" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="non" selected="">Choose One:</option>
                                <option value="service" name="subject">General Customer Service</option>
                                <option value="suggestions" name="subject">Suggestions</option>
                                <option value="product" name="subject">Event</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message..."></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"/>
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>';
	}
	else
	{
		echo '<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>A bridge that link us together</small></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="senddetail.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="UserName" placeholder="Enter Name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="UserEmail" placeholder="Enter Email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="non" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="Event">event</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message..."></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs"/>
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>';
	}?>
        <div class="col-md-4" >
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <b>G Creation</b><br/>
                69 Jalan Magazine,<br/>   
				Georgetown Penang,<br/>
				10300 Penang. <br/><br/>
                <b>Phone:</b>(60)4-238 8858
            </address>
            <address>
                <b>Email</b><br>
                <a href="mailto:#">GCreation.PMY@outlook.com</a>
            </address>
            </form>
        </div>
    </div>
</div>
<br/>
<br/>
<?php
		require('footer.php');
	?>

</body>

</html>
