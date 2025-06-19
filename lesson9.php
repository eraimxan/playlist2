<?php

// Интерфейс DataFormat
interface DataFormat {
    public function encode($data);
    public function decode($data);
}

// Класс JsonFormat
class JsonFormat implements DataFormat {
    public function encode($data) {
        return json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    }

    public function decode($data) {
        return json_decode($data, true); // true - возвращает ассоциативный массив
    }
}

// Класс XmlFormat
class XmlFormat implements DataFormat {
    public function encode($data) {
        $xml = new SimpleXMLElement('<root/>');
        $this->arrayToXml($data, $xml);
        return $xml->asXML();
    }

    public function decode($data) {
        return json_decode(json_encode(simplexml_load_string($data)), true);
    }

    private function arrayToXml($data, &$xml) {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $subnode = $xml->addChild(is_numeric($key) ? "item$key" : $key);
                $this->arrayToXml($value, $subnode);
            } else {
                $xml->addChild(is_numeric($key) ? "item$key" : $key, htmlspecialchars($value));
            }
        }
    }
}

// Тестовые данные
$testData = [
    "name" => "Alice",
    "email" => "alice@example.com",
    "skills" => ["PHP", "JS", "HTML"]
];

// JSON формат
$json = new JsonFormat();
$jsonEncoded = $json->encode($testData);
$jsonDecoded = $json->decode($jsonEncoded);

// XML формат
$xml = new XmlFormat();
$xmlEncoded = $xml->encode($testData);
$xmlDecoded = $xml->decode($xmlEncoded);

// Вывод результатов
echo "<h3> JSON Format</h3>";
echo "<strong>Encoded:</strong><pre>$jsonEncoded</pre>";
echo "<strong>Decoded:</strong><pre>" . print_r($jsonDecoded, true) . "</pre>";

echo "<h3> XML Format</h3>";
echo "<strong>Encoded:</strong><pre>" . htmlspecialchars($xmlEncoded) . "</pre>";
echo "<strong>Decoded:</strong><pre>" . print_r($xmlDecoded, true) . "</pre>";
