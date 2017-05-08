<?php include 'view/header.php'; ?>

<html>
<body>

  <div id="about" class="container-fluid">
    <div class="row">
      <div class="col-sm-8">
         <h1>Add Task</h1> 
      </div>
    </div>
  </div>

  <div class="container" style="width: 24%;position: relative;left: -30%;background: #F5DEB3; padding: 8px 10px 8px 12px;color: #DC143C;border-radius: 7px;"> 
    <form method="post" action="index.php" >
      <div class="form-group">
        <label>Task:</label>
        <input type="text" name="task" class="form-control" id="task" placeholder="Enter Task" style="padding: 2px 7px 10px 9px";>
      </div>
      <div class="form-group">
        <label>Start Date:</label>
        <input type="date" name="createddate" class="form-control" id="createddate" style="padding: 2px 7px 10px 9px"; >
      </div>
      <div class="form-group">
        <label>Due Date:</label>
        <input type="date" name="duedate" class="form-control" id="duedate" style="padding: 2px 7px 10px 9px";>
      </div>
      <div class="form-group">
        <label>Due Date:</label>
        <input type="hidden" name="action" class="form-control" value="add_task" style="padding: 2px 7px 10px 9px";>
      </div>
      <div class="form-group">
        <input type="submit" value="Add New Task" class="btn btn-default" />
      </div>
    </form>
  </div>

</body>
</html>
<?php include 'view/footer.php'; ?>
