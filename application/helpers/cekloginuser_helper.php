<?php

function cekloginuser()
{
    $ci = get_instance();
    if (!$ci->session->userdata('id_user')) {
        redirect('Dashboard');
    }
}
