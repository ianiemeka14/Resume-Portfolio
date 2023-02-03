window.onscroll = function(){
  
    scrollFunction()
};

var navbar = document.getElementById("navbar");


function scrollFunction(){
    if(document.body.scrollTop > 30 || document.documentElement.scrollTop > 30){
        document.getElementById("navbar").style.padding = "10px 10%";      
    }
    else{
        document.getElementById("navbar").style.padding = "40px 10%";
    }
}

