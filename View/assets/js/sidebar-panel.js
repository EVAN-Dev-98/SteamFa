var menu = document.querySelectorAll(".menu");

menu.forEach(event);

function event(item){
    item.addEventListener("click", function (){
        setTimeout( function (){
            show(item);
        },10);
    });
}

function show(item){
    var li = item.childNodes;
    li[0].childNodes[2].classList.toggle("down");
    li[2].classList.toggle("show");
}