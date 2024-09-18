<?php

function Number($score1, $score2, $score3){
    $total = $score1 + $score2 + $score3;
    if ($total>210) {echo "合計点は" . $total ."なので合格です。";}
    else {echo "合計点は" . $total ."なので不合格です。";}
}
echo (Number(80, 60, 90));