const modal = document.getElementsByClassName("modal");
const btnClose = document.getElementsByClassName("btn-close");
const btnClose2 = document.getElementsByClassName("btn-secondary");
btnClose[0].addEventListener("click",function(){
    modal[0].style.setProperty('display', 'none', 'important');
})

btnClose2[0].addEventListener("click",function(){
    modal[0].style.setProperty('display', 'none', 'important');
})