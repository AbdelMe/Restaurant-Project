let Page = document.getElementById("prof");
let nav = document.getElementById("sideBar");
let notificationIcon = document.getElementById("notification");
let notificationBar = document.querySelector(".notif");
let information = document.querySelector(".information");


// Animation part
Page.addEventListener("mouseenter", () => {
  nav.style.scale = "1";
  nav.style.translate = "47%";
  nav.style.transition = ".5s";

  notificationBar.style.scale = "0";
  notificationBar.style.translate = "500%";
  notificationBar.style.transition = ".5s";
  document.body.style.overflowX = "hidden";
});

nav.onmouseleave = () => {
  nav.style.scale = "0";
  nav.style.translate = "200%";
  nav.style.transition = ".5s";
  document.body.style.overflowX = "hidden";
};

notificationIcon.addEventListener("mouseenter", () => {
  nav.style.scale = "0";
  nav.style.translate = "200%";
  nav.style.transition = ".5s";
  document.body.style.overflowX = "hidden";

  notificationBar.style.scale = "1";
  notificationBar.style.translate = "138%";
  notificationBar.style.transition = ".5s";
  document.body.style.overflowX = "hidden";
});

notificationBar.onmouseleave = () => {
  notificationBar.style.scale = "0";
  notificationBar.style.translate = "500%";
  notificationBar.style.transition = ".5s";
  document.body.style.overflowX = "hidden";
};

addEventListener("load", () => {
  information.style.translate = "0%";
  information.style.transition = "1s";
});

// Ctreat Of Products

let NumberDivs = 9;
let i = 0;

let ThisDay = document.getElementById('opt1');
let ThisMonth = document.getElementById('opt3');
let ThisYear = document.getElementById('opt4');
// opt1.value = new Date();
// // opt1.value = new Date().getFullYear();     //2024
// // opt1.value = new Date().getDate();         //Day
ThisDay.value = new Date().getDate();  //.getDate()
ThisMonth.value = new Date().getMonth() + 1;
ThisYear.value = new Date().getFullYear();

// console.log(ThisDay.value)    3
let SelectOpt = document.getElementById('SelectOpt');
SelectOpt.onchange = ()=>{
  // console.log(SelectOpt.value)  //Month 12
  let children = document.querySelectorAll("#container");
  for(ele of children ){
    // for(i of ele.children){
    //   console.log(i)
    // }
    // console.log(ele.lastElementChild)//Date
    let ElementDay = new Date(ele.lastElementChild.innerHTML).getDate()  //.getDate()
    console.log(ElementDay)
    let ElementMonth = new Date(ele.lastElementChild.innerHTML).getMonth() + 1
    let ElementYear = new Date(ele.lastElementChild.innerHTML).getFullYear()
    // console.log(d)
    // let newDate = d.getFullYear() + d.getDate() + (d.getMonth() + 1)
    // console.log(parseInt(SelectOpt.value) === parseInt(d))
    if(parseInt(SelectOpt.value) === parseInt(ElementDay)){
      ele.style.display = 'flex';
    }
    // else if(parseInt(SelectOpt.value) > parseInt(ElementWeek) && )
    else if(parseInt(SelectOpt.value) === parseInt(ElementMonth)){
      ele.style.display = 'flex';
    }
    else if(parseInt(SelectOpt.value) === parseInt(ElementYear)){
      ele.style.display = 'flex';
    }
    else ele.style.display = 'none';
  }
}


//Pagination 
const cardsPerPage = 6; // Number of cards to show per page
const dataContainer = document.querySelector(".Food");
const pagination = document.getElementById("pagination");
const prevButton = document.getElementById("prevPage");
const nextButton = document.getElementById("nextPage");
const pageNumbers = document.getElementById("page-numbers");
const pageLinks = document.querySelectorAll(".page-link");


const cards = Array.from(dataContainer.getElementsByClassName("contai"));

// Calculate the total number of pages
const totalPages = Math.ceil(cards.length / cardsPerPage);
let currentPage = 1;

// Function to display cards for a specific page
function displayPage(page) {
  const startIndex = (page - 1) * cardsPerPage;
  const endIndex = startIndex + cardsPerPage;
  cards.forEach((card, index) => {
    if (index >= startIndex && index < endIndex) {
      card.style.display = "block";
    } else {
      card.style.display = "none";
    }
  });
}

// Function to update pagination buttons and page numbers
function updatePagination() {
  pageNumbers.textContent = `Page ${currentPage} of ${totalPages}`;
  prevButton.disabled = currentPage === 1;
  nextButton.disabled = currentPage === totalPages;
  pageLinks.forEach((link) => {
    const page = parseInt(link.getAttribute("data-page"));
    link.classList.toggle("active", page === currentPage);
  });
}

