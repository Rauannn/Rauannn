const openModal = () => document.getElementById('modal')
    .classList.add('active')

const closeModal = () => document.getElementById('modal')
    .classList.remove('active')

document.getElementById('cadastrarProduto')
    .addEventListener('click', openModal)

document.getElementById('modalClose')
    .addEventListener('click', closeModal)

const tempProduto = {
    produto: "sapato",
    quantidade: "3",
    custo: "400,00"
}


//CRUD

const createProduto = () => {

}
