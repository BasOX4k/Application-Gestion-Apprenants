const submissionButton = document.getElementById("submissionButton");
const inputEmail = document.getElementById("email");
const inputMDP = document.getElementById("mdp");

if (submissionButton) {
    submissionButton.addEventListener("click", handleFormSubmission);

}

function handleFormSubmission(event) {
    event.preventDefault();

    const inputEmail = inputEmail.value;
    const inputMDP = inputMDP.value;

    const url = "/connexion";

    const user = {

        email: inputEmailValue,
        mdp: inputMDPValue,
    };

    fetch(url, {
        method: "POST",
        headers: {
            "Content-Type":"appliction/json",

        },
        body: JSON.stringify(user),
    }).then((response)=> {
        return response.text();
    }).then((result) => {
        body.innerHTML = ''
        body.innerHTML = result
    });
}