<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_mahasiswa');
        $this->load->library('upload');
    }

    // index
    public function index()
    {
        $data['title'] = 'Data Mahasiswa';
        $data['mahasiswa'] = $this->m_mahasiswa->ambil_data_model('tb_mahasiswa')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }

    // tambah_data
    public function tambah_data()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $fullname = $this->input->post('fullname', true);
        $gender = $this->input->post('gender', true);
        $address = $this->input->post('address', true);
        $religion = $this->input->post('religion', true);
        $is_active = $this->input->post('is_active', true);
        $img_upload = $this->img_upload();

        $data = array(
            'username' => $username,
            'password' => $password,
            'fullname' => $fullname,
            'gender' => $gender,
            'address' => $address,
            'religion' => $religion,
            'is_active' => $is_active,
            'img_upload' => $img_upload,

        );

        $this->m_mahasiswa->tambah_data_model('tb_mahasiswa', $data);
        redirect('mahasiswa/index');
    }

    // hapus_data
    public function hapus_data($id)
    {
        $where = array('id' => $id);
        $this->m_mahasiswa->hapus_data_model('tb_mahasiswa', $where);

        redirect('mahasiswa/index');
    }

    // edit_data
    public function edit_data($id)
    {
        $where = array('id' => $id);
        $data['mahasiswa'] = $this->m_mahasiswa->edit_data_model('tb_mahasiswa', $where)->result();

        $data['title'] = 'Edit Data';
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/edit', $data);
        $this->load->view('templates/footer');
    }

    // update_data
    public function update_data()
    {
        $id = $this->input->post('id', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $fullname = $this->input->post('fullname', true);
        $gender = $this->input->post('gender', true);
        $address = $this->input->post('address', true);
        $religion = $this->input->post('religion', true);
        $is_active = $this->input->post('is_active', true);
        $img_upload = $this->img_upload();

        $where = array('id' => $id);

        $data = array(
            'id' => $id,
            'username' => $username,
            'password' => $password,
            'fullname' => $fullname,
            'gender' => $gender,
            'address' => $address,
            'religion' => $religion,
            'is_active' => $is_active,
            'img_upload' => $img_upload,
        );

        $this->m_mahasiswa->update_data_model('tb_mahasiswa', $data, $where);
        redirect('mahasiswa/index');
    }

    // img_upload
    function img_upload()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);
        if (!empty($_FILES['img_upload']['name'])) {

            if ($this->upload->do_upload('img_upload')) {
                $gbr = $this->upload->data();

                //Compress Image
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/images/' . $gbr['file_name'];
                $config['create_thumb'] = FALSE;
                $config['maintain_ratio'] = FALSE;
                $config['quality'] = '100%';
                $config['width'] = 50;
                $config['height'] = 50;
                $config['new_image'] = './assets/images/' . $gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();

                $last = $this->input->post('last');
                unlink("./assets/images/$last");
                $gambar = $gbr['file_name'];
                return $gambar;
            }
        } else {
            $gambar = $this->input->post('last');
            return $gambar;
        }
    }
}
