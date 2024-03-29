<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 2px solid #0b280c;
  background-color: #37662a;
  border-radius: 10px 10px 0px 0px
}

/* Style the buttons inside the tab */
.tab button {
  margin: 5px;
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 4px 6px;
  transition: 0.3s;
  font-size: 16px;
  color: white;
  border-radius: 10px;
  text-decoration: none;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #194515;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #194515;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 2px solid #0b280c;
  border-top: none;
}
</style>


<div style="">
  <div class="tab" style="color: black">
    <button class="tablinks active" onclick="openCity(event, 'Mae')">Mae</button>
    <button class="tablinks" onclick="openCity(event, 'Back')">Back</button>
    <button class="tablinks" onclick="openCity(event, 'Front')">Front</button>
  </div>

  <div id="Mae" class="tabcontent">
    <img width="100%" src="https://maeandthekingdomsofseasons.com/wp-content/uploads/2021/02/Alex.png">
  </div>

  <div id="Back" class="tabcontent">
    <h3>Back</h3>
    <p>This is the back.</p> 
  </div>

  <div id="Front" class="tabcontent">
    <h3>Front</h3>
    <p>This is the front.</p>
  </div>

</div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("Mae").style.display = "block";
</script>
