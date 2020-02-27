
<?php
    require_once("header.php");
    $getset = !empty($_GET);
  
    $alfabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $leestekens = ".?!";
    $full_alfabet = $alfabet.strtolower($alfabet).$leestekens;
    $arr_full_alfabet = str_split($full_alfabet); 

    if($getset){
        $input = $_GET["encryptstring"];
        $output = $_GET["decryptstring"];
        $arrInput = str_split($input);

        echo "<label for='output'>Output string</label>";
        if(ISSET($_GET["btnEncrypt"])){
            $output_string = encrypt($arrInput, $arr_full_alfabet);
            echo "<input name='decryptstring' id='output' value='$output_string'>";
        }

        if(ISSET($_GET["btnDecrypt"])){
            $output_string = decrypt($arrInput, $arr_full_alfabet);
            echo "<input name='decryptstring' id='output' value='$output_string'>";
        }
        echo "<input name='decryptstring' id='output' value=''>";
    }

    function encrypt($input, $alf){
        $output = "";
        foreach ($input as $key => $input_value) {
            foreach($alf as $key => $alfabet_value){
                if($alfabet_value == $input_value){
                    $output = $output.$alf[$key + 2];
                }
            }
        }
        return $output;
    }

    function decrypt($input, $alf){
        
    }


    require_once("footer.php");
?>


