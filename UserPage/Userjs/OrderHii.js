//pagination
const cardsPerPage = 6; // Number of cards to show per page
const dataContainer = document.getElementById("T-Body");
const pagination = document.getElementById("pagination");
const prevButton = document.getElementById("prevPage");
const nextButton = document.getElementById("nextPage");
const pageNumbers = document.getElementById("page-numbers");
const pageLinks = document.querySelectorAll(".page-link");


const cards = Array.from(dataContainer.querySelectorAll('#Tr2'));

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



//Show Food Details
function affiche(id){

  let Table = document.getElementsByClassName('Table1');
  for(ele of Table){
    for(i of ele.children){
      for(b of i.children){
        if(parseInt(b.children[0].innerHTML) === parseInt(id)){
          // console.log(b.children)//td of every tr in table 
          // b.children[2].children[0].src  //src of img

          let div = document.createElement('div');
          div.id = 'details';
          let Ptitle = document.createElement('p');
          let Pic = document.createElement('img');
          let Price = document.createElement('p');
          let Qt = document.createElement('p');
          let btn = document.createElement('button');

          btn.onclick = ()=>{
            document.body.removeChild(div)
          }

          Pic.src = b.children[2].children[0].src
          Pic.style.width = '200px'
          Pic.style.borderRadius = '78% 22% 34% 66% / 53% 49% 51% 47%'
          Pic.style.alignSelf = 'center'
          Ptitle.innerHTML+= 'Food Name: '  + b.children[1].innerHTML
          Qt.innerHTML+='Quantity: ' + b.children[4].innerHTML
          Price.innerHTML+='Totale Price: ' + b.children[5].innerHTML
          btn.innerHTML = 'Close'

          div.append(Pic,Ptitle,Qt,Price,btn)
          div.style.transform = 'rotateX(0)';
          document.body.appendChild(div)
        }
      }

    }
  }
}