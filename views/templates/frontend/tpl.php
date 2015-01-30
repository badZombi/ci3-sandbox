<!DOCTYPE html>
<html class="full" lang="en">
    <head>
        <? $this->load->view($tpl_path.'html_head'); ?>
    </head>
    <body>
        <? $this->load->view($tpl_path.'header'); ?>
        <?= $body ?>
        <? $this->load->view($tpl_path.'footer'); ?>
        <? $this->load->view($tpl_path.'html_foot'); ?>
    </body>
</html>