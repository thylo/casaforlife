import lightGallery from "lightgallery";
import "./assets/scss/main.scss";

let last_known_scroll_position = 0;
let ticking = false;

const menu = document.getElementById("js-menu-scroll"),
  toggle = document.getElementById("js-menu-toggle"),
  close = document.getElementById("js-menu-close"),
  sections = [...document.querySelectorAll("section")];
if (toggle && close) {
  toggle.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    menu.classList.add("visible");
    close.classList.add("c-scroll-menu__close--visible");
    toggle.classList.add("c-menu-toggle--visible");
  });

  close.addEventListener("click", (e) => {
    e.preventDefault();
    e.stopPropagation();
    menu.classList.remove("visible");
    close.classList.remove("c-scroll-menu__close--visible");
    toggle.classList.remove("c-menu-toggle--visible");
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

// lightgallery

document.querySelectorAll(".js-gallery").forEach((element) => {
  lightGallery(element, {
    speed: 500,
    // ... other settings
  });
});

// maplibre script
var mapContainer = document.querySelector(".js-map");
import maplibregl from "maplibre-gl";

if(mapContainer) {
  var map = new maplibregl.Map({
    container: mapContainer,
    style:
    'https://api.maptiler.com/maps/hybrid/style.json?key=zGOAhHI04onwS7U5LJKD',
    // 'https://api.maptiler.com/maps/streets/style.json?key=get_your_own_OpIi9ZULNHzrESv6T2vL',
    center: [-15.31769, 13.01526],
    
    zoom: 7.75,
    scrollZoom: false
    });
    map.addControl(new maplibregl.NavigationControl()
  );

  let bounds = new maplibregl.LngLatBounds();


  function createMarker(longitude, latitude, title, url, date) {
    let marker = new maplibregl.Marker()
    .setLngLat([longitude, latitude])
    .addTo(map);

    let popup = new maplibregl.Popup({ 
      offset: 25,
      closeButton: false,
      className: 'c-map-popup'
    })
    .setHTML(
      `
      <a class="c-map-popup__link" href="`+ url +`" target="_blank" class="c-map-popup">`+ title +`</a>
      <p class="c-map-popup__date">` + date +`</p>
      `
    );
    marker.setPopup(popup);
      // pop up show when you hover it
    marker.getElement().classList.add('c-map-marker');
  }

  let projects = document.querySelectorAll(".js-projectcard");

  projects.forEach((project) => {
    let longitude = project.getAttribute("data-long");
    let latitude = project.getAttribute("data-lat");
    let title = project.getAttribute("data-name");
    let url = project.getAttribute("data-link");
    let date = project.getAttribute("data-date");
    createMarker(longitude, latitude, title, url, date);
    bounds.extend([longitude, latitude]);
  });
    map.fitBounds(bounds, { padding: 70 });

}

