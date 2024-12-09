<?php

namespace App\Http\Requests\Arguments;

final class GetCurrentWeather {

    public string $access_key  = "";

    public string $query = "";

    public string $units = "m";

    public function __construct($cidade, $access_key) {
        $this->query = $cidade;
        $this->access_key = $access_key;
    }
    
}
