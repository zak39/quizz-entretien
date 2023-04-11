const heros = []

const containerElement = document.querySelector('.container')

heros.forEach(hero => {

    // Créer l'élément <p>
    const h3Element = document.createElement('h3')
    h3Element.textContent = hero.name

    // Créer l'élément <img>
    const imageElement = document.createElement('img')
    imageElement.src = hero.src

    // On intégre le tout à notre page
    containerElement.appendChild(h3Element)
    containerElement.appendChild(imageElement)
});