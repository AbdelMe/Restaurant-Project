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

let container = document.querySelector(".IceCream");
let Product = document.querySelector(".Prod");
let children = document.querySelectorAll("#container");
for (let i = 0; i < children.length; i++) {
  let AddToCart = document.createElement("img");
  let link = document.createElement("a");
  let body = document.body;
  AddToCart.id = "addtocart";
  AddToCart.name = "ATcart";
  AddToCart.src = "Picture/add-to-cart.png";

  link.name = "CartLink";
  link.href = "#";
  link.id = "Clink";

  link.style.cssText = "width:40px; position:absolute; right:20px; top:20px";
  AddToCart.style.cssText = "width:40px;";

  link.appendChild(AddToCart);

  children[i].appendChild(link);

  container.appendChild(children[i]);
  Product.appendChild(container);

  body.appendChild(Product);
}

// let hhh = document.createElement('h1')
// hhh.innerHTML = 'simooooooooo'
// let bbb = document.querySelector('.background').appendChild(hhh)
// document.body.appendChild(bbb)


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

function affiche(this){
  console.log(this)
}

