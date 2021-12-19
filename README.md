# maeandthekingdomsofseasons

- [maeandthekingdomsofseasons](#maeandthekingdomsofseasons)
  - [Using Trello and GitHub](#using-trello-and-github)
  - [The Wordpress Template](#the-wordpress-template)
- [Website usage](#website-usage)
  - [Managing character data](#managing-character-data)
  - [Retrieving raw character data](#retrieving-raw-character-data)

## Using Trello and GitHub

Instructions on how to use the Trello Board and Github is located in the following link.
https://docs.google.com/document/d/1UZavnQ-z6Qw4WkqB0qukqhNQmmGnzpx4_9vhh34aXrM/edit#


## The Wordpress Template

The wordpress template files are stored in the `wp-template` folder.

Here are the descriptions of the files

- 404.php
  - The page content that will appear when a file cannot be found
- assets/css/hemingway-block-editor-style.css
  - The style for the wordpress block editor.  We probably do not want to edit this.
- assets/css/hemingway-classic-editor-style.css
  - The style for the wordpress classic editor.  We probably do not want to edit this.
- assets/js/global.js
  - Most likely javascript functions that will appear on all pages
- comments.php
  - The comments section of the site
- content.php
  - The contents of a blog post
- footer.php
  - The footer section of the website
- functions.php
  - [need to learn more about this]  Do not edit.
- header.php
  - The header section of the website
- image.php
  - [need to learn more about this]
- inc/classes/class-hemingway-customize.php
  - [unknown]
- index.php
  - The website home page
- readme.txt
  - Template creator notes and licenses with a history of changes
- sidebar.php
  - The website sidebar.  [Don't know where this will appear]
- singular.php
  - The website page.
- style.css
  - The stylesheet for the entire site
- template-archives.php
  - A template file
- template-fullwidth.php
  - A full width template
- template-nosidebar.php
  - A page template where there is no sidebar

# Website usage

## Managing character data

Character data is stored in a [data table](https://docs.google.com/spreadsheets/d/1tYCziig9hmANi0z_TAZYVL7dbd5rgF58lTuP_XkFa7s).  Open the data table link to see instruction on how to use it.

## Retrieving raw character data

The character data can be retrieved using the following command.

```bash
curl -L "https://script.google.com/macros/s/AKfycbwk4hdhsehHOSd_zUdZ2hXvNsTU0TNNQbKM3eX7vwGYhDixptc0/exec?name=${CHARACTER_NAME}"
```

Where the `CHARACTER_NAME` environment variable can be replaced by the name of the character in the data table.

It will return a JSON file containing the character information.