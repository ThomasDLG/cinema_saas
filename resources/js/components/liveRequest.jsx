import React, { useState, useEffect } from 'react';
import { ReactSupervisor } from "react-supervisor";
import axios from 'axios';


const Request = () => {
  const [rooms, setRooms] = useState([]);
  const [selectedRoom, setSelectedRoom] = useState(null);
  const [selectedDate, setSelectedDate] = useState(null);
  const [UnavailableHours, setUnavailableHours] = useState([]);
  const [hours, setHours] = useState([]);

  console.log(UnavailableHours);

  useEffect(() => {
    axios.get('/api/admin/rooms')
      .then(response => {
        setRooms(response.data.data);
      })
      .catch(error => {
        console.error(error);
      });
  }, []);

  useEffect(() => {
    if (selectedRoom && selectedDate) {
      axios.get(`/api/admin/hours/${selectedRoom}/${selectedDate}`)
        .then(response => {
          setUnavailableHours(response.data.data);
        })
        .catch(error => {
          console.error(error);
        });
    }
  
    axios.get('/api/admin/hours')
      .then(response => {
        setHours(response.data.data);
      })
      .catch(error => {
        console.error(error);
      });
  }, [selectedRoom, selectedDate]);

  const handleRoomChange = (event) => {
    setSelectedRoom(event.target.value);
  }

  const handleDateChange = (event) => {
    setSelectedDate(event.target.value);
  }

  function isHourUnavailable(hourId){
    if (!selectedRoom || !selectedDate) {
      return true;
    }
    for (let i = 0; i < UnavailableHours.length; i++) {
      if (UnavailableHours[i].hour_id === hourId) {
        return true;
      }
    }
    return false;
  };

  return (
    <div>
      <div className="mb-3">
        <select defaultValue="" value={selectedRoom || ''} onChange={handleRoomChange} name="room" className="appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none" aria-label="Default select example">
          <option value="null">Choisir une salle</option>
          {rooms.map(room => (
            <option key={room.id} value={room.id}>{room.name}</option>
          ))}
        </select>
      </div>
      <div className="datepicker relative form-floating mb-3">
        <input type="date" value={selectedDate || ''} onChange={handleDateChange} name="date" className="block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none" />
      </div>
      <div className="mb-3">
      <select defaultValue="" name="hour" className="appearance-none block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding bg-no-repeat border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-primary-border focus:ring-primary-border focus:outline-none" aria-label="Default select example">
      <option value="null" >Choisir une heure</option>
        {hours.map(hour => (
             <option key={hour.id} value={hour.hour} disabled={isHourUnavailable(hour.id)}>{hour.hour}</option>
        ))}
      </select>
      </div>
    </div>
  );
};


    ReactSupervisor.registerComponent(".liveHoursRequest", Request);
    ReactSupervisor.initialize();

  export default Request;