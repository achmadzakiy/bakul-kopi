// toggle class

const navbar = document.querySelector('.navbar-nav');

const hamburger = document.querySelector('#hamburger-menu');

hamburger.onclick = () =>{
    navbar.classList.toggle('active');
}

document.addEventListener('click', function(e){
    if(!hamburger.contains(e.target) && !navbar.contains(e.target)){
        navbar.classList.remove('active');
    }
});
