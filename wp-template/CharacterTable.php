<?php
/*
Template Name: Character Table
*/
$characterName = $_GET["characterName"];
$characterData = json_decode(file_get_contents('https://script.google.com/macros/s/AKfycbwk4hdhsehHOSd_zUdZ2hXvNsTU0TNNQbKM3eX7vwGYhDixptc0/exec?name=' . $characterName));
function getVisibleStyle($value) {
  if ( $value == "" ) {
    echo "display: none;";
  }
}
$images = $characterData->images == "" ? [] : json_decode($characterData->images);
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
  <?php
    foreach ($images as $image) { ?>
    <button class="tablinks <?php if ($image->title == $images[0]->title) { echo "active"; } ?>" onclick="openPose(event, '<?php echo $image->title ?>')"><?php echo $image->title ?></button>
    <?php } ?>
  </div>

  <div class="tabcontent-container">
    <?php
    foreach ($images as $image) { ?>
    <div id="<?php echo $image->title ?>" class="tabcontent" style="<?php if ($image->title == $images[0]->title) { echo "display: block;"; }?>">
      <img width="100%" src="<?php echo $image->url ?>">
    </div><?php 
    }?>
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
            <span style="<?php getVisibleStyle($characterData->age) ?>"><br>Age: <span style="color:black;"><?php echo $characterData->age ?></span></span>
            <span style="<?php getVisibleStyle($characterData->gender) ?>"><br>Gender: <span style="color:black;"><?php echo $characterData->gender ?></span></span>
            <span style="<?php getVisibleStyle($characterData->sexuality) ?>"><br>Sexuality: <span style="color:black;"><?php echo $characterData->sexuality ?></span></span>
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
          <strong><span style="<?php getVisibleStyle($characterData->parents) ?>">Parents: <span style="color:black;"><?php echo $characterData->parents ?></span></span>
            <span style="<?php getVisibleStyle($characterData->siblings) ?>"><br>Siblings: <span style="color:black;"><?php echo $characterData->siblings ?></span></span>
            <span style="<?php getVisibleStyle($characterData->partner) ?>"><br>Partner: <span style="color:black;"><?php echo $characterData->partner ?></span></span>
            <span style="<?php getVisibleStyle($characterData->children) ?>"><br>Children: <span style="color:black;"><?php echo $characterData->children ?></span></span>
            <span style="<?php getVisibleStyle($characterData->relatives) ?>"><br>Relatives: <span style="color:black;"><?php echo $characterData->relatives ?></span></span>
            <span style="<?php getVisibleStyle($characterData->owner) ?>"><br>Owner: <span style="color:black;"><?php echo $characterData->owner ?></span></span>
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
          <strong><span style="<?php getVisibleStyle($characterData->species) ?>">Species: <span style="color:black;"><?php echo $characterData->species ?></span></span>
            <span style="<?php getVisibleStyle($characterData->social_class) ?>"><br>Social Class: <span style="color:black;"><?php echo $characterData->social_class ?></span></span>
            <span style="<?php getVisibleStyle($characterData->occupation) ?>"><br>Occupation: <span style="color:black;"><?php echo $characterData->occupation ?></span></span>
            <span style="<?php getVisibleStyle($characterData->home) ?>"><br>Home: <span style="color:black;"><?php echo $characterData->home ?></span></span>
            <span style="<?php getVisibleStyle($characterData->appearances) ?>"><br>Appearances: <span style="color:black;"><?php echo $characterData->appearances ?></span></span>
          </strong>
        </td>
      </tr>
    </tbody>
  </table>
</figure>