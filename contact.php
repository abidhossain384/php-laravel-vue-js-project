<?php

$contacts = [];

function addContact(array &$contacts, string $name, string $email, $phone):void {
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}

function displayContacts(array $contacts):void {
    if(empty($contacts)) {
        echo "\nNo Contacts Available.\n";
    }
    else {
        foreach($contacts as $contact) {
            echo "
                Name: {$contact['name']},
                Email: {$contact['email']},
                Phone: {$contact['phone']}\n
            ";
        }
    }
}

while(true) {
    echo "\nWelcome to Contact Management App:\n";
    echo "1. Add Contact\n2. View Contact\n3. Exit\n\n";
    $choice = (int)readline("Choice An Option: ");

    if($choice === 1) {
        $name = readline("Enter Name: ");
        $email = readline("Enter Email: ");
        $phone = readline("Enter Phone: ");

        addContact($contacts, $name, $email, $phone);

        echo "\n";
        echo "'$name' name added to contacts.\n";
        echo "'$email' email added to contacts.\n";
        echo "'$phone' phone added to contacts.\n";
    }
    elseif($choice === 2) {
        echo "Here is saved contacts.\n";
        displayContacts($contacts);
    }
    elseif($choice === 3) {
        echo "Exiting..........\n\n\n";
        break;
    }
    else {
        echo "\nInvalid Choice. Please Try Again.\n";
    }
}