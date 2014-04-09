<?php
/**
 * Copyright 2014 MessageMedia
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License.
 * You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
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
        $dom->firstChild->removeAttributeNS('http://www.w3.org/2001/XMLSchema-instance', 'xsi');

        // Remove xsi:type attributes
        $this->removeTypeAttrs($dom);

        // Save the modified SOAP request
        $request = $dom->saveXML();

        $response = parent::__doRequest($request, $location, $action, $version);
        $response = $this->reJig($response);

        return $response;
    }

    /**
     * Needed to move attributes out into elements which is what the SoapClient seems to expect.
     */
    public function reJig($response) {
        $responseDom = new DOMDocument('1.0');
        $responseDom->loadXML($response);
        $this->reJigNode($responseDom, $responseDom->documentElement);
        return $responseDom->saveXML();
    }

    public function reJigNode($dom, $node) {
        if (!$node->childNodes instanceof Traversable) {
            return;
        }

        if ($node->nodeValue != "" && $node->nodeValue == trim($node->nodeValue)) {
            $valueElement = $dom->createElement('_', $node->nodeValue);
            $node->appendChild($valueElement);
        }

        foreach ($node->childNodes as $child) {
            if ($child->nodeName == '_'){
                continue;
            }

            $attrElements = array();

            if ($child->attributes instanceof Traversable) {
                foreach($child->attributes as $attr) {
                    $attrElements[] = $dom->createElement($attr->name, $attr->value);
                }
            }

            $this->reJigNode($dom, $child);

            foreach($attrElements as $attrElement) {
                $child->appendChild($attrElement);
            }
        }
    }

    public function removeTypeAttrs($parent) {
        foreach ($parent->childNodes as $child) {
            if ($child->hasAttributes()) {
                for ($i = $child->attributes->length - 1; $i >= 0; $i--) {
                    if ($child->attributes->item($i)->name == 'type')
                    $child->removeAttributeNode($child->attributes->item($i));
                }
            }
            if ($child->hasChildNodes()) {
                $this->removeTypeAttrs($child);
            }
        }
    }
} 