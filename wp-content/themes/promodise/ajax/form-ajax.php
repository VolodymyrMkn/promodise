<?php
add_action('wp_ajax_nopriv_my_action', 'myAjax');
add_action('wp_ajax_my_action', 'myAjax');

function myAjax() {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mail_to = get_option('admin_email');
        $phone = trim($_POST["phone"]);
        $name = trim($_POST["name"]);
        $email = trim($_POST["email"]);
        $message = trim($_POST["message"]);
            if ( empty($name) OR empty($email) OR empty($phone) OR empty($message)) {
                # Set a 400 (bad request) response code and exit.
                http_response_code(400); // возвращаем ответ с ошибкой 400  (иначе будет возвращен статус 200)
                echo "Пожалуйста заполните все обязательные поля.";
                exit;
            }
        $content = "Имя: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Телефон: $phone\n\n";
        $content .= "Сообщение:\n$message\n";
        $subject= 'Заявка с сайта ' . get_bloginfo('name');
        $headers = "From: $name <$email>";
        $success = wp_mail($mail_to, $subject, $content, $headers);
            if ($success) {
                # Set a 200 (okay) response code.
                http_response_code(200);
                echo "Спасибо! Ваше сообщение отправлено.";
            } else {
                # Set a 500 (internal server error) response code.
                http_response_code(500);
                echo "Упс! Что-то пошло не так, не получилось отправить сообщение.";
            }
    } else { http_response_code(403);
        echo "Не получилось отправить. Попробуйте позже"; }

    wp_die();
}
?>