'use strict';

// load top 10 movies from an API endpoint
// and render them as <li>s in a <ul>

const loadMovies = () => {
  
  fetch('http://www.cbp-exercises.test/day-26-php-oop-data-modelling/serve-data/top10movies.php')
  .then(response => response.json())
  .then(data => {
    
    let list = document.getElementById('top10movies');
    list.innerHTML = ''

    data.forEach(movie_name => {

      let item = document.createElement('li');
      item.innerHTML = movie_name;

      list.appendChild(item);
    })
  })
};

let button = document.getElementById('load_movies');

button.addEventListener('click', event => {
  loadMovies();
});