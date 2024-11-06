let submit = document.getElementById("btn");

// submit.addEventListener('click',()=>{

//     let x = document.querySelector('.IceCream').firstElementChild;
//     let children = document.querySelectorAll('#container') ;
//     let filterByName = document.querySelectorAll('#FilterByName input[type="radio"]');
//     let filterByPrice = document.querySelectorAll('.price input[type="number"]');
//     // console.log(filterByPrice[0].value)

//     for(i of filterByName){
//             if(i.checked){
//                 // console.log(i.value) // value of i
//                     for(ele of children){
//                         // console.log(ele.children[1]) // value of paragraph
//                         let LowerValue = i.value
//                         let Title = ele.children[1].innerHTML
//                         let LowerTitle = Title.toLowerCase()
//                         if(LowerTitle.includes(LowerValue)){
//                             ele.style.display = 'flex'
//                         }

//                         else{
//                             ele.style.display = 'none'
//                         }
//                     }
//             }
//     }

// })
// submit.addEventListener('click',()=>{

//     let children = document.querySelectorAll('#container') ;
//     let filterByName = document.querySelectorAll('#FilterByName input[type="radio"]');
//     let filterByPrice = document.querySelectorAll('.price input[type="number"]');

//     for(ele of children){
//         let b = ele.children[2]
//         let c = b.firstElementChild
//         let n = c.innerHTML
//         let z = parseInt(n)

//         if(filterByPrice[0].value >= z || filterByPrice[1].value <= z){
//             ele.style.display = 'flex'
//         }
//         else{
//             ele.style.display = 'none'
//         }
//     }
// })

// function LessThanNumber(){

// }
// function BigerThanNumber(){

// }
let BigerThan = document.getElementById("BigerThan");
let LessThan = document.getElementById("LessThan");

LessThan.oninput = () => {
  let filterByPrice = document.querySelectorAll('.price input[type="number"]');

  for (ele of children) {
    let b = ele.children[2];
    let c = b.firstElementChild;
    let n = c.innerHTML;
    let z = parseInt(n);

    if (filterByPrice[0].value >= z) {
      ele.style.display = "flex";
    } else {
      ele.style.display = "none";
    }
  }
};

BigerThan.oninput = () => {
  let filterByPrice = document.querySelectorAll('.price input[type="number"]');

  for (ele of children) {
    let b = ele.children[2];
    let c = b.firstElementChild;
    let n = c.innerHTML;
    let z = parseInt(n);

    if (filterByPrice[1].value <= z) {
      ele.style.display = "flex";
    } else {
      ele.style.display = "none";
    }
  }
};

let inpt = document.getElementById("inpt");

inpt.addEventListener("input", () => {
  let children = document.querySelectorAll("#container");

  for (ele of children) {
    let LowerValue = inpt.value;
    let Title = ele.children[1].innerHTML;
    let LowerTitle = Title.toLowerCase();
    if (LowerTitle.includes(LowerValue)) {
      ele.style.display = "flex";
      ele.style.flexWrap = "no wrap";
    } else {
      ele.style.display = "none";
    }
  }
});
