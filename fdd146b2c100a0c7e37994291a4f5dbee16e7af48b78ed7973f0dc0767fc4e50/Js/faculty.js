var para = {
    colName: "",
    colIndex: -1,
    updType: "upd",
    colType: "upd",
    facultyIndex: -1,
    facultyType: "tech"
};
var metaData = {
    idCount: {
        tech: 0,
        nonTech: 0,
        office: 0
    },
    change: {
        tech: [],
        nonTech: [],
        office: []
    },
    new: {
        tech: [],
        nonTech: [],
        office: []
    }
}
var newFac = {};

function itemAddVisible() {
    document.getElementById('item-edit').style['visibility'] = 'visible';
    document.getElementById('editList').value = "";
}

function newFaculty(id = 1) {
    return {
        fID: id,
        name: "",
        designation: "",
        emailID: "",
        phoneNo: "",
        image: "",
        type: 1,
        present: 1,
        areaOfSpec: "",
        presonalSite: "#",
        acoeSite: "#",
        extraCol: []

    };
}

function itemAdd() {
    if (para.colType == "upd") {
        let fact = metaData[para.facultyType][para.facultyIndex];
        metaData[para.facultyType][para.facultyIndex][para.colName].push(text);
        if (metaData.change[para.facultyType].indexOf(fact.fID) == -1)
            metaData.change[para.facultyType].push(fact.fID);
    }
    document.getElementById('editList').value = "";
    document.getElementById('item-edit').style['visibility'] = 'hidden';

}

function clearInputs() {
    document.getElementById('fName').value = '';
    document.getElementById('fDesig').value = '';
    document.getElementById('fEmailID').value = '';
    document.getElementById('fPhone').value = '';
    document.getElementById('fAreaOfSpec').value = '';
    document.getElementById('fPersonalSite').value = '';
    document.getElementById('fACOE').value = '';
}

function addNewFaculty() {
    para.updType = "new";
    document.getElementsByTagName('name')[0].innerHTML = "New Staff";
    clearInputs();
    newFac = newFaculty(metaData.idCount[para.facultyType]);
    metaData.idCount[para.facultyType]++;
    document.getElementsByTagName('colList')[0].innerHTML = "<item onclick = 'addCol()' > <p> <strong> ADD </strong></p> <i class = 'fas fa-plus '> </i> </item>";
    document.getElementsByTagName('colDisp')[0].innerHTML = "";
    document.getElementById('item-edit').style['visibility'] = 'hidden';
}

function editFaculty(index) {
    para.facultyIndex = index;
    para.updType = "upd";

}

function addCol() {}

function finishUpdate() {
    if (para.updType == "new") {
        newFac.name = document.getElementById('fName').value;
        newFac.acoeSite = document.getElementById('fACOE').value;
        newFac.areaOfSpec = document.getElementById('fAreaOfSpec').value;
        newFac.emailID = document.getElementById('fEmailID').value;
        metaData.new[para.facultyType].push(newFac);
        let ind = metaData[para.facultyType].length;
        metaData[para.facultyType].push(newFac);
        let out = '<item onclick="editFaculty(' + ind + ')">' +
            '<p>' + newFac.name + ' </p>' +
            '<i class = "fas fa-user-edit"> </i> </item> '
        document.getElementById('staffList').innerHTML += out;
    }
}