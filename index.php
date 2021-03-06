<?php
    session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" />

    <title>Ticketinator</title>
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">
    		<img src="img/file-notes-document.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    		Ticketinator
  		</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
    		<ul class="navbar-nav mr-auto">
      			<li class="nav-item active">
        			<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      			</li>

      			<li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Schnellfunktionen
        				</a>
        			<div class="dropdown-menu bg-dark text-white" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item text-primary" href="?section=mine">Meine Tickets</a>
          				<a class="dropdown-item text-primary" href="?section=all">Offene Tickets</a>
          				<div class="dropdown-divider"></div>
          				<a class="dropdown-item text-primary" href="?section=add">Ticket hinzufügen</a>
        			</div>
      			</li>
      			<li class="nav-item">
        			<a class="nav-link disabled" href="#abmelden" tabindex="-1" aria-disabled="true">Abmelden</a>
      			</li>
				<li class="nav-item">
        			<a class="nav-link" href="?section=settings">Einstellungen</a>
      			</li>
    		</ul>
    		<form class="form-inline my-2 my-lg-0">
      			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      			<button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    		</form>
  		</div>
	</nav>
	<div class="container-fluid" id="body">

	<div class="row">
  		<div class="col-2 bg-dark nav-side">
		    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="" role="tab" aria-controls="v-pills-home" aria-selected="true">Übersicht</a>
		      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="index.php/?section=mine" role="tab" aria-controls="v-pills-profile" aria-selected="false">Meine Tickets</a>
		      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="index.php/?section=all" role="tab" aria-controls="v-pills-messages" aria-selected="false">Alle Tickets</a>
		      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Meine Projekte</a>
		    </div>

			<div style="height:10vh;">

			</div>
            <?php
            require "inc/todo.inc.php"?>
			<!--<div class="card bg-dark " id="TODOs">
				<div class="card-header" style="color: white;">
				wichtige TODO's
				</div>
				<ul class="list-group list-group-flush bg-secondary" id="TODOlist">
					<li class="list-group-item bg-secondary">Cras justo odio</li>
					<li class="list-group-item bg-secondary">Dapibus ac facilisis in</li>
					<li class="list-group-item bg-secondary">Vestibulum at eros</li>
				</ul>
			</div>-->
		</div>


		<div class="col-10 content-sec" id="content">
			<!--
			*
			*
			*
			Hier kommt der gesamte Content her (also eingebundene PHP files)
			*
			*
			*
			-->
            <?php
            if(isset($_GET['section'])) {
                switch($_GET['section']) {
                    case"overview":
                        include "inc\overview.inc.php";
                        break;
                    case"all":
                        include"inc\showAllTickets.inc.php";
                        break;
                    case"mine":
                        include"inc\showMyTickets.inc.php";
                        break;
                    case"settings":
                        include"inc\settings.inc.php";
                        break;
                    case"add":
                        include"inc/neuesTicket.inc.php";
                        break;
                    case"search":
                        include"inc/search.inc.php";
                        break;
                    case"ticket":
                        include"inc/ticketview.php";
                        break;
                    default:// Wenn ungültige Section, Übersicht zeigen
                        include"inc\overview.inc.php";
                        break;
                }
            } else{
                //wenn section nicht angegeben wurde//wird die Übersicht angezeigt
                include"inc\overview.inc.php";
            }
            ?>


        </div>
    </div>
    </div>




      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

}