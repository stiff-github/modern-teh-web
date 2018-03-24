<?
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . date("r"));
/*echo "<h1>", date("H:i:s"), "</h1>";*/

    function filter($value){
        return htmlspecialchars($value);
    }

    //Если поступили данные..
    if( isset($_POST['name'],$_POST['phone'])){
        $name = trim( htmlspecialchars($_POST['name']) );
        $item = trim( htmlspecialchars($_POST['item']) );
        $phone = trim( htmlspecialchars($_POST['phone']) );
        if( $name != '' AND $phone != '' ){
            if($item=="Кухни/мебель"){
                $email = "modern-teh-fasad@inbox.ru";
            }
            else{
                $email = "modern-teh@inbox.ru";
            }
            //$email = "modern-teh@inbox.ru";
            //$domen = "http://localhost:63342/modern";
 
            $message = "Имя: ".filter($_POST['name']);
            $message .="<br>Телефон: ".filter($_POST['phone']);
            $message .="<br>Отдел: ".filter($_POST['item']);
            $headers  = "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: modern-teh.by <robot@modern-teh.by>" ."\r\n";
            $subject = "Обратный звонок";
            mail($email, $subject, $message, $headers);
            echo 1;
        }else echo 0;
    }
?>