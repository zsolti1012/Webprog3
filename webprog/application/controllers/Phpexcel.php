<?php

/* @property phpexcel_model $phpexcel_model */

class Phpexcel extends CI_Controller  {

	function __construct(){
	  parent::__construct();
		$this->load->model('phpexcel_model');
                
                

    }

	function index($vehicle)
	{
            
		$data['users'] = $this->phpexcel_model->get_users($vehicle);
                $data['vehicle']=$vehicle;
                $this->load->view('templates/header');
		$this->load->view('content/phpexcel', $data);
                $this->load->view('templates/footer');
	}


	public function download($vehicle)  {

		$subscribers = $this->phpexcel_model->get_users($vehicle);

		require_once APPPATH . '/third_party/Phpexcel/Bootstrap.php';

		// Create new Spreadsheet object
		$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();

// Set document properties
		$spreadsheet->getProperties()->setCreator('Webeasystep.com ')
				->setLastModifiedBy('Ahmed Fakhr')
				->setTitle('Phpecxel codeigniter tutorial')
				->setSubject('integrate codeigniter with PhpExcel')
				->setDescription('this is the file test');

		// add style to the header
		$styleArray = array(
				'font' => array(
						'bold' => true,
				),
				'alignment' => array(
						'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
						'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
				),
				'borders' => array(
						'top' => array(
								'style' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
						),
				),
				'fill' => array(
						'type' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_GRADIENT_LINEAR,
						'rotation' => 90,
						'startcolor' => array(
								'argb' => 'FFA0A0A0',
						),
						'endcolor' => array(
								'argb' => 'FFFFFFFF',
						),
				),
		);
		$spreadsheet->getActiveSheet()->getStyle('A1:C1')->applyFromArray($styleArray);


		// auto fit column to content

		foreach(range('A','C') as $columnID) {
			$spreadsheet->getActiveSheet()->getColumnDimension($columnID)
					->setAutoSize(true);
		}
		// set the names of header cells
		$spreadsheet->setActiveSheetIndex(0)
				->setCellValue("A1",'Model')
				->setCellValue("B1",'Description')
                                ->setCellValue("C1",'Age');
				

		// Add some data
		$x= 2;
		foreach($subscribers as $sub){
			$spreadsheet->setActiveSheetIndex(0)
					->setCellValue("A$x",$sub['model'])
					->setCellValue("B$x",$sub['description'])
                                ->setCellValue("C$x",$sub['age'])
					;
			$x++;
		}



// Rename worksheet
		$spreadsheet->getActiveSheet()->setTitle($vehicle);

// set right to left direction
//		$spreadsheet->getActiveSheet()->setRightToLeft(true);

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$spreadsheet->setActiveSheetIndex(0);

// Redirect output to a client’s web browser (Excel2007)
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="'.$vehicle.'.xlsx"');
		header('Cache-Control: max-age=0');
// If you're serving to IE 9, then the following may be needed
		header('Cache-Control: max-age=1');

// If you're serving to IE over SSL, then the following may be needed
		header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); // Date in the past
		header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT'); // always modified
		header('Cache-Control: cache, must-revalidate'); // HTTP/1.1
		header('Pragma: public'); // HTTP/1.0

		$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Excel2007');
		$writer->save('php://output');
		exit;

		//  create new file and remove Compatibility mode from word title


	}
}
/* End of file dashboard.php */
/* Location: ./system/application/modules/matchbox/controllers/dashboard.php */