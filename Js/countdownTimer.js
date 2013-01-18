function countdownTimer() {
	var now = new Date();
	var timeDiff = window.Hotpresta.getTime() - now.getTime();
	if (timeDiff <= 0) {
        clearTimeout(timer);
		window.location = "file:///E:/xampp/htdocs/ComingSoon-Hot-presta/time_out_page.html"
		// Run any code needed for countdown completion here
    }
	var seconds = Math.floor(timeDiff / 1000);
	var minutes = Math.floor(seconds / 60);
	var hours = Math.floor(minutes / 60);
	var days = Math.floor(hours / 24);
	hours %= 24;
    minutes %= 60;
    seconds %= 60;
	document.getElementById("daysBox").innerHTML = days;
	document.getElementById("hoursBox").innerHTML = hours;
	document.getElementById("minsBox").innerHTML = minutes;
	document.getElementById("secsBox").innerHTML = seconds;
	var timer = setTimeout('countdownTimer()',1000);
}




