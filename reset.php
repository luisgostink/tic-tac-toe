<?php 
session_Start();

// Deletes the Session
session_Destroy();

// Redirects to index.php
header("Location: index.php");
?>