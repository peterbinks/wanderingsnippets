<?php if(!defined('KIRBY')) exit ?>

# default blueprint

title: Page
pages: true
files: true
fields:
  title:
    label: Title
    type:  text
  coverImage:
    label: Cover Image
    type: image
  text:
    label: Text
    type:  textarea
    size:  large
