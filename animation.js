// JavaScript Document
const hamburger = document.querySelector(".nav-icon2");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");
const texts=document.querySelectorAll(".text");

hamburger.addEventListener("click", () => {	
  hamburger.classList.toggle("open");	
  navLinks.classList.toggle("open");
  links.forEach(link => {
    link.classList.toggle("fade");
	   
  });
});

