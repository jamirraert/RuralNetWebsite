const navItems = document.querySelector('#nav_items');
const openNavBtn = document.querySelector('#open_nav_btn');
const closeNavBtn = document.querySelector('#close_nav_btn');


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

window.addEventListener('resize', function() {
    // Initial call to set button visibility based on screen width
    updateButtonVisibility();
    console.log("test");
});
  

  