<?php
class ModelExtensionRetailcrmIcml extends Model
{
// ... существующие свойства и методы ...

private function addOffers() {
// ... существующий код до обработки продуктов ...

foreach ($products as $product) {
$offers = $this->retailcrm->getOffers($product);

foreach ($offers as $optionsString => $optionsValues) {
// ... существующий код создания предложения ...

/**
* Dimensions and Volume
*/
if ((!empty($product['length']) && $product['length'] > 0) &&
(!empty($product['width']) && $product['width'] > 0)
&& !empty($product['height']))
{
// ... существующий код расчета dimensions ...

// Расчет объема
$volume = $productLength * $productWidth * $productHeight;
$volumeParam = $this->dd->createElement('param');
$volumeParam->setAttribute('code', 'volume');
$volumeParam->setAttribute('name', 'Volume');
$volumeParam->appendChild($this->dd->createTextNode(sprintf('%01.3f', $volume)));
$catalog->appendChild($volumeParam);
}

// ... существующий код обработки изображений, URL и других параметров ...

// Options
if (!empty($options)) {
foreach($options as $optionKey => $optionData) {
$param = $this->dd->createElement('param');
$param->setAttribute('code', $optionData['option_id']);
$param->setAttribute('name', $optionData['name']);
$param->appendChild($this->dd->createTextNode($optionData['value']));
$catalog->appendChild($param);

// Добавляем параметр цвета
if (in_array(mb_strtolower($optionData['name']), array('цвет', 'color'))) {
$colorParam = $this->dd->createElement('param');
$colorParam->setAttribute('code', 'color');
$colorParam->setAttribute('name', $optionData['name']);
$colorParam->appendChild($this->dd->createTextNode($optionData['value']));
$catalog->appendChild($colorParam);
}
}
}

// ... существующий код обработки SKU и веса ...
}
}
}

// ... остальные методы ...
}