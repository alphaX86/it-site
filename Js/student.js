var deg = {
    new: "",
    prv: ""
};
var opt = {
    new: "",
    prv: ""
};
var subOpt = {
    new: "",
    prv: ""
};
var style = {
    new: "color:#003f9d;",
    prv: "color:black;"
}
var jData = {};
document.addEventListener('DOMContentLoaded', () => {

    fetch("../Files/student.json")
        .then(response => {
            return response.json();
        })
        .then(data => {
            jData = data;
            console.log(jData);
        });

});

function dispTT(a) {
    if (subOpt.prv == "")
        subOpt.prv = a;
    else {
        subOpt.prv = subOpt.new;
        document.getElementById(subOpt.prv).style = style.prv;
    }
    subOpt.new = a;
    document.getElementById(subOpt.new).style = style.new;
    var disp = document.getElementById('currDisp');
    disp.style['visibility'] = 'visible';
    let output = "";
    let data = jData[deg.new]['timeTablePara'][a];
    for (let i in data) {
        console.log(i);
        if (i == 'title') {
            output += '<heading>' + data[i] + '</heading>';
            output += '<timeTable>' +
                '<i></i>' +
                '<i>1</i>' +
                '<i>2</i>' +
                '<i>3</i>' +
                '<i>4</i>' +
                '<i>5</i>' +
                '<i>6</i>' +
                '<i>7</i>' +
                '<i>8</i>' +
                '<i style="grid-column:1;grid-row:2;">Monday</i>' +
                '<i style="grid-column:1;grid-row:3;">Tuesday</i>' +
                '<i style="grid-column:1;grid-row:4;">Wednesday</i>' +
                '<i style="grid-column:1;grid-row:5;">Thursday</i>' +
                '<i style="grid-column:1;grid-row:6;">Friday</i>';

        } else if (i != 'courses') {
            for (let j = 0; j < data[i].length; j++) {
                output += '<i style = "grid-column-start:' +
                    (data[i][j].start + 1) + ';grid-column-end:' +
                    (data[i][j].end + 2) + ';grid-row-start:' +
                    i + ';background-color:' + jData["subjectColors"][data[i][j].color] + '"> ' + data[i][j].sub + '</i>';
            }
        } else if (i == 'courses') {
            output += '</timeTable><courseList><course><i>Subjects:</i>';
            for (let j = 0; j < data[i]['course'].length; j++) {
                output += '<i>' + data[i]['course'][j] + '</i>';
            }
            output += '</course>';
            output += '<staff><i>Staff:</i>';
            for (let j = 0; j < data[i]['staff'].length; j++) {
                output += '<i>' + data[i]['staff'][j] + '</i>';
            }
            output += '</staff></courseList>';

        }
        //
    }
    console.log(output);
    disp.innerHTML = output;
}

function dispNL(path) {
    if (subOpt.prv == "")
        subOpt.prv = path;
    else {
        subOpt.prv = subOpt.new;
        document.getElementById(subOpt.prv).style = style.prv;
    }
    subOpt.new = path;
    document.getElementById(subOpt.new).style = style.new;
    var a = '<iframe  id="currDispPDF" style="border: none;" src="../PDF/student/' +
        jData[deg.new]["nameListPath"][path] + '"></iframe>';
    document.getElementById('currDisp').innerHTML = a;
    document.getElementById('currDisp').style['visibility'] = 'visible';
    document.getElementById(path).style
}

function populateOpt() {
    document.getElementById('mainOpt').style['visibility'] = 'visible';
    document.getElementById('cover').style['display'] = 'none';
}

function populateSubOpt(a) {
    var subOpt = document.getElementById('subOpt');
    subOpt.innerHTML = "";
    const m = jData[deg.new][a].length
    if (a == "nameList") {
        for (let i = 0; i < m; i++)
            subOpt.innerHTML += "<i onclick='dispNL(`" + i + "`)' id='" + i +
            "'> " +
            jData[deg.new][a][i] + " </i>";
    } else
    if (a == "timeTable") {
        for (let i = 0; i < m; i++) {
            subOpt.innerHTML += "<i onclick='dispTT(`" + jData[deg.new][a][i] + "`)'id='" + jData[deg.new][a][i] + "'> " + jData[deg.new][a][i] + " </i>";
        }
    }
    if (deg.new != "") {
        subOpt.style['visibility'] = 'visible';
    } else
        subOpt.style['visibility'] = 'hidden';
    document.getElementById('currDisp').style['visibility'] = 'hidden';

}

function selDeg(a) {

    if (deg.prv == "")
        deg.prv = a;
    else {
        deg.prv = deg.new;
        document.getElementById(deg.prv).style['background-color'] = '#1461d5';
    }
    deg.new = a;
    opt = {
        new: "",
        prv: ""
    };
    subOpt.new = {
        new: "",
        prv: ""
    };
    document.getElementById('FAs').style['visibility'] = 'hidden';
    document.getElementById('FAs').style['z=index'] = '-1';
    document.getElementById('subOpt').style['visibility'] = 'hidden';
    document.getElementById('currDisp').style['visibility'] = 'hidden';
    document.getElementById(deg.new).style['background-color'] = '#003f9d';
    populateOpt();
}

function selOpt(a) {
    if (opt.prv == "")
        opt.prv = a;
    else {
        opt.prv = opt.new;
        document.getElementById(opt.prv).style = style.prv;
    }
    opt.new = a;
    subOpt = {
        new: "",
        prv: ""
    };
    document.getElementById(opt.new).style = style.new;
    populateSubOpt(a);
}

function ImageGridItem(image, id = '') {
    const style = `
    grid-column-end: span ${ getSpanEstimate(image.width) };
    grid-row-end: span ${ getSpanEstimate(image.height) }`;


    return `<img id=${id} style ="${ style }" src = "${ image.url }" alt = "${ image.alt}" loading="lazy" />`;
}

function dispFA() {
    document.getElementById('FAs').style['visibility'] = 'visible';
    document.getElementById('FAs').style['z=index'] = '10';
    document.getElementById('cover').style['display'] = 'none';
}

function getSpanEstimate(size) {
    if (size > 450) {
        return 3;
    } else if (size > 250) {
        return 2
    }

    return 1
}
window.onload = () => {
    let srcs = ['Images/students/1.jpeg',
        'Images/students/2.jpeg',
        'Images/students/3.jpeg',
        'Images/students/4.jpeg',
        'Images/students/5.jpeg',
        'Images/students/6.jpeg',
        'Images/students/7.jpeg',
        'Images/students/3.jpeg',
        'Images/students/4.jpeg',
        'Images/students/5.jpeg'
    ];

    for (let i = 0; i < srcs.length; i++) {
        let img = new Image();
        img.src = srcs[i];
        document.getElementById('cover').innerHTML += ImageGridItem(img, 'img' + i);
        img.onload = () => {
            document.getElementById('img' + i).src = img.src;
        }
    }
}