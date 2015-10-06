<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   
   /**
	 * @Helper::getJsonEncode()
	 * @Author:Techno Services
	 * @params:$data
	 * @return
	 */ 
	 function jsonEncode($data){
		 return json_encode($data); 
	 }
	/**
	 * @Helper::jsonDecode()
	 * @Author:Techno Services
	 * @params:$data
	 * @return
	 */ 
	 function jsonDecode($data){
		 return json_decode($data); 
	 }
	 /**
	  * @Helper::setSerialize()
	  * @Author:Techno Services
	  * @params:$data
	  * @return
	  */ 
	  function serializeArr($data){
		  return serialize($data);  
	  }
	 /**
	  * @Helper::unserializeArr()
	  * @Author:Techno Services
	  * @params:$data
	  * @return
	  */ 
	  function unserializeArr($data){
		  return unserialize($data);  
	  }
	 /**
	  * @Helper::base64Encode()
	  * @Author:Techno Services
	  * @params:$data
	  * @return
	  */ 
	   function base64Encode($data){
		return base64_encode($data);  
	  }
   /**
	* @Helper::base64Decode()
	* @Author:Techno Services
	* @params:$data
	* @return
	*/ 
    function base64Decode($data){
	  return base64_decode($data);  
	}
   /**
	* @Helper::implodeArr()
	* @Author:Techno Services
	* @params:$separator
	* @params:$array
	* @return
	*/ 
    function implodeArr($separator, $array){
	  return implode($separator , $array);  
	}
   /**
	* @Helper::base64Decode()
	* @Author:Techno Services
	* @params:$min
	* @params:$max
	* @return
	*/ 
    function getRange($min , $max){
	  return range($min, $max);  
	}
   /**
	* @Helper::base64Decode()
	* @Author:Techno Services
	* @params:$min
	* @params:$max
	* @return
	*/ 
    function strReplace($match , $slag , $str){
	  return str_replace($match, $slag,  $str); 
	}
	/**
	* @Helper::sprtf()
	* @Author:Techno Services
	* @params:$num
	* @params:$slag
	* @return
	*/ 
	function sprtf($num , $slag){
	  return sprintf('%.'.$slag.'f', $num);
	}
   /**
	* @Helper::getDayLists()
	* @Author:Techno Services
	* @return
	*/ 
    function getDayLists(){
		 
		 $day = '';
		 $selected = '';
		 $Arr = array(
				'01' => "01",
				'02' => "02",
				'03' => "03",
				'04' => "04",
				'05' => "05",
				'06' => "06",
				'07' => "07",
				'08' => "08",
				'09' => "09",
				'10' => "10",
				'11' => "11",
				'12' => "12",
				'13' => "13",
				'14' => "14",
				'15' => "15",
				'16' => "16",
				'17' => "17",
				'18' => "18",
				'19' => "19",
				'20' => "20",
				'21' => "21",
				'22' => "22",
				'23' => "23",
				'24' => "24",
				'25' => "25",
				'26' => "26",
				'27' => "27",
				'28' => "28",
				'29' => "29",
				'30' => "30",
				'31' => "31"
		  );
	
		 foreach ($Arr as $key=>$values){
	
			  if($values == date('d')) $selected = 'selected="selected"';
			  else $selected = ''; 
			
			  $day .= "<option value=\"".$values."\"";
			  $day .= $selected;
			  $day .= ">".$values."</option>\n";
			
			  if($values == date('t'))
				 break;
		 }
		 
		 return $day;
	  }
   /**
	* @Helper::getMonthLists()
	* @Author:Techno Services
	* @return
	*/
	function getMonthLists(){
			
		$arr = array(
		
			  '01' => "01",
			  '02' => "02",
			  '03' => "03",
			  '04' => "04",
			  '05' => "05",
			  '06' => "06",
			  '07' => "07",
			  '08' => "08",
			  '09' => "09",
			  '10' => "10",
			  '11' => "11",
			  '12' => "12"
		);
		
		$monthlist = '';
		$n = 1;
		foreach ($arr as $key => $val) {
			$monthlist .= "<option value=\"$key\"";
			$monthlist .= ($key == date('m')) ? ' selected="selected"' : '';
			$monthlist .= ">".get_month_name($n)."</option>\n";
			
			$n++;
		}
		
		return $monthlist;
	}
	
   /**
	* @Helper::get_month_name()
	* @Author:Techno Services
	* @params:$word
	* @return
	*/ 
	function get_month_name($month){
		$months = array(
			1   =>  'January',
			2   =>  'February',
			3   =>  'March',
			4   =>  'April',
			5   =>  'May',
			6   =>  'June',
			7   =>  'July',
			8   =>  'August',
			9   =>  'September',
			10  =>  'October',
			11  =>  'November',
			12  =>  'December'
		);
	
		return $months[$month];
	}


   /**
	* @Helper::setFirstLetterCapital()
	* @Author:Techno Services
	* @params:$word
	* @return
	*/ 
    function setFirstLetterCapital($word){
	  return ucfirst($word); 
	}
	/**
	* @GeneralModel::getToken()
	* @access:public
	* @params:length
	* @Author:Techno Services
	* @return $code
	*/	
    function getToken($length = ""){
	  
		$code = uniqid(rand(), true);
		if ($length != "") {
			return substr($code, 0, $length);
		} else
			return $code;
	}
	/**
	* @Helper::hashSha1()
	* @Author:Techno Services
	* @params:$data
	* @return
	*/ 
    function hashSha1($data){
	  return sha1($data); 
	}
	
    /**
	* @Helper::getMemberType()
	* @Author:Techno Services
	* @params:$priority
	* @return
	*/
	function getMemberType($priority){
		
		$designation = '';
		switch($priority){
		      case 1:  $designation = 'Moderator'; break;	
			  case 3:  $designation = 'Principal'; break;	
			  case 5:  $designation = 'Teacher'; break;	
			  case 7:  $designation = 'Student'; break;
			  case 9:  $designation = 'Learner'; break;
			  case 10:  $designation = 'Parent'; break;	
		}
		
		return $designation;
	}
	/**
	* @Helper::getAdminStatus()
	* @Author:Techno Services
	* @params:$satus
	* @return
	*/
	function getAdminStatus($status){
		
		switch($status){
		      case 0:  $designation = 'Inactive'; break;	
			  case 2:  $designation = 'Retired'; break;	
			  case 3:  $designation = 'Active'; break;		
		}
		
		return $designation;
	}
	/**
	* @Helper::getSmsUsers()
	* @Author:Techno Services
	* @return
	*/
	  function getSmsUsers(){
		  
		$ci =& get_instance();
		$ci->db->group_by('user_priority');
		$sql = $ci->db->get("sms_users");
	
		if($sql->num_rows() > 0){ 

			return $sql->result();
		}
		else return '';
		
		//return (isset($data[0])) ? $data : '';		
	  }
	   /**
   * @package:SMS
   * @Student_model::getExtraData().
   * @Author:Techno Services
   */
    function getExtraDataHelper($ref){
	  $ci =& get_instance();
	   $results = '';
	   switch($ref){
		   
		      case 'schedule_timing': $results = getAllSchedduleTimingHelper(); break;
			  case 'schedule_days': $results = getAllSchedduleDaysHelper(); break;
			  case 'sms_course': $results = getAllCourse(); break;
			  case 'sms_class': $results = getAllClass(); break;
			  case 'sms_year': $results = getRange(1950, date('Y') - 3); break;
			  case 'sms_month': $results = getMonthLists(); break;
			  case 'sms_day': $results = getDayLists(); break;
			  case 'session_min': $results = getRange(date('Y') - 1, 2020); break;
			  case 'session_max': $results = getRange(date('Y'), 2020); break;
			  case 'class_rooms': $results = $this->getAllRoom();
			  break;
			  case 'class_teachers': 
			  $results = getRecordsHelper($ci->common_model->_employeesTable,
		                                             array("employee_designation" => "Teacher"), 'all');
			  break;
			  case "country":
			  
			    $results = getRecordsHelper('sms_country', '', 'all');
			  break;
	   }
	   
	   return $results;
   }
   /**
   * @package:SMS
   * @helper::getAllRoom().
   * @Author:Techno Services
   */
    function getAllRoom(){
		
	   $ci = getInstance();
	   $isExist = $ci->common_model->isRecordsExists($ci->common_model->_classroomsTable , ''); 
	   $response = '';
	   if($isExist){
		  $records = $ci->common_model->getRecords($ci->common_model->_classroomsTable,'', 'all');  
		  
		  if(isArray($records)){
			 $response  = $records; 
		  }
	   }
	   
	   return 
	       $response;
   }
   /**
   * @Common_model::getRecords()
   * @Author:Techno Services
   * @access:public
   * @params:$table
   * @params:$where
   * @params:$option
   * @return
   */
    function getRecordsHelper($table, $where, $option){
		
	$ci =& get_instance();

	 if(!empty($where)) 
	      $sql = $ci->db->get_where($table, $where); 
	 else $sql = $ci->db->get($table); 
	  
	  if($sql->num_rows() > 0){  
	     
		 if($option == "all"){
			
			foreach ($sql->result() as $rows){
				
				$data[] = $rows;
			}
		 }
		 else {
			
			$data = $sql->row_array(); 
		 }
		 
		 return $data;
	  }
	  else 
	    return false;   
   }
   
   /**
   * @package:SMS
   * @Student_model::getAllClass().
   * @Author:Techno Services
   */
    function getAllClassHelper($where = ''){

      if($where) $where = $where;
	  else  $where = '';
	  
	  $records = getRecordsHelper('sms_class', $where, 'all');  
	   return 
	       (is_array($records)) ? $records : '';
   }
   /**
   * @package:SMS
   * @Student_model::getAllCourse().
   * @Author:Techno Services
   */
   function getAllCourseHelper(){

	  $records = getRecordsHelper('sms_courses', '', 'all');  

	   return 
	      (is_array($records)) ? $records : '';
   }
   /**
   * @package:SMS
   * @Student_model::getAllSchedduleDays().
   * @Author:Techno Services
   */
   function getAllSchedduleDaysHelper(){

	  $records = getRecordsHelper('sms_scheddule_days', '', 'all');  
      return 
	      (is_array($records)) ? $records : '';
   }
   /**
   * @package:SMS
   * @Student_model::getAllSchedduleTiming().
   * @Author:Techno Services
   */
   function getAllSchedduleTimingHelper(){

	  $records = getRecordsHelper('sms_scheddule_timing', '', 'all');  
	  return 
	      (is_array($records)) ? $records : '';
   }
   
   /**
   * @package:SMS
   * @helper::getLangImg().
   * @Author:Techno Services
   */
   function getLangImg(){
	   
	   $ci =& get_instance();
	   $site_lang = $ci->session->userdata('site_lang');
	   $lang_img = '';
	   
	   switch($site_lang){
		    case 'english': $lang_img = "us.png" ; break; 
			case 'french': $lang_img = "fr.png" ; break; 
			case 'shikomor': $lang_img = "km.png" ; break;
			case 'arabic': $lang_img = "sa.png" ; break; 
	   }

	  return 
	      ($lang_img) ? $lang_img : 'us.png';
   }
   
  /**
   * @package:SMS
   * @helper::getCssRightsideImg().
   * @Author:Techno Services
   */
   function getCssRightsideImg(){
	   
	   $ci =& get_instance();
	   $site_lang = $ci->session->userdata('site_lang');
	   $lang_img = '';
	   
	   switch($site_lang){
		    case 'english': $lang_img = "us" ; break; 
			case 'french': $lang_img = "fr" ; break; 
			case 'shikomor': $lang_img = "km" ; break; 
	   }

	  return 
	      ($lang_img) ? $lang_img : 'us';
   }
   
   /**
   * @package:SMS
   * @helper::mbConvertEncoding().
   * @Author:Techno Services
   */
   function mbConvertEncoding($text){
	  return  mb_convert_encoding($text, 'ISO-8859-15', 'UTF-8');
   }
  /**
   * @package:SMS
   * @helper::calculatetMarksheetMarks().
   * @Author:Techno Services
   */
   function calculatetMarksheetMarks($quiz, $exam, $assigment = NULL){
	  
	  $quiz = getExplode(",",$quiz);
	  $exam = getExplode(",",$exam);
	  
	  $quiz = getArraySum($quiz)/getCount($quiz);
	  $exam = getArraySum($exam)/getCount($exam);
	  
	  $total = ($quiz+$exam)/2;
	  
	  return getRound($total,2);
   }
   /**
   * @package:SMS
   * @helper::getGradeLeter().
   * @Author:Techno Services
   */
   function getGradeLeter($percent_marks){
	 
	  $letter = '';
	  if($percent_marks >= 80){
		$letter = "A+"  ;  
	  }
	  elseif($percent_marks >= 75 && $percent_marks <= 80){
		$letter = 'A';  
	  }
	  
	  return $letter;
   }
   /**
   * @package:SMS
   * @helper::getArraySum().
   * @Author:Techno Services
   */
   function getArraySum($array){
	   return array_sum($array);
   }
   /**
   * @package:SMS
   * @helper::getCount().
   * @Author:Techno Services
   */
   function getCount($array){
	   return count($array);
   }
   /**
   * @package:SMS
   * @helper::getArraySum().
   * @Author:Techno Services
   */
   function getExplode($slag,$str){
	   return explode($slag,$str);
   }
   /**
   * @package:SMS
   * @helper::getArraySum().
   * @Author:Techno Services
   */
   function getImplode($slag,$str){
	   return implode($slag,$str);
   }
   /**
   * @package:SMS
   * @helper::getRound().
   * @Author:Techno Services
   */
   function getRound($num, $decimal_num){
	   return round($num, $decimal_num);
   } 
  /**
   * @package:SMS
   * @helper::caltMarksheetTotalSubMarks().
   * @Author:Techno Services
   */
   function caltMarksheetTotalSubMarks($marks, $credit){
	   return $marks*$credit;
   }
  /**
   * @package:SMS
   * @helper::add_js().
   * @Author:Techno Services
   */
   if(!function_exists('add_js')){
	function add_js($file='')
	{
		$str = '';
		$ci = &get_instance();
		$header_js  = $ci->config->item('header_js');
 
		if(empty($file)){
			return;
		}
 
		if(is_array($file)){
			if(!is_array($file) && count($file) <= 0){
				return;
			}
			foreach($file AS $item){
				$header_js[] = $item;
			}
			$ci->config->set_item('header_js',$header_js);
		}else{
			$str = $file;
			$header_js[] = $str;
			$ci->config->set_item('header_js',$header_js);
		}
	}
}
 /**
   * @package:SMS
   * @helper::add_css().
   * @Author:Techno Services
   */ 
  if(!function_exists('add_css')){
	  function add_css($file='')
	  {
		  $str = '';
		  $ci = &get_instance();
		  $header_css = $ci->config->item('header_css');
   
		  if(empty($file)){
			  return;
		  }
   
		  if(is_array($file)){
			  if(!is_array($file) && count($file) <= 0){
				  return;
			  }
			  foreach($file AS $item){  
				  $header_css[] = $item;
			  }
			  $ci->config->set_item('header_css',$header_css);
		  }else{
			  $str = $file;
			  $header_css[] = $str;
			  $ci->config->set_item('header_css',$header_css);
		  }
	  }
  }
  /**
   * @package:SMS
   * @helper::put_headers().
   * @Author:Techno Services
   */ 
  if(!function_exists('put_headers')){
	  function put_headers()
	  {
		  $str = '';
		  $ci = &get_instance();
		  $header_css = $ci->config->item('header_css');
		  //$header_js  = $ci->config->item('header_js');
		 // $ci->load->library("minify/minify");

		  foreach($header_css AS $item){
			  $str_css[] = $item; /*'<link rel="stylesheet" href="'.base_url().''.$item.'" type="text/css" />'."\n";*/
			  $str .= '<link rel="stylesheet" href="'.base_url().''.$item.'" type="text/css" />'."\n";
		  }
   
		 /* foreach($header_js AS $item){
			  $str_js[] = $item ;'<script type="text/javascript" src="'.base_url().''.$item.'"></script>'."\n";
			  $str .= '<script type="text/javascript" src="'.base_url().''.$item.'"></script>'."\n";
		  }
		  
		  $js = implode(",",$str_js);
		  $css = implode(",",$str_css);*/

		  return $str;
	  }
  }
  /**
   * @package:SMS
   * @helper::put_footer().
   * @Author:Techno Services
   */ 
  if(!function_exists('put_footer')){
	  function put_footer()
	  {
		  $str = '';
		  $ci = &get_instance();
		  $footer_js  = $ci->config->item('footer_js');

		  foreach($footer_js AS $item){
			  $str .= '<script  type="text/javascript"  src="'.base_url().''.$item.'"></script>'."\n";
		  }
   
		  return $str;
	  }
  }
  /**
   * @package:SMS
   * @helper::setOutPut().
   * @Author:Techno Services
   */ 
  function setOutPut(){
	  $ci = &get_instance();
	  $ci->output->set_output('YES'); 
  }
  /**
   * @Admin_model::getUserIp()
   * @access:public
   * @Author:Techno Services
   */
   function getUserIp(){
	   $ci = &get_instance();
	 return $ci->input->ip_address();   
   }
  /**
   * @package:SMS
   * @helper::isSession().
   * @Author:Techno Services
   */
  function isSession(){
	   $ci = &get_instance();
	   $isSession = $ci->session->userdata("token");

	  return 
	    ($isSession) ? $isSession : 0;	
  }
  /**
   * @package:SMS
   * @helper::getGpa().
   * @Author:Techno Services
   */
  function getGpa($total_marks  = array(), $total_credit = array()){
	  $gpa = '';
	  if(isArray($total_credit) && (isset($total_credit[0]) && $total_credit[0] > 0)){
	   $gpa =  getRound(getArraySum($total_marks)/getArraySum($total_credit) , 2);
	  }
	  
	  return $gpa;  
  }
  /**
   * @package:SMS
   * @helper::isArray().
   * @Author:Techno Services
   */
  function isArray($array){
	 return is_array($array); 
  }
  /**
   * @package:SMS
   * @helper::isStudent().
   * @Author:Techno Services
   */
  function isStudent(){
	return (getPriority() == 1) ? 1 : 0; 
  }
   /**
   * @package:SMS
   * @helper::isAlumni().
   * @Author:Techno Services
   */
  function isAlumni(){
	return (getPriority() == 2) ? 1 : 0; 
  }
  /**
   * @package:SMS
   * @helper::isStudentAlumni().
   * @Author:Techno Services
   */
  function isStudentAlumni(){
	return (getPriority() == 4) ? 1 : 0; 
  }
  /**
   * @package:SMS
   * @helper::getPriority().
   * @Author:Techno Services
   */
  function getPriority(){
	 $ci = getInstance();
	 return $ci->session->userdata("priority");  
  }
  /**
   * @package:SMS
   * @helper::getInstance().
   * @Author:Techno Services
   */
  function getInstance(){
	 $ci = &get_instance();  
	 return $ci;
  }
  /**
   * @package:SMS
   * @helper::getCourseTeacher().
   * @Author:Techno Services
   */
  function getCourseTeacher($course_id, $semester, $classid){
	  
	  $ci = getInstance();
	  $where = array("course_id" => $course_id, "semester" => $semester, 'class_id' => $classid);
	  $row = $ci->common_model->getRecords($ci->common_model->_schedduleTable, $where, 's');
	  
	  return $row['teacher_id'];
  }
  
  function loadCommon_model(){
	  $ci = getInstance();
	  return $ci->load->model("admin/common_model");  
  }
   /**
   * @package:SMS
   * @helper::isTeacherFeedback().
   * @Author:Techno Services
   */
  function isTeacherFeedback($teacher_id, $course_id, $semester, $class_id){
	   $ci = getInstance();
	   $where = array(
	            "teacher_id" => $teacher_id,
				"course_id" => $course_id,
				"student_id" => $class_id,
				"semester" => $semester
	   );
	   $num = $ci->common_model->getNumRows($ci->common_model->_marksheet_teacher_signature, $where);
	   $row = 0;
	   
	   if($num){
		   $row = $ci->common_model->getRecords($ci->common_model->_marksheet_teacher_signature, $where,'s');  
	   }
	   
	  return ($num) ? $row : 0;
  }
  /**
   * @package:SMS
   * @helper::getTeacherNameById().
   * @Author:Techno Services
   */
  function getTeacherNameById($teacher_id){
	  
	   $ci = getInstance();
	   $where = array('employee_id' => $teacher_id);
	   $sql = '';
	   if($ci->common_model->isRecordsExists($ci->common_model->_employeesTable , $where)){
	     $sql = $ci->common_model->getRecords($ci->common_model->_employeesTable, $where,'s');
		 
		 $row = $sql['employee_firstname'].' '.$sql['employee_lastname'];
	   }
	   
	   return (isArray($sql)) ? $row : '';   
	    
  }
  /**
   * @package:SMS
   * @helper::isMarksheetObservation().
   * @Author:Techno Services
   */
  function isMarksheetObservation($student, $semster){
	  
	   $ci = getInstance();
	   loadCommon_model();
	   $where = array("student_id" => $student,"semester" => $semster);
	   $num = $ci->common_model->getNumRows($ci->common_model->_smarksheet_observationTable, $where);
	   $row = 0;
	   
	   if($num){
		   $row = $ci->common_model->getRecords($ci->common_model->_smarksheet_observationTable, $where,'s');  
	   }
	   
	   ($num) ? $row : 0;
  }
  /**
   * @package:SMS
   * @getOrientedDecision::isMarksheetObservation().
   * @Author:Techno Services
   */
  function getOrientedDecision($cgpa){
	  
	   $ci = getInstance();
	   loadCommon_model();
	   $where = array("option_name" => "orienetd_passed_decision");
	   $num = $ci->common_model->getNumRows($ci->common_model->_optionTable, $where);
	   $row = 0;
	   
	   if($num){
		   $row = $ci->common_model->getRecords($ci->common_model->_optionTable, $where, 's');  
	   }

	   
	   ($row > 0 && $cgpa >= $row['orienetd_passed_decision']) ? 
	             array('passed' => 'Passed', 'failed' => '') : array('passed' => '', 'failed' => 'Failed');
  }
  /**
   * @package:SMS
   * @getOrientedDecision::getClassHighLowerMarks().
   * @Author:Techno Services
   */
  function getClassHighLowerMarks($data = array()){
	  
	  $ci = getInstance();
	  $where = array();
	  $marks = array();
	  $max = $min =''; 
	  if(isArray($data)){
		
		 $where['semester'] = $data['semester'];
		 $where['course_id'] = $data['course_id'];
		 $table = $ci->common_model->_studentsMarksTable;
		 
		 $sqlStudents = $ci->common_model->getRecords($table, $where, 'all'); 
         
		 if(isArray($sqlStudents) && isset($sqlStudents[0])){
		   foreach ($sqlStudents AS $lists){
			  $marks[] = calculatetMarksheetMarks($lists->quiz, $lists->exam); 
		   }
		   
		   $max = getMaxArrayValue($marks);
	       $min = getMinArrayValue($marks);
		 }
		 
	  }
    
	  
	  return (isArray($marks) && isset($marks[0])) ? array("max" => $max, "min" => $min) : 0;
  }
  /**
   * @package:SMS
   * @getOrientedDecision::getStudentsCgpa().
   * @Author:Techno Services
   */
  function getStudentsCgpa($std_id, $semster){
	 
	 $ci = getInstance();
	 $total_marks = array();
	 $total_credit = array();
	  
	 if($std_id){
		
		 $where['student_id'] = $std_id;
		 $where['semester'] = $semster;
		 $table = $ci->common_model->_studentsMarksTable;
		 
		 $sqlStudents = $ci->common_model->getRecords($table, $where, 'all'); 
         if(isArray($sqlStudents) && isset($sqlStudents[0])){
		   foreach ($sqlStudents AS $lists){
			   
			  $sql_credit = $ci->common_model->getRecords($ci->common_model->_courseTable, array("ID" => $lists->course_id), 's'); 
			  $marks = calculatetMarksheetMarks($lists->quiz,$lists->exam);
			  $total_sub = caltMarksheetTotalSubMarks($marks, $sql_credit['course_credit']);
			  
			  $total_marks[] = $total_sub;
			  $total_credit[] = $sql_credit['course_credit'];
		   }
		 }
		 
	  } 
	  
	  return (isArray($total_marks) && isArray($total_credit)) ? getGpa($total_marks,$total_credit) : 0; 
  }
  /**
   * @package:SMS
   * @getOrientedDecision::getMaxArrayValue().
   * @Author:Techno Services
   */
  function getMaxArrayValue($array){
	  return max($array); 
  }
  /**
   * @package:SMS
   * @getOrientedDecision::getMinArrayValue().
   * @Author:Techno Services
   */
  function getMinArrayValue($array){
	  return min($array); 
  }
  /**
   * @package:SMS
   * @getOrientedDecision::getMinArrayValue().
   * @Author:Techno Services
   */
  function getTime(){
	  return date("Y-m-d H:i:s"); 
  }
  /**
   * @package:SMS
   * @helper::getLangs().
   * @Author:Techno Services
   */
  function getLangs(){
	  
	  $lang = array(
	          'sms_error_username' => lang("sms_error_username"),
			  'sms_error_password' => lang("sms_error_password"),
			  'sms_error_add_classname' => lang("sms_error_add_classname"),
			  'sms_error_add_classmaxseat' => lang("sms_error_add_classmaxseat"),
			  'sms_error_add_coursename' => lang("sms_error_add_coursename"),
			  'sms_error_add_coureseid' => lang("sms_error_add_coureseid"),
			  'sms_error_emp_firstname' => lang("sms_error_emp_firstname"),
			  'sms_error_emp_lastname' => lang("sms_error_emp_lastname"),
			  'sms_error_emp_city' => lang("sms_error_emp_city"),
			  'sms_error_emp_address' => lang("sms_error_emp_address"),
			  'sms_error_room_name' => lang("sms_error_room_name"),
			  'sms_error_student_no' => lang("sms_error_student_no"),
			  'sms_error_student_firstname' => lang("sms_error_student_firstname"),
			  'sms_error_student_lastname' => lang("sms_error_student_lastname"),
			  'sms_error_student_guardname' => lang("sms_error_student_guardname"),
			  'sms_error_student_address1' => lang("sms_error_student_address1"),
			  'sms_error_permission' => lang("sms_error_permission"),
			  'sms_ajax_semester' => lang("sms_ajax_semester"),
			  'sms_validation_timing' => lang("sms_validation_timing"),
			  'sms_validation_interval' => lang("sms_validation_interval"),
			  'sms_validation_vald_phno' => lang("sms_validation_vald_phno"),
			  'sms_validation_modmessag' => lang("sms_validation_modmessag"),
			  'sms_ajax_record_page' => lang("sms_ajax_record_page"),
			  'sms_ajax_assign_class' => lang("sms_ajax_assign_class"),
			  'sms_confirm_title' => lang("sms_confirm_title"),
			  'sms_confirm_message' => lang("sms_confirm_message"),
			  'sms_confirm_ok' => lang("sms_confirm_ok"),
			  'sms_confirm_cancel' => lang("sms_confirm_cancel"),
			  'sms_confirm_style' => lang("sms_confirm_style"),
			  'sms_gradebook_permission' => lang("sms_gradebook_permission"),
			  'sms_gradebook_numquiz' => lang("sms_gradebook_numquiz"),
			  'sms_helper_request_eror0' => lang("sms_helper_request_eror0"),
			  'sms_helper_request_eror404' => lang("sms_helper_request_eror404"),
			  'sms_helper_request_eror500' => lang("sms_helper_request_eror500"),
			  'sms_jquery_iframe1' => lang("sms_jquery_iframe1"),
			  'sms_jquery_iframe2' => lang("sms_jquery_iframe2"),
			  'sms_jquery_sheep_fmsg' => lang("sms_jquery_sheep_fmsg"),
			  'sms_error_config_site_title' => lang("sms_error_config_site_title"),
			  'sms_error_config_email' => lang("sms_error_config_email"),
			  'sms_error_config_password' => lang("sms_error_config_password"),
			  'sms_accounter_received_pay' => lang("sms_accounter_received_pay"),
                          'sms_accounter_this_message1' => lang("sms_accounter_this_message1"),
                          'sms_accounter_cost' => lang("sms_accounter_cost"),
                          'sms_accounter_new_payment' => lang("sms_accounter_new_payment"),
                          'sms_accounter_this_message2' => lang("sms_accounter_this_message2"),
                          'sms_error_add_class_id' => lang("sms_error_add_class_id")
	  );
	  
	  return $lang;
  }
  /**
   * @package:SMS
   * @image Dir::getImgDir().
   * @Author:Techno Services
   */
  function getImgDir(){
	  $ci = getInstance();
	  return $ci->config->item('img_dir');  
  }
  /**
   * @package:SMS
   * @image Dir::getAjaxLoader().
   * @Author:Techno Services
   */
  function getAjaxLoader(){
	  $ci = getInstance();
	  return $ci->config->item('img_dir').'ajax-loader.gif';  
  }
    /**
   * @package:SMS
   * @image Dir::getDefaultLoader().
   * @Author:Techno Services
   */
  function getDefaultLoader(){
	  $ci = getInstance();
	  return $ci->config->item('img_loader_dir').'default.gif';  
  }
  /**
   * @package:SMS
   * @image Dir::getSoundMP3().
   * @Author:Techno Services
   */
  function getSoundMP3(){
	  $ci = getInstance();
	  return $ci->config->item('img_dir').'ping.mp3';  
  }
  /**
   * @package:SMS
   * @image Dir::getSoundMP3().
   * @Author:Techno Services
   */
  function getSoundOgg(){
	  $ci = getInstance();
	  return $ci->config->item('img_dir').'ping.ogg';  
  }
  /**
   * @package:SMS
   * @image Dir::getAssetsDir().
   * @Author:Techno Services
   */
  function getAssetsDir(){
	  $ci = getInstance();
	  return $ci->config->item('assets_dir');  
  }
  
  /**
   * @package:SMS
   * @image Dir::getLogoDir().
   * @Author:Techno Services
   */
  function getLogoDir(){
	  $ci = getInstance();
	  return $ci->config->item('logo_dir');  
  }
  /**
   * @package:SMS
   * @helper::setRules()
   * @access:private
   * @params:$config
   * @Author:Techno Services
   * @return
   */
  function setRules($config) {
	 
	 $ci = getInstance();
	 return $ci->form_validation->set_rules($config);
  }
  /**
   * @package:SMS
   * @helper::setCookies()
   * @Author:Techno Services
   */
  function setCookies($cookie) {
	$ci = getInstance();
	$ci->input->set_cookie($cookie);
  }
   /**
	* @package:SMS
	* @helper::getCookie()
	* @Author:Techno Services
	* @return:cookie
	*/
  function getCookie($name) {
   $ci = getInstance();
	return ($ci->input->cookie($name)) ? $ci->input->cookie($name) : 0;
  }
  /**
	* @package:SMS
	* @helper::getCurrentPage()
	* @Author:Techno Services
	* @return:cookie
	*/
  function getCurrentPage(){
	 $ci = getInstance();
	 return $ci->uri->segment(1);  
  }
  /**
	* @package:SMS
	* @helper::getUserInfos()
	* @Author:Techno Services
	* @return:userinfos
	*/
  function getUserInfos($token){
	  $ci = getInstance();
	  return $ci->auth_model->getUsersInfos($token);  
  }
  /**
	* @package:SMS
	* @helper::getFullName()
	* @Author:Techno Services
	* @return:userinfos
	*/
  function getFullName(){
	  
	  $userinfos = getUserInfos(getSession('token')); 
	  return $userinfos['firstname'].' '.$userinfos['lastname'];
  }
  /**
   * @package:SMS
   * @MyHelper::getIdByUsername().
   * @Author:Techno Services
   */
  function getIdByUsername($username){
	$ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	 
	 return $sql['ID'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getIdByUsername().
   * @Author:Techno Services
   */
  function getUsernameById($id){
	$ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('ID' => $id), 's');
	 
	 return $sql['username'];  
  }
  /**
   * @Admin_model::setSession()
   * @access:private
   * @Author:Techno Services
   * @params:$data
   */
   function setSession($data){
	 $ci = getInstance();
	 $ci->session->set_userdata($data);   
   }
  /**
   * @package:SMS
   * @helper::getSession().
   * @Author:Techno Services
   */
   function getSession($session = NULL){
	   $ci = getInstance();
	   $status_ = $ci->session->userdata("token");
	   
	   if($session) $session = $ci->session->userdata($session);
	   else $session = $ci->session->all_userdata();

	  return 
	    ($status_ && $session) ? $session : 0;	   
   }
  /**
   * @package:SMS
   * @helper::getOptions().
   * @Author:Techno Services
   */
   function getOptions($option){
	   $ci = getInstance();  
	   $sql_opt = $ci->common_model->getRecords($ci->common_model->_optionTable,array('option_name' => $option), 's');
	   
	   return (isset($sql_opt['option_value'])) ? $sql_opt['option_value'] : '';   
   }

  /**
   * @package:SMS
   * @helper::getLogo().
   * @Author:Techno Services
   */
   function getLogo(){
	  $ci = getInstance();  
	  $sql_logo = $ci->common_model->getRecords($ci->common_model->_optionTable,array('option_name' => 'site_logo'), 's');
	   
	   return $sql_logo['option_value'];  
   }
  /**
   * @package:SMS
   * @helper::sendingEmail().
   * @Author:Techno Services
   */
   function sendingEmail($email_data){
	   //print_r($email_data);
	   
	    $ci = getInstance();  
		$mailer = array(
                  'name' => $email_data['from_name'],
				  'from' => $email_data['from'],
				  'to' => $email_data['to'],
				  'cc' => $email_data['cc'],
				  'bcc' => $email_data['bcc'],
				  'subject' => $email_data['subject'],
				  'body' => $email_data['message'],		
		);

		require($ci->config->item('mailer_dir'));

		$mailer = new mailer($mailer);
		
		/*if(isset($email_data['attach'])){
		   foreach ($email_data['attach'] AS $lists){
			  $mailer->create_attachment_part($lists);
		   }
		}*/ 
		
		$isMalSend = $mailer->process_mail();
		
        return ($isMalSend) ? 1 : $isMalSend;

	 }
  /**
   * @package:SMS
   * @helper::alertnativeEmail().
   * @Author:Techno Services
   */
	 function alertnativeEmail($email_data){
	    $headers = '';
		$headers .= 'MIME-Version: 1.0'."\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
		$headers .=  "From: ".$email_data['from_name']." <".$email_data['from'].">";
		  
		return $isMalSend = mail($email_data['to'],$email_data['subject'], $email_data['message'], $headers); 
	 }
	 
  /**
   * @package:SMS
   * @helper::getTitle().
   * @Author:Techno Services
   */
   function getTitle(){
	   
	   $cur = setFirstLetterCapital(getCurrentPage());
	  return 
	  getOptions('site_title')?getOptions('site_title').'-'.$cur:getOptions('site_title').'-'.$cur; 
   }
  /**
   * @package:SMS
   * @helper::smsAuth().
   * @Author:Techno Services
   */
   function smsAuth(){
	  redirect(base_url().'auth');   
   }
   /**
   * @package:SMS
   * @helper::smsAuth().
   * @Author:Techno Services
   */
   function smsAdmin(){
	  redirect(base_url().'admin');   
   }
  /**
   * @package:SMS
   * @helper::whoIs().
   * @Author:Techno Services
   */
   function whoIs(){
	   
	  $page = 'dashboard';
	   if(isParent()){
		 $page = 'parents/parents-module';  
	   }
	   elseif(isStudent()){
		$page = 'students/students-module';   
	   }
	   elseif(isTeacher()){
		  $page = 'teachers/teacher-module';    
	   }
	   
	   return $page;
   }
  /**
   * @package:SMS
   * @helper::getStudentBasicInfosById().
   * @Author:Techno Services
   */
   function getStudentBasicInfosById($stdId){
	  $ci = getInstance();    
	  return $ci->common_model->getRecords($ci->common_model->_studentsTable, array('ID' => $stdId), 's');    
   }
  /**
   * @package:SMS
   * @helper::getStudentIdByParentEmail().
   * @Author:Techno Services
   */
   function getStudentIdByParentEmail($email){
	  $ci = getInstance();    
	  $sql = $ci->common_model->getRecords($ci->common_model->_studentsTable, array('parent_email' => $email), 's'); 
	  
	  return $sql['ID'];   
   }
   /**
* @package:SMS
* @Generate username::generateUsername().
* @Author:Techno Services
*/
function generateUsername($original) {
       $xname = explode('A/L', $original);
       $xname2 = explode('A/P', $xname[0]);
       $xname3 = explode('BIN', $xname2[0]);
       $xname4 = explode('@', $xname3[0]);
       $uname = str_replace(' ', '', $xname4[0]);
       $uname = str_replace(',', '', $uname);
       $uname = str_replace('.', '', $uname);
       $uname = str_replace('-', '', $uname);
       $uname = str_replace('`', '', $uname);
       $uname = str_replace('(', '', $uname);
       $uname = str_replace(')', '', $uname);
       $uname = strtolower(str_replace('\'', '', $uname));
       $uname = strtolower(str_replace('/', '', $uname));
       $uname = substr($uname,0,12);
       $passno_strip = substr(getToken(4), 0, 2);
       $ci =& get_instance();
       $ci->db->select('username');
       $ci->db->from($ci->common_model->_usersTable);
       $ci->db->where("username LIKE '$uname'");
       $check = $ci->db->count_all_results();
      if ($check > 0) {
         $uname = substr($uname,0,10);
        $uname .= $passno_strip;
      }
       $uname = strtolower($uname); //turn all lowercase
       return $uname;
    }
   /**
   * @package:SMS
   * @helper::getStudentBasicInfosById().
   * @Author:Techno Services
   */
   function getFileContents($path){
	  $ci = getInstance();
	  $ci->load->helper('file');
	  return read_file($path);    
   }
  /**
   * @package:SMS
   * @helper::isAjaxCall().
   * @Author:Techno Services
   */
   function isAjaxCall(){
	  $ci = getInstance();
	  return $ci->input->is_ajax_request() ? 1 : 0; 
   }
  /**
   * @package:SMS
   * @helper::getEmpEducation().
   * @Author:Techno Services
   */
   function getEmpEducation($emp_id){
	   $ci = getInstance();
	   
	   return $ci->common_model->getRecords($ci->common_model->_empEducationTable,array('employee_id' => $emp_id), 'all');   
   }
   /**
   * @package:SMS
   * @helper::getEmpExperience().
   * @Author:Techno Services
   */
   function getEmpExperience($emp_id){
	   $ci = getInstance();
	   
	   return $ci->common_model->getRecords($ci->common_model->_empJobExperienceTable,array('employee_id' => $emp_id), 'all');   
   }
   /**
   * @package:SMS
   * @helper::getEmpPhoto().
   * @Author:Techno Services
   */
   function getEmpPhoto($emp_id){
	   $ci = getInstance();
	   
	   return $ci->common_model->getRecords($ci->common_model->_empPicturesTable,array('emp_id' => $emp_id), 's');   
   }
  /**
   * @package:SMS
   * @helper::getAdminDesignation().
   * @Author:Techno Services
   */
   function getAdminDesignation($stat){
	   
	   $des = '';
	   switch($stat){
		  case 1: $des = "Moderators";break; 
		  case 3: $des = "Staff";break;   
	   }
	   
	   return $des;
   }
  /**
   * @package:SMS
   * @helper::getAdminDesignation().
   * @Author:Techno Services
   */ 
   function isUserAllowToAcessModule($module){
	  
	  $ci = getInstance();
	  $where = array('config_categories' => $module);
	  $config = $ci->common_model->getRecords($ci->common_model->_gradebookTable,$where, 's');  
	  $config_permission = $config['config_permission'];
	  $priority = getExplode(',',$config_permission['config_permission']);
	  return (in_array(getPriority(), $priority) || getPriority() == 1) ? 1 : 0;  
   }
  /**
   * @package:SMS
   * @helper::getMarksheetLogo().
   * @Author:Techno Services
   */ 
   function getMarksheetLogo(){
	  $ci = getInstance();
	  return (getOptions('marksheet_logo')) ?
	   $ci->config->item('marksheet_logo_dir').getOptions('marksheet_logo') : base_url().getAssetsDir()."img/gsa.jpg";
   }
  /**
   * @package:SMS
   * @helper::countStudentAttendClass().
   * @Author:Techno Services
   */ 
   function countStudentAttendClass($student_id){
	  $ci = getInstance();
	  $where = array('student_id' => $student_id, 'category' => 1);
	  return $ci->common_model->getNumRows($ci->common_model->_attendancesTable,$where);    
   }
  /**
   * @package:SMS
   * @helper::countStudentMissedClass().
   * @Author:Techno Services
   */ 
   function countStudentMissedClass($student_id){
	  $ci = getInstance();
	  $where = array('student_id' => $student_id, 'category' => 0);
	  return $ci->common_model->getNumRows($ci->common_model->_attendancesTable,$where);  
   }
  /**
   * @package:SMS
   * @helper::countStudentTotalClass().
   * @Author:Techno Services
   */ 
   function countStudentTotalClass($student_id){
	  $ci = getInstance();
	  $where = array('student_id' => $student_id);
	  return $ci->common_model->getNumRows($ci->common_model->_attendancesTable,$where); 
   }
  /**
   * @package:SMS
   * @helper::getAlertPicDir().
   * @Author:Techno Services
   */
   function getAlertPicDir(){
	  $ci = getInstance();
	  return $ci->config->item('alert_pic_dir'); 
   }
   /**
   * @package:SMS
   * @helper::getAdminDir().
   * @Author:Techno Services
   */
   function getAdminDir(){
	  $ci = getInstance();
	  return $ci->config->item('admin_dir'); 
   }
    /**
   * @package:SMS
   * @helper::getCssDir().
   * @Author:Techno Services
   */
   function getCssDir(){
	  $ci = getInstance();
	  return $ci->config->item('css_dir'); 
   }
    /**
   * @package:SMS
   * @helper::getJsDir().
   * @Author:Techno Services
   */
   function getJsDir(){
	  $ci = getInstance();
	  return $ci->config->item('js_dir'); 
   }
    /**
   * @package:SMS
   * @helper::getGalleryDir().
   * @Author:Techno Services
   */ 
   function getGalleryDir(){
	  $ci = getInstance();
	  return $ci->config->item('gallery_pic_dir');
   }
  /**
   * @package:SMS
   * @helper::getStudentIdByEmail().
   * @Author:Techno Services
   */
   function getStudentIdByEmail($email){
	 $ci = getInstance();
	 $sql = $ci->common_model->getRecords($ci->common_model->_studentsTable,array('student_email' => $email), 's');  
	 
	 return $sql['ID'];
   }
  /**
   * @package:SMS
   * @helper::getClassByStudentId().
   * @Author:Techno Services
   */
   function getClassByStudentId($students_id, $custom_stdid = ''){
	 $ci = getInstance();
	 if($custom_stdid) $where = array('student_id' => $custom_stdid);
	 else $where = array('ID' => $students_id);
	 
	 $sql = $ci->common_model->getRecords($ci->common_model->_studentsTable,$where, 's'); 
	 
	 return $sql['student_classid'];   
   }
  /**
   * @package:SMS
   * @helper::getMarksheetLogo().
   * @Author:Techno Services
   */ 
   function getEmployeeDir(){
	  $ci = getInstance();
	  return $ci->config->item('employee_pic_dir');
   }
   
  /**
   * @package:SMS
   * @helper::getCourseId().
   * @Author:Techno Services
   */
   function getCourseId($id){
	  $ci = getInstance(); 
	  $sql = $ci->common_model->getRecords($ci->common_model->_courseTable,array('ID' => $id), 's');
	  return $sql['course_id'];  
   }
  /**
   * @package:SMS
   * @helper::getSemesters().
   * @Author:Techno Services
   */ 
   function getSemesters($options = array()){
	  
	  $select = '<select name="'.$options['name'].'" id="'.$options['id'].'" class="'.$options['class'].'"
	              data-rel="">';
	  if(isset($options['default'])) $select .= '<option value="">'.$options['default'].'</option>';
	  
	  for($n = 1; $n<=8 ; $n++){
		  $select .= '<option value="'.$n.'">'.$n.'</option>';
	  }
	  
	  $select .= '</select>';
	  
	  return $select;
   }
  /**
   * @package:SMS
   * @helper::getParentAuthNotifyHtml().
   * @Author:Techno Services
   */
   function getParentAuthNotifyHtml($username, $password){
	  
	  $html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head><title>Welcome to getOptions("site_short") !</title></head>
		<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td width="5%"></td>
		<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
		<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;"
		>Welcome to '. getOptions("site_short").' - '.getOptions("site_title").'!</h2>
		Thanks for registered your son in  '.getOptions("site_short").'. 
		We listed your sign in details below, make sure you keep them safe.<br />
		To Access the system, please found your system authentication bellow:<br />
		<br />
		 Your username: '.$username.'.<br />
		 Your password: '.$password.'.<br />  
		<br />
		<br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.base_url().'" style="color: #3366cc;">
		Access the '. getOptions("site_short").' System...</a></b></big><br />
		<br />
		<br />
		Have fun!<br />
		The '.getOptions("site_short").' Team
		</td>
		</tr>
		</table>
		</div>
		</body>
		</html>';
		
		return $html;   
   }
   
  /**
   * @package:SMS
   * @helper::getStudentAuthNotifyHtml().
   * @Author:Techno Services
   */
   function getStudentAuthNotifyHtml($username, $password){
	  
	  $html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head><title>Welcome to getOptions("site_short") !</title></head>
		<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td width="5%"></td>
		<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
		<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;"
		>Welcome to '. getOptions("site_short").' - '.getOptions("site_title").'!</h2>
		Thanks for  join  '.getOptions("site_short").'. 
		We listed your sign in details below, make sure you keep them safe.<br />
		To Access the system, please found your system authentication bellow:<br />
		<br />
		 Your username: '.$username.'.<br />
		 Your password: '.$password.'.<br />  
		<br />
		<br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.base_url().'" style="color: #3366cc;">
		Access the '. getOptions("site_short").' System...</a></b></big><br />
		<br />
		<br />
		Have fun!<br />
		The '.getOptions("site_short").' Team
		</td>
		</tr>
		</table>
		</div>
		</body>
		</html>';
		
		return $html;   
   }
  /**
   * @package:SMS
   * @helper::getTeacherAuthNotifyHtml().
   * @Author:Techno Services
   */
   function getTeacherAuthNotifyHtml($username, $password){
	  
	  $html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head><title>Welcome to getOptions("site_short") !</title></head>
		<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td width="5%"></td>
		<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
		<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;"
		>Welcome to '. getOptions("site_short").' - '.getOptions("site_title").'!</h2>
		Thanks for  join  '.getOptions("site_short").'. 
		We listed your sign in details below, make sure you keep them safe.<br />
		To Access the system, please found your system authentication bellow:<br />
		<br />
		 Your username: '.$username.'.<br />
		 Your password: '.$password.'.<br />  
		<br />
		<br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.base_url().'" style="color: #3366cc;">
		Access the '. getOptions("site_short").' System...</a></b></big><br />
		<br />
		<br />
		Have fun!<br />
		The '.getOptions("site_short").' Team
		</td>
		</tr>
		</table>
		</div>
		</body>
		</html>';
		
		return $html;   
   }
   
  /**
   * @package:SMS
   * @helper::getAdminAuthNotifyHtml().
   * @Author:Techno Services
   */
   function getAdminAuthNotifyHtml($username, $password){
	  
	  $html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head><title>Welcome to getOptions("site_short") !</title></head>
		<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td width="5%"></td>
		<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
		<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;"
		>Welcome to '. getOptions("site_short").' - '.getOptions("site_title").'!</h2>
		Thanks for  join  '.getOptions("site_short").'. 
		We listed your sign in details below, make sure you keep them safe.<br />
		To Access the system, please found your system authentication bellow:<br />
		<br />
		 Your username: '.$username.'.<br />
		 Your password: '.$password.'.<br />  
		<br />
		<br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.base_url().'" style="color: #3366cc;">
		Access the '. getOptions("site_short").' System...</a></b></big><br />
		<br />
		<br />
		Have fun!<br />
		The '.getOptions("site_short").' Team
		</td>
		</tr>
		</table>
		</div>
		</body>
		</html>';
		
		return $html;   
   }
   
  /**
   * @package:SMS
   * @helper::getAssignmentNotifyHtml().
   * @Author:Techno Services
   */
   function getAssignmentNotifyHtml($options){
	  
	  $html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head><title>Welcome to getOptions("site_short") !</title></head>
		<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td width="5%"></td>
		<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
		<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;"
		>Welcome to '. getOptions("site_short").' - '.getOptions("site_title").'!</h2>
		Thanks to stay with '.getOptions("site_short").'. 
		You have new Assignment.<br />
		<br />
		 Assignment text: '.$options['text'].'.<br />
		 Assignment file: '.$options['file'].'.<br /> 
		 Assignment Deadline: '.$options['deadline'].'.<br />  
		<br />
		<br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.$options['link'].'" style="color: #3366cc;">
		Download the file from '. getOptions("site_short").' System...</a></b></big><br />
		<br />
		<br />
		Have fun!<br />
		The '.getOptions("site_short").' Team
		</td>
		</tr>
		</table>
		</div>
		</body>
		</html>';
		
		return $html;   
   }
   
     /**
   * @package:SMS
   * @helper::getAuthNotifyHtml().
   * @Author:Techno Services
   */
   function getAuthNotifyHtml($username, $password, $url){
	  
	  $html = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head><title>Welcome to getOptions("site_short") !</title></head>
		<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td width="5%"></td>
		<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
		<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;"
		>Welcome to '. getOptions("site_short").' - '.getOptions("site_title").'!</h2>
		Thanks for  join  '.getOptions("site_short").'. 
		We listed your sign in details below, make sure you keep them safe.<br />
		To Access the system, please found your system authentication bellow:<br />
		<br />
		 Your username: '.$username.'.<br />
		 Your password: '.$password.'.<br />  
		<br />
		<br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.$url.'" style="color: #3366cc;">
		Access the '. getOptions("site_short").' System...</a></b></big><br />
		<br />
		<br />
		Have fun!<br />
		The '.getOptions("site_short").' Team
		</td>
		</tr>
		</table>
		</div>
		</body>
		</html>';
		
		return $html;   
   }
    /**
   * @package:SMS
   * @MyHelper::emailActivationTemplate().
   * @Author:Techno Services
   */
 function emailActivationTemplate($data){
	 
	$temp = '
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head><title>'.$data['firstname'].' '.$data['lastname'].', welcome to Learnconnect!</title></head>
		<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td width="5%">To verify your email address, please follow this link:</td>
		<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
		<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">'.$data['firstname'].' '.$data['lastname'].', welcome to Learnconnect!</h2><br /><br />
		<br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'. base_url().'activation/'.$data['key'].'" style="color: #3366cc;">Finish your registration...</a></b></big><br />
		<br />Link doesn\'t work? Copy the following link to your browser address bar:<br />
		<nobr><a href="'.base_url().'index.php/activation/'.$data['key'].'" style="color: #3366cc;">'.base_url().'activation/'.$data['key'].'</a></nobr><br />
		<br /><ol><li>Set up your profile:</li><br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'. base_url().$data['username'].'/profile" style="color: #3366cc;">'. base_url().$data['username'].'/profile</a></b></big><br />
		<br /><li>Invite your friends to join you:</li><br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.base_url().'timeline" style="color: #3366cc;">
		'.base_url().'timeline</a></b></big><br />
		<br /><li>Add Content:</li><br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.base_url().'timeline" style="color: #3366cc;">'.base_url().'timeline</a></b></big>
		<br />
		<br /><li>Tell your Twitter followers:</li><br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="#" style="color: #3366cc;">
		http://twitter.com/home?status=Just+joined+http%3A%2F%2Flearnconnect.com%2F</a></b></big>
		</ol>
		<br />'.'Your email address: '. $data['email'].'<br />
		<br />
		<br />Have fun!<br />The Learnconnect Team</td>
		</tr>
		</table>
		</div>
		</body>
		</html>';
		
		return $temp;

 }
  /**
   * @package:SMS
   * @MyHelper::emailSetupProfileTemplate()
   * @Author:Techno Services
   */
 function emailSetupProfileTemplate($data){
	 
	$profile = '
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head><title>'.$data['firstname'].' '.$data['lastname'].', welcome to Learnconnect!</title></head>
		<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
		<h3 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">'.$data['firstname'].' '.$data['lastname'].', welcome to Learnconnect! 
		 There are 4 simple things you can do to get started:</h3>
		<br /><ol><li>Set up your profile:</li><br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'. base_url().$data['username'].'/profile" style="color: #3366cc;">'. base_url().$data['username'].'/profile</a></b></big><br />
		<br /><li>Invite your friends to join you:</li><br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.base_url().'timeline/invitation/new" style="color: #3366cc;">
		'.base_url().'timeline/invitation/new</a></b></big><br />
		<br /><li>Add Content:</li><br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.base_url().'timeline" style="color: #3366cc;">'.base_url().'timeline</a></b></big>
		<br />
		<br /><li>Tell your Twitter followers:</li><br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="#" style="color: #3366cc;">
		http://twitter.com/home?status=Just+joined+http%3A%2F%2FLearnconnect.com%2F</a></b></big>
		</ol>
		<br />
		
		<br />
		<br />Have fun!<br />The Learnconnect Team</td>
		</tr>
		</table>
		</div>
		</body>
		</html>';
		
		return $profile;

 }
  /**
   * @package:SMS
   * @helper::getClassNameById().
   * @Author:Techno Services
   */
   function getClassNameById($id){
	   $ci = getInstance();
	   
	   $sql = $ci->common_model->getRecords($ci->common_model->_classTable,array('class_id' => $id), 's');
	   return $sql['class_name'];   
   }
  /**
   * @package:SMS
   * @helper::getPaymentType().
   * @Author:Techno Services
   */
   function getPaymentType($stdid){
	   $ci = getInstance();
	   $class_id = getClassByStudentId('',$stdid);
	   $sql = $ci->common_model->getRecords($ci->common_model->_classTable,array('class_id' => $class_id), 's');
	   
	   return $sql['payment_type'];
   }
  /**
   * @package:SMS
   * @helper::getClassAmountByStudentId().
   * @Author:Techno Services
   */
   function getClassAmountByStudentId($stdid){
	   $ci = getInstance();
	   $class_id = getClassByStudentId('',$stdid);
	   $sql = $ci->common_model->getRecords($ci->common_model->_classTable,array('class_id' => $class_id), 's');

	   return $sql['class_fee'];
   }
   
  /**
   * @package:SMS
   * @image Dir::getPayPalImg().
   * @Author:Techno Services
   */
  function getPayPalImg(){
	  $ci = getInstance();
	  return base_url().$ci->config->item('img_dir').'PayPal_big.png';  
  }
  /**
   * @package:SMS
   * @image Dir::getAccounterTotalPaid().
   * @Author:Techno Services
   */
  function getAccounterTotalPaid(){
	  $ci = getInstance();
	  return getSum($ci->common_model->_paymentTable, '', 'payment_amount');  
  }
  /**
   * @package:SMS
   * @image Dir::getSum().
   * @Author:Techno Services
   */
  function getSum($table, $where = '', $column){
	  
	 $ci = getInstance();
	 $ci->db->select_sum($column);
     if(!$where)$query = $ci->db->get($table);
	 else $query = $ci->db->get_where($table, $where);  
	 
	 $query =  $query->row_array();
	 
	 return $query[$column];
  }
  /**
   * @package:SMS
   * @image Dir::getCurrencySymbol().
   * @Author:Techno Services
   */
  function getCurrencySymbol($currency){
	  switch($currency){
		 case 'USD': $code  = '$'; break; 
		 case 'EURO': $code = '€';
	  }
	  
	  return $code;
  }
/**
 * @package:SMS
 * @MyHelper Dir::isActivateKeyValid().
 * @Author:Techno Services
 */
 function isActivateKeyValid($key){
	  $ci = &get_instance();
	  return $ci->common_model->isRecordsExists($ci->common_model->_usersTable , array('user_activation_key' => $key));
 }
 
 /**
   * @package:SMS
   * @helper::getCountry().
   * @Author:Techno Services
   */
  function getCountry(){
	  
	  $ci = getInstance();
	  $rows = $ci->common_model->getRecords($ci->common_model->_countryTable, '', 'all');
	  
	  return $rows;
  }
  /**
   * @package:SMS
   * @helper::getMajorFieldOfStudy().
   * @Author:Techno Services
   */
  function getMajorFieldOfStudy(){
	  
	  $ci = getInstance();
	  $rows = $ci->common_model->getRecords($ci->common_model->_fieldOfStudyTable, '', 'all');
	  
	  return $rows;
  }
  /**
   * @package:SMS
   * @helper::getSchoolNameIdById().
   * @Author:Techno Services
   */
   function getSchoolNameIdById($id){
	  $ci = getInstance();    
	  $sql = $ci->common_model->getRecords($ci->common_model->_schoolsTable, array('school_ID' => $id), 's'); 
	  
	  return $sql['school_name'];   
   }
   /**
   * @package:SMS
   * @helper::isDefaultSchool().
   * @Author:Techno Services
   */
   function isDefaultSchool(){ 
     $ci = getInstance(); 		   
	 return ($ci->common_model->isRecordsExists($ci->common_model->_schoolsTable,array('school_default' => 1))) ? 1 : 0;
   }
  /**
   * @package:SMS
   * @helper::getDefaultSchoolId().
   * @Author:Techno Services
   */
   function getDefaultSchoolId(){ 
     $ci = getInstance(); 		   
	 $rows = $ci->common_model->getRecords($ci->common_model->_schoolsTable,array('school_default' => 1), 's');
	 return $rows['school_ID'];
   }
   /**
     * Encrypting password
     * @param password
     * returns salt and encrypted password
     */
   function hashSSHA($password) {

        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
        $hash = array("salt" => $salt, "encrypted" => $encrypted);
        return $hash;
    }
  /**
   * @package:SMS
   * @helper::getClass().
   * @Author:Techno Services
   */
   function getClass(){
	   $ci = getInstance(); 
	   $where = array('school_ID' => getSession('schoolid')); 
	   $rows = $ci->common_model->getRecords($ci->common_model->_classTable,$where, 'all');
	   
	   return $rows;   
   }
   
   /**
   * @package:SMS
   * @image Dir::getProfileImageDir().
   * @Author:Techno Services
   */
  function getProfileImageDir(){
	  $ci = getInstance();
	  return $ci->config->item('profile_pic_dir');  
  }
  /**
   * @package:SMS
   * @MyHelper::getProfileImageByToken().
   * @Author:Techno Services
   */
  function getProfileImageByToken($token){
	 $ci = &get_instance();
	  
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $token), 's'); 
	 return $sql['profile_photo'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getProfileImageByUsername().
   * @Author:Techno Services
   */
  function getProfileImageByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	  
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $sql['ID']), 's'); 
	 return $sql['profile_photo'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getCoverImageByUsername().
   * @Author:Techno Services
   */
  function getCoverImageByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	  
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $sql['ID']), 's'); 
	 return $sql['cover_photo'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getCoverImageByToken().
   * @Author:Techno Services
   */
  function getCoverImageByToken($token){
	 $ci = &get_instance();
	  
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $token), 's'); 
	 return $sql['cover_photo'];  
  }
  
  
   
   
      /**
   * @package:SMS
   * @MyHelper::getProfilePhoto().
   * @Author:Techno Services
   */
  function getProfilePhoto($user_id = 0){
  
	 $ci = &get_instance();
	 if($user_id == 0) $user_id = getSession('token');
	 else $user_id = $user_id;
	 
	 if(current_url() != base_url() && $ci->common_model->getNumRows($ci->common_model->_usersTable, array('username' => $ci->uri->segment(1)))){

	$photo = getProfileImageByUsername($ci->uri->segment(1));    

	} else $photo = getProfileImageByToken($user_id);
	
 
	 return $photo ?getProfileImageDir().$photo:getProfileDefault();  
  }
   
   /**
   * @package:SMS
   * @MyHelper::getProfilePhoto().
   * @Author:Techno Services
   */
  function getProfilePhotoCommrnt(){
	 $ci = &get_instance();
	$photo = getProfileImageByToken(getSession('token'));

	 return $photo ?getProfileImageDir().$photo:getProfileDefault();  
  }
    /**
   * @package:SMS
   * @MyHelper::getPeopleYouMayKnow().
   * @Author:Techno Services
   */
   function getPeopleYouMayKnow(){
     $ci = &get_instance();
	 return $ci->friend_model->getPeopleYouMayKnow();
	
   }
    /**
   * @package:SMS
   * @MyHelper::getFacebookFriends().
   * @Author:Techno Services
   */
   function getFacebookFriends(){
     $ci = &get_instance();
	 //return $ci->facebook_model->getFriends();
	
   }
    /**
   * @package:SMS
   * @MyHelper::getPeopleOfYourField().
   * @Author:Techno Services
   */
   function getPeopleOfYourField(){
     $ci = &get_instance();
	 return $ci->posts_model->getPeopleOfYourField();
	
   }
    /**
   * @package:SMS
   * @image Dir::getCoverImageDir().
   * @Author:Techno Services
   */
  function getCoverImageDir(){
	  $ci = getInstance();
	  return $ci->config->item('cover_pic_dir');  
  }
  /**
   * @package:SMS
   * @image Dir::getPostsImageDir().
   * @Author:Techno Services
   */
  function getPostsImageDir(){
	  $ci = getInstance();
	  return $ci->config->item('posts_pic_dir');  
  }
   /**
   * @package:SMS
   * @image Dir::getPostsFileDir().
   * @Author:Techno Services
   */
  function getPostsFileDir(){
	  $ci = getInstance();
	  return $ci->config->item('posts_file_dir');  
  }
  /**
   * @package:SMS
   * @image Dir::getPostsVideoDir().
   * @Author:Techno Services
   */
  function getPostsVideoDir(){
	  $ci = getInstance();
	  return $ci->config->item('posts_video_dir');  
  }
  /**
   * @package:SMS
   * @image Dir::getStudentImageDir().
   * @Author:Techno Services
   */
  function getStudentImageDir(){
	  $ci = getInstance();
	  return $ci->config->item('stduents_pic_dir');  
  }
    /**
   * @package:SMS
   * @image Dir::getLogoImageDir().
   * @Author:Techno Services
   */
  function getLogoImageDir(){
	  $ci = getInstance();
	  return $ci->config->item('logo_pic_dir');  
  }
  /**
   * @package:SMS
   * @MyHelper::getCoverPhoto().
   * @Author:Techno Services
   */
  function getCoverPhoto(){
	 $ci = &get_instance();
	 if(current_url() != base_url()){ 
	$photo = getCoverImageByUsername(getUsernameByUrl());
	} 
	else $photo = getCoverImageByToken(getSession('token'));
	  
	 return $photo ?getCoverImageDir().$photo:getCoverDefault();  
  }
  /**
   * @package:SMS
   * @MyHelper::getCoverPhoto().
   * @Author:Techno Services
   */
   function getCoverDefault(){
	  $ci = &get_instance();
	  return $ci->config->item('cover_pic_dir').'cover-default1.png'; 
   }
   /**
   * @package:SMS
   * @MyHelper::getProfileDefault().
   * @Author:Techno Services
   */
   function getProfileDefault(){
	  $ci = &get_instance();
	  return $ci->config->item('profile_pic_dir').'profile1.jpg'; 
   }
   /**
   * @package:SMS
   * @MyHelper::getCoverPhoto().
   * @Author:Techno Services
   */
   function getDefaultLogo(){
	  $ci = &get_instance();
	  return $ci->config->item('logo_pic_dir').'default-logo.png'; 
   }
   /**
   * @package:SMS
   * @MyHelper::getLogoPhoto().
   * @Author:Techno Services
   */
  function getLogoPhoto(){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_schoolsTable ,
	 array('school_ID' => getSession('schoolid')), 's'); 
	 return $sql['logo_photo']?getLogoImageDir().$sql['logo_photo']:getDefaultLogo();  
  }
  /**
   * @package:SMS
   * @MyHelper::getYear().
   * @Author:Techno Services
   */
  function getYear(){
	 return getRange(1950, date('Y') - 3);  
  }
   /**
   * @package:SMS
   * @MyHelper::getSchools().
   * @Author:Techno Services
   */
  function getSchools(){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_schoolsTable ,
	 array('manager_ID' => getSession('token')), 'all'); 
	 return $sql;  
  }
  /**
   * @package:SMS
   * @MyHelper::getPrincipalById().
   * @Author:Techno Services
   */
  function getPrincipalById($id){
	  
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable ,
	 array('ID' => $id), 's'); 
	 
	 return $sql['firstname'].' '.$sql['lastname'];
  }
    /**
   * @package:SMS
   * @MyHelper::getTimeDifference().
   * @Author:Techno Services
   */
   function getTimeDifference($date){
	  if(empty($date)) {
		  return "No date provided";
	  }
	  
	  $periods         = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
	  $lengths         = array("60","60","24","7","4.35","12","10");
	  
	  $now             = time();
	  $unix_date         = strtotime($date);
	  
		 // check validity of date
	  if(empty($unix_date)) {  
		  return "";
	  }

	  if($now > $unix_date) {  
		  $difference     = $now - $unix_date;
		  $tense         = "ago";
		  
	  } else {
		  $difference     = $unix_date - $now;
		  $tense         = "from now";
	  }
	  
	  for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
		  $difference /= $lengths[$j];
	  }
	  
	  $difference = round($difference);
	  
	  if($difference != 1) {
		  $periods[$j].= "s";
	  }
	  
	  return ($difference==0) ? 'Just now' : "$difference $periods[$j] {$tense}";
  }
  /**
   * @package:SMS
   * @MyHelper::isUserIlkePosts().
   * @Author:Techno Services
   */
   function isUserLikePosts($postid){
       $ci = getInstance();
       $where = array('post_id' => $postid,'user_id' => getSession('token'));
       /*if($ci->common_model->isRecordsExists($ci->common_model->_likeTable,$where)){
          $res = 'Unlike&nbsp;';
       }
       else $res = 'Like&nbsp;';*/
	   $res = $ci->common_model->isRecordsExists($ci->common_model->_likeTable,$where);

       return ($res) ? '<span class="fa fa-thumbs-o-down"></span>':'<span class="fa fa-thumbs-o-up"></span>';
   }
   /**
   * @package:SMS
   * @MyHelper::getComments().
   * @Author:Techno Services
   */
   function getComments($post_id){
        $ci = getInstance();
        return $ci->posts_model->getComments($post_id);
   }
  /**
   * @package:SMS
   * @MyHelper::getCommentsByCid().
   * @Author:Techno Services
   */
   function getCommentsByCid($post_id){
        $ci = getInstance();
        return $ci->posts_model->getCommentsByCid($post_id);
   }
   /**
   * @package:SMS
   * @MyHelper::isUserLikeComments().
   * @Author:Techno Services
   */
   function isUserLikeComments($postid){
       $ci = getInstance();
       $where = array('post_id' => $postid,'user_id' => getSession('token'));
       if($ci->common_model->isRecordsExists($ci->common_model->_likeCommentsTable,$where)){
          $res = '<span class="fa fa-thumbs-o-down"></span>&nbsp;';
       }
       else $res = '<span class="fa fa-thumbs-o-up"></span>&nbsp;';

       return $res;
   }
   
      /**
   * @package:SMS
   * @MyHelper::countLikeComments().
   * @Author:Techno Services
   */
   function countLikeComments($postid){
       $ci = getInstance();
       $where = array('post_id' => $postid);
       $num = $ci->common_model->isRecordsExists($ci->common_model->_likeCommentsTable,$where);
	   

       return ($num > 0) ? $num : '';
   }
    /**
  * @package:SMS
  * @Generate username::getUsername().
  * @Author:Techno Services
  */
   function trim_text($input, $length, $ellipses = true, $strip_html = true, $post_id = '') {
		//strip tags, if desired
		if ($strip_html) {
			$input = strip_tags($input);
		}
	  
		//no need to trim, already shorter than trim length
		if (strlen($input) <= $length) {
			return $input;
		}
	  
		//find last space within length
		$last_space = strrpos(substr($input, 0, $length), ' ');
		$trimmed_text = substr($input, 0, $last_space);
	  
		//add ellipses (...)
		if ($ellipses) {
			$trimmed_text .= '...<div class="more_post_show_container">
			<a href="#" class="more_post_show" id="more_post_show_'.$post_id.'">More post</a></div>';
		}
	  
		return $trimmed_text;
	}
	/**
   * @package:SMS
   * @MyHelper::getFullnameByUsername().
   * @Author:Techno Services
   */
   function getFullnameByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	  
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $sql['ID']), 's'); 
	 return $sql['fullname'];
   }
   /**
   * @package:SMS
   * @MyHelper::getProfileNameByUsername().
   * @Author:Techno Services
   */
  function getProfileNameByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	  
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $sql['ID']), 's'); 
	 return $sql['fullname'];  
  }
   /**
   * @package:SMS
   * @MyHelper::getUsernameByUrl().
   * @Author:Techno Services
   */
   function getUsernameByUrl(){
	   $ci = &get_instance();
	   return ($ci->uri->segment(1)!= 'learncon')? $ci->uri->segment(1): 0;
   }
    /**
   * @package:SMS
   * @MyHelper::getUserInfoByUsername().
   * @Author:Techno Services
   */
   function getUserInfoByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	  
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $sql['ID']), 's'); 
	 return $sql;
   }
   /**
   * @package:SMS
   * @MyHelper::getUserEmailByUsername().
   * @Author:Techno Services
   */
   function getUserEmailByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
 
	 return $sql['user_email'];
   }
   /**
   * @package:SMS
   * @MyHelper::getUserIdByEmail().
   * @Author:Techno Services
   */
   function getUserIdByEmail($email){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('user_email' => $email), 's');
 
	 return $sql['ID'];
   }
   /**
   * @package:SMS
   * @MyHelper::getUserEmailByUsername().
   * @Author:Techno Services
   */
   function getUserEmailById($token){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('ID' => $token), 's');
 
	 return $sql['user_email'];
   }
   /**
   * @package:SMS
   * @MyHelper::getUserJoinedByUsername().
   * @Author:Techno Services
   */
   function getUserJoinedByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
 
	 return $sql['user_registered'];
   }
   /**
   * @package:SMS
   * @MyHelper::isVisitingProfile().
   * @Author:Techno Services
   */
   function isVisitingProfile(){
      $ci = &get_instance();
	 if(current_url() == base_url()){
             $username = getUsernameById(getSession('token'));
         }
         else $username = getUsernameByUrl();

         return $username;
   }
   /**
   * @package:LearnCon
   * @MyHelper::isMyFriend().
   * @Author:Techno Services
   */
   function isMyFriend($user_id){
      $ci = &get_instance();
      return $ci->friend_model->isMyFriend($user_id);
   }
   /**
   * @package:SMS
   * @MyHelper::countMyPhotos().
   * @Author:Techno Services
   */
  function countMyPhotos(){
	 $ci = &get_instance();

         if(current_url() == base_url()){
             $from_user_id = getSession('token');
         }
         else $from_user_id = getIdByUsername(getUsernameByUrl());
	 $where = array('from_user_id' => $from_user_id, 'post_type' => 'image');
	 return $ci->common_model->getNumRows($ci->common_model->_postsTable, $where); 
  }
  /**
   * @package:SMS
   * @MyHelper::getReportUserId().
   * @Author:Techno Services
   */
   function getReportUserId(){
	   $ci = &get_instance();
	   $user_id = getIdByUsername(getUsernameByUrl());
	   $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('ID' => $user_id), 's');
	   
	   return $sql['ID'];
	}
  /**
   * @package:SMS
   * @MyHelper::countMyFriends().
   * @Author:Techno Services
   */
  function countMyFriends(){
	 $ci = &get_instance();
	 if(current_url() == base_url()){
             $user_id = getSession('token');
         }
         else $user_id = getIdByUsername(getUsernameByUrl());
	 return $ci->friend_model->countMyFriends($user_id);
  }
  /**
   * @package:SMS
   * @MyHelper::countFriends().
   * @Author:Techno Services
   */
  function countFriends($user_id){
	 $ci = &get_instance();
	 
	 return $ci->friend_model->countMyFriends($user_id);
  }
  /**
   * @package:SMS
   * @image Dir::getCommentsImageDir().
   * @Author:Techno Services
   */
  function getCommentsImageDir(){
	  $ci = getInstance();
	  return $ci->config->item('comments_pic_dir');  
  }
  /**
   * @Helper::isMenuActive()
   * @Author:Techno Services
   * @params:$data
   */
   function isCenterLiMenuActive($menu){
       $ci = &get_instance();
       $seg = $ci->uri->segment(2);

       if(current_url() == base_url()){
           
               return 'active2';
       }
       else
         return ($seg == $menu) ? 'active2' : '';
   }
   /**
   * @Helper::isUpdateProfile()
   * @Author:Techno Services
   * @params:$data
   */
   function isUpdateProfile(){
       $ci = &get_instance();
	   $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('ID' => getSession('token')), 's');
	   $field_study_id = $sql['field_study_id'];
	   
	   return ($field_study_id != 0)? 1:0;
   }
   /**
   * @package:SMS
   * @MyHelper::getIdByUsername().
   * @Author:Techno Services
   */
  function getProfileImageById(){
	$ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('ID' => getSession('token')), 's');
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $sql['ID']), 's');
	 
	 return $sql['profile_photo'];  
  }
  /**
   * @package:SMS
   * @MyHelper::emailSetupProfileTemplate()
   * @Author:Techno Services
   */
 function emailQuestionTemplate($data){
	 
	$question = '
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head><title>'.$data['firstname'].' '.$data['lastname'].', welcome to Learnconnect!</title></head>
		<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
		<h3 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;"> Hello '.$data['firstname'].' '.$data['lastname'].', 
		 <br /></h3><p>A student in the same major with you needs your help to answer this question:</p>
		<br /><ul><li>'.$data['question'].'</li>
		<p>'.$data['file'].'</p><br />
		<li>Do you like this question?&nbsp;
		<a href="'. base_url().'like-question/'.$data['last_id'].'" style="color: #3366cc;">Yes</a>&nbsp;
		<a href="'. base_url().'like-question/'.$data['last_id'].'" style="color: #3366cc;">No</a></li><br />
		<br /><li>If you would like to answer this question, please follow this link below to the discussion board.</li><br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'.base_url().$data['username'].'/whiteboard" style="color: #3366cc;">
		'.base_url().$data['username'].'/whiteboard"</a></b></big><br />
		
		</ul>
		<br />
		
		<br />
		<br />Thank you!<br />Learnconnect automated whiteboard quick helper system.</td>
		</tr>
		</table>
		</div>
		</body>
		</html>';
		
		return $question;

 }
 /**
   * @package:SMS
   * @MyHelper::emailActivationTemplate().
   * @Author:Techno Services
   */
 function emailResetPassTemplate($data, $call_back = ''){
	 
	 if($call_back) $call_back = $call_back;
	 else $call_back = "admin-renew-pass";
	 
	$temp = '
		<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
		<html>
		<head>Welcome to Learnconnect</title></head>
		<body>
		<div style="max-width: 800px; margin: 0; padding: 30px 0;">
		<table width="80%" border="0" cellpadding="0" cellspacing="0">
		<tr>
		<td width="5%"></td>
		<td align="left" width="95%" style="font: 13px/18px Arial, Helvetica, sans-serif;">
		<h2 style="font: normal 20px/23px Arial, Helvetica, sans-serif; margin: 0; padding: 0 0 18px; color: black;">Welcome to Learnconnect</h2>To reset your password,please click the link below.<br /><br />
		<br />
		<big style="font: 16px/18px Arial, Helvetica, sans-serif;"><b><a href="'. base_url().$call_back.'/'.$data['key'].'" style="color: #3366cc;">Renew your password</a></b></big><br />
		<br /><br />
		<nobr><a href="'.base_url().$call_back.'/'.$data['key'].'" style="color: #3366cc;">'.base_url().$call_back.'/'.$data['key'].'</a></nobr><br />
		
		<br /><br />
		<br />
		<br />Have fun!<br />The Learnconnect Team</td>
		</tr>
		</table>
		</div>
		</body>
		</html>';
		
		return $temp;

 }
 /**
   * @package:SMS
   * @MyHelper::getPageByUsername().
   * @Author:Techno Services
   */
  function getPageByUsername(){
	  $ci = &get_instance();
	  return $ci->uri->segment(2);
  }
  /**
   * @package:SMS
   * @MyHelper::getTypes().
   * @Author:Techno Services
   */
   function getTypes($types){
   
      return ($types == 1)? 'Student': 'Alumni';
	  
   }
    /**
   * @package:SMS
   * @MyHelper::storesAlerts().
   * @Author:Techno Services
   */
   function storesAlerts($data){
   
     $ci = &get_instance();
     $records = array(
		             'post_id' => $data['postid'],
					 'from_id' => getSession('token'),
					 'to_id' => $data['to_id'],
					 'text' => $data['text'],
					 'status' => 1,
					 'type' => $data['post_type'],
					 'created' => getTime()
				 );
			
       $ci->common_model->insertRecords($ci->common_model->_alertsTable, $records);
   }
   /**
   * @package:SMS
   * @helper::getPrevilage().
   * @Author:Techno Services
   */
  function getPrevilage(){
	 $ci = getInstance();
	 return $ci->session->userdata("permission");  
  }
   /**
   * @package:SMS
   * @helper::isFriends().
   * @Author:Techno Services
   */
  function isFriends(){
	return (getPrevilage() == 1) ? 1 : 0; 
  }
   /**
   * @package:SMS
   * @helper::isPublic().
   * @Author:Techno Services
   */
  function isPublic(){
	return (getPrevilage() == 0) ? 1 : 0; 
  }
   /**
   * @package:SMS
   * @helper::isMyself().
   * @Author:Techno Services
   */
  function isMyself(){
	return (getPrevilage() == 2) ? 1 : 0; 
  }
  /**
   * @package:SMS
   * @MyHelper::getPermissionById().
   * @Author:Techno Services
   */
  function getPermissionById($user_id){
	$ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $user_id), 's');
	 
	 return ($sql['permission'] == 2) ? 1:0;  
  }
  /**
   * @package:SMS
   * @MyHelper::getPermissionByUsername().
   * @Author:Techno Services
   */
  function getPermissionByUsername($username){
	$ci = &get_instance();
	$sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	$sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $sql['ID']), 's');
	 
	 return ($sql['permission'] == 2) ? 1:0;  
  } 
   /**
   * @Auth_model::isUserOnline()
   * @access:public
   * @Author:Techno Services
   */
   function isUserOnline($userId){
	  $ci =& get_instance();
	  $where  = array('onl_id' => $userId);
      $num = $ci->common_model->getNumRows($ci->common_model->_userOnlineTable, $where);
	  
	  return ($num) ? 1 : 0; 
   }
   /**
   * @Auth_model::isUserOnline()
   * @access:public
   * @Author:Techno Services
   */
   function getMyMessages(){
	   $ci =& get_instance();
	 return $ci->messages_model->getMyMessages();   
	}
	  /**
   * @package:LearnCon
   * @helper::TotalUsers().
   * @Author:Techno Services
   */
   function TotalUsers(){
	  $ci = getInstance();
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_usersTable);
	  
	   $sql = $ci->db->get();

	  
	   return ($sql->num_rows > 0) ? count($sql->result()) : 0;   
   }
     /**
   * @package:LearnCon
   * @helper::CountPosts().
   * @Author:Techno Services
   */
   function CountPosts(){
	  $ci = getInstance();
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_postsTable);
	  
	   $sql = $ci->db->get();

	  
	   return ($sql->num_rows > 0) ? count($sql->result()) : 0;   
   }
     /**
   * @package:LearnCon
   * @helper::CountWhiteBoardPost().
   * @Author:Techno Services
   */
   function CountWhiteBoardPost(){
	  $ci = getInstance();
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_postsTable);
	  $ci->db->where('post_type','question');
	  
	   $sql = $ci->db->get();

	  
	   return ($sql->num_rows > 0) ? count($sql->result()) : 0;   
   }
     /**
   * @package:LearnCon
   * @helper::CountComment().
   * @Author:Techno Services
   */
   function CountComment(){
	  $ci = getInstance();
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_commentsTable);
	  
	   $sql = $ci->db->get();

	  
	   return ($sql->num_rows > 0) ? count($sql->result()) : 0;   
   }
     /**
   * @package:LearnCon
   * @helper::CountLikes().
   * @Author:Techno Services
   */
   function CountLikes(){
	  $ci = getInstance();
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_likeTable);
	  
	   $sql = $ci->db->get();

	  
	   return ($sql->num_rows > 0) ? count($sql->result()) : 0;   
   }
    /**
	* @Helper::getFriendPerminission()
	* @Author:Techno Services
	* @params:$priority
	* @return
	*/
	function getFriendPerminission($permission){
		
		$designation = '';
		switch($permission){
		      case 0:  $designation = 'Public'; break;	
			  case 1:  $designation = 'Friends'; break;	
			  case 2:  $designation = 'Only Me'; break;		
		}
		
		return $designation;
	}
	 /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
    function checkhashSSHA($salt, $password) {

        $hash = base64_encode(sha1($password . $salt, true) . $salt);

        return $hash;
    }
	 /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
	function isAlumniPwd($password){
	 
	 $ci = &get_instance();
	 $where = array('ID' => getSession('token'));
	 $sql = $ci->common_model->getRecords($ci->common_model->_usersTable, $where, "s");
	 
	 $salt = $sql['salt'];
	 $encrypted_password = $sql['user_pass'];
	 $hash = checkhashSSHA($salt, $password);
	 
	   return ($encrypted_password == $hash) ? 1 : 0;
	}
	/**
   * @package:SMS
   * @MyHelper::getOnlineImg().
   * @Author:Techno Services
   */
   function getOnlineImg(){
	 $ci = getInstance();
	 
	 return getImgDir().'online.png';  
   }
   
  /**
   * @package:SMS
   * @MyHelper::getOfflineImg().
   * @Author:Techno Services
   */
   function getOfflineImg(){
	 $ci = getInstance();
	 
	 return getImgDir().'offline.jpg';  
   }
   
     /**
   * @package:LearnCon
   * @MyHelper::getAwayImg().
   * @Author:Techno Services
   */
   function getAwayImg(){
	 $ci = getInstance();
	 
	 return getImgDir().'away.png';  
   }
     /**
   * @package:LearnCon
   * @MyHelper::getFullnameById().
   * @Author:Techno Services
   */
   function getFullnameById($id){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('ID' => $id), 's');
	 return $sql['firstname'].' '.$sql['lastname'];
   }
     /**
   * @package:LearnCon
   * @MyHelper::getGenderById().
   * @Author:Techno Services
   */
   function getGenderById($id){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $id), 's');
	 return $sql['firstname'].' '.$sql['lastname'];
   }
     /**
   * @package:LearnCon
   * @MyHelper::split_words().
   * @Author:Techno Services
   */ 
   function split_words($string, $nb_caracs, $separator){
    $string = strip_tags(html_entity_decode($string));
    if( strlen($string) <= $nb_caracs ){
        $final_string = $string;
    } else {
        $final_string = "";
        $words = explode(" ", $string);
        foreach( $words as $value ){
            if( strlen($final_string . " " . $value) < $nb_caracs ){
                if( !empty($final_string) ) $final_string .= " ";
                $final_string .= $value;
            } else {
                break;
            }
        }
        $final_string .= $separator;
    }
    return $final_string;
}
/**
   * @package:SMS
   * @MyHelper::countOnliUsers().
   * @Author:Techno Services
   */
  function countOnliUsers(){
	 $ci = &get_instance();

	// $where = array('onl_id' => getSession('token'));

	 $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_userOnlineTable);
	  $ci->db->group_by('onl_id');
	   $sql = $ci->db->get();

	  
	   return ($sql->num_rows > 0) ? count($sql->result()) : 0; 
  }
  /**
   * @package:SMS
   * @MyHelper::getFieldOfStudyUsername().
   * @Author:Techno Services
   */
  function getFieldOfStudyUsername($username){
	$ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	 $field_of_study_id = $sql['field_study_id'];
	 $result =  $ci->common_model->getRecords($ci->common_model->_fieldOfStudyTable , array('id' => $field_of_study_id), 's');
	 
	 return $result['major_field_study'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getFieldOfStudyById().
   * @Author:Techno Services
   */
  function getFieldOfStudyById($user_id){
	$ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('ID' => $user_id), 's');
	 $field_of_study_id = $sql['field_study_id'];
	 $result =  $ci->common_model->getRecords($ci->common_model->_fieldOfStudyTable , array('id' => $field_of_study_id), 's');
	 
	 return $result['major_field_study'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getProfileName().
   * @Author:Techno Services
   */
   function getProfileName(){
	   
	   if(current_url() != base_url()){
          $fullname = getProfileNameByUsername(getUsernameByUrl());
		}
		else  $fullname = getProfileNameByUsername(getSession('username'));
		
		return $fullname;   
  }
  /**
   * @package:SMS
   * @MyHelper::getProfileName().
   * @Author:Techno Services
   */
   function getFieldOfStudy(){
	   
	   if(current_url() != base_url()){
          $field_of_study = getFieldOfStudyUsername(getUsernameByUrl());
		}
		else  $field_of_study = getFieldOfStudyUsername(getSession('username'));
		
		return $field_of_study;   
  }
  /**
   * @package:SMS
   * @MyHelper::getStudentById().
   * @Author:Techno Services
   */
  function getStudentById($user_id){
	$ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('ID' => $user_id), 's');
     
	 return ($sql['user_priority'] == 1) ? 1:0;
  }
   /**
   * @package:LearnCon
   * @MyHelper::getStudentAlumni().
   * @Author:Techno Services
   */
  function getStudentAlumni(){
	$ci = &get_instance();
	$user_id = getSession('token');
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('ID' => $user_id), 's');
     
	 return ($sql['user_priority'] == 4) ? 1:0;
  }
  /**
   * @package:LearnCon
   * @MyHelper::getLatestPost().
   * @Author:Techno Services
   */
   function getLatestPost(){
     $ci = &get_instance();
	 
	 return $ci->posts_model->getLatestPosts();
   }
   /**
   * @package:LearnCon
   * @MyHelper::countNewRegistered().
   * @Author:Techno Services
   */
   function countNewRegistered(){
     $ci = &get_instance();
	 
	 return $ci->admin_model->getNewRegistered();
   }
   /**
   * @package:LearnCon
   * @MyHelper::getReportMessages().
   * @Author:Techno Services
   */
   function getReportMessages(){
     $ci = &get_instance();
	 
	 return $ci->admin_model->getReportMessages();
   }
   /**
   * @package:SMS
   * @MyHelper::getTypes().
   * @Author:Techno Services
   */
   function getTypesReport($types){
       
      if($types == 4) return 'Block';
	  if($types == 5) return 'Unfriend';
	  if($types == 6) return 'Offline';
   }
   /**
   * @package:LearnCon
   * @MyHelper::getPostType().
   * @Author:Techno Services
   */
   function getPostType(){
	   $ci = &get_instance();
	   $sql =  $ci->common_model->getRecords($ci->common_model->_postsTable , array('post_type' => 'question'), 's');
	   
	   return ($sql['post_type'])? 1:0;
	}
	/**
   * @package:LearnCon
   * @MyHelper::getPostTypeById().
   * @Author:Techno Services
   */
   function getPostTypeById($post_id){
	   $ci = &get_instance();
	   $sql =  $ci->common_model->getRecords($ci->common_model->_postsTable , array('id' => $post_id), 's');
	   
	   return ($sql['post_type']);
	}
	/**
   * @package:LearnCon
   * @MyHelper::getEmailByPriority().
   * @Author:Techno Services
   */
  function getEmailByPriority($priority){
	$ci = &get_instance();
	$ci->db->select('*');  
	$ci->db->from($ci->common_model->_usersTable);
	$ci->db->where('ID !=', getSession('token'));
	$ci->db->where(array('user_priority' => $priority));
	$sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->result() : '';
  }
  /**
   * @package:LearnCon
   * @MyHelper::getAllUsers().
   * @Author:Techno Services
   */
   function getAllUsers(){
	   
	  $ci = getInstance();
	  
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_usersTable); 
	  $ci->db->where($ci->common_model->_usersTable.'.ID !=',getSession('token'));
	  
	  $sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->result() : '';
   }
    /**
   * @package:LearnCon
   * @MyHelper::getIdByEmail().
   * @Author:Techno Services
   */
  function getIdByEmail($email){
	$ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('user_email' => $email), 's');
	 
	 return $sql['ID'];  
  }
  /**
   * @package:LearnCon
   * @MyHelper::getEmailByMajor().
   * @Author:Techno Services
   */
  function getEmailByMajor($major){
	$ci = &get_instance();
	$where = array('user_priority' => getSession('priority'), 'field_study_id' => $major);
	$ci->db->select('*');  
	$ci->db->from($ci->common_model->_usersTable);
	$ci->db->where('ID !=', getSession('token'));
	$ci->db->where($where);
	$sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->result() : '';
  }
  
   /**
   * @package:Comores Education
   * @image Dir::getImgFrontEndDir().
   * @Author:Techno Services
   */
  function getImgFrontEndDir(){
	  $ci = getInstance();
	  return $ci->config->item('img_dir_frontend');  
  }
  /**
   * @package:Comores Education
   * @image Dir::getImgBackEndDir().
   * @Author:Techno Services
   */
  function getImgBackEndDir(){
	  $ci = getInstance();
	  return $ci->config->item('img_dir_backend');  
  }
  /**
   * @package:Comores Education
   * @image Dir::getAudioDir().
   * @Author:Techno Services
   */
  function getAudioDir(){
	  $ci = getInstance();
	  return $ci->config->item('audio_dir');  
  }
    /**
   * @package:getAssets2Dir
   * @image Dir::getImgDir().
   * @Author:Techno Services
   */
  function getAssets2Dir(){
	  $ci = getInstance();
	  return $ci->config->item('assets2');  
  }

  
  /**
   * @package:Comores Education
   * @image Dir::getInlineLoader().
   * @Author:Techno Services
   */
  function getInlineLoader(){
	  $ci = getInstance();
	  return $ci->config->item('img_loader_dir').'ajax-loader.gif';  
  }
    /**
   * @package:Comores Education
   * @image Dir::getIndicator().
   * @Author:Techno Services
   */
  function getIndicator(){
	  $ci = getInstance();
	  return $ci->config->item('img_dir').'indicator.gif';  
  }

  /**
   * @package:Comores Education
   * @image Dir::getAssetsBackEndDir().
   * @Author:Techno Services
   */
  function getAssetsBackEndDir(){
	  $ci = getInstance();
	  return $ci->config->item('assets_back');  
  }

  /**
   * @package:Comores Education
   * @helper::getCssFrontDir().
   * @Author:Techno Services
   */
   function getCssFrontEndDir(){
	  $ci = getInstance();
	  return $ci->config->item('css_front_dir'); 
   }
     /**
   * @package:Comores Education
   * @helper::getCssBackEndDir().
   * @Author:Techno Services
   */
   function getCssBackEndDir(){
	  $ci = getInstance();
	  return $ci->config->item('css_dashboard_dir'); 
   }

    /**
   * @package:getJsFrontDir
   * @helper::getJsFrontEndDir().
   * @Author:Techno Services
   */
   function getJsFrontEndDir(){
	  $ci = getInstance();
	  return $ci->config->item('js_front_dir'); 
   }
  /**
   * @package:getJsBackEndDir
   * @helper::getJsDashboardDir().
   * @Author:Techno Services
   */
   function getJsBackEndDir(){
	  $ci = getInstance();
	  return $ci->config->item('js_dashboard_dir'); 
   }

  /* @package:Comores Education
   * @MyHelper::theBackEndHeader().
   * @Author:Techno Services
   */
   function theBackEndHeader($isDdisplay = 1,$data){
	  $ci = getInstance();
	  return ($isDdisplay==1)? $ci->load->view("new/templates/header" ,$data) : '';  
   }
  /* @package:Comores Education
   * @MyHelper::theBackEndFooter().
   * @Author:Techno Services
   */
   function theBackEndFooter($isDdisplay = 1, $data){
	  $ci = &getInstance();
	  return ($isDdisplay==1)? $ci->load->view("new/templates/footer" ,$data) : '';  
   }
  /* @package:Comores Education
   * @MyHelper::theFrontEndHeader().
   * @Author:Techno Services
   */
   function theFrontEndHeader($isDdisplay = 1,$data){
	  $ci = getInstance();
	  return ($isDdisplay==1)? $ci->load->view("frontend/templates/header" ,$data) : '';  
   }
  /* @package:Comores Education
   * @MyHelper::theFrontEndFooter().
   * @Author:Techno Services
   */
   function theFrontEndFooter($isDdisplay = 1, $data){
	  $ci = &getInstance();
	  return ($isDdisplay==1)? $ci->load->view("frontend/templates/footer" ,$data) : '';  
   }
 
   /**
   * @package:Comores Education
   * @helper::isFreeEmail()
   * @params:email
  */
  function isFreeEmail($domain){
	 
	 $isDomainValid = true;
	 //yahoo
	 if(preg_match("/@yahoo/", $domain)){
		 $isDomainValid  = false;   
	 }
	 //gmail
	 if(preg_match("/@gmail/", $domain)){
		 $isDomainValid  = false;    
	 }
	 //hotmail
	 if(preg_match("/@hotmail/", $domain)){
		  $isDomainValid  = false;   
	 }
	 //live
	 if(preg_match("/@live/", $domain)){
		  $isDomainValid  = false;    
	 }
	 
	 return $isDomainValid;
  }


   
  /**
   * @Helper::isSidebarLiMenuActive()
   * @Author:Techno Services
   * @params:$data
   */
   function isSidebarLiMenuActive($menu, $segment){
       $ci = &get_instance();
       $seg = $ci->uri->segment($segment);

       if(($menu == '' && $segment == '') && (currentFullurl() == base_url())){
               return 'active';
       }
       else
         return (($seg && $menu) && ($seg == $menu)) ? 'active' : '';
   }

  /**
   * @package:SMS
   * @MyHelper::getIdByUsername().
   * @Author:Techno Services
   */
  function storeProfilePhotoId($id, $photo){
	 $ci = &get_instance();
	 $where = array('ID' => $id);
	 echo $ci->common_model->updateRecords($ci->common_model->_usersTable, array('profile_photo' => $photo),$where); 
  }

   /**
   * @package:SMS
   * @MyHelper::getIpAddressByUsername().
   * @Author:Techno Services
   */
  function getIpAddressByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	 return $sql['ip_address'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getLastLoginByUsername().
   * @Author:Techno Services
   */
  function getLastLoginByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	 return $sql['user_last_login'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getRegisteredTimeByUsername().
   * @Author:Techno Services
   */
  function getRegisteredTimeByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	 return $sql['user_registered'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getLastModifiedByUsername().
   * @Author:Techno Services
   */
  function getLastModifiedByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_loginTable , array('username' => $username), 's');
	 
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('user_id' => $sql['ID']), 's');
	 return $sql['last_modified'];  
  }
  /**
   * @package:Comores Education
   * @helper::getLastLogin().
   * @Author:Techno Services
   */
   function getLastLogin(){
	   
	      if(current_url() != base_url()){
			$last_login = getLastLoginByUsername(getUsernameByUrl());
			} else $last_login = getLastLoginByUsername(getSession('username'));
		
		return $last_login;
	  }
	  /**
   * @package:Comores Education
   * @helper::getRegisteredTime().
   * @Author:Techno Services
   */
   function getRegisteredTime(){
	   
	      if(current_url() != base_url()){
			$created = getRegisteredTimeByUsername(getUsernameByUrl());
			} else $created = getRegisteredTimeByUsername(getSession('username'));
		
		return $created;
	  }
	  /**
   * @package:Comores Education
   * @helper::getLastModified().
   * @Author:Techno Services
   */
   function getLastModified(){
	   
	      if(current_url() != base_url()){
			$last_modified = getLastModifiedByUsername(getUsernameByUrl());
			} else $last_modified = getLastModifiedByUsername(getSession('username'));
		
		return $last_modified;
	  }
	  /**
   * @package:Comores Education
   * @helper::defaultDesigation().
   * @Author:Techno Services
   */
   function getIpAddress(){
	   
	      if(current_url() != base_url()){
			$ip = getIpAddressByUsername(getUsernameByUrl());
			} else $ip = getIpAddressByUsername(getSession('username'));
		
		return $ip;
   }

	 /**
     * Decrypting password
     * @param salt, password
     * returns hash string
     */
	function isAllowAccessPwd($password){
	 
	 $ci = &get_instance();
	 $where = array('ID' => getUserId());
	 $sql = $ci->common_model->getRecords($ci->common_model->_loginTable, $where, "s");
	 
	 $salt = $sql['salt'];
	 $encrypted_password = $sql['password'];
	 $hash = checkhashSSHA($salt, $password);
	 
	   return ($encrypted_password == $hash) ? 1 : 0;
	}
	
  /**
   * @package:Comores Education
   * @helper::getAddressBooks().
   * @Author:Techno Services
   */
   function getAddressBooks($limit,$offset){
	  $ci = getInstance();
	  $where = array('user_id' => getSession('token'));
	  $config = array("offset" => 'id',"option"=>'desc');
	  return $ci->common_model->getRecords($ci->common_model->_usersTable, '','all', $config, $offset,$limit);   
   }
    /**
   * @package:Comores Education
   * @Friends_model::countCouponsUsed().
   * @Author:Techno Services
   */
   function countCouponsUsed(){
	  
	  $ci = getInstance();
	  $ci->db->select('coupon_id');  
	  $ci->db->from($ci->common_model->_usersCouponTable);
	  
	   $sql = $ci->db->get();

	  
	   return ($sql->num_rows > 0) ? count($sql->result()) : 0;  
   }


  /**
   * @package:Comores Education
   * @helper::getMyInbox().
   * @Author:Techno Services
   */ 
   function getMyInbox(){
	  $ci = getInstance(); 
	  
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_messagesTable);
	  $ci->db->join($ci->common_model->_usersTable, 
	  $ci->common_model->_messagesTable.'.to_id='.$ci->common_model->_usersTable.'.ID'); 
	  $ci->db->where('to_id',getUserId());
	  
	  $sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->result() : '';
   }
  /**
   * @package:Comores Education
   * @helper::getInboxSent().
   * @Author:Techno Services
   */ 
   function getInboxSent(){
	  $ci = getInstance(); 
	  
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_messagesTable);
	  $ci->db->join($ci->common_model->_usersTable, 
	  $ci->common_model->_messagesTable.'.from_id='.$ci->common_model->_usersTable.'.user_id'); 
	  $ci->db->where('from_id',getUserId());
	  
	  $sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->result() : '';
   }
  /**
   * @package:Comores Education
   * @helper::getInboxStarred().
   * @Author:Techno Services
   */ 
   function getInboxStarred(){
	  $ci = getInstance(); 
	  
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_messagesTable);
	  $ci->db->join($ci->common_model->_usersTable, 
	  $ci->common_model->_messagesTable.'.from_id='.$ci->common_model->_usersTable.'.user_id'); 
	  $ci->db->where('from_id',getUserId());
	  $ci->db->where('starred',1);
	  
	  $sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->result() : '';
   }
  /**
   * @package:Comores Education
   * @helper::readMessage().
   * @Author:Techno Services
   */ 
   function readMessage($id){
	  $ci = getInstance(); 
	  
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_messagesTable);
	  $ci->db->join($ci->common_model->_usersTable, 
	  $ci->common_model->_messagesTable.'.from_id='.$ci->common_model->_usersTable.'.user_id OR '.
	  $ci->common_model->_messagesTable.'.to_id='.$ci->common_model->_usersTable.'.user_id' ); 
	  $ci->db->where('mID',$id);
	  
	  $sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->row_array() : '';
   }
  /**
   * @package:Comores Education
   * @helper::isStarred().
   * @Author:Techno Services
   */ 
   function isStarred($id){
	 $ci = getInstance();
	 $sql = $ci->common_model->getRecords($ci->common_model->_messagesTable , array('mID' => $id), 's'); 
	 
	 return ($sql['starred'] == 1) ? 1 : 0; 
   }
   
  /**
   * @package:Comores Education
   * @helper::countInbox().
   * @Author:Techno Services
   */
   function countInbox(){
	  $ci = getInstance(); 
	  return $ci->common_model->getNumRows($ci->common_model->_messagesTable , array('to_id' => getUserId())); 
   }
   
  /**
   * @package:Comores Education
   * @helper::countMsgSent().
   * @Author:Techno Services
   */
   function countMsgSent(){
	  $ci = getInstance(); 
	  $where = array('from_id' => getUserId());
	  return $ci->common_model->getNumRows($ci->common_model->_messagesTable , $where); 
   }
   
  /**
   * @package:Comores Education
   * @helper::countMsgStarred().
   * @Author:Techno Services
   */
   function countMsgStarred(){
	  $ci = getInstance(); 
	  $where = array('to_id' => getUserId(), 'starred' => 1);
	  return $ci->common_model->getNumRows($ci->common_model->_messagesTable , $where); 
   }
   
  /**
   * @package:Comores Education
   * @helper::countNewMsg().
   * @Author:Techno Services
   */
   function countNewMsg(){
	  $ci = getInstance(); 
	  $where = array('to_id' => getUserId(), 'status' => 1);
	  return $ci->common_model->getNumRows($ci->common_model->_messagesTable , $where); 
   }
  /**
   * @package:Comores Education
   * @helper::isAttach().
   * @Author:Techno Services
   */
   function isAttach($id){
	  $ci = getInstance(); 
	  $where = array('mID' => $id);
	  return $ci->common_model->getNumRows($ci->common_model->_attachmentTable , $where);   
   }
   
  /**
   * @package:Comores Education
   * @helper::getAttach().
   * @Author:Techno Services
   */
   function getAttach($id){
	  $ci = getInstance(); 
	  return $ci->common_model->getRecords($ci->common_model->_attachmentTable , array('mID' => $id), 'all');    
   }
  /**
   * @package:Comores Education
   * @helper::getMineType().
   * @Author:Techno Services
   */ 
   function getMineType($file){
	
			// our list of mime types
			$mime_types = array(
					"pdf"=>"application/pdf"
					,"exe"=>"application/octet-stream"
					,"zip"=>"application/zip"
					,"docx"=>"application/msword"
					,"doc"=>"application/msword"
					,"xls"=>"application/vnd.ms-excel"
					,"ppt"=>"application/vnd.ms-powerpoint"
					,"gif"=>"image/gif"
					,"png"=>"image/png"
					,"jpeg"=>"image/jpg"
					,"jpg"=>"image/jpg"
					,"mp3"=>"audio/mpeg"
					,"wav"=>"audio/x-wav"
					,"mpeg"=>"video/mpeg"
					,"mpg"=>"video/mpeg"
					,"mpe"=>"video/mpeg"
					,"mov"=>"video/quicktime"
					,"avi"=>"video/x-msvideo"
					,"3gp"=>"video/3gpp"
					,"css"=>"text/css"
					,"jsc"=>"application/javascript"
					,"js"=>"application/javascript"
					,"php"=>"text/html"
					,"htm"=>"text/html"
					,"html"=>"text/html"
			);
	
			$extension = strtolower(end(explode('.',$file)));
	
			return $mime_types[$extension];
	}
  /**
   * @package:Comores Education
   * @helper::byteConvert().
   * @Author:Techno Services
   */
   function byteConvert($size) {
	  # size smaller then 1kb
	  if ($size < 1024) return $size . ' Byte';
	  # size smaller then 1mb
	  if ($size < 1048576) return sprintf("%4.2f KB", $size/1024);
	  # size smaller then 1gb
	  if ($size < 1073741824) return sprintf("%4.2f MB", $size/1048576);
	  # size smaller then 1tb
	  if ($size < 1099511627776) return sprintf("%4.2f GB", $size/1073741824);
	  # size larger then 1tb
	  else return sprintf("%4.2f TB", $size/1073741824);
	}
	
  /**
   * @package:Comores Education
   * @image Dir::getAttachSize().
   * @Author:Techno Services
   */
  function getAttachSize($attach){
	  $ci = getInstance();
	  $dir =  $ci->config->item('abs_upload_paths');
	  return filesize($dir['attach_file_dir'].$attach);  
  }
  
  /**
   * @package:Comores Education
   * @image Dir::getAttachRelativePath().
   * @Author:Techno Services
   */
  function getAttachRelativePath(){
	  $ci = getInstance();
	  return $ci->config->item('attach_file_dir');  
  }
  
    /**
   * @package:SMS
   * @helper::loadFile().
   * @Author:Techno Services
   */
   function loadFile($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
   }
  /**
   * @package:SMS
   * @helper::makedirs().
   * @Author:Techno Services
   */
   function makedirs($dirpath, $mode=0777) {
    return is_dir($dirpath) || mkdir($dirpath, $mode, true);
   }
  /**
   * @package:SMS
   * @helper::getWidget().
   * @Author:Techno Services
   */
   function getWidget($name){
	  $widjet = '<div class="row chat-window col-xs-5 col-md-3" id="chat_window_1" style="margin-left:10px;">\
        <div class="col-xs-12 col-md-12"><div class="panel panel-default">\
                <div class="panel-heading top-bar"><div class="col-md-8 col-xs-8">\

					<h3 class="panel-title"> <span class="fa fa-question"></span> Help</h3> </div>\
                    <div class="col-md-4 col-xs-4" style="text-align: right;">\
                        <a href="#"><span id="minim_chat_window" class="icon_minim">\
						<img src="'.getImgDir().'backend/icons/add-80px-20.png" /></span></a>\
                        <a href="#"><span class="icon_close" data-id="chat_window_1">\
						<img src="'.getImgDir().'backend/icons/remove-70px-20.png" />\
						</span></a>\
                    </div> </div>\
                <div class="panel-body msg_container_base">'.$name.' </div></div> </div></div> </div>'; 
	
	return $widjet;
   }
   
  /**
   * @package:Comores Education
   * @image Dir::getTourStepDir().
   * @Author:Techno Services
   */
  function getTourStepDir(){
	  $ci = getInstance();
	  return $ci->config->item('tour_pic_dir');  
  }
  
    /**
   * @package:Comores Education
   * @image Dir::getTourStepDir().
   * @Author:Techno Services
   */
  function getInvoiceNumber(){
	  $ci = getInstance();
      $invoice = $ci->common_model->maxId('id', $ci->common_model->_paymentTable) + 1;
	  return date('y').'-'.$invoice;
  }
  
  /**
   * @package:Comores Education
   * @image Dir::getStripePublicKey().
   * @Author:Techno Services
   */
  function getStripePublicKey(){
	  
		$ci = getInstance();
		$sql = $ci->common_model->getRecords($ci->common_model->_paymentGatwayTable , 
		array('gatway_name' => 'Stripe'), 's');
		
		if($sql['status'] == 0){
		   $key =  $sql['test_public_key']; 
		}
		else {
		   $key =  $sql['live_public_key'];  
		}
		
		return $key;
  }
  
  /**
   * @package:Comores Education
   * @helper::isUserSubscribeToThisplan().
   * @Author:Techno Services
   */
   function isUserSubscribeToThisplan($plan_id){
	  $ci = getInstance(); 
	  $where = array('user_id' => getUserId(),'plan_id' => $plan_id);
	  return $ci->common_model->getNumRows($ci->common_model->_paymentTable , $where); 
   }
   
     /**
   * @package:Comores Education
   * @helper::myToursNum().
   * @Author:Techno Services
   */
   function myToursNum($plan_id){
	  $ci = getInstance(); 
	  $where = array('user_id' => getUserId());
	  return $ci->common_model->getNumRows($ci->common_model->_toursTable , $where); 
   }
   
  /**
   * @package:Comores Education
   * @helper::isUserSubscribeToPlan().
   * @Author:Techno Services
   */
   function isUserSubscribeToPlan(){
	  $ci = getInstance(); 
	  $where = array('user_id' => getUserId());
	  return $ci->common_model->getNumRows($ci->common_model->_paymentTable , $where); 
   }
   
  /**
   * @package:Comores Education
   * @helper::isPlanAllowUploadAndMediaEmbed().
   * @Author:Techno Services
   */
   function isPlanAllowUploadAndMediaEmbed(){
	  $ci = getInstance(); 
	  $where = array('user_id' => getUserId());
	  $sql =  $ci->common_model->getRecords($ci->common_model->_plansTable , $where); 
	  
	  return ($sql['embed_media'] == 'Yes') ? 1 : 0;
   }
   
     /**
   * @package:Comores Education
   * @helper::isPlanAllowAnalitics().
   * @Author:Techno Services
   */
   function isPlanAllowAnalitics(){
	  $ci = getInstance(); 
	  $where = array('user_id' => getUserId());
	  $sql =  $ci->common_model->getRecords($ci->common_model->_plansTable , $where,'s'); 
	  
	  return ($sql['analytics'] == 'Yes') ? 1 : 0;
   }
   
  /**
   * @package:Comores Education
   * @helper::numberOfWebsitePlanAllowed().
   * @Author:Techno Services
   */
   function numberOfWebsitePlanAllowed(){
	  $ci = getInstance(); 
	  $where = array('user_id' => getUserId());
	  $sql =  $ci->common_model->getRecords($ci->common_model->_plansTable , $where); 
	  
	  return $sql['nbers_of_website'];
   }
   
     /**
   * @package:Comores Education
   * @helper::numberOfClick().
   * @Author:Techno Services
   */
   function numberOfClick(){
	  $ci = getInstance(); 
	  $where = array('user_id' => getUserId());
	  $sql =  $ci->common_model->getRecords($ci->common_model->_plansTable , $where,'s'); 
	  
	  return $sql['nbers_of_click'];
   }
   
  /**
   * @package:Comores Education
   * @helper::isPlanAllowTourVisiblity().
   * @Author:Techno Services
   */
   function isPlanAllowTourVisiblity(){
	  $ci = getInstance(); 
	  $where = array('user_id' => getUserId());
	  $sql =  $ci->common_model->getRecords($ci->common_model->_plansTable , $where,'s'); 
	  
	  return ($sql['appearance'] == 'Yes') ? 1 : 0;
   }
   
     /**
   * @package:Comores Education
   * @helper::isPlanAllowTourSurvey().
   * @Author:Techno Services
   */
   function isPlanAllowTourSurvey(){
	  $ci = getInstance(); 
	  $where = array('user_id' => getUserId());
	  $sql =  $ci->common_model->getRecords($ci->common_model->_plansTable , $where,'s'); 
	  
	  return ($sql['survey'] == 'Yes') ? 1 : 0;
   }
   
  /**
   * @package:SMS
   * @helper::getReviews().
   * @Author:Techno Services
   */ 
   function getReviews($user_id){
	   
	  $ci = getInstance();
	  
	  $where = array($ci->common_model->_reviewsTable.'.user_id' => $user_id);
	  
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_reviewsTable);
	  $ci->db->join($ci->common_model->_loginTable, 
	  $ci->common_model->_loginTable.'.ID='.$ci->common_model->_reviewsTable.'.user_id'); 
	  $ci->db->join($ci->common_model->_usersTable, 
	  $ci->common_model->_usersTable.'.user_id='.$ci->common_model->_reviewsTable.'.user_id');
	  
	  if($user_id) $ci->db->where($where);
	  
	  $sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->result() : '';
   }
  /**
   * @package:SMS
   * @helper::getSubcritpionPlan().
   * @Author:Techno Services
   */  
   function getSubcritpionPlan($user_id = NULL){
	  $ci = &getInstance();
	  if($user_id) $where = array('user_id' => $user_id);
	  else $where = array('user_id' => getUserId());
	  
	  if(isUserSubscribeToPlan()){
		   $payments = $ci->common_model->getRecords($ci->common_model->_paymentTable, $where, 's');  
           $where = array('id' => $payments['plan_id']);
           $plans = $ci->common_model->getRecords($ci->common_model->_plansTable, $where, 's');
		   
		   return $plans['plan_name'].' : $'.$plans['plan_amount'];    
	  }
	  else  return 'Free';
   }
   
  /**
   * @package:AddComores Education
   * @helper::getReviews().
   * @Author:Techno Services
   */ 
   function getReviewsComments($review_id, $last_id = NULL){
	   
	  $ci = getInstance();
	  
	  if($last_id ) {
		  $where = array($ci->common_model->_commentsTable.'.review_id' => $review_id,$ci->common_model->_commentsTable.'.cID <' => $last_id);
	  }
	  else $where = array($ci->common_model->_commentsTable.'.review_id' => $review_id);
	  
	  if(!$last_id) $ci->db->limit(4);
	  $ci->db->order_by($ci->common_model->_commentsTable.'.cID', 'DESC');
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_commentsTable);
	  $ci->db->join($ci->common_model->_loginTable, 
	  $ci->common_model->_loginTable.'.ID='.$ci->common_model->_commentsTable.'.user_id'); 
	  $ci->db->join($ci->common_model->_usersTable, 
	  $ci->common_model->_usersTable.'.user_id='.$ci->common_model->_commentsTable.'.user_id');
	  $ci->db->where($where);
	  
	  $sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->result() : '';
   }
   
   /**
   * @package:AddComores Education
   * @helper::getReviews().
   * @Author:Techno Services
   */ 
   function getLastReviewsComments($id){
	   
	  $ci = getInstance();
	  
	  /*$ci->db->group_by($ci->common_model->_commentsTable.'.ID', 'desc');
	  $ci->db->limit(1);*/
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_commentsTable);
	  $ci->db->join($ci->common_model->_loginTable, 
	  $ci->common_model->_loginTable.'.ID='.$ci->common_model->_commentsTable.'.user_id'); 
	  $ci->db->join($ci->common_model->_usersTable, 
	  $ci->common_model->_usersTable.'.user_id='.$ci->common_model->_commentsTable.'.user_id');
	  $ci->db->where(array($ci->common_model->_commentsTable.'.cID' => $id));
	  
	  $sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->result() : '';
   }
   
  /**
   * @package:Comores Education
   * @helper::countReviewcomments().
   * @Author:Techno Services
   */
   function countReviewComments($review_id){
	  $ci = getInstance(); 
	  $where = array('review_id' =>  $review_id);
	  return $ci->common_model->getNumRows($ci->common_model->_commentsTable , $where); 
   }
   
  /**
   * @package:SMS
   * @helper::getUsersReviews().
   * @Author:Techno Services
   */ 
   function getUsersReviews(){
	   
	  $ci = getInstance();
	  
	  $ci->db->group_by($ci->common_model->_reviewsTable.'.user_id');
	  $ci->db->select('*');  
	  $ci->db->from($ci->common_model->_reviewsTable);
	  $ci->db->join($ci->common_model->_loginTable, 
	  $ci->common_model->_loginTable.'.ID='.$ci->common_model->_reviewsTable.'.user_id'); 
	  $ci->db->join($ci->common_model->_usersTable, 
	  $ci->common_model->_usersTable.'.user_id='.$ci->common_model->_reviewsTable.'.user_id');
	 // $ci->db->where($where);
	  
	  $sql = $ci->db->get();
	  
      return ($sql->num_rows > 0) ? $sql->result() : '';
   }
   
   
   
     /**
   * @package:Comores Education
   * @helper::getSurveyByGroupVisitor().
   * @Author:Techno Services
   */
   function getSurveyByGroupVisitor($cat , $guest_id = NULL){
	  $ci = getInstance(); 
	   
	   if($cat == 'fill-in-survey' || $cat == 'fill_in'){
		   $cat = 'fill_in';
	   }
	   else $cat = 'multiple_choice';
	  
	  if($guest_id) $where = array('user_id' => getUserId(), 'category' => $cat, 'visitor_id' => $guest_id);
	  else $where = array('user_id' => getUserId(), 'category' => $cat);
	  
	  if($guest_id){
		return $ci->common_model->getRecords($ci->common_model->_surveyResponseTable , $where,'all');  
	  }
	 else  return $ci->common_model->getRecords($ci->common_model->_surveyResponseTable , $where,'all','','','', 'visitor_id'); 

   }
   
  /**
   * @package:Comores Education
   * @helper::getSurveyQuestionId().
   * @Author:Techno Services
   */
   function getSurveyQuestionId($id){
	  $ci = getInstance(); 
	  $where = array('survey_id' => $id);
	  $sql =  $ci->common_model->getRecords($ci->common_model->_surveyTable , $where,'s'); 
	  
	  return $sql['survey_question'];
   }
   
  /**
   * @package:Comores Education
   * @helper::getSurveyQuestionDate().
   * @Author:Techno Services
   */
   function getSurveyQuestionDate($id){
	  $ci = getInstance(); 
	  $where = array('survey_id' => $id);
	  $sql =  $ci->common_model->getRecords($ci->common_model->_surveyTable , $where,'s'); 
	  
	  return $sql['survey_created'];
   }
   
  /**
   * @package:Comores Education
   * @helper::getSurveyQuestionDate().
   * @Author:Techno Services
   */
   function getPages(){
	  $ci = getInstance();
	  return $ci->common_model->getRecords($ci->common_model->_pagesTable , '','all');  
   }
  /**
   * @package:Comores Education
   * @helper::getSlider().
   * @Author:Techno Services
   */
   function getSlider($where){
	  $ci = getInstance();
	  
	 // $ci->db->limit(1);
	  $ci->db->group_by('slide', 'ASC');
	  $sql = $ci->db->get_where($ci->common_model->_sliderRevolutionTable, $where); 
	  
	   if($sql->num_rows() > 0){  
	  
			foreach ($sql->result() as $rows){
				
				$data[] = $rows;
			}
		 
		 return $data;
	  }
	  else 
	    return false;
   }
   
  /**
   * @package:Comores Education
   * @image Dir::getAttachRelativePath().
   * @Author:Techno Services
   */
  function getSliderPath(){
	  $ci = getInstance();
	  return $ci->config->item('slider_pic_dir');  
  }
  
    /**
   * @package:Comores Education
   * @image Dir::getAttachRelativePath().
   * @Author:Techno Services
   */
  function getSliderImage($page_id, $slide, $ref){
	  $ci = getInstance();
	  
	  if($ref == 'page') $cat = 'page';
	  else $cat = 'blog';
	  
	  $where = array('page_id' => $page_id,'slide' => $slide,'category' => $cat);
	  return $ci->common_model->getRecords($ci->common_model->_sliderRevolutionTable, $where, 'all');
  }
  
    /**
   * @package:SMS
   * @helper::getBlogDir().
   * @Author:Techno Services
   */
    function pagination( $link , $table , $num_per_page , $num_uri_segment , $condition)
	{
	  $ci = getInstance();
	  $config = array();
	  
	  $config["base_url"] = base_url() . $link;
	  $config["total_rows"] = $ci->common_model->getNumRows($table, $condition);
	  $lim = $config["per_page"] = $num_per_page;
	  $config["uri_segment"] = $num_uri_segment;
	  $choice = $config["total_rows"] / $config["per_page"] ;
	  $config["num_links"] = round($choice);
	  $config['full_tag_open'] = '<ul class="pagination pagination-sm pull-right push-down-20 push-up-20">';
	  $config['full_tag_close'] = '</ul>';
	  $config['first_link'] = '«';
	  $config['last_link'] = '»';
	  $config['cur_tag_open'] = '<li class="active"><a href="#">';
	  $config['cur_tag_close'] = '</a></li>';
	  $config['first_tag_open'] = $config['last_tag_open']= $config['next_tag_open']= $config['prev_tag_open'] = $config['num_tag_open'] = '<li>';
        $config['first_tag_close'] = $config['last_tag_close']= $config['next_tag_close']= $config['prev_tag_close'] = $config['num_tag_close'] = '</li>';
	  
	  $ci->pagination->initialize($config);
	  
	  $page = ($ci->uri->segment($num_uri_segment)) ? $ci->uri->segment($num_uri_segment) : 0;
	  $data["result"] = $ci->common_model->ShowPaginationData($lim,$page,$table, $condition);
	  
	  $data["links"] = $ci->pagination->create_links();	
	  
	  return $data;
	}
	
  /**
   * @package:SMS
   * @helper::getUserName().
   * @Author:Techno Services
   */
	function getUserName(){
		
	}
 /**
   * @package:SMS
   * @helper::currentFullurl().
   * @Author:Techno Services
   */
	function currentFullurl(){
	
	}
	
 /**
   * @package:SMS
   * @helper::currentFullurl().
   * @Author:Techno Services
   */
	function isAdmin(){
	
	}
 /**
   * @package:SMS
   * @helper::currentFullurl().
   * @Author:Techno Services
   */
	function isClient(){
	
	}
	
  /**
   * @package:SMS
   * @helper::myFriends().
   * @Author:Techno Services
   */
   function myFriends($id = NULL, $limit = NULL){
	 $ci = getInstance();
	 return $ci->friend_model->getMyFriends($id, $limit);  
   }
   
  /**
   * @package:SMS
   * @helper::myPhotos().
   * @Author:Techno Services
   */
   function myPhotos($id){
	 $ci = getInstance();
	 $where = array('from_user_id' => $id, 'post_type' => 'image');
	 return $ci->common_model->getRecords($ci->common_model->_postsTable , $where, 'all');;  
   }
   
  /**
   * @package:SMS
   * @helper::countMyComments().
   * @Author:Techno Services
   */
   function countMyComments(){
	  $ci = getInstance();
	  $where = array('user_id' => getSession('token'));
	  return $ci->common_model->getNumRows($ci->common_model->_commentsTable, $where); 
   }
   
  /**
   * @package:SMS
   * @helper::countMyPosts().
   * @Author:Techno Services
   */
   function countMyPosts(){
	  $ci = getInstance();
	  $where = array('from_user_id' => getSession('token'));
	  return $ci->common_model->getNumRows($ci->common_model->_postsTable, $where); 
   }
   
 /**
 * @package:SMS
 * @MyHelper::getUserId().
 * @Author:Techno Services
 */
 function getUserId(){
	return getSession('token'); 
 }
 
  /**
   * @package:Comores Education
   * @helper::getSurveyQuestionId().
   * @Author:Techno Services
   */
   function getPostFile($id = NULL,$user_id = NULL){
	  $ci = getInstance(); 
	  if($user_id ) $where = array('user_id' => $user_id);
	  if($id ) $where = array('post_id' => $id);
	  
	  return  $ci->common_model->getRecords($ci->common_model->_galleryTable , $where,'all'); 

   }
   
     /**
   * @package:SMS
   * @MyHelper::getFullnameByUsername().
   * @Author:Techno Services
   */
  function getUserFirstname($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	  
	// $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('user_id' => $sql['ID']), 's'); 
	 return $sql['firstname'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getUserLastname().
   * @Author:Techno Services
   */
  function getUserLastname($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	  
	// $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('user_id' => $sql['ID']), 's'); 
	 return $sql['lastname'];  
  }
  
    /**
   * @package:SMS
   * @MyHelper::getUserAddress().
   * @Author:Techno Services
   */
  function getUserAddress($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	  
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $sql['ID']), 's'); 
	 return $sql['address'];  
  }
  
  /**
   * @package:Comores Education
   * @helper::updateMessageText().
   * @Author:Techno Services Comores
   */
   function updateMessageText(){
	  return;
   } 
  /**
   * @package:Comores Education
   * @helper::insertMessageText().
   * @Author:Techno Services Comores
   */
   function insertMessageText(){
	  return; 
   }
  /**
   * @package:Comores Education
   * @helper::errorMessageText().
   * @Author:Techno Services Comores
   */
   function errorMessageText(){
	  return ; 
   } 
  /**
   * @package:Comores Education
   * @helper::successMessageText().
   * @Author:Techno Services Comores
   */
   function successMessageText(){
	  return ; 
   }
  /**
   * @package:Comores Education
   * @helper::recordExistMessageText().
   * @Author:Techno Services Comores
   */
   function recordExistMessageText(){
	  return;
   }
   /**
   * @package:LearnCon
   * @MyHelper::getEmailById().
   * @Author:Techno Services
   */
  function getEmailById($id){
	$ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('ID' => $id), 's');
	 
	 return $sql['user_email'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getFacebookIdByUsername().
   * @Author:Techno Services
   */
  function getFacebookIdByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $sql['ID']), 's');
	 return $sql['facebook'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getTwitterIdByUsername().
   * @Author:Techno Services
   */
  function getTwitterIdByUsername($username){
	 $ci = &get_instance();
	 $sql =  $ci->common_model->getRecords($ci->common_model->_usersTable , array('username' => $username), 's');
	 $sql =  $ci->common_model->getRecords($ci->common_model->_profileTable , array('user_id' => $sql['ID']), 's');
	 return $sql['twitter'];  
  }
  /**
   * @package:SMS
   * @MyHelper::getFacebookId().
   * @Author:Techno Services
   */
  function getFacebookId(){
	 
	 if(current_url() != base_url()){
	$fb = getFacebookIdByUsername(getUsernameByUrl());
	} else $fb = getFacebookIdByUsername(getSession('username'));
	
	 return $fb;  
  }
  /**
   * @package:SMS
   * @MyHelper::getTwitterId().
   * @Author:Techno Services
   */
  function getTwitterId(){
	 
	 if(current_url() != base_url()){
	$tw = getTwitterIdByUsername(getUsernameByUrl());
	} else $tw = getTwitterIdByUsername(getSession('username'));
	
	 return $tw;  
  }
	 
/* End of file helper.php */
/* Location: ./application/helpers/helper.php */

?>
