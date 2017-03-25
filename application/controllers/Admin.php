<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form','url'));
    }

    public function dashboard()
    {
        $data['collects'] = $this->dashboard_data(); //填充数据的函数
        $this->load->view('admin/layout/header');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/layout/footer');
    }



    public function admininfo()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/admin/index');
        $this->load->view('admin/layout/footer');
    }

    public function usermembershow()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/usermember/index');
        $this->load->view('admin/layout/footer');
    }

    public function articleshow()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/article/index');
        $this->load->view('admin/layout/footer');
    }

    public function articlecreate()
    {
        $this->load->view('admin/layout/header');
        $this->load->view('admin/article/create');
        $this->load->view('admin/layout/footer');
    }

    public function dashboard_data()
    {
        return $collects = array(
            [
                'count' => 44,
                'title' => 'All Members',
                'sup' => '人',
                'icon' => 'ion-person-add',
                'bck' => 'bg-aqua',
                'url' => '#'
            ],
            [
                'count' => 45,
                'title' => 'All Articles',
                'sup' => '篇',
                'icon' => 'ion-document',
                'bck' => 'bg-green',
                'url' => '#'
            ],
            [
                'count' => 33,
                'title' => 'All videos',
                'sup' => '个',
                'icon' => 'ion-videocamera',
                'bck' => 'bg-purple',
                'url' => '#'
            ],
            [
                'count' => 11,
                'title' => 'All News',
                'sup' => '个',
                'icon' => 'ion-film-marker',
                'bck' => 'bg-yellow',
                'url' => '#'
            ],
            [
                'count' => 33,
                'title' => 'All Comments',
                'sup' => '条',
                'icon' => 'ion-document',
                'bck' => 'bg-red',
                'url' => '#'
            ],
            [
                'count' => 44,
                'title' => 'All Lists',
                'sup' => '条',
                'icon' => 'ion-android-textsms',
                'bck' => 'bg-orange',
                'url' => '#'
            ],
            [
                'count' => 43,
                'title' => 'All Tasks',
                'sup' => '条',
                'icon' => 'ion-pricetags',
                'bck' => 'bg-olive',
                'url' => '#'
            ],
            [
                'count' => 55,
                'title' => 'All musics',
                'sup' => '首',
                'icon' => 'ion-music-note',
                'bck' => 'bg-maroon',
                'url' => '#'
            ]
        );
    }
}