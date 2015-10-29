$(document).ready(function(){
	$(".sideBarBtn").mouseover(function() { 
		$(this).find("span").show();
	 }).mouseout(function() { 
		console.log("adios")
		$(this).find("span").hide();
	 });
})