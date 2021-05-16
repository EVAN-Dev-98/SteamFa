var s_attr_name = document.getElementById("s_attr_name");
var attr = document.getElementById("attr").value;

var s_csgo_name = document.getElementById("s_csgo_name");
var s_csgo_type = document.getElementById("s_csgo_type");
var s_csgo_weapon = document.getElementById("s_csgo_weapon");
var s_csgo_quality = document.getElementById("s_csgo_quality");
var s_csgo_category = document.getElementById("s_csgo_category");

var s_dota2_name = document.getElementById("s_dota2_name");
var s_dota2_hero_list = document.getElementById("s_dota2_hero_list");
var s_dota2_rarity = document.getElementById("s_dota2_rarity");
var s_dota2_quality = document.getElementById("s_dota2_quality");

var guns = [
    "Pistol",
    "SMG",
    "Rifle",
    "Sniper Rifle",
    "Shotgun",
    "Machinegun",
    "Knife"
];

var weapon = [
    "AK-47",
    "AUG",
    "AWP",
    "CZ75-Auto",
    "Desert Eagle",
    "Dual Berettas",
    "FAMAS",
    "Five-Seven",
    "G3SG1",
    "Galil AR",
    "Glock-18",
    "M249",
    "M4A1-S",
    "M4A4",
    "MAC-10",
    "MAG-7",
    "MP5-SD",
    "MP7",
    "MP9",
    "Negev",
    "Nova",
    "P2000",
    "P250",
    "P90",
    "PP-Bizon",
    "R8 Revolver",
    "Sawed-Off",
    "SCAR-20",
    "SG 553",
    "SSG 08",
    "Tec-9",
    "UMP-45",
    "USP-S",
    "XM1014",
    "Bayonet",
    "Bowie Knife",
    "Butterfly Knife",
    "Classic Knife",
    "Falchion Knife",
    "Flip Knife",
    "Gut Knife",
    "Huntsman Knife",
    "Karambit",
    "M9 Bayonet",
    "Navaja Knife",
    "Nomad Knife",
    "Paracord Knife",
    "Shadow Daggers",
    "Skeleton Knife",
    "Stiletto Knife",
    "Survival Knife",
    "Talon Knife",
    "Ursus Knife"
];

check();

function check(){
    if (attr === "attr_csgo"){
        s_dota2_name.remove();
        s_dota2_hero_list.remove();
        s_dota2_rarity.remove();
        s_dota2_quality.remove();
        s_csgo_weapon.remove();
        s_csgo_quality.remove();
        s_csgo_category.remove();
        s_attr_name.after(s_csgo_name);
        s_csgo_name.after(s_csgo_type);
    }
    if (attr === "attr_dota2"){
        s_csgo_name.remove();
        s_csgo_type.remove();
        s_csgo_weapon.remove();
        s_csgo_quality.remove();
        s_csgo_category.remove();
        s_attr_name.after(s_dota2_name);
        s_dota2_name.after(s_dota2_hero_list);
        s_dota2_hero_list.after(s_dota2_rarity);
        s_dota2_rarity.after(s_dota2_quality);
    }
}

function change(){
    attr = document.getElementById("attr").value;
    check();
}

function csgo_type_check(value){
    if (guns.includes(value)){
        s_csgo_type.after(s_csgo_weapon);
    }
    else {
        s_csgo_weapon.remove();
        s_csgo_quality.remove();
        s_csgo_category.remove();
    }
}

function csgo_weapon_check(value){
    if (weapon.includes(value)){
        s_csgo_weapon.after(s_csgo_quality);
        s_csgo_quality.after(s_csgo_category);
    }
    else {
        alert("لطفا نام اسلحه را فقط از لیست انتخاب کنید");
        s_csgo_quality.remove();
        s_csgo_category.remove();
    }
}

