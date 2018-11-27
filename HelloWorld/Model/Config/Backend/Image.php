<?php

namespace Amasty\HelloWorld\Model\Config\Backend;

use Amasty\HelloWorld\Helper\Data;
//use Magento\Framework\Exception\FileSystemException;


class Image extends \Magento\Config\Model\Config\Backend\Image
{
    const UPLOAD_DIR = 'uploadImages';

    protected $_maxFileSize = 2048;

    protected $base = 'http://localhost/magento2/uploadImages/';

    protected $path;

    protected $_PATH;

    public function _setGetBlockLabel(Data $data)
    {
        $this->path = $data->getBlockLabel();
    }

    public function _getUploadDir()
    {
        $this->_PATH = '$this->base, $this->path';
        //echo $this->_PATH;

        //return $this->_mediaDirectory->getAbsolutePath($this->_appendScopeInfo(self::UPLOAD_DIR));
        //return $this->_mediaDirectory->getAbsolutePat($this->_PATH);
        //return "http://localhost/magento2/uploadImages/ProfilePics.jpg";
        //return $data->getBlockLabel();
       return $this->_PATH;
    }
    protected function _getAllowedExtensions()
    {
        return ['jpg', 'jpeg', 'gif', 'png', 'svg'];
    }

}