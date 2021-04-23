<?php
    $request = file_get_contents( 'php://input' );
    
    $request = json_decode( $request, TRUE );
    $myfile = fopen("aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa.txt", "a") or die("Unable to open file!");
    $txt = $request;
    $txt = json_encode($txt ,TRUE);
    fwrite($myfile, $txt."\r\n");
    fclose($myfile);
    $mark;$mode;$entrymin;$entrymax;$firstprofit;
    $secondprofit;$thirdprofit;$lossprofit;$receivetime;
    //$chat_id = $request['message']['chat']['id'];
    //$username = $request['message']['from']['username'];
    $signal_data = $request['message']['text'];
    echo "\r\n new\r\n";
    echo ($signal_data);
    $signal_data = str_replace(' ', '', $signal_data);
    $signal_list = explode("\n",$signal_data);
    var_dump($signal_list);
    echo "\r\n =7";
    for($i = 0; $i < count($signal_list); $i++)
    {
        $signal_entry = explode("：" , $signal_list[$i]);
        if(count($signal_entry) == 2)
        {
            switch($signal_entry[0])
            {
                case "銘柄":
                    $mark = $signal_entry[1];
                    break;
                case "建玉":
                    $mode = $signal_entry[1];
                    break;
                case "エントリーポイント":
                    var_dump($signal_entry[1]);
                    $entries = explode("～",$signal_entry[1]);
                    var_dump($entries);
                    if(count($entries) ==2 )
                    {
                        $entrymin = $entries[0];
                        $entrymax = $entries[1];
                    }
                    else{
                    }
                    break;
                case "第１利確ポイント":
                    $firstprofit = $signal_entry[1];
                    break;
                case "第２利確ポイント":
                    $secondprofit = $signal_entry[1];
                    break;
                case "第３利確ポイント":
                    $thirdprofit = $signal_entry[1];
                    break;
                case "損切りポイント":
                    $lossprofit = $signal_entry[1];
                    break;
            }
        }

    }
    $receivetime = date("Y-m-d H:i:s");
    $db = mysqli_connect('mysql5002.xserver.jp', 'nailguide_criptt', 'wea839fj', 'nailguide_cripttest');
    $mark;$mode;$entrymin;$entrymax;$firstprofit;
    $secondprofit;$thirdprofit;$lossprofit;$receivetime;
    $sql = "INSERT INTO signals(mark,mode,entrymin,entrymax,firstprofit,secondprofit,thirdprofit,lossprofit,receivetime)VALUES('$mark','$mode','$entrymin','$entrymax','$firstprofit','$secondprofit','$thirdprofit','$lossprofit','$receivetime')";
    echo $sql;
    mysqli_query($db, $sql);
?>