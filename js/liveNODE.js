window.onload=function(){
    init();
}

function getAjaxData()
{
    if(window.XMLHttpRequest)
    {
        xmlhttp=new XMLHttpRequest();
    }
    else
    {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

    
  xmlhttp.onreadystatechange=function ()
  {
    showAjaxData();
  };

  xmlhttp.open("GET","liveNODE_GET.php",true);
  xmlhttp.send();
}

 function showAjaxData()
 {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
 }