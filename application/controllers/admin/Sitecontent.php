<?php
class Sitecontent extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->isLogged();
        has_access(21);
        $this->table_name = 'sitecontent';
    }

    public function home()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_home';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('page_cards', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'home'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 8; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'home');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/home");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'home'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function weddings()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_e_weeddings';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('mini_sliders', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'weddings'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'weddings');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/weddings");
            exit;
        }

        $this->data['cards'] = $this->master->getRows('mini_sliders', ['page'=> 'weddings']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'weddings'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function corporate()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_e_weeddings';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('mini_sliders', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'corporate'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'corporate');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/corporate");
            exit;
        }

        $this->data['cards'] = $this->master->getRows('mini_sliders', ['page'=> 'corporate']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'corporate'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function parties()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_e_parties';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('mini_sliders', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'parties'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'parties');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/parties");
            exit;
        }

        $this->data['cards'] = $this->master->getRows('mini_sliders', ['page'=> 'parties']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'parties'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function wakes()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_e_wakes';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('mini_sliders', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'wakes'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'wakes');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/wakes");
            exit;
        }

        $this->data['cards'] = $this->master->getRows('mini_sliders', ['page'=> 'wakes']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'wakes'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function cake()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_e_cake';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('mini_sliders', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'cake'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'cake');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/cake");
            exit;
        }

        $this->data['cards'] = $this->master->getRows('mini_sliders', ['page'=> 'cake']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'cake'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function menu_content()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_e_menus_content';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('mini_sliders', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'menus'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'menus');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/menu_content");
            exit;
        }

        $this->data['cards'] = $this->master->getRows('mini_sliders', ['page'=> 'menus']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'menus'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function menus()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_e_menus';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('menus', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'menus'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'menus');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/menus");
            exit;
        }

        $this->data['menus'] = $this->master->getRows('menus');
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'menus'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function menu_detail($id)
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_menu_detail';
        if ($vals = $this->input->post())
        {
            $content_row = $this->master->getRow('menus', array('id' => $id));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();

                for($i = 1; $i <= 3; $i++) {
                    if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                        
                        $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                        generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                        if(!empty($image['file_name'])){
                            if(isset($content_row['image'.$i]))
                                $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                                $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                            $vals['image'.$i] = $image['file_name'];
                        }
                    }
                }
        

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save('menus', ['code' => $data], 'id', $id);
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/menu_detail/" . $id);
            exit;
        }

        $this->data['record'] = $this->master->getRow('menus', array('id' => $id));
        $this->data['row']    = unserialize($this->data['record']->code);
        // pr($this->data);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function drinks()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_e_drinks';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('mini_sliders', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'drinks'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'drinks');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/drinks");
            exit;
        }

        $this->data['cards'] = $this->master->getRows('mini_sliders', ['page'=> 'drinks']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'drinks'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function mirror()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_e_mirror';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('mini_sliders', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'mirror'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'mirror');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/mirror");
            exit;
        }

        $this->data['cards'] = $this->master->getRows('mini_sliders', ['page'=> 'mirror']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'mirror'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function gallery()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_gallery';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('mini_sliders', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'gallery'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
        

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'gallery');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/gallery");
            exit;
        }

        $this->data['cards'] = $this->master->getRows('mini_sliders', ['page'=> 'gallery']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'gallery'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function christmas()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_e_christmas';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('mini_sliders', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'christmas'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'christmas');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/christmas");
            exit;
        }

        $this->data['cards'] = $this->master->getRows('mini_sliders', ['page'=> 'christmas']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'christmas'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function about()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_about';
        $id = $this->uri->segment(4);
        if(isset($id))
        {
            $this->data['record'] = $this->master->getRow('team', ['id'=> $id]);
        }
        $this->data['id'] = $id;
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'about'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'about');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/about");
            exit;
        }

        $this->data['team'] = $this->master->getRows('team', ['status'=> '1']);
        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'about'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }

    public function contact()
    {
        $this->data['enable_editor'] = TRUE;
        $this->data['pageView'] = ADMIN . '/site_contact';
        $id = $this->uri->segment(4);
        if ($vals = $this->input->post()) {
            $content_row = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
            $content_row = unserialize($content_row->code);

            if(!is_array($content_row))
                $content_row = array();
            
            for($i = 1; $i <= 3; $i++) {
                if (isset($_FILES["image".$i]["name"]) && $_FILES["image".$i]["name"] != "") {
                    
                    $image = upload_file(UPLOAD_PATH.'images/', 'image'.$i);
                    generate_thumb(UPLOAD_PATH.'images/',UPLOAD_PATH.'images/',$image['file_name'],600,'thumb_');
                    if(!empty($image['file_name'])){
                        if(isset($content_row['image'.$i]))
                            $this->remove_file(UPLOAD_PATH."images/".$content_row['image'.$i]);
                            $this->remove_file(UPLOAD_PATH."images/thumb_".$content_row['image'.$i]);
                        $vals['image'.$i] = $image['file_name'];
                    }
                }
            }

            $data = serialize(array_merge($content_row, $vals));
            $this->master->save($this->table_name,array('code' => $data),'ckey', 'contact');
            setMsg('success', 'Settings updated successfully !');
            redirect(ADMIN . "/sitecontent/contact");
            exit;
        }

        $this->data['row'] = $this->master->getRow($this->table_name, array('ckey' => 'contact'));
        $this->data['row'] = unserialize($this->data['row']->code);
        $this->load->view(ADMIN . '/includes/siteMaster', $this->data);
    }


    public function save_affiliate()
    {
        
        if ($vals = $this->input->post())
        {
            $id = $this->input->post('id');
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
            {
                $image = upload_file(UPLOAD_PATH.'images', 'image');
                if (!empty($image['file_name'])) 
                {
                    $vals['image'] = $image['file_name'];
                }
                else
                {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/qualification', 'refresh');
                    exit;
                }
            }

            if($id != '')
            {
                if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
                {
                    $data = 
                    [
                        'image' => $vals['image'],
                        'heading' => $vals['first_heading'],
                        'description'  => $vals['first_detail']
                    ];
                }
                else
                {
                    $data = 
                    [
                        'heading' => $vals['first_heading'],
                        'description'  => $vals['first_detail']
                    ];
                }
            }
            else
            {
                $data = 
                [
                    'image' => $vals['image'],
                    'heading' => $vals['first_heading'],
                    'description'  => $vals['first_detail']
                ];
            }

            $data['page'] = 'qualification';
            $this->master->save('page_cards', $data, 'id', $id);
            setMsg('success', 'Card saved successfully !');
            redirect(ADMIN . "/sitecontent/qualification");
            exit;
        }
    }

    public function save_team_member()
    {
        
        if ($vals = $this->input->post())
        {
            $id = $this->input->post('id');
            $data = 
            [
                'mem_name'        => $vals['mem_name'],
                'mem_designation' => $vals['mem_designation'],
                'mem_description' => $vals['mem_description']
            ];

            $this->master->save('team', $data, 'id', $id);
            setMsg('success', 'Member saved successfully !');
            redirect(ADMIN . "/sitecontent/about");
            exit;
        }
    }

    public function save_menu_name()
    {
        
        if ($vals = $this->input->post())
        {
            $id = $this->input->post('id');
            $data = 
            [
                'menu_name'        => $vals['menu_name'],
                'menu_slug'        => toSlugUrl($vals['menu_name'])
            ];

            $this->master->save('menus', $data, 'id', $id);
            setMsg('success', 'Member saved successfully !');
            redirect(ADMIN . "/sitecontent/menus");
            exit;
        }
    }
    

    public function save_mini_slider()
    {
        
        if ($vals = $this->input->post())
        {
            $id = $this->input->post('id');
            if (isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
            {
                $image = upload_file(UPLOAD_PATH.'images', 'image');
                generate_thumb(UPLOAD_PATH.'images/', UPLOAD_PATH.'images/', $image['file_name'], 600, 'thumb_');
                if (!empty($image['file_name'])) 
                {
                    $vals['image'] = $image['file_name'];
                }
                else
                {
                    setMsg('error', 'Please upload a valid image file >> ' . strip_tags($image['error']));
                    redirect(ADMIN . '/sitecontent/' . $vals['page'], 'refresh');
                    exit;
                }
            }

            if($id != '')
            {
                if(isset($_FILES["image"]["name"]) && $_FILES["image"]["name"] != "")
                {
                    $data = 
                    [
                        'image' => $vals['image']
                    ];
                }
                else
                {
                    $data = 
                    [
                        'status' => 1
                    ];
                }
            }
            else
            {
                $data = 
                [
                    'image' => $vals['image']
                ];
            }

            $data['page'] = $vals['page'];
            $this->master->save('mini_sliders', $data, 'id', $id);
            setMsg('success', 'Image saved successfully !');
            if( $vals['page'] == 'menus')
            {
                redirect(ADMIN . "/sitecontent/menu_content");
            }
            else
            {
                redirect(ADMIN . "/sitecontent/" . $redirectTo);
            }
            exit;
        }
    }

    function delete_mini_slider_image($id, $redirectTo)
    {
        $id = intval($id);
        $this->master->delete_where('mini_sliders', ['id'=> $id]);
        setMsg('success', 'SLider Image has been deleted successfully.');
        redirect(ADMIN . "/sitecontent/" . $redirectTo);
        exit;
    }

    function delete_team_mem($id, $redirectTo = 'about')
    {
        $id = intval($id);
        $this->master->delete_where('team', ['id'=> $id]);
        setMsg('success', 'Member has been deleted successfully.');
        redirect(ADMIN . "/sitecontent/" . $redirectTo);
        exit;
    }

    function delete_menus($id, $redirectTo = 'menus')
    {
        $id = intval($id);
        $this->master->delete_where('menus', ['id'=> $id]);
        setMsg('success', 'Member has been deleted successfully.');
        redirect(ADMIN . "/sitecontent/" . $redirectTo);
        exit;
    }
    
    public function delete()
    {
        $arr = $this->input->post('delete');
        foreach ($arr as $key => $values) {
            $this->master->delete($this->table_name, 'id', $values);
        }
        redirect("admin/sitecontent/slider", 'refresh');
    }

    function remove_file($filepath)
    {
        if (is_file($filepath))
            unlink($filepath);
        return;
    }

}
?>