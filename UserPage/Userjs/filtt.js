let children = document.querySelectorAll("#container");
let BigerThan = document.getElementById("BigerThan");
let LessThan = document.getElementById("LessThan");

//Show Product When Price Less Than Input Value
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

//Show Product When Price Biger Than Input Value
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

//Show Product When Input Value include Title || part of title
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
