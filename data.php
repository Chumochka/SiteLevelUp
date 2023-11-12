<?
include('db/dbcon.php');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Записи</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
		<link rel="stylesheet" href="css/data.css">
        <link rel="shortcut icon" type="image/x-icon" href="image/logoicon.png">
    </head>
    <body>
		<header>
			<div class="container d-flex justify-content-between align-items-center py">
				<div class="header_title">Список записей</div>
				<img class="img-fluid" src="image/logo.png">
			</div>
		</header>
		<div class="container">
			<table class="text-center mt-5">
				<thead>
					<th>Фамилия</th>
					<th>Имя</th>
					<th>Отчество</th>
					<th>Телефон</th>
					<th>Email</th>
					<th>Интересующий товар</th>
				</thead>
				<tbody>
				<?$sql="SELECT * FROM `orders`";
					$result=$cms->query($sql);
					if($result->num_rows > 0)
					{
						while ($row=$result->fetch_assoc())
						{
							$ordertype=$cms->query("SELECT `Name` FROM `order_types` WHERE `ID` = {$row['OrderType']}");
							$row1= $ordertype->fetch_assoc();
							echo "<tr>
						<td>
							{$row['Surname']}
						</td>
						<td>
							{$row['Name']}
						</td>
						<td>
							{$row['Patronymic']}
						</td>
						<td>
							{$row['Phone']}
						</td>
						<td>
							{$row['Email']}
						</td>
						<td>
							{$row1['Name']}
						</td>
					</tr>";
						}
					}
				?>
				</tbody>
			</table>
		</div>
    </body>
</html>
    