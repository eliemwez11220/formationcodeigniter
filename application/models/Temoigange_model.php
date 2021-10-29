<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Temoigange_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get temoigange by temoigange_uid
     */
    function get_temoigange($temoigange_uid)
    {
        return $this->db->get_where('temoiganges',array('temoigange_uid'=>$temoigange_uid))->row_array();
    }
    
    /*
     * Get all temoiganges count
     */
    function get_all_temoiganges_count()
    {
        $this->db->from('temoiganges');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all temoiganges
     */
    function get_all_temoiganges($params = array())
    {
        $this->db->order_by('temoigange_uid', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('temoiganges')->result_array();
    }
        
    /*
     * function to add new temoigange
     */
    function add_temoigange($params)
    {
        $this->db->insert('temoiganges',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update temoigange
     */
    function update_temoigange($temoigange_uid,$params)
    {
        $this->db->where('temoigange_uid',$temoigange_uid);
        return $this->db->update('temoiganges',$params);
    }
    
    /*
     * function to delete temoigange
     */
    function delete_temoigange($temoigange_uid)
    {
        return $this->db->delete('temoiganges',array('temoigange_uid'=>$temoigange_uid));
    }
}
