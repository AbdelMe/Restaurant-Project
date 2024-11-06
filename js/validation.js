let ConfirmBtn = document.getElementById('ConfirmBtn');
let C_Message = document.getElementById('C_Message');





ConfirmBtn.onmouseenter = ()=>{
    // C_Message.style.display = 'block'
    
    C_Message.style.top = '30px'
    // C_Message.style.scale = '1'
    C_Message.style.transition = '1.5s'
    C_Message.innerHTML = 'Ordred Succesfuly'

    setInterval(()=>{
        C_Message.style.display = 'none'
    },3000)

}



