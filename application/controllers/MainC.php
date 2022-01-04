<?php
defined('BASEPATH') or exit('No direct script access allowed');
require('fpdf.php');

class MainC extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Users_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');

        /* set the tempory session data
         *  you can remove if you have login and 
         * signup form in your project
         */
        $this->session->set_userdata('username', 'stint');
        $this->session->set_userdata('logged_in', TRUE);

	}

	
	public function index()
	{
		$this->load->view('pages/index');
	}
	
	public function about()       //About page
	{
		$this->load->view('pages/about');
	}

	public function Email()       //About page
	{
		$this->load->view('pages/Email-template');
	}

	public function certificate()       //About page
	{
		
		$this->load->view('pages/certificate');
	}

	public function upgrade()       //About page
	{
		$this->load->view('pages/upgrade');
	}

	public function contact()       //Process & Product page
	{
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone_no', 'Phone No.', 'required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number
		$this->form_validation->set_rules('massage', 'Massage', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('pages/contact');
		} else {
			$formArray = array();
			$formArray['name'] = $this->input->post('name');
			$formArray['email'] = $this->input->post('email');
			$formArray['phone_no'] = $this->input->post('phone_no');
			$formArray['massage'] = $this->input->post('massage');
			$formArray['submited_at'] = date('Y-m-d');
			$this->Users_model->insert_contact_data($formArray);
			$this->session->set_flashdata('resp_msg', 'Contact form Successfully Submitted.!!');
			redirect(base_url() . 'contact');
		}
		// $this->load->view('pages/contact');
	}

	public function gallery()       //Process & Product page
	{
		$this->load->model('Users_model');
		$ngo = $this->Users_model->return_products('Ngo');
		$event = $this->Users_model->return_products('Event');
		$social = $this->Users_model->return_products('Social');
		$video = $this->Users_model->return_video('video');
		$this->load->view('pages/gallery', compact('ngo', 'event', 'social', 'video'));
	}
	

	public function causes()       //Process & Product page
	{
		$this->load->view('pages/causes');
	}

	public function team()       //Process & Product page
	{
		$this->load->view('pages/team');
	}

	public function event()       //Process & Product page
	{
		$this->load->view('pages/event');
	}

	public function donate()       //Process & Product page
	{	
			// if($this->cart->total_items() <= 0){
			// 	redirect('Products/Groundnut');
			// }
	
			//If order request is submitted
			$submit = $this->input->post('Donation');
			if(isset($submit)){
				// form validations
				// $this->form_validation->set_rules('addressRadio', 'Shipping Address', 'required');
				// $this->form_validation->set_rules('paymethodRadio', 'Payment Method', 'required');
				$this->form_validation->set_rules('amount', 'Amount');
				$this->form_validation->set_rules('fname', 'First Name', 'required');
				$this->form_validation->set_rules('lname', 'Last Name', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
				$this->form_validation->set_rules('phone_no', 'Phone No.', 'required|regex_match[/^[0-9]{10}$/]'); //{10} for 10 digits number
				if ($this->form_validation->run())
				{
					$custData = array();
					// $user_id = $this->session->userdata('id');
					// $custData['user_data'] = $this->Db_model->get_user($user_id, 'user_details');
					// $address_id = strip_tags($this->input->post('addressRadio'));
					// $custData['user_address'] = $this->Db_model->get_address_by_id($address_id, 'user_addresses');
					// echo '<pre>';
					// print_r($custData);
					// print_r($custData['user_address'][0]->id);
	
					// $inCust_Data['user_id'] = $custData['user_data']->id;
					// $inCust_Data['address_id'] = $custData['user_address'][0]->id;
					$randOrderId = $inCust_Data['order_id'] = rand(11111,99999);
					$inCust_Data['grandtotal'] = $this->input->post('amount');
					$inCust_Data['fname'] = $this->input->post('fname');
					$inCust_Data['lname'] = $this->input->post('lname');
					$inCust_Data['email'] = $this->input->post('email');
					$inCust_Data['phone_no'] = $this->input->post('phone_no');
					$inCust_Data['payment_method'] = $this->input->post('paymethodRadio');
					$inCust_Data['payment_status'] = 'Pending';
					date_default_timezone_set("Asia/Kolkata");
					$inCust_Data['ordered_at'] = date('F j, Y, g:i a');
					
					// $this->load->library('image_lib');
					// 	$font = './layout/fonts/BRITANIC.TTF';
					// 	$image = imagecreatefromjpeg('./layout/images/e_certificate-2.png');
					// 	$color = imagecolorallocate($image,0,77,48);
					// 	$name = $result[0]->name;
					// 	$image_width = imagesx($image);  
					// 	$image_height = imagesy($image);
					// 	imagettftext($image,50,0,290,360,$color,$font,$name);
					// 	$file = $name.'_'.time();
					// 	$file_path = "./layout/images/Generated Certificates/".$file.".jpeg";
					// 	$file_path_pdf = "./layout/images/Generated Certificates/".$file.".pdf";
					// 	// imagepng($image);
					// 	imagejpeg($image,$file_path);
					// 	imagedestroy($image);
					// print_r($inCust_Data);
					// print_r($custData);
					$payMethod = $this->input->post('paymethodRadio');
					if($payMethod == 'PayTm')
					{	
						$insert = $this->Users_model->insertdata('donation_details',$inCust_Data);
						if($insert)
						{
							$session_data = $this->session->all_userdata();
							// $cart_data = $this->cart->contents();
							$ordItemData = array();
							// $i=0;
							// foreach($cart_data as $item){
							//    $ordTempData[$i]['order_id'] = $randOrderId;
							//    $ordTempData[$i]['product_id'] = '774';
							//    $ordTempData[$i]['qty'] = '373';
							//    $ordTempData[$i]['subtotal'] = '478';
							// //    $ordTempData[$i]['user_id'] = $session_data['id'];
							//    $i++;
							//    }
								// if(!empty($ordTempData)){
								// 	$this->Users_model->insertOrderItems('temp_order_items',$ordTempData);
								// }
	
							$html='<form method="post" style="display: none;" action="'.base_url('PayTm-Redirect').'" name="frmPayment" style="display:none;">
							<input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off" value="'.$randOrderId.'">
							<input id="CUST_ID" tabindex="2" maxlength="12" size="12" name="CUST_ID" autocomplete="off" value="736">
							<input id="INDUSTRY_TYPE_ID" tabindex="4" maxlength="12" size="12" name="INDUSTRY_TYPE_ID" autocomplete="off" value="Retail">
							<input id="CHANNEL_ID" tabindex="4" maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off" value="WEB">
							<input title="TXN_AMOUNT" tabindex="10" type="text" name="TXN_AMOUNT"value="'.$inCust_Data['grandtotal'].'">
							<input value="CheckOut" type="submit" onclick="">
							</form>
							<script type="text/javascript">document.frmPayment.submit();</script>';
							echo $html;
						}
					}
					elseif($payMethod == 'COD'){
						$insert = $this->Users_model->insertdata('donation_details',$inCust_Data);
						if($insert)
						{
							$order = $this->Donation($randOrderId);
							if($order)
							{
								// $this->cart->destroy();

								redirect('donation-completed/'.$randOrderId);
							}
							else {
								echo 'Failed 1st Insert';
								// $this->session->set_flashdata('error_msg', 'Insertion Error.!!');
							}
						}
	
						echo 'Failed';
					}
	
				}
				else {
					// $this->session->set_flashdata('error_msg', 'Please select a Shipping Address and Payment Method to place an order.');
					redirect('donate');
				}
			}
	
			$data = array();
			// $data['cartItems'] = $this->cart->contents();
			// $user_id = $this->session->userdata('id');
			// $data['userAddress'] = $this->Users_model->get_address($user_id, 'user_addresses');
	
			$this->load->view('pages/donate',$data);
		
		// $this->load->view('pages/donate');
	}
	
	public function donation_failed($OrderId)
	{
		$this->load->view('pages/donation-failed',compact('OrderId'));
	}

	public function donation_completed($OrderId)
	{
		// echo x;
		if($this->Users_model->checkOrderStatus($OrderId)){
			$order = $this->Donation($OrderId);
			if($order){

				// $this->cart->destroy();
				// $this->Db_model->delete_tempData($OrderId,'temp_order_items');
				$this->load->view('pages/donation-completed',compact('OrderId'));
			}
			else{
				// $this->cart->contents();
				// echo 'Shaurya ch login failed';
				$this->load->view('pages/donation-completed',compact('OrderId'));
			}
			
		}
		// $this->load->view('order-completed',compact('OrderId'));
	}

	public function blog()       //Process & Product page
	{
		$this->load->view('pages/blog-single');
	}

	public function my404()
	{
		$this->output->set_status_header('404');
		$this->load->view('pages/404');
	}

	public function paytm_redirect()
	{
		$this->load->view('PaytmKit/pgRedirect');
	}

	public function paytm_responce()
	{
		header("Pragma: no-cache");
		header("Cache-Control: no-cache");
		header("Expires: 0");

		$this->load->view('PaytmKit/lib/config_paytm');
		$this->load->view('PaytmKit/lib/encdec_paytm');

		$paytmChecksum = "";
		$paramList = array();
		$isValidChecksum = "FALSE";

		$paramList = $_POST;


		$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg
		$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


		if($isValidChecksum == "TRUE") {

			if ($_POST["STATUS"] == "TXN_SUCCESS") {
				$inCust_Data['payment_status'] = 'Success';
				$inCust_Data['payment_id'] = $_POST['TXNID'];
				// $inCust_Data['grandtotal'] = $this->input->post('amount');

				
				$OrderID=$_POST['ORDERID'];
				// $grandtotal = $this->Users_model->return_data['ORDERID'];
				$PaymentID=$_POST['TXNID'];
				// $Amount=$_POST['amount'];
				
				// $this->load->view('Dashboard/edit_products', compact('data'));
				// print_r($_POST);
				if($this->Users_model->updatedOrder($OrderID,'donation_details',$inCust_Data)){
					// return redirect('Email/sendemail');
					// $this->load->model('Users_model');
					// $grandtotal[] = $this->Users_model->return_data($OrderID);
					// $grandtotal=$_POST['grandtotal'];
					// $event = $this->Users_model->return_products('Event');
					// $social = $this->Users_model->return_products('Social');
					$this->load->model('Users_model');
					$data = $this->Users_model->getMaildata($OrderID);
					$subject = "Donation Page";
					$email = $data[0]->email;

						$this->load->library('image_lib');
						$font = './layout/images/BRUSHSCI.TTF';
						$image = imagecreatefrompng('./layout/images/e_certificate-2.png');
						$color = imagecolorallocate($image,0,77,48);
						$name = "Gaurav borse";
						$image_width = imagesx($image);  
						$image_height = imagesy($image);
						imagettftext($image,50,0,290,360,$color,$font,$name);
						$file = $name.'_'.time();
						$file_path = "./layout/images/Generated_Certificates/".$file.".png";
						$file_path_pdf = "./layout/images/Generated_Certificates/".$file.".pdf";
						// imagepng($image);
						imagepng($image,$file_path);
						imagedestroy($image);
				
						// // Generate PDF
						$this->load->library('fpdf/fpdf');
						$pdf = new FPDF('L','mm',array(210,150));
						$pdf->AddPage();
						$pdf->Image($file_path,0,0,210,150);
						$pdf->Output($file_path_pdf,"F");
						$result['certificate_name'] = $file_path_pdf;
				

					$config = Array(
						'protocol' => 'smtp',
						'smtp_host' => 'ssl://smtp.googlemail.com',
						'smtp_port' => 465,
						'smtp_user' => 'error4206@gmail.com', // change it to yours
						'smtp_pass' => 'Aniket@7499134803', // change it to yours
						'mailtype' => 'html',
						'charset' => 'iso-8859-1',
						'wordwrap' => TRUE
					);

					$this->load->library('email', $config);
					$this->email->set_newline("\r\n");
					$this->email->from($config['smtp_user']); // change it to yours
					$this->email->to($email);// change it to yours
					$this->email->subject($subject);
					$body = $this->load->view('pages/Email-template',compact('data'),TRUE);
					$this->email->message($body);
					$this->email->attach($file_path_pdf);
					if($this->email->send()){
						$this->session->set_flashdata('message', 'Email sent');
					}
					else{
						$this->session->set_flashdata('message', show_error($this->email->print_debugger()));
						
					}
					redirect('donation-completed/'.$OrderID);
				}
				else{
					// echo "Not Updated";
					return false;
				}
				
			}
			else {
				$inCust_Data['payment_status'] = 'Failed';
				$inCust_Data['payment_id'] = $_POST['TXNID'];

				$OrderID=$_POST['ORDERID'];
				if($this->Users_model->updatedOrder($OrderID,'donation_details',$inCust_Data)){
					redirect('donation-failed/'.$OrderID);
				}
				else{
					// echo "Not Updated";
					return false;
				}
			}
		}
		else {
			echo "<b>Checksum mismatched.</b>";
			//Process transaction as suspicious.
		}

	}

	public function Donation($randOrderId)
	{
		// $cartItems = $ordItemData = array();
		// $cartItems = $this->Db_model->get_by_orderid($randOrderId,'temp_order_items');
		 
		// $i=0;
		//  foreach($cartItems as $item){
		// 	$ordItemData[$i]['user_id'] = $item->user_id;
		// 	$ordItemData[$i]['order_id'] = $randOrderId;
		// 	$ordItemData[$i]['product_id'] = $item->product_id;
		// 	$ordItemData[$i]['qty'] = $item->qty;
		// 	$ordItemData[$i]['subtotal'] = $item->subtotal;
		// 	$i++;
		//  }
		 if(!empty($ordItemData)){
			 if($this->Users_model->insertOrderItems('order_items',$ordItemData)){
				 return true;
			 }
			 else{
				 return false;
			 }
		 }
	}
	
}
