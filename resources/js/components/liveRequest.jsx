import React, { useState } from 'react';
import { ReactSupervisor } from "react-supervisor";

const Request = () => {
    const [input1, setInput1] = useState('');
    const [input2, setInput2] = useState('');
    const [data, setData] = useState([]);

    const handleInput1Change = event => {
      setInput1(event.target.value);
    };

    const handleInput2Change = event => {
      setInput2(event.target.value);
    };

    useEffect(() => {
      if (input1 !== '' && input2 !== '') {
        const fetchData = async () => {
          const response = await fetch(`/fetch-data?input1=${input1}&input2=${input2}`);
          const json = await response.json();
          setData(json);
        };

        fetchData();
      }
    }, [input1, input2]);

    return (
        <div>
            <input type="text" value={input1} onChange={handleInput1Change} />
            <div class="datepicker relative form-floating mb-3">
                <input type="date" name="date" value={input2} onChange={handleInput2Change}
                class="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none"/>
            </div>
            <select>
            {data.map(item => (
                <option key={item.id} value={item.id}>{item.name}</option>
            ))}
            </select>
        </div>
    );
  };

    ReactSupervisor.registerComponent(".liveRequest", Request);
    ReactSupervisor.initialize();

  export default Request;