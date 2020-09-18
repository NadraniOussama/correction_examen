function ExecAjax(){


//*******************  afficher une Annimation  ********************************//***//

document.getElementById("ZoneAjax").innerHTML=  "<img src = 'ajax-loader.gif' />";      //***//

//****************************************************************************//***//


/**************** Créer un objet XMLHttpRequest /********************************
/********************************************************************************
*********************************************************************************/
 var xhr; 
    try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
    catch (e) 
    {
        try {   xhr = new ActiveXObject('Microsoft.XMLHTTP');    }
        catch (e2) 
        {
          try {  xhr = new XMLHttpRequest();      }
          catch (e3) {  xhr = false;   }
        }
     }




//*************************** Attendre la réception de la réponse,
//*************************** quand elle est prête (readyState = 4) 
//*************************** et sans erreurs (status = 200), 
//*************************** on consomme le texte reçu (responseText)
//***************************



 
    xhr.onreadystatechange  = function()

    { 
         if(xhr.readyState  == 4)
         {
              if(xhr.status  == 200)
 
                 document.getElementById("ZoneAjax").innerHTML=  xhr.responseText;
              else 
                 alert ("Error code " + xhr.status);
         }

    } 


   xhr.open( "GET", "liste.php?filiere=" + document.myForm.filiere.value,  true); 

   xhr.send(null);

//************************* avec post, on devrait écrire: **************************************//***//

//***		xhr.open("POST", "liste.php?filiere",  true);                                       //***//

//***           xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");    //***//

//***  		xhr.send("code=" + document.myForm.filiere.value);                                                         //***//

//******************************************************************************************//***//

 
} 

