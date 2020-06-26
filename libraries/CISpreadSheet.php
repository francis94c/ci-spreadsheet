<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once(__DIR__ . '/../vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class CISpreadSheet
{
  /**
   * [spreadsheet description]
   * @method spreadsheet
   * @date   2020-06-25
   * @return Spreadsheet [description]
   */
  public function spreadsheet():Spreadsheet
  {
    return new Spreadsheet();
  }

  /**
   * [xlsxWriter description]
   * @method xlsxWriter
   * @date   2020-06-25
   * @param  Spreadsheet $spreadsheet [description]
   * @return Xlsx        [description]
   */
  public function xlsxWriter(Spreadsheet $spreadsheet):Xlsx
  {
    return new Xlsx($spreadsheet);
  }
}
