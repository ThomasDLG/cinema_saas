import React, { useState } from 'react';
import { ReactSupervisor } from "react-supervisor";
import axios from 'axios';

const genreMap = {
    28:    "Action",
    12:    "Adventure",
    16:    "Animation",
    35:    "Comedy",
    80:    "Crime",
    99:    "Documentary",
    18:    "Drama",
    10751: "Family",
    14:    "Fantasy",
    36:    "History",
    27:    "Horror",
    10402: "Music",
    9648:  "Mystery",
    10749: "Romance",
    878:   "Science Fiction",
    10770: "TV Movie",
    53:    "Thriller",
    10752: "War",
    37:    "Western"
}

const Search = () => {
    const [query, setQuery] = useState('');
    const [results, setResults] = useState([]);
    const [selectedMovieId, setSelectedMovieId] = useState('');
    const [selectedMovieTitle, setSelectedMovieTitle] = useState("");
    const [selectedMoviePosterPath, setSelectedMoviePosterPath] = useState("");
    const [selectedMovieOverview, setSelectedMovieOverview] = useState("");
    const [showResults, setShowResults] = useState(true);

    const handleInputChange = event => {
        setQuery(event.target.value);

        if (!query.trim()) {
            setResults([]);
            setShowResults(false);
            return;
        } else {
            setShowResults(false);
        }

        axios
            .get(`https://api.themoviedb.org/3/search/movie`, {
                params: {
                    api_key: '41d556b9f4525188759fcf95d4685c62',
                    language: 'fr-FR',
                    query: query
                }
            })
            .then(response => {
                setResults(response.data.results);
            })
            .catch(error => {
                console.log(error);
            });
    };

    const handleMovieClick = (movieId, movieTitle, moviePosterPath, movieOverview) => {
        setSelectedMovieId(movieId);
        setSelectedMovieTitle(movieTitle);
        setSelectedMoviePosterPath(moviePosterPath);
        setSelectedMovieOverview(movieOverview);
        setShowResults(false);
    };

    const renderStars = voteAverage => {
        const score = Math.round(voteAverage / 2);
        let stars = '';
        for (let i = 0; i < score; i++) {
            stars += '⭐️';
        }
        return stars;
    }

    return (
        <div>
            <div class="relative rounded-md shadow-sm">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center">
                <svg className="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" />
                </svg>
                </div>
                <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary-border focus:ring-primary-border sm:text-sm pl-10" placeholder="Rechercher un film" onChange={handleInputChange}/>
            </div>
            {(showResults || query.trim()) &&(<ul class="results-list my-4">
                {results.map(movie => (
                    <li class="flex justify-start bg-gray-50 mb-4 p-4 h-44 max-h-44 rounded-lg transition ease-in-out hover:bg-gray-100" key={movie.id} onClick={() => handleMovieClick(movie.id, movie.title, movie.poster_path, movie.overview)}>
                        <div class="mr-4"><img class="rounded-md" src={"https://image.tmdb.org/t/p/w92" + movie.poster_path} alt="" /></div>
                        <div className="flex flex-col ml-4">
                            <h5>{movie.title}</h5>
                            <p class="text-base">{movie.genre_ids.map(genreId => genreMap[genreId]).join(', ')}</p>
                            <p class="text-base">{renderStars(movie.vote_average)}</p>
                        </div>
                    </li>
                ))}
            </ul>)}
            <div>
                <input type="hidden" name="movie_id" value={selectedMovieId} readOnly />
                <input type="hidden" name="title" value={selectedMovieTitle} readOnly />
                <input type="hidden" name="poster" value={selectedMoviePosterPath} readOnly />
                <input type="hidden" name="overview" value={selectedMovieOverview} readOnly />
                <p class="text-base my-4">{selectedMovieTitle}</p>
            </div>
        </div>
    );
};

ReactSupervisor.registerComponent(".liveSearch", Search);
ReactSupervisor.initialize();

export default Search;
