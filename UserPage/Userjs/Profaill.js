let Page = document.getElementById("prof");
let nav = document.getElementById("sideBar");
let notificationIcon = document.getElementById("notification");
let notificationBar = document.querySelector(".notif");
let information = document.querySelector(".information");

// Animation part
Page.addEventListener("mouseenter", () => {
  nav.style.scale = "1";
  nav.style.translate = "98%";
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
  notificationBar.style.translate = "346%";
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

// for(let i=0 ; i<NumberDivs ; i++){
//         let PicSrc = ['./img/food/tagin/Tajine.jpeg','./img/food/pizza/wallpaperflare.com_wallpaper (4).jpg','./img/food/burger/wallpaperflare.com_wallpaper.jpg',
//         './img/iceCream/wallpaperflare.com_wallpaper (15).jpg', './img/iceCream/Almond Magnum Ice Cream (Vegan) - Nutriholist.jpeg',
//         './img/iceCream/Cookies and Cream Ice Cream Shake.jpeg', './img/juice/6d9b4c78-53ff-4802-84d2-70599199c6a4.jpeg' ,
//         './img/juice/5e1befc3-6810-454a-9019-0afcd90ccf5c.jpeg' , './img/juice/Blackberry Green Smoothie.jpeg'
//     ]

//     let body = document.body
//     let div = document.createElement('div')
//     div.id = 'container'
//     let pic = document.createElement('img')

//     pic.src = PicSrc[i]

//     let title = document.createElement('p')

//     title.innerHTML = 'Tagin Bniiiin'

//     let Price = document.createElement('div')
//     Price.id = 'Price'
//     let Order = document.createElement('button')
//     Order.innerText = 'Order Now'

//     div.appendChild(pic)
//     div.appendChild(title)
//     div.appendChild(Price)
//     div.appendChild(Order)

//     container.appendChild(div)
//     Product.appendChild(container)

//     body.appendChild(Product)
// }

// while(i < NumberDivs){
//     let PicSrc = ['./img/food/tagin/Tajine.jpeg','./img/food/pizza/wallpaperflare.com_wallpaper (4).jpg','./img/food/burger/wallpaperflare.com_wallpaper.jpg',
//         './img/iceCream/wallpaperflare.com_wallpaper (15).jpg', './img/iceCream/Almond Magnum Ice Cream (Vegan) - Nutriholist.jpeg',
//         './img/iceCream/Cookies and Cream Ice Cream Shake.jpeg', './img/juice/6d9b4c78-53ff-4802-84d2-70599199c6a4.jpeg' ,
//         './img/juice/5e1befc3-6810-454a-9019-0afcd90ccf5c.jpeg' , './img/juice/Blackberry Green Smoothie.jpeg'
//     ]
//     let body = document.body
//     let div = document.createElement('div')
//     div.id = 'container'
//     let pic = document.createElement('img')
//     pic.src = PicSrc[i]

//     let title = document.createElement('p')

//     title.innerHTML = 'Tagin Bniiiin'

//     let Price = document.createElement('div')
//     Price.id = 'Price'
//     let Order = document.createElement('button')
//     Order.innerText = 'Order Now'

//     div.appendChild(pic)
//     div.appendChild(title)
//     div.appendChild(Price)
//     div.appendChild(Order)

//     container.appendChild(div)
//     Product.appendChild(container)

//     body.appendChild(Product)

//     i++
// }

// let Pictures = document.querySelector('.IceCream').children
// let y = 0
// let listImage = []
// for(ele of Pictures){
//     let b = ele.id
//     let x = document.getElementById(b).firstElementChild
//     listImage.push(x)
// }
// for(ele in PicSrc){

// }

// let container = document.querySelector(".IceCream");
// let Product = document.querySelector(".Prod");
// let children = document.querySelectorAll("#container");
// for (let i = 0; i < children.length; i++) {
//   let AddToCart = document.createElement("img");
//   let link = document.createElement("a");
//   let body = document.body;
//   AddToCart.id = "addtocart";
//   AddToCart.name = "ATcart";
//   AddToCart.src = "Picture/add-to-cart.png";

//   link.name = "CartLink";
//   link.href = "#";
//   link.id = "Clink";

//   link.style.cssText = "width:40px; position:absolute; right:20px; top:20px";
//   AddToCart.style.cssText = "width:40px;";

//   link.appendChild(AddToCart);

//   children[i].appendChild(link);

//   container.appendChild(children[i]);
//   Product.appendChild(container);

//   body.appendChild(Product);
// }




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

// function affiche(this){
//   console.log(this)
// }

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

let CartOfProduct = document.getElementById('CartOfProduct')
let table = document.createElement('table')
let LastTr = document.createElement('tr');
LastTr.innerHTML = 'Total is : '
LastTr.style.textAlign = 'center'
table.style.width = '100%'

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
      // let ListProducts = [{idP : ele.children[0].value , Tit : ele.children[2].innerHTML, Pr : parseInt(ele.children[3].children[0].innerHTML)}];
   
      // localStorage.setItem('data', JSON.stringify(ListProducts));
      // let ListProductsFinal = JSON.parse(localStorage.getItem('data'));
      // for(ele of ListProductsFinal){
        
      // }

      // console.log(ele.children[1])//Pic
      // console.log(ele.children[2].innerHTML)//Title
      // console.log(ele.children[3].innerHTML)//Price
      // let div = document.createElement('div');
      let Pic = document.createElement('img'); 
      // let Title = document.createElement('p'); 
      // let Price = document.createElement('p'); 
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


      // Title.innerHTML = ele.children[2].innerHTML;
      // Price.innerHTML = ele.children[3].innerHTML
      // div.appendChild(Pic)
      // div.appendChild(Title)
      // div.appendChild(Price)
      // div.appendChild(Link)


      document.getElementById('AddedItems').appendChild(table);
      // document.getElementById('AddedItems').appendChild(div);
    }

  }
  table.appendChild(LastTr)
  // console.log(Title)
}






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
  if(AddedItems.children.length === 0){
    return
  }
  else{
    AddedItems.style.top = '67px';
    AddedItems.style.scale = '1'
    AddedItems.style.transition = '.5s'
    AddedItems.onmouseleave = ()=>{
      AddedItems.style.top = '-200px';
      AddedItems.style.scale = '0'
      AddedItems.style.transition = '.5s'
    }
  }
}



