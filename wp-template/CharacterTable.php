<?php
/*
Template Name: Character Table
*/
$characterName = $_GET["characterName"];
$characterData = file_get_contents('https://script.google.com/macros/s/AKfycbwk4hdhsehHOSd_zUdZ2hXvNsTU0TNNQbKM3eX7vwGYhDixptc0/exec?name=' . $characterName);
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
          <strong>Full Name: <span><? echo $characterData->name ?></span>
            <br>Nicknames:
            <br>Age:
            <br>Gender:
            <br>Sexuality:
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
          <strong>Parents:
            <br>Siblings:
            <br>Partner(s):
            <br>Children:
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
          <strong>Species:
            <br>Social Class:
            <br>Occupation:
            <br>Home:
          </strong>
        </td>
      </tr>
    </tbody>
  </table>
</figure>
<!-- 
  {"characterData":{"page_name":"Alex","images":"","name":"Alex of Thatcher and Asha","age":"4 (Asha's Death)","gender":"Female","sexuality":"Straight","parents":"Asha, Thatcher","siblings":"Timber, Nadia, Amber","partner":"","children":"","relatives":"","owner":"","species":"Seiki","social_class":"Higher Class","occupation":"","home":"Seiki Kingdom","appearances":""}}
-->
