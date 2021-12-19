function validate() {
    let u = document.getElementById('user').value;
    let p = document.getElementById('password').value;
    console.log(u);
    if (users.hasOwnProperty(u)) {
        if (p == users[u].password) {
            document.getElementById('user').value = '';
            document.getElementById('password').value = '';
            document.getElementById('msg').innerHTML = "Login Successfully!!";
            setTimeout(() => {
                document.getElementById('msg').innerHTML = "";
                if (u == 'flashNews')
                    document.getElementById('myform').action = './flashNews.php';
                else {
                    document.getElementById('myform').action = './faculty1.php';
                    document.getElementById('type').value = users[u].type;
                    document.getElementById('fID').value = users[u].id;
                }
                document.getElementById('myform').submit();
            }, 500);
        } else {
            document.getElementById('password').value = '';
            document.getElementById('msg').innerHTML = "Incorrect Password!!";
            setTimeout(() => { document.getElementById('msg').innerHTML = ""; }, 500);
        }
    } else {
        document.getElementById('user').value = '';
        document.getElementById('password').value = '';
        document.getElementById('msg').innerHTML = "Inccorect UserName!!";
        setTimeout(() => { document.getElementById('msg').innerHTML = ""; }, 500);

    }
}