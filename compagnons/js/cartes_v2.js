//DROPDOWN MENU FILTERS (mobile et tablette)

const toggleBtn = document.querySelector('.programmation_filters_toggleBtn');
const dropdown = document.querySelector('.programmation_filters');

if(toggleBtn){
    toggleBtn.addEventListener('click', () =>{
        dropdown.classList.toggle('programmation_filters--open');
    })
}

//CARTES

let cartes = document.querySelectorAll('.carte');
let dateActuelle = new Date();
const messageNoEvent = document.querySelector('#noEvent');

// AFFICHER CHRONOLOGIQUEMENT

if(cartes){

    cartes = Array.from(cartes).sort(function(a, b) {
        let dateA = new Date(a.querySelector("#date").innerText).getTime();
        let dateB = new Date(b.querySelector("#date").innerText).getTime();
        return dateA - dateB;
    });
    
    let conteneurCartes = document.querySelector('.programmation_evenements');
    if (conteneurCartes) {
        conteneurCartes.innerHTML = '';
    
        cartes.forEach(carte => {
            if (new Date(carte.querySelector('#date').textContent) >= dateActuelle) {
                conteneurCartes.appendChild(carte.cloneNode(true));
                carte.style.display = "block";
            } else {
                carte.style.display = "none";
            }
        });
    }
    
    let conteneurAccueil = document.querySelector('.accueil_programmation_container');
    if (conteneurAccueil) {
        conteneurAccueil.innerHTML = '';
    
        for (let i = 0; i <= 3 && i < cartes.length; i++) {
            let carte = cartes[i].cloneNode(true);
            if (new Date(carte.querySelector('#date').textContent) >= dateActuelle) {
                conteneurAccueil.appendChild(carte);
                carte.style.display = "block";
            }
        }
    }
    
    //FILTRES DE RECHERCHE
    
    if(conteneurCartes){
    
    const searchBar = document.querySelector('#search');
    const datePicker = document.querySelector('#date_event');
    const disciplineChoix = document.querySelector('#discipline');
    const gratuitCheckbox = document.querySelector('#gratuit');
    const familialCheckbox = document.querySelector('#familial');
    const alerte = document.querySelector('#alerte');
    
    function filtrerCartes() {
        const motCle = searchBar.value.toLowerCase();
        const date = datePicker.value;
        const discipline = disciplineChoix.value;
        const gratuit = gratuitCheckbox.checked;
        const familial = familialCheckbox.checked;
    
        let asResult = false;
    
        conteneurCartes.childNodes.forEach(carte => {
                const carteTitre = carte.querySelector('.carte_infos_titres_titre').textContent.toLowerCase();
                const carteDesc = carte.querySelector('.carte_infos_hover_desc').textContent.toLowerCase();
                const carteArtiste = carte.querySelector('#artiste').textContent.toLowerCase();
                const carteDate = carte.querySelector('#date').textContent;
                const carteDiscipline = carte.querySelector('#disciplines').textContent.toLowerCase();
                const carteGratuit = carte.querySelector('#gratuit').dataset.value === 'true';
                const carteFamilial = carte.querySelector('#familial').dataset.value === 'true';
    
                const matchMotCle = carteTitre.includes(motCle) || carteDesc.includes(motCle) || carteArtiste.includes(motCle);
                const matchDate = date === '' || new Date(carteDate).toISOString().split('T')[0] === new Date(date).toISOString().split('T')[0];
                const matchDiscipline = discipline === 'all' || carteDiscipline.includes(discipline);
                const matchGratuit = !gratuit || (gratuit && carteGratuit);
                const matchFamilial = !familial || (familial && carteFamilial);
    
                if (matchMotCle && matchDate && matchDiscipline && matchGratuit && matchFamilial) {
                    carte.style.display = 'block';
                    asResult = true;
                } else {
                    carte.style.display = 'none';
                }
            }
        );
    
        if(!asResult){
            alerte.style.display = "block";
        }else{
            alerte.style.display = "none";
        }
    }
    
    searchBar.addEventListener('input', filtrerCartes);
    datePicker.addEventListener('change', filtrerCartes);
    datePicker.addEventListener('change', () =>{
        let datePickerText = document.querySelector('.datepicker-toggle-button-text');
        datePickerText.innerText = datePicker.value;
        if(!datePicker.value){
            datePickerText.innerText = "Filtrer par date"
        }
    })
    disciplineChoix.addEventListener('change', filtrerCartes);
    gratuitCheckbox.addEventListener('change', filtrerCartes);
    familialCheckbox.addEventListener('change', filtrerCartes);
    }

}else{
    messageNoEvent.style.display = "block";
}


