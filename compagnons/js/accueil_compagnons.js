const forgeronCompagnons = document.querySelector('.forgeron_compagnons');
const spiralCompagnons = document.querySelector('.spiral_compagnons');
const springCompagnons = document.querySelector('.spring_compagnons');
const mrCompagnons = document.querySelector('.monsieur_compagnons');
const dawnCompagnons = document.querySelector('.dawn_compagnons');
const chevalCompagnons = document.querySelector('.cheval_compagnons');
const inversedSpiralCompagnons = document.querySelector('.inversed_spiral_compagnons');
const marinsCompagnons = document.querySelector('.marins_compagnons');
const spiralCompagnons2 = document.querySelector('.spiral_compagnons_2');
const forgeronCompagnons2 = document.querySelector('.forgeron_compagnons_2');
const notreEquipe = document.querySelector('.notre_equipe_container');
const notreMission = document.querySelector('.notre_mission_container');
const notreHistoire = document.querySelector('.notre_histoire_container');
const nosProjets = document.querySelector('.nos_projets_container');
const nosPartenaires = document.querySelector('.nos_partenaires_container');
const equipeTitle = document.querySelector('.equipe_title');
const missionTitle = document.querySelector('.mission_title');
const histoireTitle = document.querySelector('.histoire_title');
const projetsTitle = document.querySelector('.projets_title');
const partenairesTitle = document.querySelector('.partenaires_title');

// Animation - images - notre équipe

if (notreEquipe) {

    function equipe_applyAnimation(){
        spiralCompagnons.classList.add("spiral_hover");
        spiralCompagnons.classList.remove('spiral_out');
        forgeronCompagnons.classList.add('forgeron_hover');
        forgeronCompagnons.classList.remove('forgeron_out');
        equipeTitle.classList.add('h3_compagnons_hover');
    };

    function equipe_removeAnimation(){
        spiralCompagnons.classList.remove("spiral_hover");
        spiralCompagnons.classList.add('spiral_out');
        forgeronCompagnons.classList.remove('forgeron_hover');
        forgeronCompagnons.classList.add('forgeron_out');
        equipeTitle.classList.remove('h3_compagnons_hover');

    };

    notreEquipe.addEventListener('mouseover', equipe_applyAnimation);
    notreEquipe.addEventListener('mouseout', equipe_removeAnimation);
};

//Animation - images - notre mission

if (notreMission) {

    function mission_applyAnimation(){
        springCompagnons.classList.add('spring_hover');
        springCompagnons.classList.remove('spring_out');
        missionTitle.classList.add('h3_compagnons_hover');
        mrCompagnons.classList.add('monsieur_hover');
        mrCompagnons.classList.remove('monsieur_out');
    };

    function mission_removeAnimation(){
        springCompagnons.classList.remove('spring_hover');
        springCompagnons.classList.add('spring_out');
        missionTitle.classList.remove('h3_compagnons_hover');
        mrCompagnons.classList.remove('monsieur_hover');
        mrCompagnons.classList.add('monsieur_out');
    };

    notreMission.addEventListener('mouseover', mission_applyAnimation);
    notreMission.addEventListener('mouseout', mission_removeAnimation);
};

//Animation - images - Notre histoire

if (notreHistoire) {

    function histoire_applyAnimation(){
        dawnCompagnons.classList.add('star_hover');
        dawnCompagnons.classList.remove('star_out');
        histoireTitle.classList.add('h3_compagnons_hover');
        chevalCompagnons.classList.add('bavarde_hover');
        chevalCompagnons.classList.remove('bavarde_out');
    };

    function histoire_removeAnimation(){
        dawnCompagnons.classList.remove('star_hover');
        dawnCompagnons.classList.add('star_out');
        histoireTitle.classList.remove('h3_compagnons_hover');
        chevalCompagnons.classList.remove('bavarde_hover');
        chevalCompagnons.classList.add('bavarde_out');
    };

    notreHistoire.addEventListener('mouseover', histoire_applyAnimation);
    notreHistoire.addEventListener('mouseout', histoire_removeAnimation);
};

//Animation - images - Nos projets

if (nosProjets) {

    function projets_applyAnimation(){
        inversedSpiralCompagnons.classList.add('inversed_spiral_hover');
        inversedSpiralCompagnons.classList.remove('inversed_spiral_out');
        projetsTitle.classList.add('h3_compagnons_hover');
        marinsCompagnons.classList.add('marins_hover');
        marinsCompagnons.classList.remove('marins_out');
    };

    function projets_removeAnimation(){
        inversedSpiralCompagnons.classList.remove('inversed_spiral_hover');
        inversedSpiralCompagnons.classList.add('inversed_spiral_out');
        projetsTitle.classList.remove('h3_compagnons_hover');
        marinsCompagnons.classList.remove('marins_hover');
        marinsCompagnons.classList.add('marins_out');
    };

    nosProjets.addEventListener('mouseover', projets_applyAnimation);
    nosProjets.addEventListener('mouseout', projets_removeAnimation);
};

//Animation - images - partenaires

if (nosPartenaires) {

    function partenaires_applyAnimation(){
        spiralCompagnons2.classList.add('spiral_hover');
        spiralCompagnons2.classList.remove('spiral_out');
        partenairesTitle.classList.add('h3_compagnons_hover');
        forgeronCompagnons2.classList.add('forgeron_hover');
        forgeronCompagnons2.classList.remove('forgeron_out');
    };

    function partenaires_removeAnimation(){
        spiralCompagnons2.classList.remove('spiral_hover');
        spiralCompagnons2.classList.add('spiral_out');
        partenairesTitle.classList.remove('h3_compagnons_hover');
        forgeronCompagnons2.classList.remove('forgeron_hover');
        forgeronCompagnons2.classList.add('forgeron_out');
    };

    nosPartenaires.addEventListener('mouseover', partenaires_applyAnimation);
    nosPartenaires.addEventListener('mouseout', partenaires_removeAnimation);
};