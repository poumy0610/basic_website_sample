<!DOCTYPE html>
<html lang="en">
<head>
  <title>CodeIgniter Tutorial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script> -->
  <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
  <!-- <script src="../ckeditor/ckeditor.js"></script> -->

</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php echo base_url(); ?>">YiBlog</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php echo base_url(); ?>">Home</a></li>
      <li><a href="<?php echo base_url(); ?>about">About</a></li>
      <li><a href="<?php echo base_url(); ?>posts">Post</a></li>
      <li><a href="<?php echo base_url(); ?>categories">Categories</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?php echo base_url(); ?>users/register">Register</a></li>
      <li><a href="<?php echo base_url(); ?>posts/create">Create Post</a></li>
      <li><a href="<?php echo base_url(); ?>categories/create">Create Category</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
    <!-- Flash message -->
    <?php if($this->session->flashdata('user_registered')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_created')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
    <?php endif; ?>
    
    <?php if($this->session->flashdata('post_updated')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('post_updated').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_created')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('category_created').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('post_deleted')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('post_deleted').'</p>'; ?>
    <?php endif; ?>