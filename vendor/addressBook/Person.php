<?php

namespace addressBook;

class Person {
    public $id = null;
    public $firstName = '';
    public $lastName = '';
    public $addresses = [];
    public $phoneNumbers = [];
    public $emails = [];
    public $groupsIds = [];

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }
}
