import React, { useState } from 'react';
import { ReactSupervisor } from "react-supervisor";
import axios from 'axios';

const Search = () => {
    const [query, setQuery] = useState('');
    const [results, setResults] = useState([]);
    const [selectedMovieId, setSelectedMovieId] = useState('');

    const handleInputChange = event => {
        setQuery(event.target.value);

        if (!query) {
            setResults([]);
            return;
        }

        axios
            .get(`https://api.themoviedb.org/3/search/movie`, {
                params: {
                    api_key: '41d556b9f4525188759fcf95d4685c62',
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

    const handleMovieClick = movieId => {
        setSelectedMovieId(movieId);
    };

    return (
        <div>
            <form>
                <input type="text" placeholder="Search for a movie..." onChange={handleInputChange} />
                <input type="text" name="movie_id" value={selectedMovieId} readOnly />
                <ul>
                    {results.map(movie => (
                        <li key={movie.id} onClick={() => handleMovieClick(movie.id)}>
                            {movie.title}
                        </li>
                    ))}
                </ul>
            </form>
        </div>
    );
};

ReactSupervisor.registerComponent(".liveSearch", Search)
ReactSupervisor.initialize();

export default Search;
