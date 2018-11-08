<?php
/**
 * Created by PhpStorm.
 * User: NASUHA
 * Date: 8/11/2018
 * Time: 3:50 PM
 */

namespace Amasty\HelloWorld\Model\Config\Backend;

use Amasty\HelloWorld\Helper\Data;


class Image extends \Magento\Config\Model\Config\Backend\Image
{
    /*public function _getUploadDir(Data $data)
    {

    }*/
    protected function _getAllowedExtensions()
    {
        return ['jpg', 'jpeg', 'gif', 'png', 'svg'];
    }

}