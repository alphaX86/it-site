function setCookie(cName, cValue) {
    let date = new Date();
    date.setTime(date.getTime() + (900 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}