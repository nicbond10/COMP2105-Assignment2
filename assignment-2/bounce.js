// Get the button that will start the animation.
let beginButton = document.getElementById('beginButton');

// Function that will start the animation
function startBounce() {
    // Get the ball, ball-conatainer, and ball-shadow.
    let ball = document.getElementById('ball');
    let ballContainer = document.getElementById('ball-container');
    let ballShadow = document.getElementById('ball-shadow');

    // On button click the html elements for each part of the animation
    // will have their classes added.
    ball.className = 'ball';
    ballContainer.className = 'ball-container';
    ballShadow.className = 'ball-shadow';
    beginButton.className = '';
}

// When the beginButton is clicked trigger the animation.
beginButton.addEventListener("click", startBounce);