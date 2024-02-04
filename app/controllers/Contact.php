<?php
class Contact {
    use Controller;

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $messageText = $_POST['message'];

            $contact_model = new Contact_model;
            $contact_model->saveMessage($name, $email, $messageText);


            header('location: ' . ROOT . '/contact');
            exit();
        } else {
            $contact_model = new Contact_model;
            $data['messages'] = $contact_model->findAll();
            $this->view('contact', $data);
        }
    }
}
?>