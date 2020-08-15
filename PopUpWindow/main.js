var parent = document.querySelector("#modal-parent"),
btn = document.querySelector("button"),
X= document.querySelector(".X"),
section = document.querySelector("section");

btn.addEventListener("click",appear);

function appear() {
document.getElementById("modal-parent").style.display= "block";
section.style.filter = "blur(10px)"
    
}
X.addEventListener("click",disappearX);

function disappearX() {
    
document.getElementById("modal-parent").style.display= "none";
section.style.filter = "blur(0px)"    
}

