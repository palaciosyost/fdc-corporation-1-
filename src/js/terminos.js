
const activeTerminos = () => {
    const $btn = document.querySelector('.btn-terminos'),
        $terminos = document.querySelector('.bg-terminos')

    document.addEventListener('DOMContentLoaded', e => {
        document.addEventListener('click', e => {
            if (e.target === $btn) {
                console.log(e)
                console.log($terminos)
                console.log($btn)
                $terminos.classList.add('active-terminos')
            }
            else if (e.target.matches('.close-terminos *')) {
                $terminos.classList.remove('active-terminos')
            }
        })
    })
}

activeTerminos()