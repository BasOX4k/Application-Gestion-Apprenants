document.getElementById("createNewPromoBtn").addEventListener("click", createNewPromoBtn);
console.log(createNewPromoBtn);

function handleAddPromotion(event) {
    event.preventDefault();

    const addPromo = document.getElementById("addPromo");
    const inputPromoNom = document.getElementById("promoNom");
    const inputDateDebut = document.getElementById("dateDebut");
    const inputDateFin = document.getElementById("dateFin");
    const inputPlaceDispo = document.getElementById("placeDispo");


        const inputPromoNomValue = inputPromoNom.value;
        const inputDateDebutValue = inputDateDebut.value;
        const inputDateFinValue = inputDateFin.value;
        const inputPlaceDispoValue = inputPlaceDispo.value;

        const url = "/";

        const promo = {
            promoNom: inputPromoNomValue,
            dateDebut: inputDateDebutValue,
            dateFIn: inputDateFinValue,
            placeDispo: inputPlaceDispoValue,
        };

        fetch(url, {
            method: "POST",
            headers: {
                "Content-Type":"application/json",

            },

            body: JSON.stringify(promo),
        }).then((response)=> {
            return response.text();
        }).then((result) => {
            addPromo.innerHTML = ''
            addPromo.innerHTML = result

        });

}