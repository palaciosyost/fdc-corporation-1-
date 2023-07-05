const d = document;
(() => {

    let btn = d.querySelector('.btn-nav'),
        model = d.querySelector('.model-bg')

    d.addEventListener('DOMContentLoaded', e => {
        d.addEventListener('click', e => {

            if (e.target.matches('.btn-nav *')) {
                model.classList.add('active')
            }
            else if (e.target.matches('.close *')) {
                model.classList.remove('active')
            }
        })
    })

})()

d.addEventListener('DOMContentLoaded', e => {
    const $nav = d.querySelector('.navbar-fdc')
    d.addEventListener('scroll', e => {
        let scrollx = pageYOffset;
        console.log(scrollx)
        if (scrollx > 300) {
            $nav.classList.add('nav-active')
        }else {
            $nav.classList.remove('nav-active')
        }
    })
})