<?php if(!defined("FlamoreID")) defined("FlamoreID") or die( header("HTTP/1.0 403 Forbidden") ); die("<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\"><html><head><title>403 Forbidden</title></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></body></html>"); exit(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>##TITLE##</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Custom styles for this template -->
  <link href="assets/css/offcanvas.css" rel="stylesheet">
  <link rel="icon" href="##FAVICON##">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 400px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    iframe {
      border: 1px solid transparent;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark text-white">
      <h3>##LOGONAME##</h3>
      <button class="navbar-toggler" type="button" style="cursor: pointer;" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          ##MENU##
        </ul>
      </div>
    </nav>
    

    <!--<main role="main" class="container">-->
