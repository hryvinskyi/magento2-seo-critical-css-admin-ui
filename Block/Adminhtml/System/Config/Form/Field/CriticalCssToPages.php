<?php
/**
 * Copyright (c) 2021. All rights reserved.
 * @author: Volodymyr Hryvinskyi <mailto:volodymyr@hryvinskyi.com>
 */

declare(strict_types=1);

namespace Hryvinskyi\SeoCriticalCssAdminUi\Block\Adminhtml\System\Config\Form\Field;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;
use Magento\Framework\DataObject;

class CriticalCssToPages extends AbstractFieldArray
{
    /**
     * @var CriticalCssToPages\CriticalCss
     */
    private $optionsRenderer;

    /**
     * @return void
     * @noinspection MagicMethodsValidityInspection
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _construct()
    {
        $this->addColumn('pattern', [
            'label' => __('URL Pattern'),
            'style' => 'width: 150px',
        ]);
        $criticalCss = $this->getCriticalCssRender();
        $this->addColumn('critical_css', [
            'label' => __('Critical CSS'),
            'renderer' => $criticalCss,
        ]);
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add');
        parent::_construct();
    }

    /**
     * @return CriticalCssToPages\CriticalCss
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    private function getCriticalCssRender()
    {
        if (!$this->optionsRenderer) {
            $this->optionsRenderer = $this->getLayout()
                ->createBlock(CriticalCssToPages\CriticalCss::class);
        }

        return $this->optionsRenderer;
    }
}
