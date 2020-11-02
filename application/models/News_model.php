<?php

class News_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($id = '',$slug = '')
    {
        
        if (empty($id) && empty($slug))
        {
            $query = $this->db->get('news');
            $result = $query->result_array();
            return $result;
        }
    
        else if($id > 0 && empty($slug))
        {
        $query = $this->db->get_where('news',array('id'=>$id));
        $row = $query->row_array();
        return $row;
        }

        else {
            $query = $this->db->get_where('news',array('slug'=>$slug));
        $row = $query->row_array();
        return $row;
        }
    }

    public function set_news()
    {
        $this->load->helper('url');
        $slug = url_title($this->input->post('title'),'dash',TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $this->input->post('slug'),
            'text' => $this->input->post('text')
        );

        return $this->db->insert("news",$data);
    }

    public function delete_news($id)
    {
          $this->db->query("delete from news where id ='".$id."'");
    }

    public function update_news($id,$newtitle,$text) {

        $data = array('title'=>$newtitle,'text'=>$text);
        $this->db->where('id' , $id);
        $this->db->update('news',$data);
    }

}