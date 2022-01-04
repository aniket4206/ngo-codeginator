
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    require_once dirname(__FILE__) . './fpdf/fpdf.php';

  class Mypdf extends FPDF
  {
    
    protected $DPI;
   protected $MM_IN_INCH;
   protected $A4_HEIGHT;
   protected $A4_WIDTH;
   protected $maxwidth;
   protected $maxheight;
   
   function __construct()
   {
        $this->DPI = 96;
      $this->MM_IN_INCH = 25.4;
     $this->A4_HEIGHT = 297;
     $this->A4_WIDTH = 210;
  $this->maxwidth = 1100;
      $this->maxheight = 700;
      
   parent::__construct();
   }
   
   
   
   
      function pixelsToMM($val) {
          return $val * $this->MM_IN_INCH / $this->DPI;
      }
      function resizeToFit($imgFilename) {
          list($width, $height) = getimagesize($imgFilename);
          $widthScale = $this->pixelsToMM($width);
          $heightScale = $this->pixelsToMM($height);
          if(($heightScale > $this->A4_HEIGHT) || $widthScale > $this->A4_WIDTH){
          
          $scale= round(($width/($this->A4_WIDTH-10)),2);
          $scalehight=round(($height/$scale),0);
          
          return array(
              ($this->A4_WIDTH-10),
              $scalehight
          );
          }else{
              return array(
              round($this->pixelsToMM($width)),
              round($this->pixelsToMM($height))
          );
          }
      }
      function centreImage($img) {
          list($xwidth, $xheight) = $this->resizeToFit($img);
          // you will probably want to swap the width/height
          // around depending on the page's orientation
         
          $this->Image(
              $img,5,5,
             $xwidth ,
              $xheight
          );
      }
   
   
  }
    
  /* End of file Pdf.php */
  