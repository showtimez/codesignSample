
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

// inserimento frase sotto animazione

  const typeText = document.getElementById('type-text');
  typeText.addEventListener('animationiteration', () => {
    const lineBreak = document.createElement('br');
    typeText.parentNode.insertBefore(lineBreak, typeText.nextSibling);
  });




//   counter lines
let contaScritte = document.getElementById('writeCounter');

function createInterval(finalNumber, element){

let counter = 0;
let interval = setInterval( ()=>{

        if(counter < finalNumber){

            counter++
            element.innerHTML = counter;


        } else {

            clearInterval(interval);

        }

    }, 2);

};

createInterval(150000, writeCounter);


// counter dev
let contaDev = document.getElementById('devCounter');

function createInterval2(finalNumber, element) {

    let counterDev = 0;
    let interval2 = setInterval( ()=>{

        if(counterDev < finalNumber){

            counterDev++
            element.innerHTML = counterDev;


        } else {

            clearInterval(interval2);

        }

    },20);

}
createInterval2(1000000, contaDev);




// Evento mouse enter-leave corsi

let corsi = document.querySelectorAll('.resizeLogo');

// cattura delle card
let columns = document.querySelectorAll('.col-custom');

// variabile d'appoggio per far ritornare tutto alle origini
let columnsConfirm = false;

columns.forEach( (colonna, i)=>{


    // alla singola colonna attacco l'evento mouseenter

        colonna.addEventListener('mouseenter', ()=>{

        if(columnsConfirm == false){

            corsi[i].classList.remove('mouseMv1');
            corsi[i].classList.add('mouseMv2');


        } else {


        }

        })



    // alla singola colonna attacco l'evento mouseleave

    colonna.addEventListener('mouseleave', ()=>{


        if(columnsConfirm == false){

            corsi[i].classList.remove('mouseMv2');
          corsi[i].classList.add('mouseMv1');


            columnsConfirm = false;

        } else {

            // alla seconda uscita

            // corsi[i].classList.add('mouseMv1');

            // columnsConfirm = false;

        }

    })


});



// fine eventi corsi
