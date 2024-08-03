<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;

class MailCtl extends BaseController
{
	use ResponseTrait;

	public function index()
	{
		// $data = [
		// 	'name' => 'Ian Felix Jonathan',
		// 	'email' => 'ian25yola@gmail.com',
		// 	'phoneNumber' => '082389424609',
		// 	'company' => 'Brixlab Studio',
		// 	'projectDescription' => 'ini merupakan sebuah project description. ini merupakan sebuah project description.ini merupakan sebuah project descriptionini merupakan sebuah project descriptionini merupakan sebuah project descriptionini merupakan sebuah project descriptionini merupakan sebuah project descriptionini merupakan sebuah project descriptionini merupakan sebuah project descriptionini merupakan sebuah project descriptionini merupakan sebuah project description',
		// 	'category' => 'Software Development',
		// 	'budget' => '200 Juta',
		// 	'recipientEmail' => 'ian25yola@gmail.com',
		// 	'encodedSubject' => 'Thank you for your submission',
		// 	'encodedBody' => 'Dear ian, Thank you for your submission. Your request has been received and is currently under review. We will contact you soon with further information. Best regards, Hexavara'
		// ];

		$data = [
			'name' => $this->request->getVar('name'),
			'email' => $this->request->getVar('email'),
			'phoneNumber' => $this->request->getVar('phoneNumber'),
			'company' => $this->request->getVar('company'),
			'projectDescription' => $this->request->getVar('projectDescription'),
			'category' => $this->request->getVar('category'),
			'budget' => $this->request->getVar('budget'),
			'recipientEmail' => $this->request->getVar('email'),
			'encodedSubject' => 'Thank you for your submission',
			'encodedBody' => 'Dear Ian, Thank you for your submission. Your request has been received and is currently under review. We will contact you soon with further information. Best regards, Hexavara'
		];

		return view('template1', $data);
		// Default index method, nothing to handle here.
	}

	public function projectOpportunity()
	{
		$time = service('time');
		$email = service('email');

		$data = [
			'name' => $this->request->getVar('name'),
			'email' => $this->request->getVar('email'),
			'phoneNumber' => $this->request->getVar('phoneNumber'),
			'company' => $this->request->getVar('company'),
			'projectDescription' => $this->request->getVar('projectDescription'),
			'category' => $this->request->getVar('category'),
			'budget' => $this->request->getVar('budget'),
			'recipientEmail' => $this->request->getVar('email'),
			'randomness' => time()
		];
		$projectBrief = $this->request->getFile('projectBrief');

		$email->setFrom('felix@gmail.com', 'Erick Anggoro');
		$email->setTo('ian25yola@gmail.com');
		$email->setSubject('New Project Opportunity');
		$email->setMessage(view('template1', $data));
		$email->setMailType('html');

		if ($projectBrief && $projectBrief->isValid() && !$projectBrief->hasMoved()) {
			$email->attach($projectBrief->getTempName(), 'attachment', $projectBrief->getClientName());
		}

		if ($email->send()) {
			return $this->respond([
				'status' => 'success',
				'message' => 'Form submitted successfully',
				'data' => $data
			]);
		} else {
			return $this->fail('Failed to send email.');
		}
	}
}
