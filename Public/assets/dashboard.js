document.getElementById("createNewPromoBtn").addEventListener("click", handleAddPromotion);
console.log(handleAddPromotion);

function handleAddPromotion(event) {
    event.preventDefault();

    const addPromo = document.getElementById("addPromo");
    const inputPromoNom = document.getElementById("promoNom");
    const inputDateDebut = document.getElementById("dateDebut");
    const inputDateFin = document.getElementById("dateFin");
    const inputPlace = document.getElementById("place");


        const inputPromoNomValue = inputPromoNom.value;
        const inputDateDebutValue = inputDateDebut.value;
        const inputDateFinValue = inputDateFin.value;
        const inputPlaceValue = inputPlace.value;

        const url = "/";

        const promo = {
            promoNom: inputPromoNomValue,
            dateDebut: inputDateDebutValue,
            dateFin: inputDateFinValue,
            place: inputPlaceValue,
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