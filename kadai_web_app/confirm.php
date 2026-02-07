<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>入力内容確認</title>
</head>
<body>

<h1>入力内容をご確認ください。</h1>

<p>
    問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。
</p>

<table border="1">
    <tr>
        <th>項目</th>
        <th>入力内容</th>
    </tr>
    <tr>
        <td>社員名</td>
        <td><?php echo $_POST['employee_name']; ?></td>
    </tr>
    <tr>
        <td>年齢</td>
        <td><?php echo $_POST['employee_age']; ?></td>
    </tr>
    <tr>
        <td>所属部署</td>
        <td><?php echo $_POST['department']; ?></td>
    </tr>
</table>

<br>

<form action="complete.php" method="post" style="display:inline;">
    <input type="hidden" name="employee_name" value="<?php echo $_POST['employee_name']; ?>">
    <input type="hidden" name="employee_age" value="<?php echo $_POST['employee_age']; ?>">
    <input type="hidden" name="department" value="<?php echo $_POST['department']; ?>">
    <input type="submit" value="確定">
</form>

<form action="form.php" method="get" style="display:inline;">
    <input type="submit" value="キャンセル">
</form>

</body>
</html>
