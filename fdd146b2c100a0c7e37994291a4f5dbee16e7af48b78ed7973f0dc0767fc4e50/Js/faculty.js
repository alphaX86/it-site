var para = {
    colName: "",
    colIndex: -1,
    updType: "upd",
    colType: "upd",
};

function setCookie(cName, cValue) {
    let date = new Date();
    date.setTime(date.getTime() + (1 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/; SameSite=Lax; Secure";
}

function itemAddVisible() {
    document.getElementById('item-edit').style['visibility'] = 'visible';
    document.getElementById('item-edit-delete').style['visibility'] = 'visible';
    document.getElementById('editList').value = "";
}




function newFaculty(id = 1, t = 1) {
    return {
        fID: id,
        name: "",
        designation: "",
        emailID: "",
        phoneNo: "",
        image: "",
        type: t,
        present: 1,
        areaOfSpec: "",
        presonalSite: "#",
        acoeSite: "#",
        extraCol: []

    };
}

function updateData() {


    let data = document.getElementById('editList').value.toLowerCase().trim();
    if (data == "") {
        alert("Empty Data Cannot be Created!!!!");
        return;
    }
    document.getElementById('item-edit').style['visibility'] = 'hidden';
    document.getElementById('editList').value = '';
    if (para.colType == "new") {
        faculty.extraCol.push(data);
        faculty[data] = [];
        para.colType = "upd";
        console.log(1);
        populateCol();
    } else if (para.colType = "upd") {
        if (para.updType == "upd") {
            faculty[para.colName][para.colIndex] = data;
        } else if (para.updType == "new") {
            faculty[para.colName].push(data);
            para.updType = 'upd';
            console.log(2);

        }
        displayCol(para.colName);
    }
    console.log(faculty);
}

function addItem() {
    para.updType = 'new';
    console.log(para);
    document.getElementById('editList').value = '';
    document.getElementById('item-edit-delete').style['visibility'] = 'hidden';
    document.getElementById('item-edit').style['visibility'] = 'visible';
    para.colIndex = -1;
}

function clearInputs() {
    document.getElementById('fName').value = '';
    document.getElementById('fDesig').value = '';
    document.getElementById('fEmailID').value = '';
    document.getElementById('fPhone').value = '';
    document.getElementById('fAreaOfSpec').value = '';
    document.getElementById('fPersonalSite').value = '';
    document.getElementById('fACOE').value = '';
    document.getElementById('fDesig').value = '';
}

function addCol() {
    itemAddVisible();
    document.getElementById('item-edit-delete').style['visibility'] = 'hidden';
    para.colType = 'new';
    para.colName = '';
    document.getElementsByTagName('colDisp')[0].innerHTML = '';
}

function finishUpdate() {
    fac.name = document.getElementById('fName').value.trim();
    faculty.acoeSite = document.getElementById('fACOE').value.trim();
    faculty.areaOfSpec = document.getElementById('fAreaOfSpec').value.trim();
    faculty.presonalSite = document.getElementById('fPersonalSite').value.trim();
    fac.emailID = document.getElementById('fEmailID').value.trim();
    fac.phoneNo = document.getElementById('fPhone').value.trim();
    fac.designation = document.getElementById('fDesig').value.trim();
    var img = document.getElementById("fImg");
    if (img.value != "") {
        var extension = img.value.substring(img.value.lastIndexOf('.') + 1).toLowerCase();
        fac.image = 'Images/faculty/' + fac.fID + '.' + extension;
    }
    for (a in faculty.extraCol) {
        let d = faculty.extraCol[a];
        if (!faculty.hasOwnProperty(d) || faculty[d].length == 0) {
            faculty.extraCol = faculty.extraCol.filter((data) => { return data != d });
            delete faculty[d];
        }
    }
    /* let fac = {
        fID: faculty.fID,
        name: faculty.name,
        designation: faculty.designation,
        emailID: faculty.emailID,
        phoneNo: faculty.phoneNo,
        image: faculty.image,
        type: faculty.type,
        present: faculty.present
    };
    delete faculty.fID;
    delete faculty.name;
    delete faculty.designation;
    delete faculty.emailID;
    delete faculty.phoneNo;
    delete faculty.image;
    delete faculty.type;
    delete faculty.present;*/
    setCookie('data', JSON.stringify(fac));
    console.log(JSON.stringify(fac));
    setCookie('fdata', JSON.stringify(faculty));
    console.log(JSON.stringify(faculty));
    document.getElementById('form').submit();
}

function delItem() {
    faculty[para.colName] = faculty[para.colName].filter((data, index) => { return index != para.colIndex; });
    displayCol(para.colName);
    document.getElementById('item-edit').style['visibility'] = 'hidden';
    document.getElementById('item-edit-delete').style['visibility'] = 'hidden';
    document.getElementById('editList').value = '';
}

function populateEdit(index = -1) {
    para.updType = 'upd';
    if (index >= 0) {
        para.colIndex = index;
        document.getElementById('item-edit-delete').style['visibility'] = 'visible';
        document.getElementById('item-edit').style['visibility'] = 'visible';
        document.getElementById('editList').value = faculty[para.colName][index];
    }
}

function displayCol(col = '') {

    document.getElementById('item-edit').style['visibility'] = 'hidden';
    if (faculty.hasOwnProperty(col)) {
        let data = faculty[col];
        para.colName = col;
        let out = '<items id="colName">' + col + '</items>';
        for (c in data) {
            out += '<items> <p>' + data[c] +
                '</p> <i  onclick="populateEdit(' +
                c + ')" class = "fas fa-eraser"> </i> </items >';
        }
        out += '<items onclick="addItem()"> <p> <strong> ADD </strong></p> <i class = "fas fa-plus"> </i> </items>';
        document.getElementsByTagName('colDisp')[0].innerHTML = out;
    }
}

function populateCol() {
    let output = "";
    for (x in faculty.extraCol) {
        output += '<item onclick="displayCol(`' +
            faculty.extraCol[x] + '`)"> ' + faculty.extraCol[x] + ' </item>';
    }
    output += '<item onclick="addCol()"><p><strong>ADD</strong></p> <i class = "fas fa-plus" > </i></item>';
    document.getElementsByTagName('colList')[0].innerHTML = output;
}
window.onload = () => {
    document.getElementsByTagName('name')[0].innerHTML = fac.name;
    document.getElementById('fName').value = fac.name;
    document.getElementById('fDesig').value = fac.designation;
    document.getElementById('fEmailID').value = fac.emailID;
    document.getElementById('fPhone').value = fac.phoneNo;
    document.getElementById('fAreaOfSpec').value = faculty.areaOfSpec;
    document.getElementById('fPersonalSite').value = faculty.presonalSite;
    document.getElementById('fACOE').value = faculty.acoeSite;
    document.getElementsByTagName('img')[0].src = '../' + fac.image;
    populateCol();
}