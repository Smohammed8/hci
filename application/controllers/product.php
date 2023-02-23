<?php
/*
Now we have already existing controller file application/controllers/product.php.
 Therefore  we will just add our new functionality to the existing class file to generate pdf 
 report from MySQL database using Codeigniter. Add below function generate_pdf() to 
 the existing controller. Please do not delete or modify the existing code from the controller.
*/
public function generate_pdf() {
	//load pdf library
	$this->load->library('Pdf');
	
	$pdf = new Pdf(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	// set document information
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('https://www.roytuts.com');
	$pdf->SetTitle('Sales Information for Products');
	$pdf->SetSubject('Report generated using Codeigniter and TCPDF');
	$pdf->SetKeywords('TCPDF, PDF, MySQL, Codeigniter');

	// set default header data
	//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

	// set header and footer fonts
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

	// set default monospaced font
	$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

	// set margins
	$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
	$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

	// set auto page breaks
	$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

	// set image scale factor
	$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

	// set font
	$pdf->SetFont('times', 'BI', 12);
	
	// ---------------------------------------------------------
	
	
	//Generate HTML table data from MySQL - start
	$template = array(
		'table_open' => '<table border="1" cellpadding="2" cellspacing="1">'
	);

	$this->table->set_template($template);

	$this->table->set_heading('Product Id', 'Price', 'Sale Price', 'Sales Count', 'Sale Date');
	
	$salesinfo = $this->product_model->get_salesinfo();
		
	foreach ($salesinfo as $sf):
		$this->table->add_row($sf->id, $sf->price, $sf->sale_price, $sf->sales_count, $sf->sale_date);
	endforeach;
	
	$html = $this->table->generate();
	//Generate HTML table data from MySQL - end
	
	// add a page
	$pdf->AddPage();
	
	// output the HTML content
	$pdf->writeHTML($html, true, false, true, false, '');
	
	// reset pointer to the last page
	$pdf->lastPage();

	//Close and output PDF document
	$pdf->Output(md5(time()).'.pdf', 'D');
}


/*
Notice in the above function we have loaded the library Pdf that extended the tcpdf library. We have done necessary configurations for pdf generation and we are generating html data from the MySQL table data and then finally we are generating pdf using $pdf->Output() function. We have passed first argument as the name of the pdf file and this is encrypted using time(). The second argument is D that tells to force download instead of displaying on browser. If you need to display the generated pdf on browser then use I as the second parameter. If you need to save to some location then use F as the second parameter to the function.

We don’t have any change or modification to the model class, so it remains as it is.

Now we will add just one hyperlink on which user will click to generate pdf report 
from MySQL database using Codeigniter. So let’s create hyperlink on the view file.
*/

?>