let gLatitude, gLongitude;
let url = 'http://127.0.0.1:8000/session';
let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

async function postData(url = '', gLatitude , gLongitude) {

    await fetch(url, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        credentials: "same-origin",
        body: JSON.stringify({
            latitude: gLatitude,
            Longitude: gLongitude
        })
    }).catch(function (error) {
        console.log(error);
    });
}
function findMyStateI() {

    const status = document.getElementById('location');
    const success = (position) => {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        const geoApiUrl = `https://api.bigdatacloud.net/data/reverse-geocode-client?latitude=${latitude}&longitude=${longitude}&localityLanguage=en`;
        fetch(geoApiUrl)
            .then(res => res.json())
            .then(data => {
                status.innerHTML = `${data.principalSubdivision}, ${data.locality}`;
                gLatitude = position.coords.latitude;
                gLongitude = position.coords.longitude;
                postData('http://127.0.0.1:8000/session', gLatitude,gLongitude)


            })

    }
    const error = () => {
        status.innerHTML = 'Unable to retrieve you location';
    }
    navigator.geolocation.getCurrentPosition(success, error);
    
}
findMyStateI();


// function postData(url = '', data = {}) {

//     // Default options are marked with *
//     const response = fetch('http://127.0.0.1:8000/session', {

//         headers: {
//             "Content-Type": "application/json",
//             "Accept": "application/json",
//             "X-Requested-With": "XMLHttpRequest",
//             "X-CSRF-TOKEN": token
//         },
//         method: 'post',
//         credentials: "same-origin",
//         body: JSON.stringify({ data }) // body data type must match "Content-Type" header
//     });

//     console.log(response)
//     // parses JSON response into native JavaScript objects
// }
postData('http://127.0.0.1:8000/session')
function ShowHideDiv() {    
    var user_type = document.getElementById("type");
    var choose_resturant = document.getElementById("choose");
    choose_resturant.style.display = user_type.value == "owner" ? "block" : "none";
//    
}