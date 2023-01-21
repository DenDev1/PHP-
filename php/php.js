
let header = document.querySelector('header');
let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');



window.addEventListener('scroll', () =>{
    header.classList.toggle('active', window.scrollY > 0);
});

menu.onclick =() =>{
    navbar.classList.toggle('active');

}
window.onscroll =() =>{
    navbar.classList.remove('active');

}







const allStars = document.querySelectorAll('.star');


allStars.forEach( (star,i) =>{
    star.onclick = function(){
        let current_star_level = i + 1;
        

        allStars.forEach( (star,j)  =>{
            if (current_star_level >= j + 1){
                star.innerHTML = '&#9733';
            }else{
                star.innerHTML = '&#9734';
            }
            
        })
    }
})



                          function loadEvent(){
	                  alert("Welcome to JuiceDrink Website!");
                          }