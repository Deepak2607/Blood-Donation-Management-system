var myIndex = 0;

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000);    
}


function ha(elm)
{
window.location = "find_blood.php?bloodgroup="+elm.value;
}


window.onscroll = function() {myFunction()};

function myFunction() {
	var y=document.getElementById("nav");
    if (document.body.scrollTop > 150||document.documentElement.scrollTop > 150) {
    y.style.position="fixed";
	y.style.top=0;
	y.style.left=0;
	y.style.backgroundColor="rgba(82, 127, 99,1.0)";
    }else{
	y.style.position="absolute";
	y.style.top="150px";
	y.style.left=0;
	y.style.backgroundColor="rgba(82, 127, 99,0.5)";
    }
}


function myMap() {
    var mapOptions = {
        center: new google.maps.LatLng(26.248468, 78.174592),
        zoom: 16,
        mapTypeId: google.maps.MapTypeId.HYBRID
    }
var map = new google.maps.Map(document.getElementById("map"), mapOptions);
}





function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?q="+str,true);
  xmlhttp.send();
}