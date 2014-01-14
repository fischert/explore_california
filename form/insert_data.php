<?php

//capture the passed data

$inserted_text = $_POST["formtext"];

//connect

mysql_connect("localhost", "root", "root");

mysql_select_db("sample_data");

//insert

$insert_query = "INSERT INTO sample_table (formtext) VALUES ('".$inserted_text."')";

$insertion_result = mysql_query($insert_query);


?>
