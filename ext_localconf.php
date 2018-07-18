<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['settingLanguage_postProcess']['marketing_automation'] =
        \Bitmotion\MarketingAutomation\Cookie\Dispatcher::class . '->dispatch';

    $marketingDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\Bitmotion\MarketingAutomation\Cookie\Dispatcher::class);
    $marketingDispatcher->addSubscriber(\Bitmotion\MarketingAutomation\Slot\LanguageSubscriber::class);
});
