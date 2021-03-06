<?php

namespace App\Document;

use Aristek\Bundle\JSONAPIBundle\JsonApi\Document\AbstractSingleResourceDocument;
use WoohooLabs\Yin\JsonApi\Schema\Link\Link;
use WoohooLabs\Yin\JsonApi\Schema\Links;

/**
 * Class UserDocument
 */
class UserDocument extends AbstractSingleResourceDocument
{
    /**
     * @return Links
     */
    public function getLinks(): Links
    {
        return Links::createWithoutBaseUri(
            ['self' => new Link($this->urlGenerator->generate('users_show', ['id' => $this->getResourceId()]))]
        );
    }
}
