function setCookie(cName, cValue) {
    let date = new Date();
    date.setTime(date.getTime() + (900 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
}
window.onload = () => {
    let srcs = ['./Images/MainPage/SL-1.jpeg',
        "./Images/MainPage/SL-2.jpg",
        "./Images/MainPage/SL-3.jpg",
        "./Images/MainPage/SL-4.jpg",
        "./Images/MainPage/SL-5.jpg"
    ];
    for (let i = 0; i < srcs.length; i++) {
        let imgT = document.createElement('img');
        imgT.id = 'slImg' + i;
        imgT.className = 'skeleton';
        imgT.loading = 'lazy';
        let img = new Image();
        img.src = srcs[i];
        document.getElementsByTagName('images')[0].appendChild(imgT);
        img.onload = () => {
            imgT.src = img.src;
            imgT.classList.remove('skeleton');
            console.log(imgT.id);
        }
    }
}