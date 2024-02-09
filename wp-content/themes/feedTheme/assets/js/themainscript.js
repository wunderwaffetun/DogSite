window.onerror = ()=>{
    return true
}
document.addEventListener('DOMContentLoaded', () => {
    function fallMenu(){
        let indexOfclickMenu = 0
        const Menus = document.querySelectorAll('.fall_menu_page')
        for(let i = 0; i < Menus.length; i++){
            let currentLiElements = Menus[i].querySelector('.fall_menu_page_elements').querySelectorAll('*')
            let currentLenLine = Number(getComputedStyle(Menus[i].querySelector('.fall_menu_page_elements')).height.slice(0, -2))*((currentLiElements.length - 0.5)/(currentLiElements.length))
            Menus[i].querySelector('.ul_green_line').style.height = `${currentLenLine}px`
            let AllGrLinesLen = getComputedStyle(currentLiElements[0]).left
            for(let j = 0; j<currentLiElements.length; j++){
                let newMiniGreenLine = document.createElement("div");
                newMiniGreenLine.classList.add('newMiniGreenLine')
                newMiniGreenLine.style.width = AllGrLinesLen
                start_top = Number(getComputedStyle(currentLiElements[0]).height.slice(0, -2))/2
                newMiniGreenLine.style.top = `${start_top+(j*2*start_top)}px`
                Menus[i].querySelector('.ul_green_line').append(newMiniGreenLine)  
            }
        }
    }
    fallMenu()
    const cross = document.querySelector('.cross')
    const menu = document.querySelector('.smart_menu')
    const CrossElements = cross.querySelectorAll('*')
    let headerChildElements = menu.querySelectorAll('*')
    
    

    document.body.addEventListener('click', (event)=>{
        let condition = 'true'
        if(menu.classList.contains('menu_active') && event.target != cross){
            if(event.target != menu){
                headerChildElements.forEach((element)=>{
                    if(event.target == element){
                        condition = 'false'
                    }
                })
                CrossElements.forEach((element)=>{
                    if(event.target == element){
                        condition = 'false'
                    }
                })
                if(condition == 'true'){
                    menu.classList.remove('menu_active')
                    CrossElements[0].classList.remove('cross_element_0_active')
                    CrossElements[1].classList.remove('cross_element_1_active')
                    CrossElements[2].classList.remove('cross_element_2_active')
                }
            }
        }
    })
    cross.addEventListener('click', ()=>{
        menu.classList.toggle('menu_active')
        CrossElements[0].classList.toggle('cross_element_0_active')
        CrossElements[1].classList.toggle('cross_element_1_active')
        CrossElements[2].classList.toggle('cross_element_2_active')
    })
    let anchors = document.querySelectorAll('a[href*="#"]')
    for(let anchor of anchors){
        anchor.addEventListener('click', function(event){
            event.preventDefault();
            menu.classList.remove('menu_active')
            CrossElements[0].classList.remove('cross_element_0_active')
            CrossElements[1].classList.remove('cross_element_1_active')
            CrossElements[2].classList.remove('cross_element_2_active')
            const blockID = anchor.getAttribute('href');
            document.querySelector( '' + blockID ).scrollIntoView({
                behavior: "smooth",
                block: "end"
            })
        })
    }
    
});