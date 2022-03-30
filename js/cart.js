

var prices = localStorage.getItem("prices");
var total = 0;
prices = prices.split(",");
prices.forEach(element => {
    total = total + parseInt(element);
});



var items = localStorage.getItem("items");
items = items.split(",");
var prices = localStorage.getItem("prices");
prices = prices.split(",");

for(var i = 0; i < prices.length; i++){

    document.getElementById("cart").insertAdjacentHTML("afterbegin","<h2>"+ items[i] + " $" + prices[i] + "<br></h2>");
}


document.getElementById("cart").insertAdjacentHTML("beforeend", `<h2>Total: <mark>$${total}</mark> <br></h2>`);


console.log(total);