// Event listener for "Previous" button
prevButton.addEventListener("click", () => {
  if (currentPage > 1) {
    currentPage--;
    displayPage(currentPage);
    updatePagination();
  }
});

// Event listener for "Next" button
nextButton.addEventListener("click", () => {
  if (currentPage < totalPages) {
    currentPage++;
    displayPage(currentPage);
    updatePagination();
  }
});

// Event listener for page number buttons
pageLinks.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const page = parseInt(link.getAttribute("data-page"));
    if (page !== currentPage) {
      currentPage = page;
      displayPage(currentPage);
      updatePagination();
    }
  });
});

displayPage(currentPage);
updatePagination();




//Rating
let stars = document.getElementsByClassName('star');

function gfg(n) {
  remove();
  for (let i = 0; i < n; i++) {
      if (n == 1) cls = "one";
      else if (n == 2) cls = "two";
      else if (n == 3) cls = "three";
      else if (n == 4) cls = "four";
      else if (n == 5) cls = "five";
      stars[i].className = "star " + cls;
  }
  // output.innerText = "Rating is: " + n + "/5";
}

function remove() {
  let i = 0;
  while (i < 5) {
      stars[i].className = "star";
      i++;
  }
}


//Add To Cart

let CartOfProduct = document.getElementById('CartOfProduct')
let table = document.createElement('table')
// let LastTr = document.createElement('tr');
// LastTr.innerHTML = 'Total is : '
// LastTr.style.textAlign = 'center'
// table.style.width = '100%'


let link = document.createElement('button')
link.innerHTML = 'delete All'
link.id = 'linkBtn'
document.getElementById('AddedItems').appendChild(link);


function affiche(id){
  if(parseInt(CartOfProduct.innerHTML) === 9){
    CartOfProduct.innerHTML = '+' +parseInt(CartOfProduct.innerHTML)
  }
  else{
    CartOfProduct.innerHTML = parseInt(CartOfProduct.innerHTML)+1
  }

  let children = document.querySelectorAll("#container");

  for(ele of children){
    if(id == ele.children[0].value){

      let Pic = document.createElement('img'); 
      let Link = document.createElement('a');

      Link.innerHTML = 'Order Now'
      Link.href = 'Ord.php?id_P='+ele.children[0].value
      Pic.src = ele.children[1].src
      Pic.style.width = "50px"
      Pic.style.borderRadius = '5px'

      let td1 = document.createElement('td');
      let td2 = document.createElement('td');
      let td3 = document.createElement('td');
      let td4 = document.createElement('td');

      td1.appendChild(Pic)
      td2.innerHTML = ele.children[2].innerHTML
      td3.innerHTML = "Price: " +parseInt(ele.children[3].children[0].innerHTML) + '$'
      td4.appendChild(Link)


      let tr = document.createElement('tr');
      tr.style.textAlign = 'center'

      tr.appendChild(td1)
      tr.appendChild(td2)
      tr.appendChild(td3)
      tr.appendChild(td4)

      table.appendChild(tr)


      document.getElementById('AddedItems').appendChild(table);
    }

  }
 


  document.getElementById('linkBtn').onclick = ()=>{
    document.getElementById('AddedItems').removeChild(document.querySelector('table'))
    CartOfProduct.innerHTML = 0
    AddedItems.style.transform = 'rotateX(90deg)'
    AddedItems.style.transition = '.5s'
    
  }
}


//Notification









// let TotalPrice = document.createElement('p');
// TotalPrice.innerHTML = '1'
// let child = document.querySelectorAll("#AddedItems div")
// for(ele of child){
//   parseInt(TotalPrice.innerHTML)+=parseInt(ele.children[1].innerHTML)
// }
// document.getElementById('AddedItems').appendChild(TotalPrice);

let cart = document.querySelector('.Cart');
let AddedItems = document.getElementById('AddedItems');
cart.onclick = ()=>{
  if(AddedItems.children.length === 1){
    return
  }
  else{
    AddedItems.style.transform = 'rotateX(0deg)';
    AddedItems.style.transition = '.5s'
    AddedItems.onmouseleave = ()=>{
      AddedItems.style.transform = 'rotateX(90deg)';
      AddedItems.style.transition = '.5s'
    }
  }

}



let Notif_ = document.getElementById('Notif_');
let picText = document.querySelector('.picText');

if(picText.children[1].innerText.toLowerCase() === 'NO New Pruducts'.toLowerCase()){
  Notif_.style.display = 'none'
  notificationBar.style.display = 'none'

}



//More Options
let More_Options = document.getElementById('More_Options');
let Options = document.getElementById('Options');
More_Options.onclick = ()=>{
  Options.style.transform = 'rotateX(0deg)';
  Options.style.transition = '.3s';
}
Options.onmouseleave = ()=>{
  Options.style.transform = 'rotateX(90deg)';
}



