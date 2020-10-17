var today = new Date();
var hourNow = today.getHours();
var greeting;

if (hourNow > 18) {
  greeting = 'Bienvenue!';
} else if (hourNow > 12) {
  greeting = 'Velkommen!';
} else if (hourNow > 0) {
  greeting = 'Welcome!'; 
} else {
  greeting = 'Hi there!';
}

document.write('<h1 class="hero-title">' + greeting + '</h1>');
