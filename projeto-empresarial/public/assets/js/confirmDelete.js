let form = document.getElementById("form");
let identifier = document.getElementById("identifier").textContent;

form.addEventListener('submit', function(event){
  
  let check = confirm (identifier + ' será excluído!');

  if (check !== true){
    event.preventDefault();
  };

});