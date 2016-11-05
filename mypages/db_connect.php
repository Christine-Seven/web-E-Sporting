<?php
/**
 * Created by PhpStorm.
 * User: Seven
 * Date: 2016/11/2
 * Time: 19:39
 */
$link=mysqli_connect("localhost","root","123456");
if(!$link)
    die("Oops...Wrong:".mysqli_errno());
    echo ("Connect Successfully!");
    mysqli_close($link);
?>