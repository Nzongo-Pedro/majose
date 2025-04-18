// SweetAlert2
const alertMessage = (title, text, icon) => {
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        confirmButtonText: 'OK'
    });
}

// Fetch POST request
const createData = (url, data) => {

    fetch(url, {
        method: 'POST',
        body: data
    })
        .then(res => res.json())
        .then(response => {
            if (response.code === 201) {

                alertMessage('Sucesso', response.message || 'Data created successfully', 'success');

                setTimeout(() => {
                    if (response.redirect) {
                        return window.location.href = response.redirect;
                    }
                    window.location.reload();
                }, 2500);

            } else {

                alertMessage('Erro', response.message, 'error');
                console.log(response)

            }
        })
}

// FORM POST request

const formPost = document.querySelectorAll('#postAction');

formPost.forEach((form) => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();

        Swal.fire({
            icon: 'warning',
            showConfirmButton: false,
            title: 'Aguarde',
            html: 'Estamos a processar dados ...',

            allowOutsideClick: false, // Impede o fechamento do alerta clicando fora
            didOpen: () => {
                Swal.showLoading(); // Exibe o preloader
            }
        }).then(() => {
            if (Swal.isLoading()) {
                Swal.close(); // Fecha o alerta quando o preloader estiver ativo
            } else {
                Swal.showLoading(); // Exibe o preloader se o alerta não estiver fechado
            }
        });

        const data = new FormData(form)

        setTimeout(() => {
            createData(form.action, data)
        }, 1000);

    });
});
