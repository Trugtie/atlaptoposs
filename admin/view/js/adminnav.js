const btn = document.getElementById("btnNav");
const nav = document.getElementById("nav");
const header = document.getElementsByTagName("header");
const section = document.getElementsByTagName("section");
btn.addEventListener("click",function() {
    if(nav.style.transform=="translateX(-100%)" && header[0].style.width=="0%" && section[0].style.width=="80%"){
        nav.style.transform="translateX(0)";
        header[0].style.width="20%";
        section[0].style.width="60%";
    }
    else{
        nav.style.transform="translateX(-100%)";
        header[0].style.width="0%";
        section[0].style.width="80%";
    }
    
})
// time
$(document).ready(function() {
    setInterval(runningTime, 1000);
});

function runningTime() {
    $.ajax({
        url: 'time.php',
        success: function(data) {
            $('#runningTime').html(data);
        },
    });
}