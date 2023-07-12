<?php 
session_start();

	include("connection.php");
	include("company_functions.php");

    $user_data = check_login($con);

	$result = NULL;

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
        $query = $_POST['query'];
		$result = mysqli_query($con, $query);
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 50px;
        }

        form {
            margin: 0 auto;
            width: 400px;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 3px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .button_Login{
            text-align: center;
        }

        .signup_link {
            text-align: center;
        }

        .signup_link a {
            color: #4caf50;
        }
        header {
			background-color: #4caf50;
			color: #fff;
			padding: 10px 20px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		nav {
			background-color: #4caf50;
			padding: 10px;
		}
		nav ul {
			list-style: none;
			margin: 0;
			padding: 0;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
		nav li {
			position: relative;
			margin: 0;
			padding: 0;
			flex: 1;
			text-align: center;
		}
		nav a {
			display: block;
			padding: 10px 20px;
			color: #f2f2f2;
			font-size: 18px;
			text-decoration: none;
		}
		nav ul ul {
			display: none;
			position: absolute;
			top: 100%;
			left: 0;
			background-color: #f2f2f2;
			width: 100%;
			z-index: 1;
		}
		nav ul ul li {
			display: block;
			width: 100%;
		}
		nav ul ul a {
			padding: 10px 20px;
			color: #333;
			font-size: 16px;
			text-decoration: none;
			display: block;
			text-align: left;
		}
		nav li:hover > ul {
			display: block;
		}
        header img {
			height: 100px;
			margin-right: 10px;
		}
    </style>
</head>
<body>

<header>
		<img src="http://localhost/CS260_project/iitplogo.jpg" alt="IITP Logo">
	    <?php /* echo Hello User $user[name]*/ ?>
		<nav>
			<ul>
			    <a href="http://localhost/CS260_project/logout.php">Log Out</a>
			</ul>
		</nav>
	</header>

    <h1 style="color:lightgreen">Write a Query to Execute</h1>
		<form action="#" method="post">
        <label for="Query">Query:</label>
        <textarea name="query" id="query" rows="4" cols="50">Type Here</textarea>
         <br><br>
        <input type="submit" value="Execute"><br><br>
    
		</div>
        
        <a href="http://localhost/phpmyadmin/index.php?route=/database/structure&db=tpc_portal">View Database</a>
    </form>
</body>
</html>