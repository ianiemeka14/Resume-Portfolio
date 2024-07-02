window.onscroll = function(){
  
    scrollFunction()
};

var navbar = document.querySelector(".navbar");


function scrollFunction(){
    if(document.body.scrollTop > 30 || document.documentElement.scrollTop > 30){
        navbar.style.padding = "20px 10%";      
    }
    else{
        navbar.style.padding = "40px 10%";
    }
}

