<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoCriticalCssAdminUi\Block\Adminhtml\System\Config\Form\Field\CriticalCssToPages;

use Magento\Framework\View\Element\AbstractBlock;

/**
 * @method getIsRenderToJsTemplate()
 */
class CriticalCss extends AbstractBlock
{
    /**
     * @param string $value
     *
     * @return $this
     */
    public function setInputName(string $value): CriticalCss
    {
        $this->setData('name', $value);

        return $this;
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setInputId(string $value): CriticalCss
    {
        $this->setId($value);

        return $this;
    }

    /**
     * @return string
     */
    protected function _toHtml()
    {
        return '<textarea name="' .  $this->getName() . '" id="' . $this->getId() . '" class="' . $this->getClass() .
            '" title="' . $this->escapeHtml($this->getTitle()) . '" ' . $this->getExtraParams() . '></textarea>';
    }
}
