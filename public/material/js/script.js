var words = ['Cursos de futbol', 'Cursos variados', 'Lo que necesitas', 'Calidad...'];
wordWrapper = document.getElementById('textEffect');
wordWrapperContent = wordWrapper.innerHTML,
addingWord = false,
counter = 1;

setInterval(()=> {

    if(wordWrapperContent.length > 0 && !addingWord) {
        wordWrapper.innerHTML = wordWrapperContent.slice(0, -1);
        wordWrapperContent = wordWrapper.innerHTML;
    } else {
        addingWord = true
    }

    if( addingWord ){
        if (wordWrapperContent.length < words[counter].length ){
            wordWrapper.innerHTML = words[counter].slice(0, wordWrapperContent.length + 1);
            wordWrapperContent = wordWrapper.innerHTML;
        }
        else {
            if(counter < words.length) {
                counter++
            }
            addingWord = false;
        }
    }

    if( counter == words.length) {
        counter = 0;
    }

}, 170);


