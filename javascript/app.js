window.addEventListener("DOMContentLoaded", (event) => { //callback
    const navMenu = document.getElementsByClassName('el-nav');
    const menuContainer = document.getElementsByClassName('menu-container');
    const projetMenu = document.getElementsByClassName('projet-menu');
    const projetContainer = document.getElementsByClassName('projet-container');
    const Icon = document.getElementsByClassName('i');
    for (let item of navMenu) {
        item.addEventListener('click', function (event) {
            for (let item of menuContainer) {
                if (item.classList.contains('active')) {
                    item.classList.remove('active')

                }
                for (let item of projetContainer) {
                    if (item.classList.contains('active-projet')) {
                        item.classList.remove('active-projet')
                    }
                    const dataNav = event.currentTarget.dataset.nav
                    const dataContainer = document.querySelector(`[data-container= ${dataNav}]`)
                    dataContainer.classList.add('active')
                    item.classList.remove('color-icon')
                }
            }
            for (let item of Icon) {
                if (item.classList.contains('color-icon')) {
                    item.classList.remove('color-icon')
                }
                this.classList.add('color-icon')
            }
        })
        for (let item of projetMenu) {
            item.addEventListener('click', function (event) {
                for (let item of projetContainer) {
                    if (item.classList.contains('active-projet')) {
                        item.classList.remove('active-projet')
                    }
                    for (let item of menuContainer) {
                        if (item.classList.contains('active')) {
                            item.classList.remove('active')
                        }
                        const dataProjet = event.currentTarget.dataset.projet
                        const dataProjetContainer = document.querySelector(`[data-sous-menu= ${dataProjet}]`)
                        dataProjetContainer.classList.add('active-projet')

                    }
                }
            })
        }
    }
})

function submit() {
    const nom = document.getElementsByClassName('nom');
    const email = document.getElementsByClassName('email');
    const message = document.getElementsByClassName('message');

    alert("bonjour");
}
