const selectCategory = document.getElementById('category');
const products = document.querySelectorAll('.product');

selectCategory.addEventListener('change', () => {
    const selectedCategory = selectCategory.value;

    products.forEach(product => {
        const productCategories = product.dataset.categories.split(' ');
        const shouldBeVisible = selectedCategory === 'all' || productCategories.includes(selectedCategory);
        product.classList.toggle('category-hidden', !shouldBeVisible);
    });
});


const buttons = document.querySelectorAll(".btn2");
buttons.forEach(btn2 => {
  btn2.onmousemove = function (e){
    const x = e.pageX - btn2.offsetLeft;
    const y = e.pageY - btn2.offsetTop;

    btn.style.setProperty("--x", x + "px");
    btn.style.setProperty("--y", y + "px");
  };
});
