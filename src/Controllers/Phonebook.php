<?php

namespace App\Controllers;

class Phonebook
{
    public function __construct()
    {
    }

    public function index(): void
    {
        $contacts = new Contacts();
        $all_contacts = $contacts->showContacts();

        require 'view/home.php';
    }
}
