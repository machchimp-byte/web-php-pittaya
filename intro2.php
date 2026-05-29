<?php
$title = "แนะนำตัว: พิทยา มัชฌิม";
$name = "พิทยา มัชฌิม";
$role = "นักพัฒนาเว็บ";
$bio = "สวัสดีครับ/ค่ะ ผมชื่อพิทยา มัชฌิม ยินดีต้อนรับสู่หน้าพรีเซนต์ตัวเองของผม";
$skills = ["PHP", "HTML", "CSS", "JavaScript"];
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 760px;
            margin: 48px auto;
            padding: 24px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
        }
        h1 {
            margin-top: 0;
            color: #2a5d9f;
        }
        .section {
            margin-top: 20px;
        }
        .skills {
            list-style: none;
            padding-left: 0;
        }
        .skills li {
            display: inline-block;
            margin: 6px 10px 6px 0;
            padding: 8px 12px;
            background-color: #e9f2ff;
            border-radius: 999px;
            color: #1b4f8f;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <p>สวัสดีครับ/ค่ะ ผมชื่อ <strong><?php echo $name; ?></strong> และทำงานเป็น <strong><?php echo $role; ?></strong>.</p>
        <div class="section">
            <h2>เกี่ยวกับผม</h2>
            <p><?php echo $bio; ?></p>
        </div>
        <div class="section">
            <h2>ทักษะ</h2>
            <ul class="skills">
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="section">
            <h2>ติดต่อ</h2>
            <p>หากต้องการติดต่อ สามารถเพิ่มข้อมูลติดต่อได้ที่นี่</p>
        </div>
    </div>
</body>
</html>
