  function checkPass() {
    //   alert('ok');
      const pass1 = document.querySelector('#signupPass1').value;
      const pass2 = document.querySelector('#signupPass2').value;

    //   console.log(pass1);
    //   console.log(pass2);

    if(pass1 == pass2) {
        return true;
    }
    else {
        alert('Passwords do not match!');
        return false;
    } 
  }

   
