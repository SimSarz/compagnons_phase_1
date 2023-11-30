const pageProg = document.querySelector(".programmation"); // Page de programmation
const progWidget = document.querySelector(".prog_widget");

// SECTION PROGRAMMATION ------- CSS
if (window.innerWidth >= 900) {
    const eventCards = document.querySelectorAll(".eventCard");

    eventCards.forEach((eventCard) => {
        const eventCardInfoBox = eventCard.querySelector(".eventCard_infoBox");
        const eventCardInfoBoxContent = eventCard.querySelector(".eventCard_infoBox_info");
        const eventCardInfoDate = eventCard.querySelector(".eventCard_infoBox_date");

        eventCard.addEventListener("mouseenter", () => {
            eventCardInfoBoxContent.style.display = "flex";
            eventCardInfoBoxContent.style.opacity = "100";
            eventCardInfoBox.style.backgroundColor = "rgba(0, 0, 0, 0.787)";
            eventCardInfoDate.style.backgroundColor = "rgba(0, 0, 0, 0)";
        });

        eventCard.addEventListener("mouseleave", () => {
            eventCardInfoBoxContent.style.display = "none";
            eventCardInfoBoxContent.style.opacity = "0";
            eventCardInfoBox.style.backgroundColor = "rgba(0, 0, 0, 0)";
            eventCardInfoDate.style.backgroundColor = "rgba(0, 0, 0, 0.787)";
        });
    });
}

// INPUTS SEARCH MOBILE ----- CSS
let windowWidth = window.innerWidth;
const filtersBtn = document.querySelector('.programmation_filters_button_icon');
const filtersBox = document.querySelector('.programmation_filters_box');

function widthChange() {
    const filtersBox = document.querySelector('.programmation_filters_box');
    windowWidth = window.innerWidth;
    if (filtersBox) {
        if (windowWidth <= 599) {
            filtersBox.classList.remove('filtersBoxOn');
            filtersBox.classList.add('filtersBoxOff');
            filtersBtn.addEventListener('click', () =>{
                const filtersBtnClose = document.querySelector('.box_top_button');
                filtersBox.classList.remove('filtersBoxOff');
                filtersBox.classList.add('filtersBoxOn');
                filtersBtnClose.addEventListener('click', () => {
                    filtersBox.classList.remove('filtersBoxOn');
                    filtersBox.classList.add('filtersBoxOff');
                });
            });
        } else {
            filtersBox.classList.remove('filtersBoxOff');
            filtersBox.classList.add('filtersBoxOn');
        }        
    }
}

if (filtersBox) {
    if (windowWidth <= 599) {
        filtersBox.classList.add('filtersBoxOff');
    } else {
        filtersBox.classList.add('filtersBoxOn');
    }
}

window.addEventListener('resize', widthChange);
widthChange();

// FILTER MODE
const eventCards = document.querySelectorAll(".eventCard");
const eventCardsArray = Array.from(eventCards);

const eventCardsContainer = document.querySelector('.programmation_cardBox');
const eventCardWidgetContainer = document.querySelector('.accueil_section_event');

