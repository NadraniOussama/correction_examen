# commun point 
## index
* require (""); or require_once()
* try 
* session_start()
* $action = (isset($_GET['action']))? $_GET['acttion'] : "action d'acceuil";
* // if login is needed test:  
	if(isset($_SESSION['login'])) $action ='loginAction';
* // if mvc2 check if controller file exist 
  * $module = (isset($_GET['module']))? $_GET['module'] : "module par defaut";
  * $module = ucFirst('$module')."Control.php";
* if(is_callable($action)) $action();
* catch
## module
* 
## views
## controller

***

# tentative de resoudre l'examen
2017-2018 et 2018-2019

# correction_examen
tp7-mvc est un example de mvc 1 
tp9-mvc est up example de mvc 2
