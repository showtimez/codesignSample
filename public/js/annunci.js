// Inizio animazione Titolo span
async function init () {
    const node = document.querySelector("#type-text")

    await sleep(1000)
    node.innerText = ""
    await node.type('         ')

    while (true) {
      node.style.color = 'var(--dark-color)'; // Imposta il colore rosso per la parola CodeSign
      node.style.textShadow = '1px 1px darkred'; // Aggiunge un'ombra nera con offset 2px
      await node.type('CodeSign')
      await sleep(5000)
      await node.delete('CodeSign')
      node.style.color = ''; // Ripristina il colore originale
      node.style.textShadow = ''; // Rimuove l'ombra
      await node.type('The Future is Here')
      await sleep(2000)
      await node.delete('The Future is Here')
    }

  }
const sleep = time => new Promise(resolve => setTimeout(resolve, time))

class TypeAsync extends HTMLSpanElement {
      get typeInterval () {
      const randomMs = 100 * Math.random()
      return randomMs < 50 ? 10 : randomMs
    }

      async type (text) {
      for (let character of text) {
        this.innerText += character
        await sleep(this.typeInterval)
      }
    }

    async delete (text) {
      for (let character of text) {
        this.innerText = this.innerText.slice(0, this.innerText.length -1)
        await sleep(this.typeInterval)
      }
    }
  }

customElements.define('type-async', TypeAsync, { extends: 'span' })


init()
// Fine animazione Titolo span

// oggetti in vendita: con fetch creiamo la promessa richiamando l'oggetto json all' interno del nostro documento, ci dà il responso e possiamo utilizzarlo
fetch('/json/annunci.json').then( (response)=> response.json() ).then( (data)=> {

    // cattura wrapper radio buttons

    let categoryWrapper = document.querySelector('#categoryWrapper');

    // cattura wrapper delle cards annunci

    let cardsWrapper = document.querySelector('#cardsWrapper');


    // funzione che crea i radio buttons

    function setCategoryFilters(){

    let categories = data.map( (annuncio)=> annuncio.category );

    // ho bisogno di un array con le categorie che non si ripetono, quindi.

    let uniqueCategories = [];

    categories.forEach( (category)=>{

        if( !uniqueCategories.includes(category)){

            uniqueCategories.push(category)

            }


        } )


        uniqueCategories.forEach( (category)=>{


            let div = document.createElement('div');

            div.classList.add('form-check');

            div.innerHTML = `

                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="${category}">
                        <label class="form-check-label" for="${category}">
                        ${category}
                        </label>

            `;


            categoryWrapper.appendChild(div);



            } )



        }

    setCategoryFilters();


    // funzione mostra cards

    function showCards(array){

        // svuotamento wrapper
        cardsWrapper.innerHTML = '';

        // metto le card in ordine decrescente

        array.sort((a, b) => Number(b.price - a.price));


        array.forEach( (element)=>{


            let div = document.createElement('div');

            div.classList.add('col-12' , 'col-md-3', 'my-4', 'customCard', 'resizeLogo1');

            div.innerHTML = `

                            <div class="announcement-card">
                                <p class="h3 customAnnName">${element.image}   ${element.name}</p>
                                <h3> ${element.category}</h3>
                                <h3 class="customAnnPrice">${element.price} €</h3>
                            </div>

            `;


            cardsWrapper.appendChild(div);



        } )

        }

        showCards(data);


        // funzione filtra per categoria, mostra cards (al click sul radio button)

        function filterbyCategory(categoria){


            if(categoria != 'All'){

                let filtered = data.filter( (annuncio)=> annuncio.category == categoria );

                showCards(filtered);

            } else {

                showCards(data);

            }



        }

            // cattura radio buttons

        let checkInputs = document.querySelectorAll('.form-check-input')

        checkInputs.forEach( (checkInput)=>{


            checkInput.addEventListener('click', ()=>{

                filterbyCategory(checkInput.id);

            })


        })


        // cattura range input and number

        let inputPrice = document.querySelector('#inputPrice');

        let incrementNumber = document.querySelector('#incrementNumber');
        let incrementNumber1 = document.querySelector('#incrementNumber1');
        // funzione settaggio valore input price massimo

        function setInputPrice(){
            let prices = data.map((annuncio) => Number(annuncio.price));
            let minPrice = Math.min(...prices);
            let maxPrice = Math.max(...prices);
            inputPrice.min = Math.ceil(minPrice);
            inputPrice.max = Math.ceil(maxPrice);
            inputPrice.value = Math.ceil(maxPrice);
            incrementNumber.innerHTML = Math.ceil(maxPrice);
            incrementNumber1.innerHTML = Math.ceil(minPrice);

        }



        setInputPrice();

        // funzione che filtra per prezzo

        function filterbyPrice(prezzo){

            let filtered = data.filter( (annuncio)=> annuncio.price <= Math.ceil(prezzo));

            showCards(filtered);

        }

        //  evento al cambio dell'input range

        inputPrice.addEventListener('input', ()=>{

            filterbyPrice(inputPrice.value);

            incrementNumber.innerHTML = inputPrice.value;


        } )

        // cattura word input per filtro per parola

        let wordInput = document.querySelector('#wordInput');

        // funzione filtra per parola

        function filterbyWord(nome){

            let filtered = data.filter ( (annuncio)=> annuncio.name.toLowerCase().includes(nome.toLowerCase()) );

            showCards(filtered);

        }

        // evento digitazione parola sull'input

        wordInput.addEventListener('input', ()=>{

            filterbyWord(wordInput.value);

        })

})



// swiper
