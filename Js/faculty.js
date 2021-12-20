function dispFac(id) {
    document.getElementById('detailID').value = id;
    //console.log(document.getElementById('detailID').value);
    document.getElementById('facultyDisp').submit();
}

function populate(type = 1) {
    document.getElementById('facultyDisp').innerHTML = '';
    let output = '';
    let data;
    data = (type == 1) ? techFac : (type == 0) ? nonTechFac : (type == -1) ? officeFac : formerFac;
    for (x in data) {
        if (x == 0)
            continue;
        let faculty = data[x];
        output += '<div class="faculty-listItem"' + ((type != -1) ? 'onclick = "dispFac(' + faculty.fID + ')"' : '');
        output += '> ' +
            '<img src = "./' + faculty.image + '" class="faculty-listItem_img" alt="Faculty-Image"> </img>' +
            '<div class="faculty-listItem_Name"><strong>' + faculty.name + '</strong></div>' +
            '<div class="faculty-listItem_Design"> ' + faculty.designation + ' </div>' +
            '<div class="faculty-listItem_Email"> ' + faculty.emailID + ' </div>' +
            '</div> ';
    }
    output += '<input type="number" style="visibility:hidden;display:none;" name="fID" id="detailID"></input>'
    document.getElementById('facultyDisp').innerHTML = output;

}
window.onload = () => {
    populate(1);
}