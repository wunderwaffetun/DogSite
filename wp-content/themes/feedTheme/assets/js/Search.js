document.addEventListener('DOMContentLoaded', ()=>{
    const inputOfSearch = document.querySelector('.input_of_searcher')
    const buttonOfSearch = document.querySelector('.button_of_searcher')
    const ItemsOfSearcher = document.querySelectorAll('.Item')       
    const divSearcher = document.querySelector('.main_search_element')
    const adviseSearcher = document.querySelector('.advice_searcher_element')
    const labelSearcher = document.querySelector('.label_input_of_searcher')
    const DefaultElement = document.querySelector('.Default_item')
    const wp_admin_bar = document.querySelector('#wpadminbar')
    const hrefs = document.querySelectorAll('a')
    hrefs.forEach(element =>{
        element.addEventListener('click', ()=>{
            inputOfSearch.value = ""
        })
    })
    let wp_admin_height = 0
    try {
        wp_admin_height = Number(getComputedStyle(wp_admin_bar).height.substring(0, 2))
    }catch{}
    const coordinatesSearcher = { 
        coordX: divSearcher.getBoundingClientRect().left + window.pageXOffset,
        coordY: divSearcher.getBoundingClientRect().top + window.pageYOffset,
        heightElem: getComputedStyle(divSearcher).height,
        widthElem: getComputedStyle(divSearcher).width
    }
    let currentElement = -1 
    let SearchingStrings = [] 
    let firstClick = true
    let EmptyScroll
    let elementAdviseHeight = Number(getComputedStyle(DefaultElement).getPropertyValue('--ElementSearcherHeight').substring(0,3))
    let AdviceMaxHeight = Number(getComputedStyle(adviseSearcher).getPropertyValue('--SearcherWidth').substring(0,4)) 
    ItemsOfSearcher.forEach(element => {
        SearchingStrings.push(element.innerHTML)
    })
    const CoordxAdvise = coordinatesSearcher.coordX 
    const CoordyAdvise = coordinatesSearcher.coordY + + coordinatesSearcher.heightElem.substring(0,2)
    let adviseSearcherfocus = false 
    adviseSearcher.style.width = `${Number(getComputedStyle(inputOfSearch).width.substring(0, getComputedStyle(inputOfSearch).width.length-2))}px`
    adviseSearcher.style.top = `${CoordyAdvise - wp_admin_height}px`
    adviseSearcher.style.left = `${CoordxAdvise}px`
    DefaultElement.style.width = `${Number(getComputedStyle(inputOfSearch).width.substring(0, getComputedStyle(inputOfSearch).width.length-2))}px`
    DefaultElement.style.top = `${CoordyAdvise - wp_admin_height}px`
    DefaultElement.style.left = `${CoordxAdvise}px`
    if(inputOfSearch.value ==""){
        labelSearcher.innerHTML = "Введите название товара" 
    }

    
    function SearherScroll(){
        let inputDataSearch;
        if (inputOfSearch.value != ""){
            inputDataSearch = inputOfSearch.value
        }
        else if(inputOfSearch.value == "" && labelSearcher.innerHTML != ""){
            inputDataSearch = EmptyScroll
            document.querySelectorAll('.advice_searcher_element_children').forEach(elem =>{
                elem.classList.remove('advice_searcher_element_children_active')
            })
            
        }
        ItemsOfSearcher.forEach(element =>{
            if (element.innerHTML.toLocaleLowerCase() == inputDataSearch.toLocaleLowerCase()){
                element.scrollIntoView({
                    behavior: "smooth",
                    block: "end"
                })
            }
        })
    }


    function CreateElementSearcher(html){ 
        const div = document.createElement('div')
        div.classList.add('advice_searcher_element_children')
        div.innerHTML = `${html}`
        adviseSearcher.append(div)
    }

    function ScrollElementNewFunction(event){
        if((inputOfSearch.value !="" || labelSearcher.innerText !="") && event.code == 'Enter'){
            SearherScroll()
            adviseSearcher.style.display = 'none'
            currentElement = -1
            try{
                AdvisesAnimate.forEach(element => {
                    element.classList.remove('advice_searcher_element_children_active')
                })
            }
            catch{}
        }
        
    }

    function ReplaycingElements(string){ 
        try{
            let Arr1 = string.split("")
            let Arr2 = inputOfSearch.value.split("")
            for(let i = 0; i < inputOfSearch.value.split("").length; i++){
                Arr1[i] = Arr2[i]
            }
            string = Arr1.join().replaceAll(",", "")
            return string
        }
        catch{}
    }

    SearchingStrings.forEach(element => {
        CreateElementSearcher(element)
    })

    

    document.addEventListener('keyup', ScrollElementNewFunction(event))

    const adviseSearcherChildren = adviseSearcher.querySelectorAll('*')
    document.addEventListener('keyup', (event)=>{
        if((event.code == 'Enter')&&(adviseSearcherfocus == true)){
            SearherScroll()
            adviseSearcher.style.display = 'none'
            currentElement = -1
            try{
                AdvisesAnimate.forEach(element => {
                    element.classList.remove('advice_searcher_element_children_active')
                })
            }
            catch{}
        }
    })





    document.addEventListener('click', (event)=>{ 
        if(event.target == inputOfSearch){
            if(firstClick == true){
                DefaultElement.style.display = 'flex'
                firstClick = false
            }
            adviseSearcher.style.display = 'block'
            adviseSearcherfocus = true
            labelSearcher.style.opacity = '0'
            labelSearcher.style.display = 'none'


        } else {
            DefaultElement.style.display = 'none'
            adviseSearcher.style.display = 'none'
            adviseSearcherfocus = false
            if (inputOfSearch.value ==""){
                labelSearcher.style.display = 'flex'
                labelSearcher.style.opacity = '.4'
            }
            if(inputOfSearch.value ==""){
                labelSearcher.textContent = "Введите название товара" 
            }
        }
    })

    function ScrollForSingleElement(element){
        inputOfSearch.value = element.innerHTML
        SearherScroll()
        labelSearcher.textContent = ""
        adviseSearcherChildren.forEach(element =>{    
            element.style.display = 'none'
        })
    }

    buttonOfSearch.addEventListener('click', ()=>{
        SearherScroll()
        labelSearcher.textContent = ""
    })


    adviseSearcherChildren.forEach((element)=>{
        element.addEventListener('click', () => {
            ScrollForSingleElement(element)
        })
        
        
    })


    inputOfSearch.addEventListener('keyup', (event) => {
        DefaultElement.style.display = 'none'
        adviseSearcher.style.display = 'block' 
        
        if(inputOfSearch.value != ""){
            try{
                AdvisesAnimate.forEach(element => {
                    element.classList.remove('advice_searcher_element_children_active')
                })
            }
            catch{}
        }
        if(!((event.code == "ArrowUp") || (event.code == "ArrowDown") || (event.code == "ArrowRight")|| (event.code == "Tab") || (event.code == "ArrowLeft"))){
                currentElement = -1
                try{
                    AdvisesAnimate.forEach(element => {
                        element.classList.remove('advice_searcher_element_children_active')
                    })
                }
                catch{}
            }
        let currentValue = inputOfSearch.value.toLocaleLowerCase()
        let newAdviseSearcherChildren = new Array()
        let AdvisesAnimate = new Array()
        adviseSearcherChildren.forEach(element =>{
            includeFlag = true
            ArrayOfSymbols = currentValue.split("")
            SplitElement = element.innerHTML.split("")
            for(let i = 0; i<ArrayOfSymbols.length; i++){
                let symbol = ArrayOfSymbols[i]
                let symbolPattern = SplitElement[i]
                try{symbol = ArrayOfSymbols[i].toLowerCase();symbolPattern = SplitElement[i].toLowerCase()}catch{includeFlag = false}
                if(symbol != symbolPattern || ArrayOfSymbols.length > SplitElement.length){
                    includeFlag = false
                }
            }
            if(includeFlag == true){ 
                element.style.display = 'flex'
                AdvisesAnimate.push(element)
            }
            else{
                element.style.display = 'none'
            }
        })
        //
        adviseSearcherChildren.forEach(element =>{
            if(getComputedStyle(element).display == 'flex'){
                newAdviseSearcherChildren.push(element.innerHTML)
            }
        })
        labelSearcher.style.display = 'flex'
        labelSearcher.style.opacity = '.4'
        labelSearcher.textContent = ReplaycingElements(newAdviseSearcherChildren[0])   
        if(inputOfSearch.value ==""){
            labelSearcher.textContent = "Введите название товара"  
        }
        if((newAdviseSearcherChildren != [])&&((event.code == "ArrowUp") || (event.code == "ArrowDown") || (event.code == "ArrowRight") || (event.code == "Tab"))){
            switch(event.code){ 
                case "ArrowUp":
                    if (currentElement == -1 ){
                        currentElement = newAdviseSearcherChildren.length-1
                    }
                    else{
                        currentElement -= 1
                    }
                    break
                case "ArrowDown":
                    if (currentElement == newAdviseSearcherChildren.length-1){
                        currentElement = -1
                        try{
                            AdvisesAnimate.forEach(element => {
                                element.classList.remove('advice_searcher_element_children_active')                            
                            })
                        }
                        catch{}
                    }
                    else{
                        currentElement += 1
                    }
                    break
                case "ArrowRight":
                    try{
                        inputOfSearch.value = AdvisesAnimate[currentElement].innerHTML 
                    }catch{
                        inputOfSearch.value = AdvisesAnimate[currentElement].innerText
                    }
                    labelSearcher.textContent = ""
                    try{
                        AdvisesAnimate.forEach(element => {
                            element.classList.remove('advice_searcher_element_children_active')
                        })
                    }
                    catch{}
                    currentElement = -1
                    break
                //Here u can write tab case 
                }
                try{
                    AdvisesAnimate.forEach(element => {
                        element.classList.remove('advice_searcher_element_children_active')
                    })
                }
                catch{}
                try{
                    AdvisesAnimate[currentElement].classList.add('advice_searcher_element_children_active')
                    labelSearcher.textContent = ReplaycingElements(AdvisesAnimate[currentElement].innerHTML)
                    EmptyScroll = labelSearcher.textContent
                    curElementCoordY =AdvisesAnimate[currentElement].getBoundingClientRect().top - CoordyAdvise
                    if(curElementCoordY>AdviceMaxHeight-1 && curElementCoordY<AdviceMaxHeight+1){
                        adviseSearcher.scrollBy(0, 30+curElementCoordY-AdviceMaxHeight)
                    }
                    else if(curElementCoordY< 0 && curElementCoordY>-(elementAdviseHeight + 2)){
                        adviseSearcher.scrollBy(0, curElementCoordY)
                    }
                    else if(curElementCoordY > elementAdviseHeight + AdviceMaxHeight +2){
                        adviseSearcher.scrollTo(0, adviseSearcher.scrollHeight)
                    }  
                    else if(curElementCoordY<-(elementAdviseHeight + 2)){
                        adviseSearcher.scrollTo(0, 0)
                    }
                }
                catch{}
            
        }
        else if(newAdviseSearcherChildren.length == 0){
            DefaultElement.style.display = 'flex'
        }
    }) 
})