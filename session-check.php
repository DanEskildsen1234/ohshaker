<?php
session_start();

if($_SESSION['manager']){echo 'manager';}
if($_SESSION['bartender']){echo 'bartender';}
if($_SESSION){echo 'unknown';}
if(empty($_SESSION)){echo 'empty';}