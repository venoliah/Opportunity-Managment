<?php
class Testing_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function addNewAccount($account_name, $address, $general_area, $file_path, $user_email)
    {
        echo 'Data received in model:<br>';
        echo 'Account Name: ' . $account_name . '<br>';
        echo 'Address: ' . $address . '<br>';
        echo 'General Area: ' . $general_area . '<br>';
        echo 'File Path: ' . $file_path . '<br>';
        echo 'User Email: ' . $user_email . '<br>';
    
        $data = array(
            'account_name' => $account_name,
            'address' => $address,
            'general_area' => $general_area,
            'company_image' => $file_path, 
            'user_email' => $user_email
        );
    
        $inserted = $this->db->insert('accounts', $data);
    
        // Debugging messages
        echo 'Inserting account...<br>';
        var_dump($inserted);
    
        if ($inserted) {
            echo 'Account added successfully to the database.';
        } else {
            echo 'Failed to add account to the database.<br>';
            echo 'Error: ' . $this->db->error()['message'];
        }
    }
    
}
?>
