<?php
// week4.php - two functions: 1) show multiplication table for a number, 2) add two numbers
$loop_html = '';
$add_msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$action = $_POST['action'] ?? '';
		if ($action === 'loop') {
				$n = intval($_POST['number'] ?? 0);
				if ($n <= 0) {
						$loop_html = '<p class="info">กรุณาป้อนจำนวนเต็มบวก</p>';
				} else {
						$loop_html = '<h3>ตารางสูตรของ ' . htmlspecialchars($n) . '</h3><ul>';
						for ($i = 1; $i <= 12; $i++) {
								$loop_html .= '<li>' . $n . ' × ' . $i . ' = ' . ($n * $i) . '</li>';
						}
						$loop_html .= '</ul>';
				}
		} elseif ($action === 'add') {
				$a = $_POST['a'] ?? '';
				$b = $_POST['b'] ?? '';
				if ($a === '' || $b === '') {
						$add_msg = '<p class="info">กรุณากรอกตัวเลขทุกช่อง</p>';
				} else if (!is_numeric($a) || !is_numeric($b)) {
						$add_msg = '<p class="info">กรุณาป้อนตัวเลขเท่านั้น</p>';
				} else {
						$sum = floatval($a) + floatval($b);
						$add_msg = '<p class="info">ผลรวมของ ' . htmlspecialchars($a) . ' และ ' . htmlspecialchars($b) . ' = ' . $sum . '</p>';
				}
		}
}
?>
<!doctype html>
<html lang="th">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Week 4 - ฟังก์ชันตัวเลข</title>
	<link rel="stylesheet" href="site/styles/style.css">
	<style> .grid{display:flex;gap:2rem;flex-wrap:wrap;} .card{flex:1;min-width:260px;padding:1rem;border:1px solid #ddd;border-radius:6px;} </style>
</head>
<body>
	<header>
		<h1>Week 4 - ฟังก์ชันตัวเลข</h1>
		<nav><a href="index.php">หน้าแรก</a> | <a href="site/index.php">site/ หน้าแรก</a></nav>
	</header>
	<main>
		<div class="grid">
			<section class="card">
				<h2>แสดงสูตร (Loop)</h2>
				<?php echo $loop_html; ?>
				<form method="post" action="week4.php">
					<input type="hidden" name="action" value="loop">
					<label>ป้อนตัวเลข (จำนวนเต็มบวก)<br><input type="number" name="number" min="1"></label><br>
					<button type="submit">แสดงสูตร</button>
				</form>
			</section>

			<section class="card">
				<h2>บวกตัวเลข</h2>
				<?php echo $add_msg; ?>
				<form method="post" action="week4.php">
					<input type="hidden" name="action" value="add">
					<label>ตัวเลขที่ 1<br><input type="number" step="any" name="a"></label><br>
					<label>ตัวเลขที่ 2<br><input type="number" step="any" name="b"></label><br>
					<button type="submit">บวก</button>
				</form>
			</section>
		</div>
	</main>
	<footer>
		<p>&copy; 2026 ตัวอย่าง</p>
	</footer>
</body>
</html>

