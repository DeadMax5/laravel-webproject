<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>قصة</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            direction: rtl;
            text-align: right;
        }

        h2 {
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h2>تفاصيل القصة</h2>

    <p><strong>العنوان الوظيفي:</strong> {{ $job_title }}</p>
    <p><strong>نوع القصة:</strong> {{ $storyType->name ?? 'غير محدد' }}</p>
    <p><strong>التشكيل:</strong> {{ $tashkel->name ?? 'غير محدد' }}</p>
    <p><strong>ملخص القصة:</strong></p>
    <p>{{ $summry }}</p>
</body>

</html>