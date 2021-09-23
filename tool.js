
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "navbar") {
        x.className += " responsive red" ;
    } else {
        x.className = "navbar";
    }



    var x = document.getElementById("myBody");
    if (x.className === "body") {
        x.className += " black" ;
    } else {
        x.className = "body";
    }
}