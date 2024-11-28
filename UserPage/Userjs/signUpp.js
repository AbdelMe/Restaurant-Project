let ppp = document.getElementById("C_Message");
if (ppp.style.display == "block") {
  let b = document.createElement("img");
  b.src = "Picture/fermer.png";
  b.id = "simoo";
  b.style.display = "block";
  b.style.position = "absolute";
  b.style.top = "0";
  b.style.zIndex = "200";
  b.style.width = "25px";
  b.style.translate = "475px 125px";
  b.style.cursor = "pointer";

  document.body.appendChild(b);
}
let ccc = document.getElementById("simoo");
ccc.onclick = () => {
  ppp.style.scale = "0";
  ppp.style.transition = ".4s";

  ccc.style.scale = "0";
  ccc.style.transition = ".4s";
};


