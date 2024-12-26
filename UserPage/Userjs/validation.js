let Add = document.getElementById("Add");
let Remove = document.getElementById("Remove");
let Q_Product = document.getElementById("Q_Product");
let Qte = document.getElementById('Qte');

let Totalitems = document.getElementById("Totalitems");
let TotalPrice = document.getElementById("TotalPrice");
let Cr_Price = document.getElementById("Cr_Price");
let discount = document.querySelector("#discount_Num span");
let Past_Price = document.querySelector("#Past_Price");

Past_Price.innerHTML = parseInt(Cr_Price.innerHTML) + parseInt(Cr_Price.innerHTML) * (parseInt(discount.innerHTML) /100)
parseFloat(Past_Price.innerHTML).toFixed(2)

//Update Price After Discount
Cr_Price.innerHTML = parseInt(Cr_Price.innerHTML) - parseInt(Cr_Price.innerHTML) * (parseInt(discount.innerHTML) /100);

let TextInpt = document.getElementById("TextInpt");
TotalPrice.innerHTML = Cr_Price.innerHTML;
TextInpt.value = parseFloat(TotalPrice.innerHTML);

//Add To Price When Quantity value changed
Add.onclick = () => {
  Q_Product.innerHTML = parseInt(Q_Product.innerHTML) + 1;
  Totalitems.innerHTML = parseInt(Q_Product.innerHTML);
  if(document.getElementById('discount_Num').style.display === 'none'){
    TotalPrice.innerHTML = parseFloat(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
    
    TextInpt.value = parseFloat(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
    Qte.value = document.getElementById('Q_Product').innerHTML;
  }
  else{
    TotalPrice.innerHTML = parseFloat(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
    TotalPrice.innerHTML = parseFloat(TotalPrice.innerHTML).toFixed(2)

    TextInpt.value = parseFloat(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
    TextInpt.value = parseFloat(TextInpt.value).toFixed(2);
    Qte.value = document.getElementById('Q_Product').innerHTML;
  }
};

//Remove From Price When Quantity value changed
Remove.onclick = () => {
  if (parseInt(Q_Product.innerHTML) == 1) {
    return;
  } else {
    Q_Product.innerHTML = parseInt(Q_Product.innerHTML) - 1;
    Totalitems.innerHTML = parseInt(Q_Product.innerHTML);
    if(document.getElementById('discount_Num').style.display === 'none'){
      TotalPrice.innerHTML = parseFloat(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);

      TextInpt.value = parseFloat(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
      Qte.value = document.getElementById('Q_Product').innerHTML;

    }
    else{
      TotalPrice.innerHTML = parseFloat(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
      TotalPrice.innerHTML = parseFloat(TotalPrice.innerHTML).toFixed(2)

      TextInpt.value = parseFloat(Cr_Price.innerHTML) * parseInt(Q_Product.innerHTML);
      TextInpt.value = parseFloat(TextInpt.value).toFixed(2);
      Qte.value = document.getElementById('Q_Product').innerHTML;
    }
  }
};

//Leave This Page And Back To Home
let Trash = document.getElementById("Trash");
let product = document.getElementById("P_R");
Trash.onclick = () => {
  document.body.remove(product);
  document.write(
    '<body style="background-color:#2B7A78 ; display:flex ;flex-direction: column;height:100vh; justify-content: center ; align-items: center; "></body>'
  );
  document.write('<img src="Picture/check.png" style="width:80px">');
  document.write('<h1 style="color:rgb(39, 255, 39)">Done!</h1>');

  setTimeout(() => {
    window.location = "Prof.php";
  }, 300);
};


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



//Hide Discount if Number = 0
let discount_Num = document.querySelector('#discount_Num span');
if(parseInt(discount_Num.innerHTML)===0){
  document.getElementById('discount_Num').style.display = 'none'
}

//Form Validation
let ppp = document.getElementById("C_Message");
if (ppp.style.display == "block") {
  // console.log("it's working");
  let b = document.createElement("img");
  b.src = "Picture/fermer.png";
  b.id = "simoooo";
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