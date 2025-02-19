<?php

class model {
    public $conn = "";

    function __construct() {
        $this->conn = new Mysqli('localhost', 'root', '', 'it_knowledge_hub');
        if ($this->conn->connect_error) {
            die("Database Connection Failed: " . $this->conn->connect_error);
        }
    }

    function select($tbl) {
        $sel = "SELECT * FROM $tbl";  
        $run = $this->conn->query($sel);  
        $arr = [];

        while ($fetch = $run->fetch_object()) { 
            $arr[] = $fetch;
        }
        return $arr;
    }

    function select_where($tbl, $where) {
        $col_arr = array_keys($where);
        $value_arr = array_values($where);

        $sel = "SELECT * FROM $tbl WHERE 1=1";
        $i = 0;
        foreach ($where as $w) {
            $sel .= " AND $col_arr[$i]='$value_arr[$i]'";
            $i++;
        }

        return $this->conn->query($sel);
    }

    function insert($tbl, $arr) {
        $col = implode(",", array_keys($arr)); 
        $value = implode("','", array_values($arr));

        $ins = "INSERT INTO $tbl ($col) VALUES ('$value')";  
        return $this->conn->query($ins);
    }

    function update($tbl, $arr, $where) {
        $upd = "UPDATE $tbl SET "; 
        $updates = [];

        foreach ($arr as $key => $val) {
            $updates[] = "$key='$val'";
        }
        $upd .= implode(", ", $updates);

        $where_cond = [];
        foreach ($where as $key => $val) {
            $where_cond[] = "$key='$val'";
        }
        $upd .= " WHERE " . implode(" AND ", $where_cond);

        return $this->conn->query($upd);
    }

    function delete_where($tbl, $where) {
        $del = "DELETE FROM $tbl WHERE 1=1";
        foreach ($where as $key => $val) {
            $del .= " AND $key='$val'";
        }
        return $this->conn->query($del);
    }

    public function custom_query($sql) {
        $res = $this->conn->query($sql);
        $result = [];

        while ($row = $res->fetch_object()) {
            $result[] = $row;
        }
        return $result;
    }

    public function getVideosByCourse($course_id) {
        $query = "SELECT video_title, embed_code FROM course_videos WHERE course_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $course_id);
        $stmt->execute();
        $result = $stmt->get_result();

        $videos = [];
        while ($row = $result->fetch_assoc()) {
            $videos[] = $row;
        }
        return $videos;
    }

    /** ================================
     *  INTERVIEW MODEL FUNCTIONS
     *  ================================ */

    // Fetch all interviews
    public function getAllInterviews() {
        $query = "SELECT * FROM interviews";
        return $this->custom_query($query);
    }

    // Fetch a single interview by ID
    public function getInterviewById($id) {
        $query = "SELECT * FROM interviews WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // Add a new interview
    public function addInterview($data) {
        $query = "INSERT INTO interviews (title, company, interview_date, details) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('ssss', $data['title'], $data['company'], $data['interview_date'], $data['details']);
        return $stmt->execute();
    }

    // Update an interview
    public function updateInterview($id, $data) {
        $query = "UPDATE interviews SET title = ?, company = ?, interview_date = ?, details = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('ssssi', $data['title'], $data['company'], $data['interview_date'], $data['details'], $id);
        return $stmt->execute();
    }

    // Delete an interview
    public function deleteInterview($id) {
        $query = "DELETE FROM interviews WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }
}

$obj = new model;

?>
