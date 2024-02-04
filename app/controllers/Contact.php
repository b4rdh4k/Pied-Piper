<?php
class Contact {
    use Controller;

    public function index() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Form submitted, handle the data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $messageText = $_POST['message'];

            // Save the message
            $contact_model = new Contact_model;
            $contact_model->saveMessage($name, $email, $messageText);

            // Redirect or show a success message
            header('location: ' . ROOT . '/contact');
            exit();
        } else {
            // Display the form or messages
            $contact_model = new Contact_model;
            $data['messages'] = $contact_model->findAll();
            $this->view('contact', $data);
        }
    }
}
?>