var current = "";

function dispCol(id, height = '70vh') {

    if (current != "")
        document.getElementById(current).style.visibility = 'hidden';
    document.getElementById(id).style.visibility = 'visible';
    document.getElementById(id).style.height = height;
    document.getElementById(id).scrollIntoView({ behavior: 'smooth', block: 'center' });
    current = id;
}