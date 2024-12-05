const cardsPerPage = 6; // Number of cards to show per page
const dataContainer = document.getElementById("T-Body");
const pagination = document.getElementById("pagination");
const prevButton = document.getElementById("prevPage");
const nextButton = document.getElementById("nextPage");
const pageNumbers = document.getElementById("page-numbers");
const pageLinks = document.querySelectorAll(".page-link");


const cards = Array.from(dataContainer.querySelectorAll('#Tr2'));
console.log(cards)

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



let Details = document.getElementsByClassName('Table1');
for(ele of Details){
  for(i of ele.children){
    for(b of i.children){
      console.log(b.children)//td of every tr in table 
    }
  }
}
// let Details = document.getElementsByClassName('Details');
// for(ele of Details){
//   ele.onclick = function affiche(id){
//     console.log(id)
//   }
// }

// function (id){
//   console.log(id)//id Of each Product
// }



//working
function affiche(id){
  // let ProductDetails = document.createElement('div')
  // ProductDetails.id = 'printDiv'
  // let Printbtn = document.createElement('button')
  // Printbtn.innerHTML = 'Print'

  // let Closebtn = document.createElement('button')
  // Closebtn.innerHTML = 'close'

  // ProductDetails.innerHTML = 'The id Of the element is :'+id
  // ProductDetails.style.backgroundColor = 'crimson'
  // ProductDetails.style.width = "500px"
  // ProductDetails.style.height = "70vh"
  // ProductDetails.style.position = 'absolute'
  // ProductDetails.style.top = '30%'
  // ProductDetails.style.left = '420px'
  // ProductDetails.style.zIndex = '10'

  // ProductDetails.appendChild(Closebtn)
  // ProductDetails.appendChild(btn)
  // document.body.appendChild(ProductDetails)

  // Printbtnbtn.onclick = ()=>{
  //   print();
  // }
  // Closebtn.onclick = ()=> {
  //   document.body.removeChild(ProductDetails)
  // }
let div = document.getElementById('details')
let Ptitle = document.getElementById('Ptitle')
let Table = document.getElementsByClassName('Table1');
for(ele of Table){
  for(i of ele.children){
    for(b of i.children){
      console.log(b.children)//td of every tr in table 
      Ptitle.innerHTML+= ' ' + b.children[1].innerHTML
    }
  }
}
div.style.display = 'block'
}

