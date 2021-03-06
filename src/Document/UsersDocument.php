<?php

namespace App\Document;

use Aristek\Bundle\JSONAPIBundle\JsonApi\Document\AbstractCollectionDocument;
use WoohooLabs\Yin\JsonApi\Schema\Links;

/**
 * Class UsersDocument
 */
class UsersDocument extends AbstractCollectionDocument
{
    /**
     * @return Links
     */
    public function getLinks(): Links
    {
        return Links::createWithoutBaseUri()->setPagination(
            $this->urlGenerator->generate('users_index'),
            $this->domainObject
        );
    }
}
