/*Variables globales*/
const password 	 = document.getElementById('password');
const email 	 = document.getElementById('email');
const sendButton = document.getElementById('sendButton');
const listInputs = [password, email];


/*Los campos inician en false*/
const inputsBoolean = {
	password : false,
	email : false
}


/*Expresión regular*/
const regular = {
	password: /^.{4,15}$/,
	email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/, 
}


/*Chequeamos que el input no esté vacio*/
const checkInput = (e) => {
	let input = e.currentTarget;
	if(regular[input.name].test(input.value)){
		input.classList.remove("input--error");
		inputsBoolean[input.name] = true;
	}else{
		input.classList.add("input--error")
	}
}


/*Buttom Disabled and enabled*/
const buttomChange = () =>{
	if (inputsBoolean.password && inputsBoolean.email) {
		sendButton.classList.remove("input--disabled");
		sendButton.disabled = false;
	}else{
		sendButton.classList.add("input--disabled");
		sendButton.disabled = true;
	}
}


/*Escuchamos los eventos de los inputs*/
listInputs.forEach((input) => {
	//console.log(input);
	input.addEventListener("keyup", checkInput);
	input.addEventListener("blur", checkInput);
	input.addEventListener("keyup", buttomChange);
	input.addEventListener("blur", buttomChange);
});

buttomChange();