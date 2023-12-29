function sendmail() {
	let parms = {
		name: document.getElementById("name").value,
		email: document.getElementById("email").value,
		subject: document.getElementById("subject").value,
		message: document.getElementById("message").vlaue,
	};
	emailjs
		.send("service_egktguy", "template_s4l9zsq", parms)
		.then(alert("Email Sent!!"));
}
