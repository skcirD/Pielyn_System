<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table id="tableId">
        <thead>
            <tr><th>Header</th></tr>
        </thead>
        <tbody>
            <tr><td>Row 1</td></tr>
            <tr><td>2</td></tr>
            <tr><td>Row 3</td></tr>
            <tr><td>Row 1</td></tr>
            <tr><td>2</td></tr>
            <tr><td>Row 3</td></tr>
            <tr><td>Row 1</td></tr>
            <tr><td>2</td></tr>
            <tr><td>Row 3</td></tr>
        </tbody>
    </table>

      <span id="total"></span>


      <script type="text/javascript">
        var table = document.getElementById("tableId");
        var totalRowCount = table.rows.length; // 5
        var tbodyRowCount = table.tBodies[0].rows.length; // 3
var sumVar = table.rows[i].cells[1].innerHTML;
alert(sumVar);
        // for (var i = 1; i < tbodyRowCount; i++) {
        //
        // }
      </script>
  </body>
</html>
