<?php
    // configuration
    require("../includes/config.php"); 
    //query("SELECT * FROM users WHERE id = ?", $_SESSION["id"]);
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $instrument = $_POST['instrument'];
        $genre = $_POST['genre'];
        //query("SELECT * FROM users WHERE id = ?", $_SESSION['id']);
        query("INSERT INTO users (id, instrument, genre) VALUES (?, ?, ?)", $_SESSION["id"], $instrument, $genre);
        redirect("/"); 
    }
    else
    {
        render("instrumentshow.php");
    }
