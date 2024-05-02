const slider_img=document.getElementById("slider-img");
const slider=document.getElementById("slider")
const color_name=document.getElementById("color-name")
const inp_rad=document.querySelectorAll(".inp_color");
let pasta="racing_blue";
slider_img.setAttribute("src","./img/"+pasta+"/img"+slider.value+".png")

// Mudança de cores
function color_opt(){
    pasta=this.value;
    document.body.style.backgroundImage="url("+"./img/"+pasta+"/bg.png" + ")";
    color_name.innerHTML=this.value.replace("_"," ")

    slider_img.setAttribute("src","./img/"+pasta+"/img"+slider.value+".png")


}

inp_rad[0].addEventListener("click",color_opt)
   
inp_rad[1].addEventListener("click",color_opt)

inp_rad[2].addEventListener("click",color_opt)

// Slider img
    slider.addEventListener("input",()=>{
        slider_img.setAttribute("src","./img/"+pasta+"/img"+slider.value+".png")
    });

   

 




