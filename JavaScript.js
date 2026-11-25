//constant variables that targets the html classes/elements.
const menuButton = document.querySelector(".menuButton");
const mobileMenu = document.querySelector(".mobileMenu");
const closeMenuButton = document.querySelector(".closeMenuButton");

//when a user clicks on the hamburger-icon(the button with class .menuButton), the code inside the curly brackets is run.
menuButton.addEventListener("click", () => {
  //classList.add adds the CSS class to the html class so CSS visibility: visible, the menu is shown.
  mobileMenu.classList.add("active");
});

//when a user cliks on the x-icon, the code inside the curly brackets is ran.
closeMenuButton.addEventListener("click", () => {
  //classList.remove removes the CSS class from the html class so CSS visibility is hidden again.
  mobileMenu.classList.remove("active");
});

//constant variable that targets the html class to later be able to change the heading when a user is scrolling down.
const scrollFunction = document.querySelector(".siteHeaders");

//changable variable that will save the scroll position and later check if the user if scrolling up so I can target a css class and change background.
let upScroll = window.scrollY;

//function that see how far a user has scrolled.
function updateHeader() {
  //constant variable that will save where the current scroll is.
  const currentScroll = window.scrollY;

  //if the user has scrolled 80px or more the code inside is run.
  if (window.scrollY > 80) {
    //adds the css class that make the header smaller through width and font-size.
    scrollFunction.classList.add("is-scrolled");
    //if the user scrolls up, it will run the code inside making the background of the header white because upScroll is less than currentScroll.
    if (currentScroll < upScroll) {
      //adds the css class that will make the background white of the header.
      scrollFunction.classList.add("scrolling-up");
      //if currentScroll is more than upScroll/the user scrolls down, the white background is not shown.
    } else if (currentScroll > upScroll) {
      //removes the css class so the white background disappears.
      scrollFunction.classList.remove("scrolling-up");
    }
  } else {
    //removes the said classes when the user scrolls up/below 80px so the header goes back to its former glory.
    scrollFunction.classList.remove("is-scrolled");
    scrollFunction.classList.remove("scrolling-up");
  }
  //upScroll become the current scroll so the position is remembered when/if the function should go again.
  upScroll = currentScroll;
}

//whenever the user scrolls the function updateHeader always run.
window.addEventListener("scroll", updateHeader);

//when the page is loaded for the first time I call on the function so see the correct state,
// for example is the page is at the top the logo remains as it should, and if the page reloads when a user has scrolled down past the header it gets the right styling.
updateHeader();

//Shoe change color, a sort of configurator.
//constant variable that targets the html id.
const selectedShoe = document.querySelector("#selectedShoe");

//constant variable that targets the html class.
const shoeColorButtons = document.querySelectorAll(
  ".productChoiceColor button",
);

//when the user clicks a color/button the foreach loop runs and goes through the buttons.
shoeColorButtons.forEach((button) => {
  //adds a eventlistnener to when the user clicks one the the three buttons the code iside run.
  button.addEventListener("click", () => {
    //constant variable that sets the value where the selected choice is drawn from data-image in html where the img path is stored.
    const newImage = button.dataset.image;

    //changes the img to a new img/shoe.
    selectedShoe.src = newImage;

    //update the description if the img is not shown/the alt in html.
    selectedShoe.alt = button.dataset.alt;

    //Here we remove the active state by classlist remove and aria-pressed to false that both targets the html, and more row efficient with a foreach.
    shoeColorButtons.forEach((colorButton) => {
      colorButton.classList.remove("active");

      colorButton.setAttribute("aria-pressed", "false");
    });

    //add the active class from html and the aria-pressed to true so the one that the user selected is selected and presented.
    button.classList.add("active");
    button.setAttribute("aria-pressed", "true");
  });
});
