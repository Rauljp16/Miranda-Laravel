// Menu desplegable

const menuBurguerSvg = document.getElementById("menuBurguerSvg");
const menuBurguer = document.getElementById("menuBurguer");

menuBurguerSvg.addEventListener("click", () => {
  menuBurguer.classList.toggle("menuDown");
  if (menuBurguer.className != "menuDesktop") {
    menuBurguerSvg.src = "./svg/close.svg";
    menuBurguerSvg.style.transform = "rotate(" + 180 + "deg)";
  } else {
    menuBurguerSvg.src = "./svg/menuBurguer.svg";
    menuBurguerSvg.style.transform = "rotate(" + -180 + "deg)";
  }
});

//header en desktop

const divHeaderDesktop = document.querySelector("#divHeaderDesktop");
const hoverZone = document.querySelector("#hoverZone");
let scrollPercentage;

const update = () => {
  scrollPercentage =
    (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
  if (scrollPercentage < 0.5 || scrollPercentage > 95) {
    divHeaderDesktop.style.transform = "translateY(0%)";
  } else {
    divHeaderDesktop.style.transform = "translateY(-150px)";
  }
};

const hoverZoneEnter = () => {
  const scrollPercentage =
    (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
  if (scrollPercentage > 0.5 && scrollPercentage < 95) {
    divHeaderDesktop.style.transform = "translateY(0%)";
  }
};

const hoverZoneLeave = () => {
  const scrollPercentage =
    (window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100;
  if (scrollPercentage > 0.5 && scrollPercentage < 95) {
    divHeaderDesktop.style.transform = "translateY(-150px)";
  }
};

const checkSize = () => {
  if (window.innerWidth >= 1000) {
    divHeaderDesktop.classList.add("divHeaderDesktop");

    window.addEventListener("scroll", update);
    hoverZone.addEventListener("mouseenter", hoverZoneEnter);
    hoverZone.addEventListener("mouseleave", hoverZoneLeave);
  } else {
    divHeaderDesktop.classList.remove("divHeaderDesktop");
    window.removeEventListener("scroll", update);
    hoverZone.removeEventListener("mouseenter", hoverZoneEnter);
    hoverZone.removeEventListener("mouseleave", hoverZoneLeave);

    divHeaderDesktop.style.transform = "";
  }
};

window.addEventListener("load", checkSize);
window.addEventListener("resize", checkSize);
