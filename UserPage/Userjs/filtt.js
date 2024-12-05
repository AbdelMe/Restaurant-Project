let children = document.querySelectorAll("#container");
let BigerThan = document.getElementById("BigerThan");
let LessThan = document.getElementById("LessThan");

LessThan.oninput = () => {
  let filterByPrice = document.querySelectorAll('.price input[type="number"]');

  for (ele of children) {
    let b = ele.children[3];
    let c = b.firstElementChild;
    let n = c.innerHTML;
    let z = parseInt(n);


    if (filterByPrice[0].value >= z || filterByPrice[0].value === '') {
      ele.style.display = "flex";
    } else {
      ele.style.display = "none";
    }
  }
};


BigerThan.oninput = () => {
  let filterByPrice = document.querySelectorAll('.price input[type="number"]');

  for (ele of children) {
    let b = ele.children[3];
    let c = b.firstElementChild;
    let n = c.innerHTML;
    let z = parseInt(n);


    if (filterByPrice[1].value <= z || filterByPrice[1].value === '') {
      ele.style.display = "flex";
    } else {
      ele.style.display = "none";
    }
  }
};


let inpt = document.getElementById("inpt");
inpt.addEventListener("input", () => {
  for (ele of children) {
    let LowerValue = inpt.value.toLowerCase();
    let Title = ele.children[2].innerHTML;
    let LowerTitle = Title.toLowerCase();
    if (LowerTitle.includes(LowerValue)) {
      ele.style.display = "flex";
      ele.style.flexWrap = "no wrap";
    } else {
      ele.style.display = "none";
    }
  }
});


//Filter by date
// let opt1 = document.getElementById('opt1');
// opt1.value = new Date();
// let opt2 = document.getElementById('opt2');
// let opt3 = document.getElementById('opt3');
// let opt4 = document.getElementById('opt4');
// let SelectOpt = document.getElementById('SelectOpt');

// SelectOpt.onchange = ()=>{
//   console.log(SelectOpt.value)
// }

// let b  = new Date(opt1.getFullYear(), opt1.getMonth(), opt1.getDate())
// console.log(b)


// // Initialize two dates
// opt1 = new Date(); // Current date
// // opt2 = new Date(); // Current date
// // opt3 = new Date(); // Current date
// // opt4 = new Date(); // Current date
// let d = new Date(children[0].children[1].innerHTML); // Example date with time
// console.log(getNormalizedDate(opt1))


// Function to normalize dates to YYYY-MM-DD
// function getNormalizedDate(date) {
//   return new Date(date.getFullYear(), date.getMonth(), date.getDate());
// }

// // Normalize both dates
// let normalizedOpt1 = getNormalizedDate(opt1);
// let normalizedD = getNormalizedDate(d);



// let submit = document.getElementById("btn");





// // if (opt1.toDateString() === d.toDateString()) {
// //   console.log("The dates are the same day.");
// // } else {
// //   console.log("The dates are different.");
// // }



// SelectOpt.addEventListener('change',()=>{
//   console.log(opt1.innerHTML)
// })


//   // for (ele of children) {
//   //   if (opt1.toDateString() === SelectOpt.value.toDateString()) {
//   //     ele.style.display = "flex";
//   //     ele.style.flexWrap = "no wrap";
//   //   } else {
//   //     ele.style.display = "none";
//   //   }


//   console.log('hyyy')
