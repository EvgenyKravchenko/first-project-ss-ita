<?php
header('Content-Type: text/html; charset=utf-8');
	require_once "main_controller.php";
  require_once "search_controller.php";


	$data = $_REQUEST['data'];
	$action = $_REQUEST['action'];




	switch ($action) {
    case 'search':
      $controller = new SearchController($data); // $data - lastname for search
      break;
    
    default: {
      $controller = new MainController($data); // $data - json string - Card
      echo $controller->createCard();
      break;
    }

  }


?>