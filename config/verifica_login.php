<?php 

// 2 hours in seconds
$inactive = 1800; 
@ini_set('session.gc_maxlifetime', $inactive); // set the session max lifetime to 2 hours

@session_start();

if(!$_SESSION['usuario']){
	header('Location: index.php');
	exit();
}

if (isset($_SESSION['testing']) && (time() - $_SESSION['testing'] > $inactive)) {
    // last request was more than 2 hours ago
    header('Location: index.php');
    session_unset();     // unset $_SESSION variable for this page
    session_destroy();   // destroy session data

}


$_SESSION['testing'] = time(); // Update session

 ?>