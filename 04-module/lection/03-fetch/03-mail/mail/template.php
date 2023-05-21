<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html style="width: 100%; height: 100%; padding: 0;">
<head>
    <meta content="text/html charset=UTF-8" http-equiv="Content-Type"/>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="x-apple-disable-message-reformatting">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="telephone=no" name="format-detection">
    <title></title>
    <style type="text/css">
        table {
            border-collapse: separate;
            border-spacing: 0;
            font-family: Arial, sans-serif;
        }

        td {
            padding: 0;
            text-align: center;
        }

        a,
        a:link,
        a:visited {
            text-decoration: none;
            color: #2972E0;
        }
    </style>
</head>

<body style="width: 100%; height: 100%; padding: 0; margin: 0;">
<table align="center" class="tableStandardBlock_mr_css_attr mainBlock_mr_css_attr" height="100%" width="100%"
       style="font-family: Arial, sans-serif;border-spacing: 0;border-collapse: collapse;padding: 0;background-color: #E4E7EA;">
        <tr>
            <td width="600">
                <table width="600">
                    <tr>
                        <th>Продукт</th>
                        <th>Цена</th>
                        <th>Кол-во</th>
                    </tr>

                    <?php foreach ($products as $product): ?>
                    <tr>
                            <td><?= $product['name'] ?></td>
                            <td><?= $product['price'] ?></td>
                            <td><?= $product['count'] ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
            </td>
        </tr>
</table>
</body>
</html>