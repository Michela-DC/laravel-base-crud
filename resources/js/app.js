require('./bootstrap');

// prendo tutti i bottoni che hanno classe delete-form e sono di tipo submit
const buttons = document.querySelectorAll('.delete-form [type="submit"]');

// ciclo dentro a buttons 
buttons.forEach(element => {
    // ascolto il click sul bottone
    element.addEventListener('click', function(el) {

        el.preventDefault(); //annullo il comportamento di default dell'elemento selezionato
        //quindi in questo caso impedisco che cliccando sul bottone venga eliminato il comic corrispondente perchè impedisco línvio del form
        
        const btn = el.target; //avendo applicato l'evento sul bottone avrei potuto usare anche il this che quindi avrebbe fatto riferimento al bottone

        //devo recuperare il form corrispondente al bottone cliccato, quindi c'è bisogno di risalire il dom partendo da un elemento per arrivare al suo genitore usando closest()
        const form = btn.closest('.delete-form'); //partendo dal bottone prendo il primo form che incontro con la classe delete-form
        console.log(form);
        
        // The confirm() method displays a dialog box with a message, an OK button, and a Cancel button
        if(form && confirm('Do you really want to delete this element?') ){ //verifico se ho il form e se ho la conferma dell'utente
            // cancellazione quindi il form viene inviato
            form.submit(); //The submit() method submits the form (same as clicking the Submit button).
        }
    
    })
})
