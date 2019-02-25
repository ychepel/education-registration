<?php

namespace Project;

class Consultant {
    var $number;
    var $name;
    var $taxId;
    var $levelCode;
    var $id;
    var $startDate;

    public function isRegistrationAllowed() {
        if($this->startDate < '2017-11-01') {
            return false;
        }
        if($this->levelCode >= 50) {
            return false;
        }
        return true;
    }
}