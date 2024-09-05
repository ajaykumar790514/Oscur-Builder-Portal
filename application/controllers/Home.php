<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Home extends CI_Controller {



	public function templete($page, $data)

    {

        $this->load->view('templete/header',$data);

        $this->load->view($page);

        $this->load->view('templete/footer',$data);

    }

    public function index()

    {

        $data['title'] = 'RAGHUKUL Builders - Home Page';

        $page = 'pages/index';

        $this->templete($page, $data);

    }

    public function contact_us()

    {

        $data['title'] = 'RAGHUKUL Builders - Contact Us';

        $page = 'pages/contact_us';

        $this->templete($page, $data);

    }

    public function SubmitContactForm() {
        $response['status'] = 'error';

        $response['message'] = 'Something went wrong .';
        $captcha_response = trim($this->input->post('g-recaptcha-response'));



		if($captcha_response != '')

		{

			$keySecret = "6LdqK4wpAAAAAI9rik6crMIrdJi06lb73k3sRCPg";



			$check = array(

				'secret'		=>	$keySecret,

				'response'		=>	$this->input->post('g-recaptcha-response')

			);



			$startProcess = curl_init();



			curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");



			curl_setopt($startProcess, CURLOPT_POST, true);



			curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));



			curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);



			curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);



			$receiveData = curl_exec($startProcess);



			$finalResponse = json_decode($receiveData, true);



			if($finalResponse['success'])

			{

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Name', 'required');

        $this->form_validation->set_rules('phone', 'Phone', 'required');

        $this->form_validation->set_rules('message', 'Message', 'required');



        if ($this->form_validation->run() == FALSE) {

            $response['status'] = 'error';

            $response['message'] = validation_errors();

        } else {

               $NAME =  $this->input->post('name');

               $EMAIL = $this->input->post('email');

               $PHONE = $this->input->post('phone');

               $MESSAGE = $this->input->post('message');

            $message = 'Customer Name :-'.$NAME.'</br> Email Address :-'.$EMAIL.'</br> Phone Number :-'.$PHONE.'</br> Message :-'.$MESSAGE;

			$email1 = 'nitin.deep2008@gmail.com';
			$subject = "New enquiry from raghukul.";
            $email2 = 'sumit.sachan1984@gmail.com';

			if(sendMail($message,$email1,$subject) && sendMail($message,$email2,$subject))

            {

            $response['status'] = 'success';

            $response['message'] = 'Thanks for your enquiry!.';      

            }else

            {

            $response['status'] = 'error';

            $response['message'] = 'Sorry enquiry not raised! .';

            }

        }



       

        }

      }

      else

    {

        $response['status'] = 'error';

        $response['message'] = 'Please verify  you are Humann! .';

    }

    //header('Content-Type: application/json');

    echo json_encode($response);

   }



   public function project($action)

    {

        switch ($action) {

            case 'gurukul-apartment-govind-nagar-kanpur':

                $data['title'] = 'RAGHUKUL Builders - Gurukul Apartment Govind Nagar Kanpur';

                $page = 'pages/raghukul_govind_nagar';

                $this->templete($page, $data);

                break;

        

            case 'another-action':

                $this->load->view('view2');

                break;

        

            case 'yet-another-action':

                $this->load->view('view3');

                break;

        

            default:

                $data['title'] = 'RAGHUKUL Builders - Gurukul Apartment Govind Nagar Kanpur';

                $page = 'pages/raghukul_govind_nagar';

                $this->templete($page, $data);

                break;

        }

    } 

    public function about_us()

    {

        $data['title'] = 'RAGHUKUL Builders - About Us';

        $page = 'pages/about_us';

        $this->templete($page, $data);

    }

    public function projects()

    {

        $data['title'] = 'RAGHUKUL Builders - Projects';

        $page = 'pages/apartment';

        $this->templete($page, $data);

    }

    

    



}