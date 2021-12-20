function dispCol(id, height = '70vh') {
    document.getElementById('dispCol').style.height = height;
    document.getElementById('dispCol').style.visibility = 'visible';
    document.getElementById('dispCol').scrollIntoView({ behavior: 'smooth', block: 'center' });
    let out = '<h2>' + id + '</h2><div class="facultyDispCol-list">';
    let data = faculty[id];
    console.log(data, id);
    for (x in data) {
        out += '<li> <i class = "fas fa-hand-point-right"> </i>' +
            '<detail>' + data[x] + '</detail> </li>';
    }
    out += '</div>';
    document.getElementById('dispCol').innerHTML = out;

}
window.onload = () => {
    document.getElementById('fimg').src = fac.image;
    document.getElementsByTagName('Name')[0].innerHTML = fac.name;
    document.getElementsByTagName('Design')[0].innerHTML = fac.designation;
    document.getElementById('femail').href = "mailto:" + fac.emailID;
    document.getElementById('fphone').href = "tel:" + fac.phoneNo;
    let out = '';
    if (fac.type == 1) {
        out += '<a href="' + faculty.presonalSite + '" class="facultyContent-Item_links-icon">' +
            '<i class="fas fa-house-user"></i> </a>' + '<a href="' + faculty.acoeSite + '" class="facultyContent-Item_links-icon">' +
            '<i class="fas fa-paperclip"></i> </a>';
    } else
        out += '<a></a><a></a>';
    document.getElementById('fLinks').innerHTML += out;
    document.getElementById('listDisp').innerHTML = '';
    out = '';
    for (x in faculty.extraCol) {
        out += '<div class="facultyColList-item" onclick="dispCol(`' + faculty.extraCol[x] + '`)"><i>' + faculty.extraCol[x] + '</i></div>';
    }
    document.getElementById('listDisp').innerHTML = out;

}