function openNav() {
    document.getElementById("mySidenav").style.left = "0%";
}

function closeNav() {
    document.getElementById("mySidenav").style.left = "-70%";
}

$(document).ready(function() {
	var img = $(".tint-bg").attr('bg-img');
	$(".tint-bg").css("background-image",'url("images/'+img+'")');
});