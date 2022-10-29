const List = document.querySelectorAll('.list__navbar li a');

function activeLink() {
      List.forEach(item => {
            item.classList.remove('active');
            this.classList.add('active');
      });
}

List.forEach(item => {
      if (item) {
            item.addEventListener('click', activeLink);
      }
});

const slideNavbar = document.querySelector('.slide__navbar');
const btnMenu = document.querySelector('#btn-menu');

btnMenu.onclick = () => {
      btnMenu.classList.toggle('fa-times');
      slideNavbar.classList.toggle('active');
};
