// logica circle

// cattura opener
let opener = document.querySelector('.opener');

// cattura div moved
let movedDivs = document.querySelectorAll('.moved');

// variabile d'appoggio per far tornare indietro i moved

let conferma = false;

// array di oggetti, docenti

let teachers = [


    { name : 'Valerio', languages : ['HTML', 'CSS', 'JS', 'Pokémon'], url : '/media/OIP-removebg-preview.png'},
    { name : 'Francesco', languages : ['HTML', 'CSS', 'Bootstrap', 'DOM'], url : '/media/OIP-removebg-preview.png'},
    { name : 'Paola', languages : ['PHP', 'OOP', 'Laravel', 'Galga'], url : '/media/OIP-removebg-preview.png'},
    { name : 'Robbolo', languages : ['React', 'Database', 'Manga'], url : '/media/OIP-removebg-preview.png'},


]

// cattura cardWrapper
let cardWrapper = document.querySelector('#cardWrapper');


movedDivs.forEach((moved, i)=>{


    moved.style.backgroundImage = `url('${teachers[i].url}')`;

    // evento click per far apparire gli amici docenti

    moved.addEventListener('click', ()=>{


        // console.log(teachers[i]);

        cardWrapper.innerHTML = '';

        let div = document.createElement('div');

        div.classList.add('teacher-card');

        div.innerHTML = `
                    <p class="h3">${teachers[i].name}</p>
                    <p>${teachers[i].languages}</p>
        `;

        cardWrapper.appendChild(div);


        // catturo la singola card per cambiare immagine

        let card = document.querySelector('.teacher-card');

        card.style.backgroundImage=`url('${teachers[i].url}')`;


    })

})


// evento su opener

opener.addEventListener('click', ()=>{


    if(conferma == false){


        conferma = true;

        movedDivs.forEach( (moved, i)=>{

            let angle = (360 * i) / movedDivs.length;

            moved.style.transform = `rotate(${angle}deg) translate(150px) rotate(-${angle}deg)`;

            opener.innerHTML = `<i class="fa-solid fa-minus logo fa-5x"></i>`;


        })

    } else {

        conferma = false;

        cardWrapper.innerHTML = '';

        movedDivs.forEach( (moved)=>{

            // let angle = (360 * i) / movedDivs.length;

            moved.style.transform = `rotate(0deg) translate(0px)`;

            opener.innerHTML = `<i class="fa-solid fa-plus logo fa-5x"></i>`;


        })


    }




})
