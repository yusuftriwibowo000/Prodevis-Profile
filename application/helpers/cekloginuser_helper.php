<?php

function cekloginuser()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('Dashboard');
    }
}
