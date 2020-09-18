function getStudentsWithAjax(url, idZone){

//*******************  afficher une Annimation *********************//

document.getElementById(idZone).innerHTML=  "<img src = 'Public/images/ajax-loader.gif' />";     


//**************** Cr�er un objet XMLHttpRequest  *******************//
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
//*************************** Attendre la r�ception de la r�ponse,
//*************************** quand elle est pr�te (readyState = 4) 
//*************************** et sans erreurs (status = 200), 
//*************************** on consomme le texte re�u (responseText)
 
    xhr.onreadystatechange  = function() { 
         if(xhr.readyState  == 4)  {
              if(xhr.status  == 200) 
                 document.getElementById(idZone).innerHTML=  xhr.responseText;
              else 
                 alert ("Error code " + xhr.status);
         }

    } 
   xhr.open( "GET", url ,  true);
   xhr.send(null);

//************************* avec post, on devrait �crire: **************************************//***//

//***		xhr.open("POST", url,  true);                                       //***//

//***           xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");    //***//

//***  		xhr.send("code=" + document.myForm.filiere.value);                                                         //***//

//******************************************************************************************//***//

 
} 

