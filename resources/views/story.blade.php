<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>قصة</title>
    <style>
        body {
            font-family: DejaVu Sans;
            direction: rtl;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h2>تفاصيل القصة</h2>
    <p><strong>الاسم :</strong> {{ $name }}</p>

    <p><strong>العنوان الوظيفي:</strong> {{ $job_title }}</p>
    <p><strong>نوع القصة:</strong> {{ $storyType->name ?? '---' }}</p>
    <p><strong>التشكيل:</strong> {{ $tashkel->name ?? '---' }}</p>
    <p><strong>ملخص:</strong></p>
    <p>{{ $summry }}</p>
</body>

</html>