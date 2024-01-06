var button = document.getElementById("button");
var bodyc = document.getElementById("bodycolor");
var timeLimit = 60;

document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("start").addEventListener("click", () => {
      const element = document.getElementById("starts");
      if (element.classList.contains("block")) {
        element.classList.remove("block");
        element.classList.add("hidden");
      } else {
        element.classList.remove("hidden");
        element.classList.add("block");
      }
      const element1 = document.getElementById("button");
      if (element1.classList.contains("block")) {
        element1.classList.remove("block");
        element1.classList.add("hidden");
      } else {
        element1.classList.remove("hidden");
        element1.classList.add("block");
      }
    });
  });


button.style.top = "100px";
button.style.left = "100px";
var id = "";
var level = document.querySelectorAll('button').forEach(occurence => {
  occurence.addEventListener('click', function() {
      id = occurence.getAttribute('id');
    console.log('A button with ID ' + id + ' was clicked!');
  } );
});

var timer = document.getElementById("time");



setInterval(function() {
    timeLimit--;
    if (timeLimit === 0) {
      endGame();
    }
  var randomColor = Math.floor(Math.random()*16777215).toString(16);
  button.style.top = Math.random() * window.innerHeight + "px";
  button.style.left = Math.random() * window.innerWidth + "px";
  button.style.backgroundColor = '#' + randomColor;
}, 1000);

button.addEventListener("click", function() {
  alert("You got a point !");
});

var count = 0;
var button = document.getElementById("button");
var countDisplay = document.getElementById("count");
button.addEventListener("click", function() {
   count++;
   countDisplay.innerHTML = count;
});

function endGame() {
  button.remove();
  alert("Game over!");
}