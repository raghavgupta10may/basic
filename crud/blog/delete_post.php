<?php
include_once("init.php");
if(!isset($_GET['id'])){
  header('location:blog/index.php');
  die();
  }
  delete(''posts,$_GET['id']);
  header('location:blog/index.php');
  die();
  ?>






