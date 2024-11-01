const pomodoroTime = document.querySelector('.pomodoro__time');
const pomodoroState = document.querySelector('.pomodoro__state');
const modes = document.querySelectorAll('.mode');
const getStartedMessage = document.querySelector('.get-started');
const sound = document.querySelector('audio');
let countdown;

modes.forEach(mode => mode.addEventListener('click', switchModes));

function switchModes(e) {
	const secondsForMode = parseInt(e.target.dataset.time, 10);
	modes.forEach(mode => mode.classList.remove('active'));
	e.target.classList.add('active');
	getStartedMessage.style.display = 'none';
	timer(secondsForMode);
}

function timer(seconds) {
	clearInterval(countdown);
	const start = Date.now();
	const finish = start + seconds * 1000;
	displayTimeLeft(seconds);

	countdown = setInterval(() => {
		const secondsLeft = Math.round((finish - Date.now()) / 1000);
		if (secondsLeft <= 0) {
			clearInterval(countdown);
			document.title = 'Pausa!';
			sound.currentTime = 5;
			sound.play();
		}
		displayTimeLeft(secondsLeft);
	}, 1000);
}

function displayTimeLeft(seconds) {
	const minutes = Math.floor(seconds / 60);
	const secondsRemaining = seconds % 60;
	const displayTime = `${minutes}:${secondsRemaining < 10 ? '0' : ''}${secondsRemaining}`;
	document.title = displayTime;
	pomodoroTime.textContent = displayTime;
}

