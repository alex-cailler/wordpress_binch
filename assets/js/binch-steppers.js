const steps = Array.from(document.querySelectorAll('form .step'));
const prevBtn = document.querySelectorAll('form .previous-step');
const nextBtn = document.querySelectorAll('form .next-step');
const form = document.querySelector('form');
const password = form.querySelector('input[name=password]');
const confirmation_password = form.querySelector('input[name=confirmation_password]');
const BASE_URL = 'https://api.v1.binch-app.com/api/v1';

nextBtn.forEach((button) => {
    button.addEventListener('click', function () {

        const currStepId = button.getAttribute('data-step-id');
        const fields = document.querySelectorAll(`.step-${currStepId} input`);
        if (checkFields(fields))
            changeStep('next');
        else {
            alert('Veuiller remplir tout les champs');
            return;
        }

    })
})
prevBtn.forEach((button) => {
    button.addEventListener('click', function () {
        changeStep('prev');
    })
})
function checkFields(fields) {
    return Array.from(fields).every((input) => input.value !== '');
}
form.addEventListener('submit', function (e) {
    e.preventDefault();
    // const inputs = [];

    if ((password.value !== confirmation_password.value) || (password.value === '' || confirmation_password.value === '')) {
        alert('Vos mots de passe sont incorecte');
        return;
    }

   /*
   form.querySelectorAll('input').forEach((input) => {
        const {name, value, type} = input
        if (type === 'checkbox') {
            inputs.push({name: name, value: input.checked});
        } else {
            inputs.push({name: name, value: value});
        }
    })
    */

    postUser();
   // form.reset();

})

function changeStep(btn) {
    let index = 0;
    const active = document.querySelector('form .step.active-step');
    index = steps.indexOf(active);
    steps[index].classList.remove('active-step');
    if (btn === 'next') {
        index++;
    } else if (btn === 'prev'){
        index--;
    }
    steps[index].classList.add('active-step')
}

async function registerNewProfessionalUser () {
    const user = await postUser();
    const establishment = await postEstablishment();
    const address = await postAddress(establishment.id);
    await patchEstablishment(establishment.id, address.id);
}

function postUser() {
    fetch(BASE_URL + '/users', {
        method: 'POST',
        headers: {
            'accept': 'application/vnd.api+json',
            'content-type': 'application/vnd.api+json',
        },
        mode: 'cors',
        cache: 'default',
        body: JSON.stringify({
            data: {
                type: 'users',
                attributes: {
                    acceptsTermsOfUse: true,
                    name: document.querySelector('input[name=name]').value,
                    email: document.querySelector('input[name=email]').value,
                    phoneNumber: document.querySelector('input[name=phoneNumber]').value,
                    password: document.querySelector('input[name=password').value,
                }
            }
        }),
    })
        .then(() => login())
        .catch(error => alert('Une erreur est survenue'))
    ;
}

function login() {
    fetch(BASE_URL + '/login', {
        method: 'POST',
        headers: {
            'accept': 'application/vnd.api+json',
            'content-type': 'application/vnd.api+json',
        },
        mode: 'cors',
        cache: 'default',
        body: JSON.stringify({
            username: document.querySelector('input[name=email]').value,
            password: document.querySelector('input[name=password').value,
        })
    })
        .then(response => response.json())
        .then(response => {
            postEstablishment({token_type, access_token} = response.data)
        })
        .catch(error => alert('Une erreur est survenue'))
    ;
}

function postEstablishment(keySet) {
    fetch(BASE_URL + '/establishments', {
        method: 'POST',
        headers: {
            'accept': 'application/vnd.api+json',
            'content-type': 'application/vnd.api+json',
            'Authorization': `${keySet.token_type} ${keySet.access_token}`
        },
        mode: 'cors',
        cache: 'default',
        body: JSON.stringify({
            data: {
                type: 'establishments',
                attributes: {
                    name: document.querySelector('input[name=establishment_name]').value,
                }
            }
        }),
    })
        .then(response => response.json())
        .then(response => postAddress(response.data.id, keySet))
        .catch(error => console.log(error))
    ;
}

function postAddress(establishmentId, keySet) {
    console.log(keySet)
    fetch(BASE_URL + '/addresses', {
        method: 'POST',
        headers: {
            'accept': 'application/vnd.api+json',
            'content-type': 'application/vnd.api+json',
            'Authorization': `${keySet.token_type} ${keySet.access_token}`
        },
        mode: 'cors',
        cache: 'default',
        body: JSON.stringify({
            data: {
                type: 'addresses',
                attributes: {
                    postalCode: document.querySelector('input[name=postalCode').value,
                    city: document.querySelector('input[name=city').value,
                    addressLine_1: document.querySelector('input[name=addressLine_1').value,
                    addressLine_2: document.querySelector('input[name=addressLine_2').value
                }
            }
        })
    })
        .then(response => response.json())
        .then(response =>  patchEstablishment(establishmentId, response.data.id, keySet))
        .catch(error => console.log(error))
    ;
}


function patchEstablishment (establismentId, addressId, keySet) {
    fetch(BASE_URL + '/establishments/' + establismentId, {
        method: 'PATCH',
        headers: {
            'accept': 'application/vnd.api+json',
            'content-type': 'application/vnd.api+json',
            'Authorization': `${keySet.token_type} ${keySet.access_token}`
        },
        mode: 'cors',
        cache: 'default',
        body: JSON.stringify({
            data: {
                id: establismentId,
                type: 'establishments',
                attributes: {},
                relationships: {
                    address: {
                        data: {
                            id: addressId,
                            type: 'addresses',
                        }
                    }

                }
            }
        })
    })
        .then(() => {
            changeStep('next');
        })
        .catch(error => alert('Une erreur est survenue'))
    ;
}