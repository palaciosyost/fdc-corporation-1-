const d = document;
(() => {

    let btn = d.querySelector('.btn-nav'),
        model = d.querySelector('.model-bg')

    d.addEventListener('DOMContentLoaded', e => {
        d.addEventListener('click', e => {

            if (e.target.matches('.btn-nav *')) {
                model.classList.add('active')
            }
            else if(e.target.matches('.close *') ){
                model.classList.remove('active')
            }
        })
    })

})()