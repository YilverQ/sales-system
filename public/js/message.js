const crossMessage = document.getElementById('cross-message');
const message = document.querySelector('.message');

if (crossMessage) {
	crossMessage.addEventListener('click', function (){
		message.classList.add('hidden');
	});
}