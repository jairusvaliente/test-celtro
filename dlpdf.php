<?php
require_once __DIR__ . '/vendor/autoload.php';
$conn = mysqli_connect('localhost','root','','adisysdb');
$res =mysqli_query($conn, "SELECT * FROM newrawmatstowarehousetb");
if(mysqli_num_rows($res)>0){

    $html='<table>';
        $html.='<tr><td>ID</td><td>DEPARTMENT</td><td>SUBJECT</td><td>EFFECTIVITY</td><td>INCOMMING_RECEIVING_REPORT_NO<td>PURCHASE_ORDER_NO</td></tr>';
        while($row=mysqli_fetch_assoc($res)){
            $html.='<tr><td>'.$row['ID'].'</td><td>'.$row['DEPARTMENT'].'</td><td'.$row['SUBJECT'].
            '</td><td>'.$row['EFFECTIVITY'].'</td><td>'.$row['INCOMMING_RECEIVING_REPORT_NO'].'</td></tr>';
        }
    $html.='</table>';

}else{
    $html="Data not found";
}
echo $html;
$html.='<h1>Your Details</h1>';
$mpdf =new \Mpdf\Mpdf();
$mpdf ->WriteHTML($html);
$file= time().'.pdf';
$mpdf -> output($file,'D');

?>