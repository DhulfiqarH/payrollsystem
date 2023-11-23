<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="attentancee.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <title>Timesheet</title>
</head>
<body>
  <?php include 'navbar.php'; ?>
  <div class="container">
    <h2>TimeSheet</h2>

    <!-- add functionality -->
    <input type="text" class="textbox" placeholder="Search by employee number or name">

    <!-- count using PHP -->
    <p><strong>Showing 0 entries</strong></p>

    <table>
      <thead>
        <tr>
          <th>Employee ID</th>
          <th>StartTime</th>
          <th>EndTime</th>
          <th>Total Hours Worked</th>
          <th>OverTime</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <!-- PHP data -->
        <tr>
          <td>EMP001</td>
          <td>9:00</td>
          <td>10:10</td>
          <td>1.1 hours</td>
          <td>0</td>
          <td>
            <button class="btn btn-primary">Edit</button>
            <button class="btn btn-danger">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
