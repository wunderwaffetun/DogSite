const left_button = document.querySelector('.left_generation_button')
const right_button = document.querySelector('.right_generation_button')

const delayForAnimation = 300

const mainWrapperSlider = document.querySelector('.generation_slider_wrapper')
const presentSlide = document.querySelector('.generation_slider_img_wrapper')
const images = document.querySelectorAll('.generation_slider_img')
const len = images.length



const mainSliderWidth = Number(getComputedStyle(mainWrapperSlider).width.substring(0, getComputedStyle(mainWrapperSlider).width.length-2))

let currentSlide = 0
let previousSlide;
let firstFlagSlide = true; 
let sliderFlag = true;  

function CreateImg(side){
  const pictureElement = document.createElement('div')
  pictureElement.classList.add('slide')
  if(side == 'right'){
    pictureElement.style.right = '-100%'
  }
  else if (side == 'left'){
      pictureElement.style.left = '-100%'
  }
  const img = document.createElement('img')
  img.src = images[currentSlide].src
  img.classList.add('generation_slider_img')
  setTimeout(() => {pictureElement.appendChild(img)}, 5) // если это убрать, то будет неприятное моментальное мелькание вновь созданной картинки

  pictureElement.classList.add('animation')

  
  presentSlide.append(pictureElement)
}

function createStartSlide(){
  document.querySelectorAll('.slide').forEach((elem)=>{
    document.querySelector('.generation_slider_img_wrapper').removeChild(elem)
  })
  const pictureElement = document.createElement('div')
  pictureElement.classList.add('slide')
  const img = document.createElement('img')
  img.classList.add('generation_slider_img')
  img.src = images[currentSlide].src
  pictureElement.appendChild(img)
  presentSlide.appendChild(pictureElement)
}

function defineNumSlide(button){
  if(button == 'left'){
      if (currentSlide == 0){
          currentSlide = len - 1
      }
      else{
          currentSlide -= 1 
      }
  }
  else if(button == 'right'){
      if (currentSlide == len - 1){
          currentSlide = 0
      }
      else{
          currentSlide += 1 
      }
  }
}

function showSlide(button){
  CreateImg(button)
  const newImages = document.querySelectorAll('.slide')

  if (newImages.length > 2){
      document.querySelector('.generation_slider_img_wrapper').removeChild(newImages[0])
  }
  
  newImages.forEach(elem =>{
      if(elem.classList.contains('animation')){
          let m = 0
          elem.style.left = null
          elem.style.right = null
          let timer = setInterval(()=>{
              m += 10
              if(button == 'right'){
                  elem.style.left = `calc(100% - ${m}px)`
              }
              else{
                  elem.style.right = `calc(100% - ${m}px)`
              }
              if (m>=mainSliderWidth){
                  clearInterval(timer)
              }
          }, 1)
          elem.classList.remove('animation')
      }
      else{
          let m = 0
          if (button != 'right'){
              elem.style.left = null
          }
          let timer = setInterval(()=>{
              m += 10
              if(button == 'right'){
                  elem.style.left = `calc(-${m}px)`
              }else{
                  
                  elem.style.right = `calc(-${m}px)`
              }
              if (m>=mainSliderWidth){
                  clearInterval(timer)
              }
          }, 1)
      }
  })
}


function changeWrapper(button){
  setTimeout(()=>{
      start()
  }, delayForAnimation)
  showSlide(button)
}
function mainFunction(){
previousSlide = currentSlide
if (event.target == left_button){
  defineNumSlide('left')
  changeWrapper('left')
}
else if(event.target == right_button){
  defineNumSlide('right')
  changeWrapper('right')
}
}

function start(){
  if (len > 1){
      document.querySelector('.generation_slider_buttons').addEventListener('click', mainFunction, {
          once: true
      })
  }
}

createStartSlide()
start()
