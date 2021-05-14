var attr_name = document.getElementById("s_attr_name");
var attr = document.getElementById("attr").value;

var csgo_name = document.getElementById("s_csgo_name");
var csgo_type = document.getElementById("s_csgo_type");
var csgo_weapon = document.getElementById("s_csgo_weapon");
var csgo_quality = document.getElementById("s_csgo_quality");
var csgo_category = document.getElementById("s_csgo_category");

var dota2_name = document.getElementById("s_dota2_name");

check();

function check(){
    if (attr === "attr_csgo"){
        dota2_name.remove();
        attr_name.after(csgo_name);
        csgo_name.after(csgo_type);
        csgo_type.after(csgo_weapon);
        csgo_weapon.after(csgo_quality);
        csgo_quality.after(csgo_category);
    }
    if (attr === "attr_dota2"){
        csgo_name.remove();
        csgo_type.remove();
        csgo_weapon.remove();
        csgo_quality.remove();
        csgo_category.remove();
        attr_name.after(dota2_name);
    }
}

function change(){
    attr = document.getElementById("attr").value;
    check();
}