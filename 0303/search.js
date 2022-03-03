//data - imageの動き
const map = document.querySelectorAll('.s_search_radios');
map.forEach(function (item, index) {
  item.onclick = function () {
    document.getElementById('main_map').src = this.dataset.image;
  }
});

//ブラウザバック時にリロード
// jQuery(document).ready(function () {
//   if (window.performance.navigation.type == 2 && location.href == "http://localhost/test-coffee/search/") {
//     location.reload();
//   }
// });
