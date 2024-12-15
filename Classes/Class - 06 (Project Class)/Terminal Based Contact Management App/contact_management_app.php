<?php



$contacts = [];

//Add contacts
function addContact(array &$contacts,string $name, string $email, string $phone) : void{

    $contacts[] =  ['name' => $name,'email'=> $email,'phone'=> $phone];
}


//Display contacts

function displayContacts (array $contacts) : void{

    if(empty($contacts)){
       
        echo "No contacts available\n";
    }else{
        
        foreach ($contacts as $contact){

            echo "Name: {$contact['name']}, Email: {$contact['email']}, phone: {$contact ['phone']}";
        
        }
    }
}

