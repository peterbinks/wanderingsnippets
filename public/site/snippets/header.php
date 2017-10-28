<!DOCTYPE html>
<html lang="en">
<head>

  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="google-site-verification" content="iKFRMbgwVCUYu8_PEQuJR_iJ87CkvkLDPU4pYleuxiw" />
  <?php echo css('assets/styles/normalize.css') ?>
  <?php echo css('assets/styles/main.css') ?>
  <?php echo js('assets/scripts/instafeed.js') ?>
  <?php echo js('assets/scripts/main.js') ?>
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Karla" rel="stylesheet">
  <style>
  .wf-loading h1, .wf-loading h2, .wf-loading h3, .wf-loading h4, .wf-loading p, .wf-loading li, .wf-loading blockquote {
      visibility: hidden;
  }
  </style>
</head>

<body>
