let menus = document.querySelectorAll('#fundbox .fund_grid');

let myAcct = document.querySelector('#myAcct');
if (myAcct) {
  myAcct.addEventListener('click', navToAccountInfo)
}

if (menus) {
  for (let i of menus) {
    i.addEventListener('click', navTo)
  };
}

function navTo(){
  let href = this.dataset.url;
  location.pathname = href;
}

function navToAccountInfo(){
  location.pathname = '/account/info';
}

wx.hideMenuItems({
  menuList: [
    "menuItem:copyUrl"
  ]
});
