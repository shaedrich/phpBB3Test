<?php
    class acp_foo
    {
        var $u_action;
        var $new_config;
        function main($id, $mode)
        {
            global $db, $user, $auth, $template;
            global $config, $phpbb_root_path, $phpbb_admin_path, $phpEx;
            switch($mode)
            {
                case 'index':
                    $this->page_title = 'ACP_FOO';
                    $this->tpl_name = 'acp_foo';
                    break;
            }
        }
    }