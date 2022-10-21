let dataForSession = [];
function findMyStateI() {

    const status = document.getElementById('location');
    const success = (position) => {
        console.log(position);
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;
        console.log(`${latitude},${longitude}`)
        const geoApiUrl = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=en`;
        fetch(geoApiUrl)
            .then(res => res.json())
            .then(data => {
                status.innerHTML = `${data.principalSubdivision}, ${data.locality}`;
                dataForSession.push(position.coords.latitude);
                dataForSession.push(position.coords.longitude);
                
            })

    }
    const error = () => {
        status.innerHTML = 'Unable to retrieve you location';
    }
    navigator.geolocation.getCurrentPosition(success, error);
}
findMyStateI()

let url = 'http://127.0.0.1:8000/session';
let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
async function postData(url = '', data = {}) {
    console.log(data)
    // Default options are marked with *
    const response = await fetch(url, {
      method: 'POST', // *GET, POST, PUT, DELETE, etc.
      mode: 'cors', // no-cors, *cors, same-origin
      cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
      credentials: 'same-origin', // include, *same-origin, omit
      headers: {
        "Content-Type": "application/json",
          "Accept": "application/json",
          "X-Requested-With": "XMLHttpRequest",
          "X-CSRF-Token": token
      },
      redirect: 'follow', // manual, *follow, error
      referrerPolicy: 'no-referrer', // no-referrer, *no-referrer-when-downgrade, origin, origin-when-cross-origin, same-origin, strict-origin, strict-origin-when-cross-origin, unsafe-url
      body: JSON.stringify(data) // body data type must match "Content-Type" header
    });
    console.log(response)
     // parses JSON response into native JavaScript objects
  }
  
  postData(url, { latitude: dataForSession[0] })

