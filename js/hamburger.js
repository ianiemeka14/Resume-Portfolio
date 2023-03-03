const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navlist');

function closeMenu(){
    hamburger.classList.remove('active');
    navMenu.classList.remove('active');
}


document.querySelectorAll('.nav_link').forEach(n => n.addEventListener('click', closeMenu));

document.onclick = function(e){
    if(e.target.id !== 'navlist' && e.target.id !== 'hamburger'){
        closeMenu();
    }

}

hamburger.onclick = function(){
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
}




