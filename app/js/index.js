const moreLess = document.querySelector('span.toggle');

moreLess.addEventListener('click', toggleArticle);

function toggleArticle() {
    this.closest('div').querySelector('span').classList.toggle('showLess');
    if(this.classList.contains('read')) {
        this.innerHTML = 'read more...';
    } 
    else {
        this.innerHTML = 'show less';
    }
    this.classList.toggle('read');
}
//////////////////// VALIDARE /////////////////////
document.querySelector('#loginform').addEventListener('submit', validate);


function checkEmail(){
    const email = document.querySelector('#exampleInputEmail1');
    if(email.value.endsWith('.com')){
        email.classList.remove('is-invalid');
        document.querySelector('#emailHelp').classList.add('showLess');
        return true;
    }
    else {
        email.classList.add('is-invalid');
        document.querySelector('#emailHelp').classList.remove('showLess');
        email.focus();
        return false;
    }
}

function checkPass(){
    const pass = document.querySelector('#exampleInputPassword1');
    if(!pass.value.match(/\d/)){
        pass.classList.add('is-invalid');
        document.querySelector('#passHelp12').classList.remove('showLess');
        pass.focus();
        return false;
    }
    else {
        pass.classList.remove('is-invalid');
        document.querySelector('#passHelp12').classList.add('showLess');
        return true;
    }
}

function validate(event){
    if(checkEmail() && checkPass()){ 
        // alert('ok');
        return true;
    }
    else{
        // alert('not OK');
        event.preventDefault();
        return false;
    }
}



//// Subscribe to my newsletter ////


