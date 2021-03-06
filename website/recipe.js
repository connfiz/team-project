
const baseURL = 'https://api.sampleapis.com/coffee/hot';
fetch(baseURL)
  .then(resp => resp.json())
  .then(data => displayData(data));

function displayData(data) {




  // this way if the button is on the page it'll run
  var recipe = document.getElementById("recipe");
  if (recipe) {

    recipe.onclick = function () {
      /* Supporting Older IE Browsers */
      var request;
      if (window.XMLHttpRequest) {
        request = new XMLHttpRequest();
      }
      else {
        request = new ActiveXObject("Microsoft.XMLHTTP");
      }
      request.open('GET', 'recipe.json');
      request.onreadystatechange = function () {
        if ((request.readyState === 4) && (request.status === 200)) {
          var items = JSON.parse(request.responseText);
          console.log(items);
          var output = "<ul>";
          for (var key in items) {
            debugger;
            output += "<li>" + items[key].title + "</br>" + items[key].ingredients + "</br>" + items[key].description + "</li>";
          }
          output += "</ul>";
          document.getElementById("update").innerHTML = output;
        }
      }; request.send();
    }
  }
  else {
    console.log('couldnt find button')
    return
  }


}
