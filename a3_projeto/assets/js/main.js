//modal cadastrar produto

const openModal = () => document.getElementById('modal')
    .classList.add('active')

const closeModal = () => document.getElementById('modal')
    .classList.remove('active')

//modal editar produto

const openModaledit = () => document.getElementById('modaleditar')
    .classList.add('active')

const closeeditModal = () => document.getElementById('modaleditar')
    .classList.remove('active')


//Evento par abrir/fechar modal cadastro

document.getElementById('cadastrarProduto')
    .addEventListener('click', openModal)

document.getElementById('modalClose')
    .addEventListener('click', closeModal)

//Evento par abrir/fechar modal editar

document.getElementById('editar')
    .addEventListener('click', openModaledit)

document.getElementById('modalCloseedit')
    .addEventListener('click', closeeditModal)
