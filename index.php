<?php

require_once './vendor/addressBook/config/config.php';

use addressBook\AddressBook;
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
$addressBook = new AddressBook();
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

/**
 * Add new group to AddressBook
 * Example get from config/config.php
 */
$addressBook = new AddressBook();
$groupConfig = [
    '1' => [
        'id' => '1',
        'name' => 'Group1'
    ],
];
$group = new Group($groupConfig);
$addressBook->addGroup($group);

/**
 * Given a group we want to easily find its members.
 */
$addressBook = new AddressBook($config);
$groupId = '1';
$persons = $addressBook->findPersonsByGroup($groupId);
print_r($persons);

/**
 * Given a person we want to easily find the groups the person belongs to.
 */
$addressBook = new AddressBook($config);
$groupId = '1';
$groups = $addressBook->findGroupsByPerson($groupId);

/**
 * Find person by name (can supply either first name, last name, or both).
 */
$addressBook = new AddressBook($config);
$persons = $addressBook->findPersonByName('John');
print_r($persons);

/**
 * Find person by email address
 */
$addressBook = new AddressBook($config);
$persons = $addressBook->findPersonByEmail('john');
print_r($persons);





