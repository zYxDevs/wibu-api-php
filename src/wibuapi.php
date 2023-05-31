<?php

class WibuAPI {
    private $base_url = "https://wibu-api.eu.org/api";
    private $deprecated_url = "https://api.wibu-api.eu.org/api";

    public function lendrive($link) {
        try {
            $url = $this->base_url . "/anime/lendrive?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function donghua($link) {
        try {
            $url = $this->base_url . "/anime/donghua?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function anichin($link) {
        try {
            $url = $this->base_url . "/anime/anichin?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function nekopoi($link) {
        try {
            $url = $this->base_url . "/anime/nekopoi?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function kusonime($link) {
        try {
            $url = $this->base_url . "/anime/kusonime?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function doronime($link) {
        try {
            $url = $this->base_url . "/anime/doronime?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function samehadaku($link) {
        try {
            $url = $this->base_url . "/anime/samehadaku?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function rawkuma($link) {
        try {
            $url = $this->base_url . "/manga/rawkuma?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function westmanga($link) {
        try {
            $url = $this->base_url . "/manga/westmanga?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function komikindo($link) {
        try {
            $url = $this->base_url . "/manga/komikindo?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function mangatale($link) {
        try {
            $url = $this->base_url . "/manga/mangatale?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function kiryuu($link) {
        try {
            $url = $this->base_url . "/manga/kiryuu?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function masterkomik($link) {
        try {
            $url = $this->base_url . "/manga/masterkomik?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function mangakita($link) {
        try {
            $url = $this->base_url . "/manga/mangakita?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function doujindesu($link) {
        try {
            $url = $this->base_url . "/manga/doudesu?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }

    public function crotpedia($link) {
        try {
            $url = $this->base_url . "/manga/crotpedia?link=" . urlencode($link);
            $response = file_get_contents($url);
            return json_encode(json_decode($response), JSON_PRETTY_PRINT);
        } catch (Exception $e) {
            return "An error occurred report on @YBotsSupport\n\n" . $e->getMessage();
        }
    }
}

// Usage:
$api = new WibuAPI();
$result = $api->lendrive("your_link_here");
echo $result;
?>