if (pageProg) { // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    eventCards.forEach((eventCard) => {
        const freeTag = eventCard.querySelector('.eventCard_tag_freeOption');
        const famTag = eventCard.querySelector('.eventCard_tag_familialeOption');

        if (freeTag.textContent === "1") {
            freeTag.classList.remove('hidden');
            freeTag.textContent = "Gratuit";
        } else {
            freeTag.classList.add('hidden');
        }
    
        if (famTag.textContent === "1") {
            famTag.classList.remove('hidden');
            famTag.textContent = "Familiale";
        } else {
            famTag.classList.add('hidden');
        }
    });
    
    eventCardsArray.sort(function(a, b) {  // Convertir les dates de francais à anglais et pour vérifier si la date est supérieur ou inférieur à la seconde carte
        const eventDateElementA = a.querySelector('.eventCard_tag_dataDate');
        const eventDateElementB = b.querySelector('.eventCard_tag_dataDate');
    
        const eventDateStringA = eventDateElementA.textContent.trim().split('/');
        const eventDateStringB = eventDateElementB.textContent.trim().split('/');
    
        const jourA = parseInt(eventDateStringA[0], 10);
        const moisA = parseInt(eventDateStringA[1], 10) - 1;
        const anneeA = parseInt(eventDateStringA[2], 10);
    
        const jourB = parseInt(eventDateStringB[0], 10);
        const moisB = parseInt(eventDateStringB[1], 10) - 1;
        const anneeB = parseInt(eventDateStringB[2], 10);
    
        const dateA = new Date(anneeA, moisA, jourA,);
        const dateB = new Date(anneeB, moisB, jourB,);
    
        return dateA - dateB;
    });

    eventCardsArray.forEach(function(card){
        eventCardsContainer.appendChild(card);
    });  

    const today = new Date();

    eventCardsArray.forEach((eventCard) => {
        const dateTag = eventCard.querySelector('.eventCard_tag_dataDate').innerHTML;
        const [day, month, year] = dateTag.split('/');
        const formattedDate = new Date(`${year}-${month}-${day}`);
        console.log(formattedDate);
        if (formattedDate < today) {
            eventCard.classList.add('hidden');
        }
    }) 
}



const freeCheckbox = document.getElementById("gratuit");
const familialCheckbox = document.getElementById("familial");
const disciplineSelect = document.querySelector(".box_content_disciplineBox_input");

// SEARCH BAR
const filterSearch = document.querySelector('.programmation_filters_searchBar_input');
const dateSearch = document.querySelector('.box_content_dateBox_input');

function filterCards() {
    const cards = document.querySelectorAll(".eventCard");
    let selectedDate = document.getElementById("date_event").value;
    let filterSearchInput = filterSearch.value.toLowerCase();

    if (selectedDate) {
        const dateParts = selectedDate.split("-");
        selectedDate = dateParts[2] + "/" + dateParts[1] + "/" + dateParts[0];
    }

    cards.forEach((card) => {
        const freeTag = card.querySelector(".eventCard_tag_freeOption");
        const familialTag = card.querySelector(".eventCard_tag_familialeOption");
        const disciplineTag = card.querySelector(".eventCard_tag_discipline");
        const eventDate = card.querySelector(".eventCard_tag_dataDate").textContent.trim();

        const cardTextElements = Array.from(card.querySelectorAll('*'))
            .filter(el => el.nodeType === Node.ELEMENT_NODE)
            .map(el => el.textContent.trim().toLowerCase());

        const cardText = removeAccents(cardTextElements.join(" ").toLowerCase());

        const selectedDiscipline = disciplineSelect.value;

        const showCard =
            (!freeCheckbox.checked || (freeTag && freeTag.textContent === "Gratuit")) &&
            (!familialCheckbox.checked || (familialTag && familialTag.textContent === "Familiale")) &&
            (selectedDiscipline === "all" || (disciplineTag && disciplineTag.textContent === selectedDiscipline)) &&
            (selectedDate === "" || eventDate === selectedDate) &&
            (filterSearchInput === "" || cardText.includes(removeAccents(filterSearchInput)));
            card.style.display = showCard ? "" : "none";
    });
}

function removeAccents(str) {
    return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
}

if (dateSearch) {
    dateSearch.addEventListener("change", filterCards);
}

if (filterSearch) {
    filterSearch.addEventListener("input", filterCards);
}

if (freeCheckbox) {
    freeCheckbox.addEventListener("click", filterCards);
}

if (familialCheckbox) {
    familialCheckbox.addEventListener("click", filterCards);
}

if (disciplineSelect) {
    disciplineSelect.addEventListener("change", filterCards);
}

if (pageProg) {
    filterCards();
}