const spiral = document.querySelector(".spiral");
const berube = document.querySelector('.forgeron');
const mentirContainer = document.querySelector('.menterie_container');
const mentirTitle = document.querySelector('.mentir_green');
const spring = document.querySelector('.spring');
const monsieur = document.querySelector('.monsieur');
const prixContainer = document.querySelector('.prix-jb_container');
const prixTitle = document.querySelector('.prix_green');
const star = document.querySelector('.dawn');
const bavarde = document.querySelector('.bavarde_gris');
const bavardeContainer = document.querySelector('.bavarde_container');
const bavardeTitle = document.querySelector('.bavarde_green');
const inversedSpiral = document.querySelector('.inversed_spiral');
const marins = document.querySelector('.marins');
const responsableContainer = document.querySelector('.responsable_container');
const responsableTitle = document.querySelector('.responsable_green');


// Animation - images - Concours de la plus grosse menterie
if (mentirContainer){

    function mentir_applyAnimation(){
        spiral.classList.add("spiral_hover");
        spiral.classList.remove('spiral_out');
        berube.classList.add('forgeron_hover');
        berube.classList.remove('forgeron_out');
        mentirTitle.classList.add('h3_hover');
    };
    
    function mentir_removeAnimation(){
        spiral.classList.remove("spiral_hover");
        spiral.classList.add('spiral_out');
        berube.classList.remove('forgeron_hover');
        berube.classList.add('forgeron_out');
        mentirTitle.classList.remove('h3_hover');
    
    };
    
    mentirContainer.addEventListener('mouseover', mentir_applyAnimation);
    mentirContainer.addEventListener('mouseout', mentir_removeAnimation);
}


//Animation - images - Prix Jocelyn Bérubé

if (prixContainer){

    function prix_applyAnimation(){
        spring.classList.add('spring_hover');
        spring.classList.remove('spring_out');
        prixTitle.classList.add('h3_hover');
        monsieur.classList.add('monsieur_hover');
        monsieur.classList.remove('monsieur_out');
    }
    
    function prix_removeAnimation(){
        spring.classList.remove('spring_hover');
        spring.classList.add('spring_out');
        prixTitle.classList.remove('h3_hover');
        monsieur.classList.remove('monsieur_hover');
        monsieur.classList.add('monsieur_out');
    }
    
    prixContainer.addEventListener('mouseover', prix_applyAnimation);
    prixContainer.addEventListener('mouseout', prix_removeAnimation);
}


//Animation - images - La Bavarde

if (bavardeContainer){

    function bavarde_applyAnimation(){
        star.classList.add('star_hover');
        star.classList.remove('star_out');
        bavardeTitle.classList.add('h3_hover');
        bavarde.classList.add('bavarde_hover');
        bavarde.classList.remove('bavarde_out');
    }
    
    function bavarde_removeAnimation(){
        star.classList.remove('star_hover');
        star.classList.add('star_out');
        bavardeTitle.classList.remove('h3_hover');
        bavarde.classList.remove('bavarde_hover');
        bavarde.classList.add('bavarde_out');
    }
    
    bavardeContainer.addEventListener('mouseover', bavarde_applyAnimation);
    bavardeContainer.addEventListener('mouseout', bavarde_removeAnimation);
}


//Animation - images - Vers un festival responsable

if (responsableContainer){

    function responsable_applyAnimation(){
        inversedSpiral.classList.add('inversed_spiral_hover');
        inversedSpiral.classList.remove('inversed_spiral_out');
        responsableTitle.classList.add('h3_hover');
        marins.classList.add('marins_hover');
        marins.classList.remove('marins_out');
    }
    
    function responsable_removeAnimation(){
        inversedSpiral.classList.remove('inversed_spiral_hover');
        inversedSpiral.classList.add('inversed_spiral_out');
        responsableTitle.classList.remove('h3_hover');
        marins.classList.remove('marins_hover');
        marins.classList.add('marins_out');
    }
    
    responsableContainer.addEventListener('mouseover', responsable_applyAnimation);
    responsableContainer.addEventListener('mouseout', responsable_removeAnimation);
}