document.addEventListener('DOMContentLoaded', ()=>{
    const circles_conteiner = document.querySelector('.slider_circles')
    const circles = document.querySelectorAll('.circle')
    const incircles = document.querySelectorAll('.in_circle')
    const buttons = document.querySelector('.slider_buttons')
    const button = document.querySelectorAll('.button')
    const sliderline = document.querySelector('.line_pictures')
    const texts = document.querySelectorAll('.img_text')
    let currentslide = 0
    
    function showslide(slide){
        sliderline.style.left = `-${slide*100}%`
    }
    function textVisible(slide){
        texts.forEach(text =>{
            text.style.opacity = '0'
        })
        setTimeout(() => {
            texts[slide].style.opacity = '1'
        }, 500)
        
    }
    function cross_point(slide){
        incircles.forEach(item =>{
            item.style.opacity = '0'
        })
        incircles[slide].style.opacity = '1'
    }
    circles_conteiner.addEventListener('click', (event)=>{
        for(let i = 0; i < circles.length; i++){
            if (event.target == circles[i] || event.target == incircles[i]){
                cross_point(i)
                showslide(i)
                textVisible(i)
            }
        }
    })
    buttons.addEventListener('click', (event)=>{
            if (event.target == button[0]){
                if (currentslide == 0){
                    currentslide = 2
                }
                else{
                    currentslide = currentslide - 1
                }
            }
            if (event.target == button[1]){
                if(currentslide == 2){
                    currentslide = 0
                }
                else{
                    currentslide = currentslide + 1
                }
            }
            showslide(currentslide)
            cross_point(currentslide)
            textVisible(currentslide)
            
    })
    
})