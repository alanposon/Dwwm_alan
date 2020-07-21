function NbVoyelles(mot) {
    var mot = prompt('Donne une phrase');
    return mot.length - mot.replace(/[aeiouy]+/g, '').length;
}
NbVoyelles(); 