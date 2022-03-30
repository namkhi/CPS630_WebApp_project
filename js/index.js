const product_box = document.querySelectorAll(".product-box");

for( let i = 0; i < product_box.length; i++){
    product_box[i].addEventListener('click', function(e){ 
        window.location.href = "shop.php?id=" + this.id;    
    });
}

