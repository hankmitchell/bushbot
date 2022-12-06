var el = document.getElementsByTagName('html')[0];
el.style.background = "#000000d1";
el.style.color = "white";
for (let a of document.getElementsByTagName('a')) {
    a.style.color = "white";
}
for (let a of document.getElementsByTagName('form')) {
    a.style.color = "gray";
}
if (location.href.match(/upload/ig)) {
    //el.style.background = "deeppink";
    //document.getElementsByTagName('h1')[0].innerHTML+=`<br>Please solve the image challenge again to upload photos`;
}