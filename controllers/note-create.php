<?php

$heading = "New Note";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // dd($_POST);
    // echo $_POST;
}

require("views/note-create.view.php");