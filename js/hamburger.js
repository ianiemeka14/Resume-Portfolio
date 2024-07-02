const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav_menu");
const navLink = document.querySelectorAll(".nav_link");


hamburger.addEventListener("click", openMenu);
navLink.forEach(n => n.addEventListener('click', closeMenu));


function openMenu(){
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}


function closeMenu(){
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}


document.onclick = function(e){
    if(e.target != navMenu && e.target.parentNode !==  hamburger){
        closeMenu();
    }

}


