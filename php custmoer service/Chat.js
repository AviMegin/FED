//home

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}



//contact
function openFormi() {
  document.getElementById("bot").style.display = "block";
  var element = document.getElementById("chat");
   element.classList.toggle("active");

}


onload = init;

function init() {
    var onclick = clickUpdates();
    var btn = document.getElementById("chat");
    btn.addEventListener("click", onclick, false);
}


function clickUpdates() {
    var count = 0;
    var next = function() {
        switch(count) {
            case 0:
            // function click 1 here
            document.getElementById("bot").style.display = "block";
            var element = document.getElementById("chat");
             element.classList.toggle("active");
            break;
            case 1:
            // function click 2 here
            document.getElementById("bot").style.display = "none";
             var element = document.getElementsByClassName("chat active");
             element.classList.toggle("active");
            break;
            case 2:
            // function click 3 here
            console.log("Third Click: The new paragraph gets replaced with another different paragraph.");
            break;



        }
        count = count<2?count+1:2;
    }

    return next;
}



function closeFormi() {
  document.getElementById("bot").style.display = "none";
   var element = document.getElementsByClassName('chat active');
   element.classList.toggle("active");
}
