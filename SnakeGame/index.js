function displayName() {
  var name = document.getElementById('name').value;


  if(name==0){
    alert('Please Enter Name');
    }
    else{

       localStorage.setItem("name", name);
window.location.href="snakegame.html";
    }

}

function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
