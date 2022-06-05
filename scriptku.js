function myFunction() {
    var x = document.getElementById("navbarku");
    if (!x.classList.contains("responsive")) {
        x.classList.add( "responsive");
    } else {
        x.classList.remove( "responsive");
    }
}