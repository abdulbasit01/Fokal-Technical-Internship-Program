function check(){
    let checkInp=document.getElementsByTagName('input');
    var lenghtOfInputs= checkInp.length;
    for (var i=0; i<=lenghtOfInputs; i++){
        if(checkInp[i].value==""){
            alert('field is ampty');
            checkInp[i].style.backgroundImage="url('error.png')";
            checkInp[i].style.backgroundRepeat = "no-repeat";
            checkInp[i].style.backgroundPosition = "95% 50% ";
            
        }

        else{
            console.log(checkInp[i].value + '\n')
        }
    }
}
function onFocus(x) {
    x.style.borderBottom = "black solid";
    x.style.color = "black";
  }
function onBlur(x) {
    x.style.border= "None";
  }