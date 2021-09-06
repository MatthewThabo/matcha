<?php
if(!isset($_SESSION)){
    session_start();
}
 ?>

<header>
  <h1><a href="/matcha/index.php">MATCHA</a></h1>
</header>
<nav>

	<a  <?PHP if ($current_page == "gallery"){echo "id='current'";}?>href=''><div>Notification</div></a>
	<?PHP
	echo "<a ";
	if ($current_page == "Profile"){
		echo "id='current'";
	}
	echo "href='/matcha/src/profile.php'><div>Profile</div></a>";
	$uname = "uname";
	if ($_SESSION['uname'] == "$uname")
	{
		echo "<a ";
		if ($current_page == "my-account"){
			echo "id='current'";
		}
		echo "href=''><div></div></a>";
		if ($_SESSION['groupe'] == 'admin')
		{
		echo "<a ";
		if ($current_page == "admin"){
			echo "id='current'";
		}
		echo "href=''><div></div></a>";
	}
		echo "<a ";
		if ($current_page == "deconnexion"){
			echo "id='current'";
		}
		echo "href=''><div></div></a>";
	}
	else
	{
		echo "<a ";
		if ($current_page == "signup"){
			echo "id='current'";
		}
		echo "href='/matcha/src/signup.php'><div>Signup</div></a>";
		echo "<a ";
		if ($current_page == "login"){
			echo "id='current'";
		}
		echo "href='/matcha/src/login.php'><div>Login</div></a>";
	}
	?>
</nav>

