<?php
// $this->load->library('image_lib');
// $font = './layout/images/BRUSHSCI.TTF';
// $image = imagecreatefrompng('./layout/images/e_certificate-2.png');
// $color = imagecolorallocate($image,0,77,48);
// $name = "sinu jaan";
// $image_width = imagesx($image);  
// $image_height = imagesy($image);
// imagettftext($image,50,0,290,360,$color,$font,$name);
// $file = $name.'_'.time();
// $file_path = "./layout/images/Generated_Certificates/".$file.".png";
// $file_path_pdf = "./layout/images/Generated_Certificates/".$file.".pdf";
// // imagepng($image);
// imagepng($image,$file_path);
// imagedestroy($image);

// // // Generate PDF
// $this->load->library("fpdf/fpdf");
// $pdf = new FPDF('L','mm',array(210,150));
// $pdf->AddPage();
// $pdf->Image($file_path,0,0,210,150);
// $pdf->Output($file_path_pdf,"F");
// $result['certificate_name'] = $file_path_pdf;

// //dompdf working code
// $html ='<body>
// <div id="watermark"><img src="./layout/images/e_certificate-2.png" height="100%" width="100%"></div>
//  <div id="header">
//    <h3 style="padding-top:10px;">hello</h3>
//  </div>
//  <div id="footer">
//    <h3 style="padding-top:8px; padding-right:25px;" class="CIJ">ABSOLUTE MARKET INSIGHTS</h3>
//  </div>
//   <div>
//    <br><br><div class="ooo" style="padding-top: 20px;">Comment</div>
//  </div>
// </body>';
// $this->load->library('pdf');

// $pdf = new Dompdf\DOMPDF();
// $canvas = $pdf->get_canvas();
// $pdf->loadHtml($aData['html']);
// // $pdf->set_option('isRemoteEnabled', TRUE);['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]
// // $pdf -> loadHtml($html);
// $pdf->loadHtml($html);
// $pdf->set_option('isRemoteEnabled', true);
// $pdf -> setPaper('A4','Landscape');
// $pdf ->render();
// $pdf->stream($file.'.pdf');

// require('fpdf.php');
// $pdf = new FPDF(); 
// $pdf->AddPage();
// $pdf->Image('./layout/images/e_certificate-2.png',0,0);
// $pdf->Output();

?>