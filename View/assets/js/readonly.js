var inputs = document.querySelectorAll(".readonly");
inputs.forEach(ReadOnly);

function ReadOnly(item){
    item.readOnly = true;
}