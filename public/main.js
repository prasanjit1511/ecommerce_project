

// ------------JS FOR MENU BUTTON----------

const menuIcons = document.querySelector('.menu-icon')
const menuItems = document.querySelector('#MenuItems')

menuItems.style.maxHeight = "0px";

menuIcons.addEventListener('click', () => {

  if(menuItems.style.maxHeight == "0px"){
    menuItems.style.maxHeight = "200px";
  }
  else {
    menuItems.style.maxHeight = "0px";
  }
})

	// -------- JS FOR PRODUCT GALLERY ----------

  const productImg = document.querySelector('#product-img')
  const smallImg = document.querySelectorAll('.small-img')

  smallImg[0].addEventListener('click', () => {
    productImg.src = smallImg[0].src;
  })
  smallImg[1].addEventListener('click', () => {
    productImg.src = smallImg[1].src;
  })
  smallImg[2].addEventListener('click', () => {
    productImg.src = smallImg[2].src;
  })
  smallImg[3].addEventListener('click', () => {
    productImg.src = smallImg[3].src;
  })

  // -------- JS FOR TOGGLE FORM ----------

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






