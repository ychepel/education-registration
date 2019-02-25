<?php

namespace Project;

use MeekroDBException;
use RuntimeException;

class DataService extends Service {

    public function getReservedSeatsCount($city) {
        try {
            if($this->dbConnection->query('SELECT ConsultantNumber FROM '.Config::REGISTRATION_TABLE.' WHERE Location=%s AND EventId=%s', $city, Config::EVENT_ID)) {
                return $this->dbConnection->count();
            }
        }
        catch (MeekroDBException $e) {
            $this->log->error('Cannot get city registration data', ['exception' => $e]);
        }
        return false;
    }

    public function isRegistered($consultantNumber) {
        try {
            if($this->dbConnection->query('SELECT ConsultantNumber FROM '.Config::REGISTRATION_TABLE.' WHERE ConsultantNumber=%s AND EventId=%s', $consultantNumber, Config::EVENT_ID)) {
                return $this->dbConnection->count() ? true : false;
            }
        }
        catch (MeekroDBException $e) {
            $this->log->error('Cannot check consultant registration data', ['exception' => $e]);
        }
        return false;
    }

    public function register($consultantNumber, $city, $phoneNumber, $taxId) {
        try {
            $this->dbConnection->insert(Config::REGISTRATION_TABLE, [
                'ConsultantNumber' => $consultantNumber,
                'Location' => $city,
                'PhoneNumber' => $phoneNumber,
                'TaxId' => $taxId,
                'EventId' => Config::EVENT_ID,
                'RegistrationDate' => date('Y-m-d H:i:s')
            ]);
            return $this->dbConnection->insertId();
        }
        catch (MeekroDBException $e) {
            $this->log->error('Cannot save registration data', [
                'exception' => $e,
                'consultantNumber' => $consultantNumber,
                'city' => $city,
                'phoneNumber' => $phoneNumber,
                'taxId' => $taxId,
            ]);
            throw new RuntimeException('Cannot save registration data', $e);
        }
    }

}