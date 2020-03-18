<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['product'] = $this->M_product->get();
		$this->load->view('welcome_message', $data);
	}


	public function product($idp)
	{
		$data['product'] = $this->M_product->getById($idp);
		$this->load->view('product', $data);
	}

	public function checkout($idp)
	{
		$data['product'] = $this->M_product->getById($idp);
		$this->load->view('checkout', $data);
	}

	public function insert()
	{

		$this->form_validation->set_rules(
			'harga_p',
			'Harga Product',
			'required',
			array('required' => 'Harga Harus di Input')
		);

		$this->form_validation->set_rules(
			'support',
			'Support',
			'required',
			array('required' => 'Support Harus di Input')
		);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		$this->form_validation->set_rules(
			'telpon',
			'Telpon',
			'required',
			array('required' => 'Telpon Harus di Input')
		);
		$this->form_validation->set_rules(
			'nama_lengkap',
			'Nama Lengkap',
			'required',
			array('required' => 'Nama Lengkap Harus di Input')
		);



		if ($this->form_validation->run() === FALSE) {
			$this->index();
		} else {
			//Memasukkan Data ke tabel User




			$email = $this->input->post('email');



			$namalengkap    = $this->input->post('nama_lengkap');
			$nama_p    = $this->input->post('nama_p');
			$harga_p    = $this->input->post('harga_p');
			$telpon    = $this->input->post('telpon');

			$datamember = array(
				'harga_p' 		=> $this->input->post('harga_p'),
				'support' 	=> $this->input->post('support'),
				'nama_p' 	=> $this->input->post('nama_p'),
				'idp' 	=> $this->input->post('idp'),
				'email' 	=> $this->input->post('email'),
				'telpon' 	=> $this->input->post('telpon'),
				'nama_lengkap' 	=> $this->input->post('nama_lengkap'),
				'tanggal_waktu' => date("Y-m-d H:i:s")


			);

			$this->M_product->insert($datamember);
			$this->sendMail($email,  $namalengkap, $harga_p, $nama_p, $telpon);
			echo "Mantappp";
		}
		redirect();
	}
	public function sendMail($email, $namalengkap, $telpon)
	{
		// $to =  $this->input->post('from');  // User email pass here
		$list = array('mr.rojer46@gmail.com', 'masrony37@gmail.com');
		// $admin = 'mr.rojer46@gmail.com';

		$subject = 'NEW CUSTOMER : ' . $namalengkap;

		$from = 'pass your email ID';              // Pass here your mail id

		$emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#000000;padding-left:3%"><img src="http://codingmantra.co.in/assets/logo/logo.png" width="300px" vspace=10 /></td></tr>';
		$emailContent .= '<tr><td style="height:20px"></td></tr>';




		$emailContent .= 'Customer Email: ' . $email;
		$emailContent .= 'Konfirmasi pembayaran ke WhatsApp LINK <a href="https://api.whatsapp.com/send?phone=' . $telpon . '&text=Konfirmasi%0APembayaran%0AAplikasi%0A">KONFIRMASI</a>';
		$emailContent .= '<tr><td style="height:20px"></td></tr>';
		$emailContent .= "<tr><td style='background:#000000;color: #999999;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://codingmantra.co.in/' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.codingmantra.co.in</a></p></td></tr></table></body></html>";



		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '60';

		$config['smtp_user']    = 'muhammadronias@gmail.com';    //Important
		$config['smtp_pass']    = 'hjm0hsol3h';  //Important

		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not 



		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->from($from);
		$this->email->to($list);
		$this->email->subject($subject);
		$this->email->message($emailContent);
		$this->email->send();

		$this->session->set_flashdata('msg', "Mail has been sent successfully");
		$this->session->set_flashdata('msg_class', 'alert-success');
		return redirect();
	}




	public function send($email,  $namalengkap, $harga_p, $nama_p)
	{

		// $to =  $this->input->post('from');  // User email pass here
		$subject = 'PT TECHTOUP';

		$from = 'muhammadronias@gmail.com';              // Pass here your mail id

		$emailContent = '<!DOCTYPE><html><head></head><body><table width="600px" style="border:1px solid #cccccc;margin: auto;border-spacing:0;"><tr><td style="background:#fad000;padding-left:3%"><img src="http://www.khoironi.net/assets/img/logo/logo%20khoironi%20abu.png" width="300px" vspace=10 /></td></tr>';
		$emailContent .= '<tr><td style="height:20px"></td></tr>';


		$emailContent .= 'Halo Kak ' . $namalengkap;  //   Post message available here
		$emailContent .= '<hr>';  //   Post message available here
		$emailContent .= 'Terimakasih sudah melakukan pembelian' . $nama_p;  //   Post message available here
		$emailContent .= '<hr>';  //   Post message available here

		$emailContent .= 'Total Harga' . $harga_p;  //   Post message available here
		$emailContent .= '<hr>';  //   Post message available here
		$emailContent .= 'Silahkan melalkukan pembayaran ke rekening berikut';  //   Post message available here
		$emailContent .= '<hr>';  //   Post message available here
		$emailContent .= 'BNI';  //   Post message available here
		$emailContent .= '<hr>';  //   Post message available here
		$emailContent .= '87876834552';  //   Post message available here
		$emailContent .= '<hr>';  //   Post message available here
		$emailContent .= 'A/N PT TECHTOUP';  //   Post message available here
		$emailContent .= '<hr>';  //   Post message available here
		$emailContent .= 'Konfirmasi pembayaran ke WhatsApp LINK <a href="https://api.whatsapp.com/send?phone=6282133170118&text=Konfirmasi%0APembayaran%0AAplikasi%0A">KONFIRMASI</a>';  //   Post message available here


		$emailContent .= '<tr><td style="height:20px"></td></tr>';
		$emailContent .= "<tr><td style='background:#fad000;color: #ffffff;padding: 2%;text-align: center;font-size: 13px;'><p style='margin-top:1px;'><a href='http://khoironi.net' target='_blank' style='text-decoration:none;color: #60d2ff;'>www.khoironi.net</a></p></td></tr></table></body></html>";

		$config['protocol']    = 'smtp';
		$config['smtp_host']    = 'ssl://smtp.gmail.com';
		$config['smtp_port']    = '465';
		$config['smtp_timeout'] = '60';

		$config['smtp_user']    = 'muhammadronias@gmail.com';    //Important
		$config['smtp_pass']    = 'N*+^[KRP-C5X';  //Important

		$config['charset']    = 'utf-8';
		$config['newline']    = "\r\n";
		$config['mailtype'] = 'html'; // or html
		$config['validation'] = TRUE; // bool whether to validate email or not 



		$this->email->initialize($config);
		$this->email->set_mailtype("html");
		$this->email->from($from);
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($emailContent);
		$this->email->send();

		$this->session->set_flashdata('msg', "Mail has been sent successfully");
		$this->session->set_flashdata('msg_class', 'alert-success');
		return redirect();
	}
}
