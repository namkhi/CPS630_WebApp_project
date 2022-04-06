var total = 0;
var items = localStorage.getItem("items");
items = items ? items.split(",") : [];
var prices = localStorage.getItem("prices");
prices = prices ? prices.split(",") : [];
// document.querySelector(".clearCart").addEventListener('click', clearCart());

function dragStart(event){
    event.dataTransfer.setData("Id", event.target.id);
}

function allowDrop(event) {
    event.preventDefault();
}

function drop(event){
    event.preventDefault();

    const data = event.dataTransfer.getData("Id"); // id=iphone13pro
    // console.log(document.getElementById(data));
    var panelData = document.querySelector(".cart");

    panelData = panelData.innerHTML + `<h2 id=${document.getElementById(data)}> ${data} </h2>`;
    var price = document.querySelector('[id="'+ data +'"] .card-footer a').innerHTML;
    event.target.innerHTML = panelData + price;
    var name = price.substring();
    price = price.substring(price.indexOf('$') + 1);

    // total = total + parseInt(price);

    items.push([data]);
    prices.push(price);

    localStorage.setItem("items", items);
    localStorage.setItem("prices", prices);
    updateTotal();
 
}

function updateTotal(){
    var prices = localStorage.getItem("prices");
    var total = 0;
    prices = prices.split(",");
    prices.forEach(element => {
        total = total + parseInt(element);
    });
    console.log(total);
    document.querySelector(".total").innerHTML = "$" + total;
}

function loadDetails(){
    updateTotal();
    var panelData = document.querySelector(".cart");

    var items = localStorage.getItem("items");
    items = items.split(",");
    var prices = localStorage.getItem("prices");
    prices = prices.split(",");

    for(var i = 0; i < prices.length; i++){
        const data = panelData.innerHTML + `<h2 id=${items[i]}> ${items[i]} </h2>`;
        panelData.innerHTML = data + `Price: $${prices[i]}`;
    }

}

function clearCart(){
localStorage.removeItem("items");
localStorage.removeItem("prices");
localStorage.clear();
document.querySelector(".cart").innerHTML = "";
document.querySelector(".total").innerHTML = "00.00"
total = 0;
items = [];
prices = [];

}