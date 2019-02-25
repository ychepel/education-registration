<?php

namespace Project;

class LocationService {

    private $LOCATIONS = [
        'Київ' => [
            'address' => '<p>вул. Нововокзальна, 2</p><p>Б\'юті Центр «Мері Кей»</p><p>&nbsp;</p>',
            'seatsNumber' => 80
        ],
        'Дніпро' => [
            'address' => '<p>вул. Європейська, 9А</p><p>«DELMAR CENTER»</p><p>Б\'юті Центр «Мері Кей»</p>',
            'seatsNumber' => 50
        ],
        'Одеса' => [
            'address' => '<p>вул. Польський узвіз, 11</p><p>Морський бізнес-центр-2</p><p>Б\'юті Центр «Мері Кей»</p>',
            'seatsNumber' => 50
        ],
        'Львів' => [
            'address' => '<p>вул. Наукова, 7-б</p><p>бізнес-центр «Оптима-Плаза»</p><p>Б\'юті Центр "Мері Кей"</p>',
            'seatsNumber' => 50
        ],
    ];

    public function getLocationNames() {
        return array_keys($this->LOCATIONS);
    }

    public function getLocationDetails($city) {
        return $this->LOCATIONS[$city];
    }

    public function getEmptySeats($city) {
        $totalSeats = $this->LOCATIONS[$city]['seatsNumber'];
        $dataService = new DataService();
        $reserved = $dataService->getReservedSeatsCount($city);
        return $reserved > $totalSeats ? 0 : $totalSeats - $reserved;
    }
}