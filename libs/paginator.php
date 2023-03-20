<?php
    class Paginator{
        var $base_url = ''; //lien ket chon o phan trang
        var $total_rows = 0; //tong so luong records
        var $per_page = 10; //so luong item tren 1 trang
        var $cur_page =0; //trang hien tai
        
        function __construct($params = array()){
            if(count($params) > 0){
                $this->init($params);
            }
        }
        function init($params = array())
        {
            if(count($params) > 0){
                foreach($params as $key => $value)
                {
                    if(isset($this->$key)){
                        $this->$key = $value;
                    }
                }
            }
            return $this->total_rows;
        }

        function createLinks(){
            $end = ceil($this->total_rows/$this->per_page);
            $start = 1;
            $html = "<nav aria-label='Page navigation example'>";
            $html .="<ul class='pagination'>";
            $class = ($this->cur_page == 1) ? "disabled":"";
            $html .= "<li class='page-item'>
                <a class='page-link' ".$class." href='".$this->base_url."/".($this->cur_page-1)."/".$this->per_page."' aria-label='Previous'>
                    <span aria-hidden='true'>&laquo;</span>
                </a>
                </li>";
            for($i = $start;$i<=$end;$i++){
                $class = ($this->cur_page==$i)? "active":"";
                $html .= "<li class='page-item'><a class='page-link ".$class."' href='".$this->base_url."/".$i."/".$this->per_page."'>".$i."</a></li>";
            }
            $class = ($this->cur_page == $end) ? "disabled":"";
            $html .="<li class='page-item'>
            <a class='page-link ".$class."' href='".$this->base_url."".($this->cur_page+1)."/".$this->per_page."' aria-label='Next'>
                <span aria-hidden='true'>&raquo;</span>
            </a>
            </li>";

                
            $html.="</ul>";
            $html.="</nav>";
            return $html;
        }
    }

?>