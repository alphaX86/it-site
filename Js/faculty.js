function dispFac(id) {
    document.getElementById('detailID').value = id;
    //console.log(document.getElementById('detailID').value);
    document.getElementById('facultyDisp').submit();
}

function populate(type = 1) {
    document.getElementById('facultyDisp').innerHTML = '';
    let data;
    data = (type == 1) ? techFac : (type == 0) ? nonTechFac : (type == -1) ? officeFac : formerFac;
    for (x in data) {
        let output = '';
        if (x == 0)
            continue;
        let faculty = data[x];
        let img = new Image();
        output = '<div class="faculty-listItem"' + ((type != -1) ? 'onclick = "dispFac(' + faculty.fID + ')"' : '') + '> ';
        output += '<img class="faculty-listItem_img skeleton" id="img' + faculty.fID + '" loading="lazy"> </img>' +
            '<div class="faculty-listItem_Name"><strong>' + faculty.name + '</strong></div>' +
            '<div class="faculty-listItem_Design"> ' + faculty.designation + ' </div>' +
            '<div class="faculty-listItem_Email"> ' + faculty.emailID + ' </div>' +
            '</div> ';
        document.getElementById('facultyDisp').innerHTML += output;
        img.src = './' + faculty.image;
        img.onload = () => {
            document.getElementById('img' + faculty.fID).src = img.src;
            document.getElementById('img' + faculty.fID).classList.remove('skeleton');
        };

    }
    document.getElementById('facultyDisp').innerHTML += '<input type="number" style="visibility:hidden;display:none;" name="fID" id="detailID"></input>'
        //document.getElementById('facultyDisp').innerHTML = output;

}
window.onload = () => {
    populate(1);

}