const eye = document.querySelector('.eyeIcon');
const inputPassword = document.getElementById('password');

eye.addEventListener('click', function(){
    if (inputPassword.type == 'password'){
    	inputPassword.type = 'text';
    }else {
    	inputPassword.type = 'password';
    }
	eye.classList.toggle('fi-rr-eye');
	eye.classList.toggle('fi-rr-eye-crossed');
})