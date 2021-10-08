<?php
class Pages extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pages_model','page');
    }
    
    function events($page)
    {
        $meta = $this->page->getMetaContent($page);
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent($page);
		if($data)
        {
			$this->data['content']      = unserialize($data->code);
			$this->data['meta_desc']    = json_decode($meta->content);
			$this->data['page']         = $page;
            $this->data['mini_sliders'] = $this->master->getRows('mini_sliders', ['page'=> $page]);
            $this->load->view('events', $this->data);
		}
        else{
			show_404();
		}
    }

    function menus($menu)
    {
        $meta = $this->page->getMetaContent('menu');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('menus');
		if($data)
        {
			$this->data['content']      = unserialize($data->code);
			$this->data['meta_desc']    = json_decode($meta->content);
            $this->data['record'] = $this->master->getRow('menus', array('menu_slug' => $menu));
            $this->data['menu'] = unserialize( $this->data['record']->code);
            $this->data['mini_sliders'] = $this->master->getRows('mini_sliders', ['page'=> 'menus']);
            $this->load->view('menus', $this->data);
		}
        else{
			show_404();
		}
    }

    function cake()
    {
        $meta = $this->page->getMetaContent('cake');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('cake');
		if($data)
        {
			$this->data['content']      = unserialize($data->code);
			$this->data['meta_desc']    = json_decode($meta->content);
			$this->data['page']         = 'cake';
            $this->data['mini_sliders'] = $this->master->getRows('mini_sliders', ['page'=> 'cake']);
            $this->load->view('cake', $this->data);
            // pr($this->data);
		}
        else{
			show_404();
		}
    }

    function drinks()
    {
        $meta = $this->page->getMetaContent('drinks');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('drinks');
		if($data)
        {
			$this->data['content']      = unserialize($data->code);
			$this->data['meta_desc']    = json_decode($meta->content);
			$this->data['page']         = 'drinks';
            $this->data['mini_sliders'] = $this->master->getRows('mini_sliders', ['page'=> 'drinks']);
            $this->load->view('drink', $this->data);
            // pr($this->data);
		}
        else{
			show_404();
		}
    }

    function mirror()
    {
        $meta = $this->page->getMetaContent('mirror');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('mirror');
		if($data)
        {
			$this->data['content']      = unserialize($data->code);
			$this->data['meta_desc']    = json_decode($meta->content);
			$this->data['page']         = 'mirror';
            $this->data['mini_sliders'] = $this->master->getRows('mini_sliders', ['page'=> 'mirror']);
            $this->load->view('mirror', $this->data);
            // pr($this->data);
		}
        else{
			show_404();
		}
    }

    function gallery()
    {
        $meta = $this->page->getMetaContent('gallery');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('gallery');
		if($data)
        {
			$this->data['content']      = unserialize($data->code);
			$this->data['meta_desc']    = json_decode($meta->content);
			$this->data['page']         = 'gallery';
            $this->data['gallery']      = $this->master->getRows('mini_sliders', ['page'=> 'gallery']);
            $this->load->view('gallery', $this->data);
            // pr($this->data);
		}
        else{
			show_404();
		}
    }

    function about()
    {
        $meta = $this->page->getMetaContent('about');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('about');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->data['team'] = $this->master->getRows('team', ['status'=> '1']);
            $this->load->view('about', $this->data);
		}else{
			show_404();
		}
    }

    function contact()
    {
        if ($vals = $this->input->post()) {
            $res = array();
            $res['hide_msg'] = 0;
            $res['scroll_to_msg'] = 0;
            $res['status'] = 0;
            $res['frm_reset'] = 0;
            $res['redirect_url'] = 0;

            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('subject', 'Subject', 'required');
            $this->form_validation->set_rules('phone', 'Phone Number', 'required');
            $this->form_validation->set_rules('msg', 'Message', 'required');
            if ($this->form_validation->run() === FALSE)
            {
                $res['status'] = 0;
                $res['msg']=validation_errors();
            }
            else
            {
                $vals['msg'] = html_escape($this->input->post('msg'));
                $vals['created_date']=date('Y-m-d H:i:s');
                $vals['status']=0;
                $this->master->save('contact',$vals);
                $vals['site_email'] = $this->data['site_settings']->site_email;
                $vals['site_noreply_email'] = $this->data['site_settings']->site_noreply_email;
                $okmsg = send_email($vals);
                if ($okmsg) {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                    // $res['redirect_url'] = site_url('contact-us');
                } else {
                    $res['msg'] = 'Message send sucessfully!';
                    $res['status'] = 1;
                    $res['frm_reset'] = 1;
                    $res['hide_msg'] = 1;
                }
                /*}else{
                    $res['msg'] = showMsg('error','Please verify that you are not robot!');
                    $res['redirect_url'] = site_url('contact-us');
                }*/
            }
            exit(json_encode($res));
        }

        $meta = $this->page->getMetaContent('contact');
		$this->data['page_title'] = $meta->page_name;
		$this->data['slug'] = $meta->slug;
		$data = $this->page->getPageContent('contact');
		if($data){
			$this->data['content']   = unserialize($data->code);
			$this->data['meta_desc'] = json_decode($meta->content);
            $this->load->view('contact', $this->data);
		}else{
			show_404();
		}
    }

}
