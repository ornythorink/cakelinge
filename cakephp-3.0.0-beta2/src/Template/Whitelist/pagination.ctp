           <ul class="pagination pagination-lg pager" id="myPager">        
           <?php 
            
                // the 'first' page button
                echo $this->Paginator->first("First");
                 
                // 'prev' page button,
                // we can check using the paginator hasPrev() method if there's a previous page
                // save with the 'next' page button
                if($this->Paginator->hasPrev()){
                    echo $this->Paginator->prev("Prev");
                }
                 
                // the 'number' page buttons
                echo $this->Paginator->numbers(array('modulus' => 10));
                 
                // for the 'next' button
                if($this->Paginator->hasNext()){
                    echo $this->Paginator->next("Next");
                }
                 
                // the 'last' page button
                echo $this->Paginator->last("Last");
            ?> 
            </ul> 
              