const accordion = document.querySelector('.simpliquer_menterie_accordion');


if (accordion) {
    const panel = document.querySelector('.simpliquer_menterie_accordion_panel');
    const chevron = document.querySelector('.material-symbols-outlined');

    accordion.addEventListener('click', () =>{
        if (panel.style.display === "block"){
            panel.style.display = "none";
            chevron.textContent = "expand more"
        } else{
            panel.style.display = "block";
            chevron.textContent = "expand less"
        }
    })    
}

