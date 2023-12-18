const navItems = document.querySelector('#nav_items');
const openNavBtn = document.querySelector('#open_nav_btn');
const closeNavBtn = document.querySelector('#close_nav_btn');

const container = document.querySelector('.container');

openNavBtn.addEventListener('click', ()=>{
    navItems.style.display = 'flex';
    openNavBtn.style.display = 'none';
    closeNavBtn.style.display = 'inline-block';
})

closeNavBtn.addEventListener('click', ()=>{
    navItems.style.display = 'none';
    openNavBtn.style.display = 'inline-block';
    closeNavBtn.style.display = 'none';
})


function updateButtonVisibility() {
    if (window.innerWidth > 1024) {
        openNavBtn.style.display = 'none';
        navItems.style.display = 'flex';
        closeNavBtn.style.display = 'none';
 
    }else{
        if(openNavBtn.style.display == "none" && 
           closeNavBtn.style.display == "none"){
            openNavBtn.style.display = "inline-block"; 
            navItems.style.display = 'none';
        }
    }
}
function handleBodyClick(event) {
    if (document.getElementById('open_nav_btn').contains(event.target)) {
        return false;
    }
    if (document.getElementById('close_nav_btn').contains(event.target)) {
        return false;
    }
    if (!document.getElementById('nav_items').contains(event.target)) {
        navItems.style.display = 'none';
        openNavBtn.style.display = 'inline-block';
        closeNavBtn.style.display = 'none';
    }
}

// document.body.addEventListener('click', handleBodyClick);


window.addEventListener('resize', function() {
    updateButtonVisibility();
    if (window.innerWidth <= 1022) {
        document.body.addEventListener('click', handleBodyClick);
    } else {
       document.body.removeEventListener('click', handleBodyClick);
    }
});
  

  