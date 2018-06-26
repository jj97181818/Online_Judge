<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OnlineJudge</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div id="header">
			<h2>OnlineJudge</h2>
		</div>
		<div id="navi">
			<ul>
				<li><a href="home.html">Home</a></li>
				<li><a href="problems.php">Problems</a></li>
				<li><a href="login.html">Login</a></li>
			</ul>
		</div>
		<div id="container" style="height: 600px">
			<div id="problems">
				<h3>Problems</h3>
				<?php
				$input=fopen("result.txt","r");
				$res=fread($input, "2");
				fclose($input);
				?>
				<div id="article" align="center">
					<table align="center">
						<tr>
							<th style="width: 10%">No</th>
							<th style="width: 80%">Name</th>
							<th style="width: 20%">State</th>
						</tr>
						<tr>
							<td>01</td>
							<td><a href="ques1.html">What’s Cryptanalysis?</a></td>
							<td>-</td>
						</tr>
						<tr>
							<td>02</td>
							<td><a href="ques2.html">Vito’s family</a></td>
							<?php
							if(!is_null($res))
							{
								echo "<td> $res </td>";
							}	
							else
							{
								echo "<td>-</td>";
							}
							?>
						</tr>
						<tr>
							<td>03</td>
							<td><a href="ques3.html">Hashmat the Brave Warrior</a></td>
							<td>-</td>
						</tr>
						<tr>
							<td>04</td>
							<td><a href="ques4.html">A mid-summer night’s dream</a></td>
							<td>-</td>
						</tr>
						<tr>
							<td>05</td>
							<td><a href="ques5.html">An Easy Problem!</a></td>
							<td>-</td>
						</tr>
						<tr>
							<td>06</td>
							<td><a href="ques6.html">Minesweeper</a></td>
							<td>-</td>
						</tr>
						<tr>
							<td>07</td>
							<td><a href="ques7.html">All You Need Is Love</a></td>
							<td>-</td>
						</tr>
						<tr>
							<td>08</td>
							<td><a href="ques8.html">Decode the Mad man</a></td>
							<td>-</td>
						</tr>
						<tr>
							<td>09</td>
							<td><a href="ques9.html">Largest Square</a></td>
							<td>-</td>
						</tr>
						<tr>
							<td>10</td>
							<td><a href="ques10.html">Doom’s Day Algorithm</a></td>
							<td>-</td>
						</tr>
					</table>
					<br>
					<form action="#" method="post">
						<input type="submit" name="pageup" value="上一頁">
						<b>- 1 -</b>
						<input type="submit" name="pagedown" value="下一頁">
					</form>
				</div>
			</div>
			<?php
			$open=fopen("ans.txt", "w");
			fwrite($open, $_REQUEST['code']);
			fclose($open);
			?>
		</div>
		<br>
		<div id="footer">
			<p style="padding: 0px 15px">&copy; 2018. All rights reserved.</p>
		</div>
	</body>
</html>