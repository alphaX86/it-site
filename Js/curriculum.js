var state = true;
var current = "";

function dispCurr(doc) {
    if (state) {

    }
    document.getElementById("currDispPDF").style.visibility = 'visible';
    document.getElementById("currDispPDF").src = "./PDF/curriculum/" + doc;
    document.getElementById("currDispPDF").scrollIntoView({ behavior: 'smooth', block: 'center' });
}

function dispCurrCol(id) {
    if (current != "") {
        document.getElementById(current).style.visibility = 'hidden';
        document.getElementById("currDispPDF").style.visibility = 'hidden';
    }
    document.getElementById(id).style.visibility = 'visible';
    document.getElementById(id).style.height = '40vh';
    current = id;
}