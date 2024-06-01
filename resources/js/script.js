let card = document.querySelectorAll('#card-hover')

card.forEach(el => {
    let title = el.querySelector('#titolo-hover')
    el.addEventListener('mouseenter', () => {

        el.style.opacity = '0.8'
        title.style.textDecoration = 'underline'
    })
    el.addEventListener('mouseleave', () => {
        el.style.opacity = '1'
        title.style.textDecoration = 'none'
    })
})
