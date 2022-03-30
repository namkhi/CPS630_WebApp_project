const urlObject = new URL(document.location.href);
const params = urlObject.searchParams;
const filter = params.get("id");
console.log(filter);

const setFilter = (filter) => {
    const checkboxes = document.querySelectorAll(".checkbox");
    if( filter === "all" ){
        document.querySelectorAll(".checkbox").forEach(element => {
            element.checked = false;
        })
        const cards = document.querySelectorAll(".card");
        cards.forEach(element => {
        element.style.display = "flex";
        });
    }
    else{    
        document.querySelectorAll(`.${filter}`).forEach(element => {
            element.style.display = "flex";
        })
    }
}

const unsetFilter = (filter) => {

}

document.querySelector("body").addEventListener("load", setFilter(filter));

const checkboxes = document.querySelectorAll(".checkbox")
checkboxes.forEach(element => {
    element.addEventListener("change", (event) => {
        setFilter(event.currentTarget.name);
    })
});

document.querySelector(".clear").addEventListener("click", (event) =>{
    setFilter("all");
});
