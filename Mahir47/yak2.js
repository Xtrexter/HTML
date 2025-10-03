let score = 0;
const target = document.getElementById('target');
const scoreDisplay = document.getElementById('scoreDisplay');

function moveTarget() {
    const gameArea = document.getElementById('gameArea');
    const areaWidth = gameArea.clientWidth - target.clientWidth;
    const areaHeight = gameArea.clientHeight - target.clientHeight;

    const randomX = Math.floor(Math.random() * areaWidth);
    const randomY = Math.floor(Math.random() * areaHeight);

    target.style.left = randomX + 'px';
    target.style.top = randomY + 'px';
}


function hitTarget() {
    score++;
    scoreDisplay.innerText = `Skor: ${score}`;
    moveTarget();
}

moveTarget();