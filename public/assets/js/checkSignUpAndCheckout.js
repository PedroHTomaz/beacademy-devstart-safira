function checkCPF () {

  const input = document.getElementById('CPF');
    
    let inputLength = input.value.length;
    
    if (inputLength === 3 || inputLength === 7) {
      input.value += '.';
    } else if (inputLength === 11){
      input.value += '-';
    };

};

function checkNumberCard () {

  const input = document.getElementById('numberCard');
    
    let inputLength = input.value.length;
    
    if (inputLength === 4 || inputLength === 9 || inputLength === 14) {
      input.value += '-';
    };

};

function check_cc_expiration () {

  const input = document.getElementById('cc-expiration');
    
    let inputLength = input.value.length;
    
    if (inputLength === 2) {
      input.value += '/';
    };

};