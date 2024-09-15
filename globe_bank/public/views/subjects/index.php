<?php require_once('../../../private/initialize.php'); ?>

<?php

$subject_set = find_all_subjects();

// ARRAY PRIOR TO FETCHING DATA FROM MYSQL
// $subjects = [
//   ['id' => '1', 'position' => '1', 'visible' => '1', 'menu_name' => 'About Globe Bank'],
//   ['id' => '2', 'position' => '2', 'visible' => '1', 'menu_name' => 'Consumer'],
//   ['id' => '3', 'position' => '3', 'visible' => '1', 'menu_name' => 'Small Business'],
//   ['id' => '4', 'position' => '4', 'visible' => '1', 'menu_name' => 'Commercial'],
// ];
?>

<?php $page_title = 'Subjects'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="subjects listing">
    <h1>Subjects</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/views/subjects/new.php'); ?>">Create New Subject</a>
    </div>

    <table class="list">
      <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php while ($subject = mysqli_fetch_assoc($subject_set)) { ?>
        <tr>
          <td><?php echo h($subject['id']); ?></td>
          <td><?php echo h($subject['position']); ?></td>
          <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
          <td><?php echo h($subject['menu_name']); ?></td>
          <td><a class="action" href="<?php echo url_for('/views/subjects/show.php?id=' . h(u($subject['id']))); ?>">View</a></td>
          <td><a class="action" href="<?php echo url_for('/views/subjects/edit.php?id=' . h(u($subject['id']))); ?>">Edit</a></td>
          <td><a class="action" href="<?php echo url_for('/views/subjects/delete.php?id=' . h(u($subject['id']))); ?>">Delete</a></td>
        </tr>
      <?php } ?>
    </table>

    <?php
    mysqli_free_result($subject_set); // This frees up the memory we allocated to store the result of the query. So that it can be used elsewhere;
    ?>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>