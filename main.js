$(document).ready(function(){
	$("#logBtn").on('click', function(event){
		event.preventDefault(); //don't change, button submits immediately otherwise

		var username = $("#usname").val();
		var password = $("#pass").val();

		var urlInfo = "username="+ username + "&password=" + password;
		var XMLhttp = new XMLHttpRequest();

		XMLhttp.onreadystatechange = function(){
			if (this.readystatechange == 4)
				if(this.status==200){
					//get homepage for user
					var info = "cheapo.php?mail=true";
					$.ajax(link,{
						method: 'GET'
					}).done(function(mails){
						$("#main").html(mails); //changes the main area to load new html 
					})
				}
		}
	});
	XMLhttp.open("POST", "cheapo.php", true);
    XMLhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    XMLhttp.send(urlInfo);
});