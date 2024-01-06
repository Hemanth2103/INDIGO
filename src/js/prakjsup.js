// Get the button element
var button = document.getElementById("button");

// Get the scoreboard element
var scoreboard = document.getElementById("count");

// Set the user's name
var userName = prompt("Enter your name:");

// Set the initial time limit
var timeLimit = 30;

// Set the initial difficulty level
var difficultyLevel = "level1";

// Start the game
startGame();

function startGame() {
  // Reset the button's position
  button.style.top = "100px";
  button.style.left = "100px";

  // Start the timer
  var timer = setInterval(function() {
    timeLimit--;

    // Update the scoreboard
    scoreboard.innerHTML = "Time remaining: " + timeLimit + " seconds";

    // If the time limit has expired, end the game
    if (timeLimit === 0) {
      endGame();
    }
  }, 1000);

  // Make the button difficult to click
  moveButton();
  changeButtonColor();

  // Add an event listener to the button
  button.addEventListener("click", function() {
    // Stop the timer
    clearInterval(timer);

    // Display an alert box stating "You're the winner!"
    alert("You got a point !");

    // Update the user's score
    var score = timeLimit * 100;
    localStorage.setItem(userName + " score", score);

    // Display the user's score
    scoreboard.innerHTML = "Your score: " + score;
  });
}

function moveButton() {
  button.style.top = Math.random() * window.innerHeight + "px";
  button.style.left = Math.random() * window.innerWidth + "px";

  // If the difficulty level is set to medium or hard, make the button move faster
  if (difficultyLevel === "level2") {
    setInterval(moveButton, 500);
  } else if (difficultyLevel === "level3") {
    setInterval(moveButton, 250);
  }
}

function changeButtonColor() {
  button.style.backgroundColor = document.body.style.backgroundColor;

  // If the difficulty level is set to medium or hard, make the button change color faster
  if (difficultyLevel === "medium") {
    setInterval(changeButtonColor, 500);
  } else if (difficultyLevel === "hard") {
    setInterval(changeButtonColor, 250);
  }
}

function endGame() {
  // Remove the button
  button.remove();

  // Display a message stating "Game over!"
  scoreboard.innerHTML = "Game over!";
}