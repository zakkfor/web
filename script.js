document.addEventListener("DOMContentLoaded", function() {
  let darkTheme = document.getElementById("dark-theme");
  let lightTheme = document.getElementById("light-theme");
  let normalTheme = document.getElementById("normal-theme");

  darkTheme.addEventListener("click", function() {
    document.body.style.backgroundColor = "#333";
    document.body.style.color = "white";
  });

  lightTheme.addEventListener("click", function() {
    document.body.style.backgroundColor = "white";
    document.body.style.color = "#333";
  });

  normalTheme.addEventListener("click", function() {
    document.body.style.backgroundColor = "#808080";
    document.body.style.color = "black";
  });
  
});
 

function scrollToTop() {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
}
