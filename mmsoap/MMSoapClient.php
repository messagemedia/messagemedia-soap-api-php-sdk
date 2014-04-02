<?php
/**
 * Created by PhpStorm.
 * User: jordan.trudgett
 * Date: 2/04/14
 * Time: 2:41 PM
 */

class MMSoapClient extends SoapClient {
    public function __construct($wsdl, $options = null) {
        parent::__construct($wsdl, $options);
    }

    public function __doRequest($request, $location, $action, $version) {
        $dom = new DOMDocument('1.0');

        // loads the SOAP request to the Document
        $dom->loadXML($request);

        // Remove namespace from envelope
        $dom->firstChild
            ->removeAttributeNS('http://www.w3.org/2001/XMLSchema-instance', 'xsi');

        $this->removeTypeAttrs($dom);

        // Save the modified SOAP request
        $request = $dom->saveXML();

        return parent::__doRequest($request, $location, $action, $version);
    }

    public function removeTypeAttrs($parent) {
        foreach ($parent->childNodes as $child) {
            if ($child->hasAttributes()) {
                for ($i = $child->attributes->length - 1; $i >= 0; $i--) {
                    if ($child->attributes->item($i)->name == 'type')
                    $child->removeAttributeNode($child->attributes->item($i));
                }
                //$parent->replaceChild($child, $oldChild);
            }
            if ($child->hasChildNodes()) {
                $this->removeTypeAttrs($child);
            }
        }
    }
} 