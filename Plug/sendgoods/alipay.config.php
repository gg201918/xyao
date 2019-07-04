<?php

$alipay_config['partner']		= bs_lib::get_configs_value('pay_alipay','pay_alipay_id');
$alipay_config['key']			= bs_lib::get_configs_value('pay_alipay','pay_alipay_key');
$alipay_config['sign_type']    = strtoupper('MD5');
$alipay_config['input_charset']= strtolower('utf-8');
$alipay_config['cacert']    = getcwd().'\\cacert.pem';
$alipay_config['transport']    = 'http';
?>
