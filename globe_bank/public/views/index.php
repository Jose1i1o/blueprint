<?php require_once('../../private/initialize.php');
?>

<?php include(SHARED_PATH . '/staff_header.php') ?>

<?php $page_title = 'Staff Menu'; ?>

<div id="content">
  <div id='main-menu'>
    <h2>Main menu</h2>
    <ul>
      <li><a href="<?php echo url_for('/views/subjects/index.php'); ?>">Subjects</a></li>
      <li><a href="<?php echo url_for('/views/pages/index.php'); ?>">Pages</a></li>
    </ul>
  </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php') ?>