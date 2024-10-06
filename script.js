

let items2 = document.querySelector(".sliding");

let itmeactive2 = 0;
let a=0;





let sliding = setInterval(()=>{
    
    slide2()
    
},10000)






function slide2(){

    let x = document.querySelector(".activeslide");
    x.classList.remove('activeslide')

    itmeactive2 ++;
    if(itmeactive2 >2){
        itmeactive2 = 0;
    }


    items2.children[itmeactive2].classList.add('activeslide');
}

function book(containerID) {
    // Get the element with the given ID
    var element = document.querySelector(".containerID");
    
    // Check if the element exists
    if (element) {
      // Change the background color of the element
      element.style.backgroundColor = "#a9a9a9";
    } else {
      console.log("Element with ID '" + containerID + "' not found.");
    }
  }









