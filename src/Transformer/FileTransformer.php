<?php

namespace App\Transformer;

use Aristek\Bundle\SymfonyJSONAPIBundle\Service\File\Model\UploadedFileModel;
use Aristek\Bundle\SymfonyJSONAPIBundle\Transformer\AbstractTransformer;

/**
 * Class FileTransformer
 */
class FileTransformer extends AbstractTransformer
{
    /**
     * @param UploadedFileModel $uploadedFileModel
     *
     * @return string
     */
    public function getType($uploadedFileModel): string
    {
        return 'files';
    }

    /**
     * @return array
     */
    protected function getTransformableAttributes(): array
    {
        return ['id', 'name', 'original'];
    }

    /**
     * @param UploadedFileModel $uploadedFileModel
     *
     * @return string
     */
    protected function transformId(UploadedFileModel $uploadedFileModel): string
    {
        return (string) $uploadedFileModel->getId();
    }
}
