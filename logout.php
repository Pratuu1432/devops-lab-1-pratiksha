<?php
session_start();
unset($_SESSION["user"]);
header("location:index.php");
<h2 class="text-uppercase text-green font-weight-bold font-style-underline">Edited by Saraswati for DevOps Practical</h2>
?>