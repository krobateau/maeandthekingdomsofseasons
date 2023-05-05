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
<div class="tabcontent-container" style="padding: 14px 14px 14px; border-radius: 0px 0px 10px 10px">
  <figure class="wp-block-table m0 is-style-regular" style="border: 0px">
    <table>
      <tbody>
        <tr>
          <td class="has-text-align-left" data-align="left" style="padding: 0px">
            <div style="background-color: #194515;border-radius: 10px;border: 2px solid #0b280c;padding: 5px;">
              <strong>Biography</strong>
            </div>
          </td>
        </tr>
        <tr>
          <td class="has-text-align-left" data-align="left" style="padding: 0px; background-color: inherit;">
            <div style="background-color: #fff9ed; border-radius: 10px; padding: 12px; margin: 10px 0; border: 2px solid #0b280c;">
              <strong>Name: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->name ?></span>
                <span style="<?php getVisibleStyle($characterData->age) ?>"><br>Age: <span style="color:#70401e; font-weight: normal"><?php echo $characterData->age ?></span></span>
                <span style="<?php getVisibleStyle($characterData->gender_identity) ?>"><br>Gender Identity: <span style="color:#70401e; font-weight: normal"><?php echo $characterData->gender_identity ?></span></span>
                <span style="<?php getVisibleStyle($characterData->sexuality) ?>"><br>Sexuality: <span style="color:#70401e; font-weight: normal"><?php echo $characterData->sexuality ?></span></span>
              </strong>
            </div>
          </td>
        </tr>
        <tr>
          <td class="has-text-align-left" data-align="left" style="padding: 0px; background-color: inherit;">
            <div style="background-color: #194515;border-radius: 10px;border: 2px solid #0b280c;padding: 5px;">
              <strong>Family</strong>
            </div>
          </td>
        </tr>
        <tr>
          <td class="has-text-align-left" data-align="left" style="padding: 0px; background-color: inherit;">
            <div style="background-color: #fff9ed; border-radius: 10px; padding: 12px; margin: 10px 0; border: 2px solid #0b280c;">
              <strong><span style="<?php getVisibleStyle($characterData->parents) ?>">Parents: <span style="color:#70401e; font-weight: normal"><?php echo $characterData->parents ?></span></span>
                <span style="<?php getVisibleStyle($characterData->siblings) ?>"><br>Siblings: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->siblings ?></span></span>
                <span style="<?php getVisibleStyle($characterData->partner) ?>"><br>Partner: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->partner ?></span></span>
                <span style="<?php getVisibleStyle($characterData->children) ?>"><br>Children: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->children ?></span></span>
                <span style="<?php getVisibleStyle($characterData->relatives) ?>"><br>Relatives: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->relatives ?></span></span>
                <span style="<?php getVisibleStyle($characterData->owner) ?>"><br>Owner: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->owner ?></span></span>
              </strong>
            </div>
          </td>
        </tr>
        <tr>
          <td class="has-text-align-left" data-align="left" style="padding: 0px; background-color: inherit;">
            <div style="background-color: #194515;border-radius: 10px;border: 2px solid #0b280c;padding: 5px;">
              <strong>Status</strong>
            </div>
          </td>
        </tr>
        <tr>
          <td class="has-text-align-left" data-align="left" style="padding: 0px; background-color: inherit;">
            <div style="background-color: #fff9ed; border-radius: 10px; padding: 12px; margin: 10px 0; border: 2px solid #0b280c;">
              <strong><span style="<?php getVisibleStyle($characterData->species) ?>">Species: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->species ?></span></span>
                <span style="<?php getVisibleStyle($characterData->social_class) ?>"><br>Social Class: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->social_class ?></span></span>
                <span style="<?php getVisibleStyle($characterData->occupation) ?>"><br>Occupation: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->occupation ?></span></span>
                <span style="<?php getVisibleStyle($characterData->home) ?>"><br>Home: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->home ?></span></span>
                <span style="<?php getVisibleStyle($characterData->appearances) ?>"><br>Appearances: <span style="color:#70401e; font-weight: normal;"><?php echo $characterData->appearances ?></span></span>
              </strong>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </figure>
</div>