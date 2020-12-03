<?php
class Controller_Posts extends Controller_template
{

	public function action_index()
	{
        die('Index');
	}
	public function action_form()
	{

		//permite que seja passado qualquer valor para dentro da view
		$data = array();
		$this->template->title = 'FuelPHP';
		$this->template->content = View::forge('posts/form', $data);
        
	}

	public function action_sendEmail(){


		if(isset($_POST['send'])){


			$data = array();
			$this->template->title = 'FuelPHP';
			$this->template->content = View::forge('posts/form', $data);


			\Package::load('email');

			$nome = $_POST['userName'];
			$userEmail = $_POST['userEmail'];
			$destinatarioNome = $_POST['contactName'];
			$destinatarioEmail = $_POST['contactEmail'];
			$assunto = $_POST['Subject'];
			$texto = $_POST['text'];

		// Create an instance
		$email = Email::forge();

		// Set the from address
		$email->from($userEmail, $nome);

		// Set the to address
		$email->to($destinatarioEmail, $destinatarioNome);

		// Set a subject
		$email->subject($assunto);


		// And set the body.
		$email->body($texto);

     try{
    	if($email->send()){

		echo '<p>E-mail enviado com sucesso!<p>';

		}
	}
	catch(\EmailValidationFailedException $e){
		echo 'E-mail digitado é inválido';
	}
	catch(\EmailSendingFailedException $e){
		echo '<p>Falha ao enviar o e-mail</p>';
	}
		}
	}

}
