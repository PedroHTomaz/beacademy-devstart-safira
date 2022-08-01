let form = document.getElementById("form");
let identifier = document.getElementById("identifier").textContent;

form.addEventListener('submit', function(event){
  
  let check = confirm (identifier + ' será excluído! Tem certeza?');

  if (check !== true){
    event.preventDefault();
  };

});