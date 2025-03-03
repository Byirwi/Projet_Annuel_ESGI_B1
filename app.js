document.addEventListener('DOMContentLoaded', () => {
    const mangaContainer = document.getElementById('manga-container');

    // Données fictives pour les mangas populaires
    const mangas = [
        { title: 'Naruto', image: 'https://via.placeholder.com/200x300?text=Naruto' },
        { title: 'One Piece', image: 'https://via.placeholder.com/200x300?text=One+Piece' },
        { title: 'Attack on Titan', image: 'https://via.placeholder.com/200x300?text=Attack+on+Titan' },
        { title: 'My Hero Academia', image: 'https://via.placeholder.com/200x300?text=My+Hero+Academia' },
    ];

    // Affichage des mangas
    mangas.forEach(manga => {
        const mangaItem = document.createElement('div');
        mangaItem.classList.add('manga-item');
        
        const mangaImage = document.createElement('img');
        mangaImage.src = manga.image;
        mangaImage.alt = manga.title;

        const mangaTitle = document.createElement('h3');
        mangaTitle.textContent = manga.title;

        mangaItem.appendChild(mangaImage);
        mangaItem.appendChild(mangaTitle);
        mangaContainer.appendChild(mangaItem);
    });
});