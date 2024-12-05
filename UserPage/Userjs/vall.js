let Add = document.getElementById("Add");
let Remove = document.getElementById("Remove");
let Q_Product = document.getElementById("Q_Product");
let Qte = document.getElementById('Qte');

let Totalitems = document.getElementById("Totalitems");
let TotalPrice = document.getElementById("TotalPrice");
let Cr_Price = document.getElementById("Cr_Price");

// let T_Price = document.getElementById('T_Price');
let TextInpt = document.getElementById("TextInpt");

TotalPrice.innerHTML = Cr_Price.innerHTML;
// T_Price.innerHTML = parseInt(TotalPrice.innerHTML)
TextInpt.value = parseInt(TotalPrice.innerHTML);

Add.onclick = () => {
  Q_Product.innerHTML = parseInt(Q_Product.innerHTML) + 1;
  Totalitems.innerHTML = parseInt(Q_Product.innerHTML);
  TotalPrice.innerHTML =parseInt(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
  TextInpt.value = parseInt(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
  Qte.value = document.getElementById('Q_Product').innerHTML
};

Remove.onclick = () => {
  if (parseInt(Q_Product.innerHTML) == 1) {
    return;
  } else {
    Q_Product.innerHTML = parseInt(Q_Product.innerHTML) - 1;
    Totalitems.innerHTML = parseInt(Q_Product.innerHTML);
    TotalPrice.innerHTML =parseInt(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
    TextInpt.value =parseInt(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
    Qte.value = document.getElementById('Q_Product').innerHTML
  }
};

let Trash = document.getElementById("Trash");
let product = document.getElementById("P_R");
Trash.onclick = () => {
  document.body.remove(product);
  document.write(
    '<body style="background-color:#2d3035 ; display:flex ;flex-direction: column;height:100vh; justify-content: center ; align-items: center; "></body>'
  );
  document.write('<img src="Picture/check.png" style="width:80px">');
  document.write('<h1 style="color:rgb(39, 255, 39)">Done!</h1>');

  setTimeout(() => {
    window.location = "Prof.php";
  }, 600);
};

// Rating 

// let bbb = document.querySelectorAll(".star");
// bbb.forEach((ele) => {
//   ele.onclick = () => {
//     for (pre of ele.children) {
//       pre.src = "Picture/Star/star (1).png";
//     }
//   };
// });

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








// let viewMore = document.getElementById('viewM');
// viewMore.addEventListener('click',()=>{
//   // document.querySelector('.Total').classList.remove('Total')
//   let v = document.querySelector('.Total')
//   let b = document.querySelector('.Descrip');
//   // document.querySelector('.product').removeChild(v);
//   // // document.querySelector('.product').appendChild(document.querySelector('.Descrip'))
//   // document.querySelector('.Total').style.display = 'block'
//   // document.querySelector('.Total').style.scale = '1'
//   // document.querySelector('.Total').style.transition = '1s'
//   v.style.display = 'none';
//   b.style.display = 'block'
//   b.style.transform = 'rotateX(0deg)'
//   b.style.transition = '.5s'
//   // console.log('done')


// })


let discount_Num = document.querySelector('#discount_Num span');
console.log(parseInt(discount_Num.innerHTML))
if(parseInt(discount_Num.innerHTML)===0){
  document.getElementById('discount_Num').style.display = 'none'
}



let ppp = document.getElementById("C_Message");
if (ppp.style.display == "block") {
  // console.log("ist work");
  let b = document.createElement("img");
  b.src = "Picture/fermer.png";
  b.id = "simoooo";
  // b.style.display = 'block'
  b.style.position = "absolute";
  b.style.top = "0";
  b.style.width = "25px";
  b.style.translate = "-200px 40px";
  b.style.cursor = "pointer";

  document.body.appendChild(b);
}
let ccc = document.getElementById("simoooo");
ccc.onclick = () => {
  ppp.style.scale = "0";
  ppp.style.transition = ".4s";

  ccc.style.scale = "0";
  ccc.style.transition = ".4s";
};