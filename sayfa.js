var yukar = document.getElementsByClassName("yukari")[0];

window.addEventListener("scroll",function(){

    const mesafe = this.window.scrollY;//yukarıdan olan uzaklığı veriyor

    if(mesafe > 300){
        yukar.classList.add("goster");
    }
    else{
        yukar.classList.remove("goster");
    }
});
yukar.addEventListener("click",function(){
    window.scrollTo(0,0);
});

/*yukarı çıkma bitiş*/
/*sağ slider*/
const arrows = document.querySelectorAll(".ok");
const movieList = document.querySelectorAll(".film-list"); 

arrows.forEach((ok, i)=> {
    let clickCounter = 0; 
    const itemnumber = movieList[i].querySelectorAll("img").length;
    ok.addEventListener("click",function() {
        clickCounter++; 
    if(itemnumber - (4 + clickCounter) >= 0) {
           movieList[i].style.transform = `translateX(${movieList[i].computedStyleMap().get("transform")[0].x.value - 320}px)`
    }
});
});
/*sağ slider bitiş*/
/*sol slider */
const arrows2 = document.querySelectorAll(".ok2");
const movieList2 = document.querySelectorAll(".film-list"); 

arrows2.forEach((ok2, j)=> {
    let clickCounter2 = 0; 
    const itemnumber2 = movieList2[j].querySelectorAll("img").length;
    ok2.addEventListener("click",function() {
        clickCounter2++; 
    if(itemnumber2 + (4 + clickCounter2) <= 14) {
           movieList2[j].style.transform = `translateX(${movieList2[j].computedStyleMap().get("transform")[0].x.value + 320}px)`
    }
});
});
/*sol slider bitiş*/
function son(){
    document.getElementById("filmadi").innerHTML = document.getElementById("movshazam").value;
}


