var current = "teachStaff";
document.getElementById(current).style.visibility = 'visible';


function makeVisible(id) {
    document.getElementById(current).style.visibility = 'hidden';
    document.getElementById(id).style.visibility = 'visible';
    current = id;
}

function dispFac(name, desig, email, phone, img, type, id) {
    setCookie("fName", name);
    setCookie("fDesig", desig);
    setCookie("fEmail", email);
    setCookie("fPhone", phone);
    setCookie("fImage", img);
    setCookie("fType", type);
    setCookie("fID", id);
    location.replace("./facultyDetails.php");
}