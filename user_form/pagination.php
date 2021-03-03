<?php  
// include "config/con1.php";
    // // count collections ( or cards) in one page
    // $limit = 8;       
    // isset($_GET["page"])) ? $page  = $_GET["page"] : $page=1;    
    // $page_index = ($page-1) * $limit;   
    // // all collections or cards
    // $all_items="SELECT * FROM new_collection_card limit $page_index, $limit");
    // while($row=mysqli_fetch_array($all_items))
    // {
    //     //show  data in table or where you want..
    // }
    // $all_data=mysqli_query($con,"select count(*) from users");
    // $user_count = mysqli_fetch_row($all_data);   // say total count 9  
    // $total_records = $user_count[0];   //9
    // $total_pages = ceil($total_records / $limit);    // 9/3=  3
    // if($page >= 2){
    //     echo "<a href='blog.php?page=".($page-1)."' class='btn 
    //  customBtn2'>Previous</a>";
    //   }
    
    // if($page<$total_pages) {
    //     echo "<a href='blog.php?page=".($page+1)."' class='btn customBtn2'>NEXT</a>";   
    // }   

    // -------------------------------
    /**
         * 
         */
        class Pagination {
            public $tblName='';
            public $limit=8;
            public $page='';
            public $page_index='';
            public $links='';
            function __construct(){
               (isset($_GET["page"])) ? $this->page  = $_GET["page"] : $this->page=1;
               $this->page_index=($this->page-1) * $this->limit;

            }
            public function allItems($con, $data, $data_id){
                  $all_items_in_page=mysqli_query($con, "SELECT * FROM $this->tblName WHERE $data=$data_id LIMIT $this->page_index, $this->limit");
                  return $all_items_in_page;
            }

            public function pages($con, $data, $data_id){
                $all_items=mysqli_query($con, "SELECT * FROM $this->tblName WHERE $data='$data_id'");
                $data_count = mysqli_num_rows($all_items); 
                $total_pages = ceil($data_count / $this->limit);  
                ?>
                    <li class="<?php echo $this->page <= 1 ? 'disabled' : ''; ?>">
                       <a class='pg-link' href="<?php echo $this->page <= 1 ? '' : $_SERVER['PHP_SELF']."?page=".($this->page - 1); ?>">Prev</a>
                    </li>
                <?php
                $first='';
                $last='';
                    for ($i = 1; $i <= $total_pages; $i++) {
                          
                     if($total_pages>4){
                        if( $i<4 && $this->page<3 ){
                            $this->links.= ($i != $this->page ) 
                                           ? "<li class='page-item'><a class='pg-link' href='".$_SERVER['PHP_SELF']."?page=$i'> $i</a> </li>"
                                           : "<li class='page-item active-page'>$i</li>";
                            $last="<li>. . .</li><li class='page-item'><a class='pg-link' href='".$_SERVER['PHP_SELF']."?page=$total_pages'> $total_pages</a></li>";
                            $first='';

                        }
                        else if( $this->page>=3 && $this->page<=$total_pages-2 && $i>=$this->page-1 && $i<=$this->page+1){
                             $this->links.=($i != $this->page )
                                           ? "<li class='page-item'><a class='pg-link' href='".$_SERVER['PHP_SELF']."?page=$i'> $i</a></li>"
                                           :"<li class='page-item active-page'>$i</li>";
                            $first="<li class='page-item'><a class='pg-link' href='".$_SERVER['PHP_SELF']."?page=1'> 1</a></li><li>. . .</li>";
                            $last="<li>. . .</li><li class='page-item'><a class='pg-link' href='".$_SERVER['PHP_SELF']."?page=$total_pages'> $total_pages</a></li>";
                        }
                        else if($i>=$total_pages-2 && $this->page>$total_pages-2){
                            $this->links.=($i != $this->page )
                                          ? "<li class='page-item'><a class='pg-link' href='".$_SERVER['PHP_SELF']."?page=$i'> $i</a> </li>"
                                          : "<li class='page-item active-page'>$i</li>";
                            $last='';
                            $first="<li class='page-item'><a class='pg-link' href='".$_SERVER['PHP_SELF']."?page=1'> 1</a></li><li>. . .</li>";
                        }
                        else{}
                    }
                    else{
                      $this->links.="<li class='page-item'><a class='pg-link' href='".$_SERVER['PHP_SELF']."?page=$i'> $i</a> </li>";
                    }
                   }
                    echo $first.$this->links.$last;
                ?>
    
                <li class="<?php if($this->page >= $total_pages){ echo 'disabled'; } ?>">
                    <a class='pg-link' href="<?php if($this->page >= $total_pages){ echo '#'; } else { echo $_SERVER['PHP_SELF']."?page=".($this->page + 1); } ?>">Next</a>
                </li>
   
<?php
            }
        }    
?>