<?php

require_once './vendor/arsenalibek/addressbook/config/config.php';
require_once './vendor/autoload.php';

//use addressBook\AddressBook;
use addressBook\Person;
use addressBook\Group;


/**
 * Init address book with config pre set data.
 * $addressBook = new AddressBook($config);
 */
/**
 * Add a person to the address book.
 * Init address book without config and Add new Person
 * Example of person exists in the config.php
 */

$addressBook = new addressBook\AddressBook();
$personConfig = [
    'id' => '1',
    'firstName' => 'David A',
    'lastName' => 'Johnson',
    'addresses' => [
        [
            'line1' => '5659 Centerville Prospect Rd',
            'line2' => '',
            'zip' => '43342',
            'city' => 'Prospect',
            'state' => 'OH',
            'countryCode' => 'US'
        ],
    ],
    'phoneNumbers' => [
        '+1(740) 494-2030'
    ],
    'emails' => [
        'davidAjohnson@email.fake'
    ],
];
$person = new Person($personConfig);
$addressBook->addPerson($person);
echo 'Added one persons: <pre>';
print_r($addressBook->getPersons());

/**
 * Add new group to AddressBook
 * Example get from config/config.php
 */
/*
$addressBook = new AddressBook();
$groupConfig = [
    'id' => '1',
    'name' => 'Group1'
];
$group = new Group($groupConfig);
$addressBook->addGroup($group);

echo "Added one group <pre>:";
print_r($addressBook->getGroups());
exit(0);
*/
/**
 * Given a group we want to easily find its members.
 */
/*
$addressBook = new AddressBook($config);
$groupId = '1';
$persons = $addressBook->findPersonsByGroup($groupId);
echo 'Find persons belongs group: <pre>';
print_r($persons);
exit(0);
*/

/**
 * Given a person we want to easily find the groups the person belongs to.
 */
/*
$addressBook = new AddressBook($config);
$personId = '2';
$groups = $addressBook->findGroupsByPerson($personId);
echo 'Find group person belongs: <pre>';
print_r($groups);
exit(0);
*/

/**
 * Find person by name (can supply either first name, last name, or both).
 */
/*
$addressBook = new AddressBook($config);
$persons = $addressBook->findPersonsByName('John');
echo 'Find persons for query word: <pre>';
print_r($persons);
exit(0);
*/

/**
 * Find person by email address
 */
/*
$addressBook = new AddressBook($config);
$persons = $addressBook->findPersonByEmail('john');
echo 'Find persons by email: <pre>';
print_r($persons);
exit(0);
*/





