<?php
include "database.php";
// Выводим результат из БД
$sql = mysqli_query($conn, 'SELECT * FROM `books`');
  while ($result = mysqli_fetch_array($sql)) {
	echo '<tr>'.'<td class = "bookname">' .$result['name'].'</td>'.'<td>'. $result['price'].'</td>'.'<td class = "desc">'. $result['description'].'</td>'.'<td>'.'<a href="item.php?id='.$result['id'].'">'.'<img src="'.$result['img'].'" class = "pic" href="item.php">'.'</a>'.'</td>'.'</tr>';
  }
?>
