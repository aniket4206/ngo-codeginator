<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->helper(array('url'));
        $this->load->library('form_validation');
        $this->logged_in();
    }

    private function logged_in()
    {
        if (!$this->session->userdata('authenticated')) {
            redirect('login');
        }
    }

    public function index()
    {
        // $data['title'] = "Dashboard";
        $this->load->model('Users_model');
        $data['fetch'] = $this->Users_model->fetch_data();
        $this->load->view('Dashboard/index', $data);
    }

    public function admins()
    {
        // $data['title'] = "Dashboard";
        $data['fetch'] = $this->Users_model->fetch_data();
        $this->load->view('Dashboard/admins', $data);
    }

    public function contact_data()
    {
        $data['fetch'] = $this->Users_model->fetch_contact_data();
        $this->load->view('Dashboard/contact_data', $data);
    }

    public function change()
    {
        $data['fetch'] = $this->Users_model->fetch_data();
        $this->load->view('Dashboard/change', $data);
    }

    public function products_p()
    {
        // $data['title'] = "Dashboard";
        $data['fetch'] = $this->Users_model->fetch_products();
        $this->load->view('Dashboard/products_p', $data);
    }

    
    public function video_p()
    {
        // $data['title'] = "Dashboard";
        $data['fetch'] = $this->Users_model->fetch_video();
        $this->load->view('Dashboard/video_p', $data);
    }

    public function change_products()
    {
        // $data['title'] = "Dashboard";
        $data['fetch'] = $this->Users_model->fetch_products();
        $this->load->view('Dashboard/change_products', $data);
    }

    public function change_video()
    {
        // $data['title'] = "Dashboard";
        $data['fetch'] = $this->Users_model->fetch_video();
        $this->load->view('Dashboard/change_video', $data);
    }
    
    public function delete_products($userId)  //for deleting products from products table
    {
        $this->Users_model->delete_products($userId);
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect('change_products');
    }

    public function delete_video($userId)  //for deleting products from products table
    {
        $this->Users_model->delete_video($userId);
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect('change_video');
    }

    public function create_user()
    {
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('active', 'Active', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Dashboard/create_user');
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['password'] = $this->input->post('password');
            $formArray['active'] = $this->input->post('active');
            $formArray['created_at'] = date('Y-m-d');
            $this->Users_model->create_user($formArray);
            $this->session->set_flashdata('success', 'Record added Successfully.!!');
            redirect(base_url() . 'change');
        }
    }

    public function create_product()
    {
        $this->load->view('Dashboard/create_product');
    }

    public function create_video()
    {
        $this->load->view('Dashboard/create_video');
    }

    public function edit_user($userId)
    {
        $this->load->model('Users_model');
        $user = $this->Users_model->getUser($userId);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('active', 'Active', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Dashboard/edit_user', $data);
        } else {
            $formArray = array();
            $formArray['name'] = $this->input->post('name');
            $formArray['email'] = $this->input->post('email');
            $formArray['password'] = $this->input->post('password');
            $formArray['active'] = $this->input->post('active');
            $formArray['created_at'] = date('Y-m-d');
            $this->Users_model->updateUser($userId, $formArray);
            $this->session->set_flashdata('success', 'Record Updated Successfully.!!');
            redirect(base_url() . 'admins');
        }
    }

    public function edit_products($userId)
    {
        $this->load->model('Users_model');
        $data = $this->Users_model->getProducts($userId);
        $this->load->view('Dashboard/edit_products', compact('data'));
    }

    public function update_products($pid)
    {
        if (isset($_POST['title'])) {
            $data['title'] = $this->input->post('title');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[100]|min_length[1]');
        }
       
        if (isset($_POST['category'])) {
            $data['category'] = $this->input->post('category');
            $this->form_validation->set_rules('category', 'Category', 'required');
        }

      
        if (isset($_FILES['image'])) {

            $i = $this->Users_model->getProducts($pid);
            $tempImg = $i[0]->image;
            $image = $_FILES['image']['name'];
            if ($image == '' or 'Product-Images/' . $image == $tempImg) {
                $data['image'] = $tempImg;
            } else {
                $data['image'] =  $this->UpdateImg($tempImg, $pid);
            }
        }

        if ($this->form_validation->run() == true) {
            if ($this->Users_model->UpdatePro_Table($pid, $data)) {
                $this->session->set_flashdata('success', 'Record Updated Successfully.!!');
                redirect('products_p');
            } else {
                $this->session->set_flashdata('error', 'Inalid DATA');
                redirect('edit_products');
            }
        } else {
            // $this->session->set_flashdata('error', 'Inalid DATA');
            $this->session->set_flashdata('failure', 'Record Updating failed due to you left some fields blank.!!');
            redirect('products_p');
        }
    }


    public function UpdateImg($tempImg, $id)            //Update image
    {
        $config['upload_path']          = './assets/images/Product-Images';
        $config['allowed_types']        = 'gif|jpg|png';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('image')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            $this->edit_products($id);
        } else {
            $this->delImg($tempImg);
            $im = $this->upload->data('file_name');
            return $im;
        }
    }

    public function DelImg($tempImg)            //Delete Image
    {
        if (file_exists('./assets/images/Product-Images' . $tempImg)) {
            unlink('./assets/images/Product-Images' . $tempImg);
        }
    }

    
    public function add_products()    //Add Products
    {

        $this->load->model('Users_model');
        if (isset($_POST['title'])) {
            $data['title'] = $this->input->post('title');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[100]|min_length[1]');
        }

        if (isset($_POST['category'])) {
            $data['category'] = $this->input->post('category');
            $this->form_validation->set_rules('category', 'Category', 'required');
        }

        if (isset($_POST['active'])) {
            $data['active'] = $this->input->post('active');
            $this->form_validation->set_rules('active', 'Active', 'required');
        }


        if (isset($_FILES['image'])) {
            $image = $_FILES['image']['name'];

            if ($image == '') {
                $data['image'] = '';
                $data['image'] = $this->input->post('image');
                $this->form_validation->set_rules('image', 'Image', 'required');
            } else {
                $config['upload_path']          = './assets/images/Product-Images';
                $config['allowed_types']        = 'jpg|png|jpeg';


                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('image')) {
                    $this->session->set_flashdata('error', 'cant upload');
                    redirect('create_product/');
                } else {
                    $data['image'] = $this->upload->data('file_name');
                }
            }
        }

        if ($this->form_validation->run() == true) {
            if ($this->Users_model->insert_Product($data)) {
                $this->session->set_flashdata('success', 'Record Added Successfully.!!');
                redirect('change_products');
            } else {
                $this->session->set_flashdata('error', 'Inalid DATA');
                redirect('create_product');
            }
        } else {
            $this->load->view('Dashboard/create_product');
        }
    }

    public function add_video()    //Add Products
    {

        $this->load->model('Users_model');
        if (isset($_POST['title'])) {
            $data['title'] = $this->input->post('title');
            $this->form_validation->set_rules('title', 'Title', 'required|max_length[100]|min_length[1]');
        }

        if (isset($_POST['video_link'])) {
            $data['video_link'] = $this->input->post('video_link');
            $this->form_validation->set_rules('video_link', 'Title', 'required|max_length[100]|min_length[1]');
        }

        if (isset($_POST['category'])) {
            $data['category'] = $this->input->post('category');
            $this->form_validation->set_rules('category', 'Category', 'required');
        }

        if (isset($_POST['active'])) {
            $data['active'] = $this->input->post('active');
            $this->form_validation->set_rules('active', 'Active', 'required');
        }

        

        // if (isset($_FILES['image'])) {
        //     $image = $_FILES['image']['name'];
        //     // $img_name = $_FILES['logo_img']['name'];

        //     if ($image == '') {
        //         $data['image'] = '';
        //         $data['image'] = $this->input->post('image');
        //         $this->form_validation->set_rules('image', 'Image', 'required');
        //     } else {
        //         // $config['upload_path']          = './assets/images/Product-Images';
        //         // $config['allowed_types']        = 'jpg|png|jpeg';

        //         $config = [
        //             'upload_path' => './assets/images/Product-Images',
        //             'allowed_types' => 'png|jpeg|jpg',
        //             'file_name' => $image,
        //         ];

        //         $this->load->library('upload', $config);
        //         $this->upload->initialize($config);
        //         if (!$this->upload->do_upload('image')) {
        //             $imageError = array('imageError' => $this->upload->display_errors());
        //             $this->load->view('create_video/', $imageError);
        //             // $this->session->set_flashdata('error', 'cant upload');
        //             // redirect('create_video/');
        //         } else {
                   
        //             // $data['image'] = $this->upload->data('file_name');
        //             $img1 = $this->upload->data('file_name');
        //             $data['image'] = $img1;   
        //         }
        //     }
        // }

        if ($this->form_validation->run() == true) {
            if ($this->Users_model->insert_video($data)) {
                $this->session->set_flashdata('success', 'Record Added Successfully.!!');
                redirect('change_video');
            } else {
                $this->session->set_flashdata('error', 'Inalid DATA');
                redirect('Add-Video');
            }
        } else {
            $this->load->view('create_video');
        }
    }


    public function delete($userId)  //for deleting user from users table
    {
        $this->Users_model->deleteUser($userId);
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect(base_url() . 'change');
    }

    public function delete_contact($userId)  //for deleting contact us data from contact_us table
    {
        $this->Users_model->delete_contact($userId);
        $this->session->set_flashdata('success', 'Record deleted successfully');
        redirect(base_url() . 'contact_data');
    }

    public function add_product()
        {
            $this->load->model('Users_model');
            if (isset($_POST['title'])) {
                $data['title'] = $this->input->post('title');
                $this->form_validation->set_rules('title', 'Title', 'required|max_length[100]|min_length[1]');
            }
    
            if (isset($_POST['category'])) {
                $data['category'] = $this->input->post('category');
                $this->form_validation->set_rules('category', 'Category', 'required');
            }
    
            if (isset($_POST['active'])) {
                $data['active'] = $this->input->post('active');
                $this->form_validation->set_rules('active', 'Active', 'required');
            }
    
    
            if (isset($_FILES['image'])) {
                $image = $_FILES['image']['name'];
    
                if ($image == '') {
                    $data['image'] = '';
                    $data['image'] = $this->input->post('image');
                    $this->form_validation->set_rules('image', 'Image', 'required');
                } else {
                    $config['upload_path']          = './assets/images/Product-Images';
                    $config['allowed_types']        = 'jpg|png|jpeg';
    
    
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('image')) {
                        $this->session->set_flashdata('error', 'cant upload');
                        redirect('create_product/');
                    } else {
                        $data['image'] = $this->upload->data('file_name');
                    }
                }
            }
    
            if ($this->form_validation->run() == true) {
                if ($this->Users_model->insert_Product($data)) {
                    $this->session->set_flashdata('success', 'Record Added Successfully.!!');
                    redirect('change_products');
                } else {
                    $this->session->set_flashdata('error', 'Inalid DATA');
                    redirect('create_product');
                }
            } else {
                $this->load->view('Dashboard/create_product');
            }
}
}