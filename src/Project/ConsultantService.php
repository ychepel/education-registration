<?php

namespace Project;

use MeekroDBException;

class ConsultantService extends Service{

    public function getUserConsultantNumber() {
        if(isset($_COOKIE['Consultant'])) {
            if($_COOKIE['Consultant'] != '') {
                return $_COOKIE['Consultant'];
            }
        }
        echo '<meta http-equiv="refresh" content="0; url=https://www.marykayintouch.ua/newspage?newsid='.Config::MARYKAYINTOUCH_PAGE_ID.'" />';
        exit();
    }

    public function getConsultant($consultantNumber) {
        try {
            if ($dbConsultant = $this->dbConnection->queryFirstRow('SELECT ConsultantNumber, ConsultantName, TaxId,
                CurrentCareerLevelCode, ConsultantId, StartDate FROM ' . Config::CONSULTANT_TABLE
                . ' WHERE ConsultantNumber=%s', $consultantNumber)) {
                $consultant = new Consultant();
                $consultant->number = $dbConsultant['ConsultantNumber'];
                $consultant->name = $dbConsultant['ConsultantName'];
                $consultant->taxId = $dbConsultant['TaxId'];
                $consultant->levelCode = $dbConsultant['CurrentCareerLevelCode'];
                $consultant->id = $dbConsultant['ConsultantId'];
                $consultant->startDate = $dbConsultant['StartDate'];
                return $consultant;
            } else {
                $this->log->error('Cannot find consultant with number=' . $consultantNumber);
                return false;
            }
        }
        catch (MeekroDBException $e) {
            $this->log->error('Cannot get consultant data', ['exception' => $e]);
        }
        return false;
    }
}