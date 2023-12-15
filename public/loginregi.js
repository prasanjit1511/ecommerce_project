var loginForm = document.querySelector('#loginForm')
   var regForm = document.querySelector('#regForm')
var indicator = document.querySelector('#indicator')
var loginpo = document.querySelector('#login')
var registerpo = document.querySelector('#register')

	registerpo.addEventListener('click', () => {
    regForm.style.transform = "translateX(0px)"
    loginForm.style.transform = "translateX(0px)"
	indicator.style.transform = "translateX(100px)"
  })

    loginpo.addEventListener('click', () => {
    regForm.style.transform = "translateX(300px)"
    loginForm.style.transform = "translateX(300px)"
	indicator.style.transform = "translateX(0px)"
  })