<?php
require_once '../app/core/checklog.php';
date_default_timezone_set('America/Chicago');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="with=device-width, scale=1"/>
        <title>COSC 4806</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
        <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
        <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
        <script src="http://localhost/cosc/public/js/cosc.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container-fluid">
                <div class="float-right">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="navbar-brand" 
                               href="<?= HOME ?>"><h2>COSC</h2></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= MANAGE_CLIENT ?>">Manage Client</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= PHONE_LIST ?>">Phone List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= REPORT ?>">Report</a>
                        </li>
                    </ul>
                </div>
                <div class="float-right">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <span class="navbar-text"><?php echo "Welcome " . $_SESSION['username']; ?></span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= LOGOUT ?>">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid" style="padding-top: 100px;">
