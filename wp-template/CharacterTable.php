<?php
/*
Template Name: Character Table
*/
$characterName = $_GET["characterName"];
$characterData = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbwk4hdhsehHOSd_zUdZ2hXvNsTU0TNNQbKM3eX7vwGYhDixptc0/exec?name=' . $characterName));
?>
<style>
/* Style the tab */
.tab {
  overflow: hidden;
  border: 2px solid #0b280c;
  background-color: #37662a;
  border-radius: 10px 10px 0px 0px;
  border-bottom: none;
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
  border-radius: 10px;
  background-color: #fff9ed;
}

.tabcontent-container {
  padding: 0px 14px 14px;
  background-color: #37662a;
  border: 2px solid #0b280c;
  border-top: none;
  border-bottom: none;
}
</style>


<div style="">
  <div class="tab" style="color: black">
    <button class="tablinks active" onclick="openPose(event, 'Mae')">Mae</button>
    <button class="tablinks" onclick="openPose(event, 'Back')">Back</button>
    <button class="tablinks" onclick="openPose(event, 'Front')">Front</button>
  </div>

  <div class="tabcontent-container">
    <div id="Mae" class="tabcontent" style="display: block;">
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

</div>
<figure class="wp-block-table m0 is-style-regular">
  <table>
    <tbody>
      <tr>
        <td class="has-text-align-left" data-align="left">
          <strong>Biography</strong>
        </td>
      </tr>
      <tr>
        <td class="has-text-align-left" data-align="left">
          <strong>Name: <span style="color:black;"><?php echo $characterData->name ?></span>
            <br>Age: <span style="color:black;"><?php echo $characterData->age ?></span>
            <br>Gender: <span style="color:black;"><?php echo $characterData->gender ?></span>
            <br>Sexuality: <span style="color:black;"><?php echo $characterData->sexuality ?></span>
          </strong>
        </td>
      </tr>
      <tr>
        <td class="has-text-align-left" data-align="left">
          <strong>Family</strong>
        </td>
      </tr>
      <tr>
        <td class="has-text-align-left" data-align="left">
          <strong>Parents: <span style="color:black;"><?php echo $characterData->parents ?></span>
            <br>Siblings: <span style="color:black;"><?php echo $characterData->siblings ?></span>
            <br>Partner: <span style="color:black;"><?php echo $characterData->partner ?></span>
            <br>Children: <span style="color:black;"><?php echo $characterData->children ?></span>
            <br>Relatives: <span style="color:black;"><?php echo $characterData->relatives ?></span>
            <br>Owner: <span style="color:black;"><?php echo $characterData->owner ?></span>
          </strong>
        </td>
      </tr>
      <tr>
        <td class="has-text-align-left" data-align="left">
          <strong>Status</strong>
        </td>
      </tr>
      <tr>
        <td class="has-text-align-left" data-align="left">
          <strong>Species: <span style="color:black;"><?php echo $characterData->species ?></span>
            <br>Social Class: <span style="color:black;"><?php echo $characterData->social_class ?></span>
            <br>Occupation: <span style="color:black;"><?php echo $characterData->occupation ?></span>
            <br>Home: <span style="color:black;"><?php echo $characterData->home ?></span>
            <br>Appearances: <span style="color:black;"><?php echo $characterData->appearances ?></span>
          </strong>
        </td>
      </tr>
    </tbody>
  </table>
</figure>
