var app = {

    init: function(){
        //Je mets sur écoute les blurs de mes inputs
    
        var inputFields = document.querySelectorAll('input');
        // Je vérifie que tous mes input sont sélectionnés 
        console.log(inputFields);
        
        for(inputField of inputFields) {
            inputField.addEventListener('blur', app.handleInputBlur);
        }

        var getForm = document.querySelector('#form-inscription');
        getForm.addEventListener('submit', app.handleFormSubmit);
        
    },

    handleInputBlur: function(event){
        var valueInputChecked = event.target.value.length;

        if(valueInputChecked < 5){
            event.target.classList.remove('valide');
            event.target.classList.add('invalide');
        } else{
            event.target.classList.remove('invalide');
            event.target.classList.add('valide');
        }
    },

    handleFormSubmit: function(event){
        var errors = [];

        var errorsDiv = document.querySelector('.error-input');
        errorsDiv.innerText = "";

        if (app.inputFields.length < 5){
            var error = "Une ou plusieurs valeurs de vos champs est/sont trop courte(s)";
            errors.push(error);
        }

        if(errors.length > 0){
                       
            errors.forEach(function(error){
                var errorElement = document.createElement('p');
                errorElement.innerText = error;
                errorElement.classList.add('error');
                errorsDiv.appendChild(errorElement);
            });
        
        event.preventDefault();
        }
    }


};

document.addEventListener('DOMContentLoaded', app.init);