'use strict';
console.log(sessionUserName, sessionIsAuthor, sessionIsAdmin, sessionIsUser);
if (sessionUserName) {
	if(sessionIsAdmin){
	document.querySelector(".signup").classList.add("hidden");
	document.querySelector(".login").classList.add("hidden");
	document.querySelector(".author").classList.add("hidden");
	document.querySelector(".status").textContent = `Welcome, ${sessionUserName} (${sessionIsAuthor? 'Author' : sessionIsAdmin? 'Admin' : 'User'})`; 
	document.querySelector(".status").classList.remove("hidden");
	document.querySelector(".logout").classList.remove("hidden");
	}
	else if(sessionIsAuthor) {
		document.querySelector(".signup").classList.add("hidden");
		document.querySelector(".admin").classList.add("hidden");
		document.querySelector(".login").classList.add("hidden");
		document.querySelector(".status").textContent = `Welcome, ${sessionUserName} (${sessionIsAuthor? 'Author' : sessionIsAdmin? 'Admin' : 'User'})`; 
		document.querySelector(".status").classList.remove("hidden");
		document.querySelector(".logout").classList.remove("hidden");

	}
	else 
	{
    	document.querySelector(".signup").classList.add("hidden");
		document.querySelector(".admin").classList.add("hidden");
		document.querySelector(".author").classList.add("hidden");
		document.querySelector(".login").classList.add("hidden");
		document.querySelector(".status").textContent = `Welcome, ${sessionUserName} (${sessionIsAuthor? 'Author' : sessionIsAdmin? 'Admin' : 'User'})`; 
		document.querySelector(".status").classList.remove("hidden");
		document.querySelector(".logout").classList.remove("hidden");
	}
} else {
	document.querySelector(".signup").classList.remove("hidden");
	document.querySelector(".admin").classList.add("hidden");
	document.querySelector(".author").classList.add("hidden");
	
	document.querySelector(".login").classList.remove("hidden");
	document.querySelector(".status").textContent = '';
	document.querySelector(".status").classList.add("hidden");
	document.querySelector(".logout").classList.add("hidden");
}