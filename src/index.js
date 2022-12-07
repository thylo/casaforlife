import "./assets/scss/main.scss";

let last_known_scroll_position = 0;
let ticking = false;

const menu = document.getElementById("js-menu-scroll"),
  toggle = document.getElementById("js-menu-toggle"),
  close = document.getElementById("js-menu-close"),
  sections = [...document.querySelectorAll("section")];
if (toggle && close) {
  toggle.addEventListener("click", (e) => {
    console.log("click");
    e.preventDefault();
    e.stopPropagation();
    menu.classList.add("visible");
  });

  close.addEventListener("click", (e) => {
    console.log("click");
    e.preventDefault();
    e.stopPropagation();
    menu.classList.remove("visible");
  });
}

//-------- Valentin code ----------//

// When the user scrolls down 80px from the top of the document, resize the navbar's the logo's size
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    // document.querySelector("navbar").style.padding = "30px 10px";
    document.querySelector(".js-menu__logo--desk").style.height = "70px";
  } else {
    // document.querySelector("navbar").style.padding = "80px 10px";
    document.querySelector(".js-menu__logo--desk").style.height = "200px";
  }
}
