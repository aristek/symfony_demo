<?php

namespace App\Document;

use Aristek\Bundle\SymfonyJSONAPIBundle\JsonApi\Document\AbstractCollectionDocument;
use WoohooLabs\Yin\JsonApi\Schema\Links;

/**
 * Users Document.
 */
class UsersDocument extends AbstractCollectionDocument
{
    /**
     * {@inheritdoc}
     */
    public function getLinks(): Links
    {
        return Links::createWithoutBaseUri()->setPagination('/users', $this->domainObject);
    }
}
