function getStudentWithAjax(url, idZone){
  alert("selecting new bach of student: " + idZone);
  try{
    document.getElementById(idZone).innerHTML = "<img src='public/images/ajax-loader.gif'>";
  }catch (e0) {  alert("error");  }
  var xhr;
try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
catch (e1) 
{
    try {   xhr = new ActiveXObject('Microsoft.XMLHTTP');    }
    catch (e2) 
    {
      try {  xhr = new XMLHttpRequest();      }
      catch (e3) {  xhr = false;    }
    }
 }

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

}

// just test function to del
function alertTest(hello, zoneAjax){
  alert(hello + " " +zoneAjax);
}

