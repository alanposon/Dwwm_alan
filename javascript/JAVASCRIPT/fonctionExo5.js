function inutile(str1, str2, position) {
    var tab = str1.split(str2); // str2 = ; 
    return (tab[position - 1]);
}

 var entrer = "robert;dupont;amiens;8000";
document.write(inutile(entrer, ";", 1));