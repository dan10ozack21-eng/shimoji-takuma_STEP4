<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>form_checklist</title>
</head>
<body>
    <h1>入力内容の確認</h1>
    <?php
    $name = $age = $phone = $email = $address = $question = $gender = "";
    $errors = [];

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $address = $_POST["address"];
        $question = $_POST["question"];
        $gender = $_POST["gender"];

        $errors = [];

        if(!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z 　]+$/u", $name)) {
            $errors[] = "お名前はひらがな・カタカナ・漢字・英字のみをご使用ください。";
        } elseif (!is_numeric($age) || $age < 0 || $age > 150) {
            $errors[] = "ご年齢は0から150の間でご入力ください。";
        } elseif (!preg_match("/^[0-9-]+$/", $phone)) {
            $errors[] = "ご連絡先は半角数字とハイフン(半角)のみ使用可能です。";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "メールアドレスの形式が正しくありません。";
        } elseif (!preg_match("/^[ぁ-んァ-ヶー一-龠a-zA-Z0-9 　]+$/u", $address)) {
            $errors[] = "住所はひらがな・カタカナ・漢字・英字のみをご使用ください。";
        } elseif (empty($errors)) {
        echo "<p>お名前:" . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<p>ご年齢:" . htmlspecialchars($age, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>ご連絡先:" . htmlspecialchars($phone, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>メールアドレス:" . htmlspecialchars($email, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>ご住所:" . htmlspecialchars($address, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>ご質問:" . htmlspecialchars($question, ENT_QUOTES, "UTF-8") . "</p>";
        echo "<p>性別" . htmlspecialchars($gender, ENT_QUOTES, "UTF-8") . "</p>";
        }
    } else {
        echo "<p>データが送信されていません。</p>";
    }
    ?>
</body>