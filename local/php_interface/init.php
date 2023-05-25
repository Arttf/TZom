<?php
if(file_exists($_SERVER['DOCUMENT_ROOT']."/local/php_interface/classes/EventHandlers.php")) {
    require_once($_SERVER['DOCUMENT_ROOT']."/local/php_interface/classes/EventHandlers.php");
}

?>

<script>
    function get_selected_text() {
        if (window.getSelection()!="") {
            var select = window.getSelection();
            var Dialog = new BX.CDebugDialog({
                title: "Отчет об отправки ошибки",
                head: '',
                content: 'Вы отправили ошибку из текста: '+ select.toString(),
                icon: 'head-block',
                resizable: false,
                draggable: true,
                height: '150',
                width: '400',
                buttons: [ BX.CDialog.btnClose]
            });
            Dialog.Show();
            <?php
            // Сообщение
            $message = "Пользователь отправил ошибку из текста: " . select;
            // Отправляем
            mail('Art12222227@gmail.com', 'Письмо об ошибки', $message);
            ?>
        }
    }

    document.addEventListener('keydown', function (event) {
        if ((event.keyCode == 10 || event.keyCode == 13) && event.ctrlKey) {
            get_selected_text();
        }
    });
</script>
