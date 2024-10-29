const body = document.getElementById('body')
const btnDark = document.getElementById('btn-sol')
const btnLight = document.getElementById('btn-lua')
const titleLight = document.getElementById('title-light')
const titleDark = document.getElementById('title-dark')
const imagemLight = document.getElementById('light-imagem')
const imagemDark = document.getElementById('dark-imagem')
const sobre = document.getElementById('sobre')
const footer = document.getElementById('footer')
const linkNav = document.getElementById('link-nav')
const logoNav = document.getElementById('logo-nav')

btnLight.addEventListener('click', () => {
  btnLight.classList.add('hidden')
  btnDark.classList.remove('hidden')
  body.style.backgroundColor = '#000000'
  titleLight.classList.add('hidden')
  titleDark.classList.remove('hidden')
  imagemLight.classList.add('hidden')
  imagemDark.classList.remove('hidden')
  footer.classList.remove('footer-light')
  sobre.classList.remove('text-black')
  sobre.classList.add('text-white')
  linkNav.style.color = "var(--white)"
  logoNav.style.color = "var(--white)"
})

btnDark.addEventListener('click', () => {
  btnDark.classList.add('hidden')
  btnLight.classList.remove('hidden')
  body.style.backgroundColor = '#ffffff'
  titleDark.classList.add('hidden')
  titleLight.classList.remove('hidden')
  imagemDark.classList.add('hidden')
  imagemLight.classList.remove('hidden')
  footer.classList.add('footer-light')
  sobre.classList.remove('text-white')
  sobre.classList.add('text-black')
  linkNav.style.color = "var(--black)"
  logoNav.style.color = "var(--black)"
})
