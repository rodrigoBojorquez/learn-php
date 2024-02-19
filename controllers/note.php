<?php

$id_note = $_GET["id"];
$config = require("config.php");
$db = new Database($config["database"], "root", "root");

$note = $db->query("SELECT * FROM notes WHERE id = ?", [$id_note])->findOrFail();

verify($note["user_fk"] === 3);

$heading = $note["title"];

require("views/note.view.php");