REMINDER : mvc is always better use mvc pls
haut.php
	|->php 
		|->create_function aficherDate($language) return string :
			|->$month["lang"] = array() // array of months in this language
			|->$jour["lang"]  = array() // array of days of the week in this language
			|-> getdate return key array
			|->return string
		|->intantiate css from cookies
	|-> html : <!doctype html> <html>
		|->header
			|->title :<title> </title>
			|->meta : <meta charset="utf-8">
			|->css links: <link rel="stylesheet" type="text/css" href="css">
		|->body
			|->top : <div class="top">
				|->img :<img src="img.png">
				|->title 
				|->Date =php= (if nessessary) :getDate
			|-> nav : <div class="nav"> <a href=""></a><a href=""></a>
				 or
				  <table class="maintab"> <tr><td class="left"><h4><a></a></h4></td>
					<td>
			|->open main div
		|->footer (none)
		
bas.php
	|->html
		|-> close table if open : </td></tr</table>
		|->bas :<div class="bas">&copy; **footer** </div>
		|->end body & startfooter 
			|->script :<footer> <script> type="text/javascript" src".js"></script></footer> </html>


page.php
**for regular page there are 3 use cases
	|->use case 1 (show information)
		|->include "haut.php"
		|-> html
		|->include "bas.php"
	|->use case 2 (get data from database, cookies, session,server)
		|->php
			|->get data into variable 
				|->**SESSION** :session_start();if(isset($_SESSION['']);
				|->**DATABASE** :use defined function that of what you need in a separated page (data.php or model.php or manager.php)
				|->**COOKIES**  :$d = $_COOKIE[''];
			|->use html to show results
				|->**loop** : 
					     OR
					    
	|->use case 3 (add data to database, cookies, session )
		|-> use form to get data from client
		|-> redirect to manager page 
		|-> add to location [manager page]
			|->**SESSION**  :session_start();$_SESSION['']=; //EX diconnect // session_start(); session_destroy();
			|->**DATABASE** :use defined function that of what you need in a separated page (data.php or model.php or manager.php)
			|->**COOKIES**  :setcookie("lang",$_GET["langue"], time()+ 3600*24*10)
		|->redirect to another page depending on whats needed
