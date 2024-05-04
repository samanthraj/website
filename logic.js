
 let aboutsection = document.querySelectorAll("#about");
 let abc = document.querySelector(".about")
BarProp


 aboutsection[0].addEventListener("mouseenter", () => {
    abc.style.display= "block";
 });
 aboutsection[0].addEventListener("mouseleave", () => {
  abc.style.display= "none";
});

let roomsection = document.querySelectorAll("#room");
 let abd = document.querySelector(".room")
 roomsection[0].addEventListener("mouseenter", () => {
    abd.style.display= "block";
    abd.style.display= "flex";

 });
 roomsection[0].addEventListener("mouseleave", () => {
  abd.style.display= "none";
});

let ds = document.querySelectorAll("#dining");
 let dd = document.querySelector(".dining")
 ds[0].addEventListener("mouseenter", () => {
    dd.style.display= "block";
    dd.style.display= "flex";

 });
 ds[0].addEventListener("mouseleave", () => {
  dd.style.display= "none";
});

let es = document.querySelectorAll("#exper");
 let ed = document.querySelector(".Experience")
 es[0].addEventListener("mouseenter", () => {
    ed.style.display= "block";
    ed.style.display= "flex";

 });
 es[0].addEventListener("mouseleave", () => {
  ed.style.display= "none";
});

let ees = document.querySelectorAll("#event");
 let eed = document.querySelector(".Event")
 ees[0].addEventListener("mouseenter", () => {
    eed.style.display= "block";
    eed.style.display= "flex";

 });
 ees[0].addEventListener("mouseleave", () => {
  eed.style.display= "none";
}); 

let allbox = document.querySelectorAll(".box");
let arrow = document.querySelectorAll(".j");

for (let i = 0; i < allbox.length; i++) {
    allbox[i].addEventListener("mouseenter", (event) => {
      console.log("mouseenter")
        arrow[i].style.transform = "rotate(180deg)";
    });

    allbox[i].addEventListener("mouseleave", (event) => {
        arrow[i].style.transform = "rotate(0deg)"; 
        console.log("mouseleave")// Assuming you want to revert back to the original rotation
    });
}


let left = document.querySelector(".odl");
let right = document.querySelector(".odr");
let alimg = document.querySelectorAll(".image");
let i = 0;
let j = 4;
let pivot = 0;
alimg[0].style.diplay="none";

left.addEventListener("click",()=>{
   if(pivot>0){
      alimg[pivot-1].style.display="block";
      alimg[pivot].style.display="none";
      pivot = pivot-1;
   }
   else{
      alimg[j].style.display="block";
      alimg[pivot].style.display="none";
      pivot = j;
   }
});

right.addEventListener("click",()=>{

   if(pivot<4){
      alimg[pivot+1].style.display="block";
      alimg[pivot].style.display="none";
      pivot = pivot +1;

   }
   else{
      alimg[i].style.display="block";
      pivot = i;
   }

});
s