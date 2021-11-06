function populatePie(id, hrs, total = 52) {
    let persent = hrs / total;
    console.log(id);
    document.getElementById(id).style[`background`] = "conic-gradient( blue 0.00% " +
        persent + "% , black" +
        perent + "% " + (persent + 0.1) +
        "% , red " + (persent + 0.1) +
        "% 99.99 % , black 99.99 % 100 % )";
}
var currentDisp = "Lib";

function dispOthers(id) {
    if (currentDisp != "")
        document.getElementById(currentDisp).style.visibility = 'hidden';
    document.getElementById(id).style.visibility = 'visible';
    currentDisp = id;
}