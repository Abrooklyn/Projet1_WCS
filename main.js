window.addEventListener('scroll', scrollEvents);

function scrollEvents() {
    scrollHeader();
    navProgress();
}

function scrollHeader() {
    var navbar = document.getElementById("navbar");

    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        navbar.style.padding = "0px 0px";
        document.getElementById("logo").style.width = "20%";
        document.getElementById("title").style.fontSize = "1.3em";
        
    } else {
        navbar.style.padding = "10px 10px";
        document.getElementById("logo").style.width = "25%";
        document.getElementById("title").style.fontSize = "3em";
        navbar.style.position = "absolute";
    }
}

function navProgress() {
    var winScroll = document.documentElement.scrollTop;
    var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    var scrolled = (winScroll / height) * 100;
    document.getElementById("myBar").style.width = scrolled + "%";

    if (winScroll < 100) {
        document.getElementById("navbar").style.position = "relative";
    } else {
        document.getElementById("navbar").style.position = "fixed";
    }
    console.log(winScroll);
} 