$(function(){
    $('.dropdown').hover(function() {
        $(this).addClass('open');
    },
    function() {
        $(this).removeClass('open');
    });
});
  
function toggleDropdown() {
        const e = document.querySelector(".submenu");
        if(e.style.display == "block"){
            e.style.display = "none"
        } else {
            e.style.display = "block"
        }
  
    }
document.getElementById("submenudrop").addEventListener("click", toggleDropdown);
