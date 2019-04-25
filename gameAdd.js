
//Functions

function showForm(){
    const show = document.getElementById("addGame");
    show.style.display = "block";
}
//Events

// This is the handler in the backed that will process request
//What do we put here????
const resource = 'http://localhost:8080/addGame.php';

//Event handler for the form that uses GET request
function get_request(event) {

    //Prevents the browser from doing the normal submission
    event.preventDefault();

    //Hide form
    const show = document.getElementById("addGame");
    show.style.display = "none";
    
    //The form was the one that triggered the even after the user clicked the submit button (see the evenHandler)
    // at the end of this page. Therefore, event.target returns the element that triggered the event
    const form = event.target;

    //We use the reference to the form to obtain the values entered by the user
    const myGname = form.gname.value;

    // Here we create the request
    let url = new URL(resource);
    let params = {gname: myGname}; //Data to be included as the query
    url.search = new URLSearchParams(params); //We attach the query (params) to the resource

    // We make the request.
    fetch(url, {method: 'GET'})
        .then(function (response) {
            return response.json();
        }).then(function (json) {
        //const obj = JSON.parse(json); This does not apply anymore. json is already an object (not a string)
        const obj = json;

        //This paints new HTML in the web page
        const output = document.querySelector("#gameChart");
        output.innerHTML += "<div class=\"game\">\n" +
            "<a href=\"FP_Output.html\"" + "onClick=\"testJS('" + obj.game_name + "', 'pc-builder-recfit.png');\">\n" + "<img src=\"pc-builder-recfit.png\" alt=\"Added Game\" >\n" + "<p>" + obj.game_name + "</p></a></div>";
        
       
    }).catch(function (err) {
        alert(err); //In case something wrong happens
    })
}

//Event to add form
const addBtn = document.getElementById("myGame");
addBtn.addEventListener("click", showForm, false);
//Event to add game
document.querySelector('#enterGame').addEventListener('submit', get_request);