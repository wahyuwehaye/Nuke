<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
  /**
   *
   */
class Email extends CI_Controller{
    function __construct(){
        parent::__construct();
        // $this->load->library('MyPHPMailerr'); // load library
    }
 
    // function index(){
    //     $fromEmail = "wonderfulboyolali@gmail.com";
    //     $isiEmail = "Akhirnya bisa mengirim email juga yah, alhamdulillah :)";
    //     $mail = new PHPMailer();
    //     $mail->IsHTML(true);    // set email format to HTML
    //     $mail->IsSMTP();   // we are going to use SMTP
    //     $mail->SMTPAuth   = true; // enabled SMTP authentication
    //     $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
    //     $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
    //     $mail->Port       = 465;                   // SMTP port to connect to GMail
    //     $mail->Username   = $fromEmail;  // alamat email kamu
    //     $mail->Password   = "boyolali123";            // password GMail
    //     $mail->SetFrom('wonderfulboyolali@gmail.com', 'wonderfulboyolali');  //Siapa yg mengirim email
    //     $mail->Subject    = "Cobain Email";
    //     $mail->Body       = $isiEmail;
    //     $toEmail = "wehaye94@gmail.com"; // siapa yg menerima email ini
    //     $mail->AddAddress($toEmail);
       
    //     if(!$mail->Send()) {
    //         echo "Eror: ".$mail->ErrorInfo;
    //     } else {
    //         echo "Email berhasil dikirim";
    //     }
    // }

    function index()
{
    $config = Array(
  'protocol' => 'smtp',
  'smtp_host' => 'ssl://smtp.googlemail.com',
  'smtp_port' => 465,
  'smtp_user' => 'wonderfulboyolali@gmail.com', // change it to yours
  'smtp_pass' => 'boyolali123', // change it to yours
  'mailtype' => 'html',
  'charset' => 'iso-8859-1',
  'wordwrap' => TRUE
);

        $message = 'say hay buat kamu yang disana';
        $this->load->library('email', $config);
      $this->email->set_newline("\r\n");
      $this->email->from('wonderfulboyolali@gmail.com'); // change it to yours
      $this->email->to('wehaye94@gmail.com','wmtrendmanagement@gmail.com');// change it to yours
      $this->email->subject('Dibaca Aja');
      $this->email->message($message);
      if($this->email->send())
     {
      echo 'Email sent.';
     }
     else
    {
     show_error($this->email->print_debugger());
    }

}
}
?>