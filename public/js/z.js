let menus = document.querySelectorAll('.fund_grid');

for (let i of menus) {
  i.addEventListener('click', navTo
    //(e) => {
    //  console.log(e)
    //}
  )
};

function navTo(){
  let href = this.dataset.url;
  location.pathname = href;
}
