var cakesdropdown = document.getElementById('cakes-dropdown');
var dropdownMenu = document.querySelector('.dropdown-menu');
var navbar = document.getElementsByTagName('header')[0];

cakesdropdown.addEventListener('click', function (event) {
  dropdownMenu.style.display = 'flex';
  event.stopPropagation();
});

document.addEventListener('click', function (event) {
  dropdownMenu.style.display = 'none';
  event.stopPropagation();
});




document.addEventListener('scroll', function (event) {
  const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  const viewportHeight = window.innerHeight;

  if (scrollPosition > viewportHeight) {
    navbar.style.cssText = 'background-color: rgba(105, 48, 50, 0.7);';
  } else {
    navbar.style.cssText = 'background-color: transparent;';
  }
});

var quantityButtons = document.querySelectorAll(".slider button");
quantityButtons.forEach(function(button) {
  button.addEventListener("click", function() {
    var quantitySpan = this.parentElement.querySelector("span");
    var currentQuantity = parseInt(quantitySpan.textContent);

    if (this.textContent === "+") {
      quantitySpan.textContent = currentQuantity + 1;
    } else if (this.textContent === "-" && currentQuantity > 1) {
      quantitySpan.textContent = currentQuantity - 1;
    }
  });
});








