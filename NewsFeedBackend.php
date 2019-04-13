<?php 
                
        require_once('webhose.php');

        // this is the api key  
        Webhose::config("81e306b2-8490-4a78-84d7-390aa94ba8f9");
       

            $images = array();//this array is used to store images from 
            $titles = array();// this array is used to store titles 
            $links = array();// this array is used to store titles 

             
                
           
           
        function print_filterwebdata_titles($api_response) {
                    
                
                if ($api_response == null) {
                    echo "<p>Response is null, no action taken.</p>";
                      return;
                    }
                
                
                        if (isset($api_response->posts)) {
                            $c = 0;
                        
                            foreach ($api_response->posts as $post) {
            
                            global $links;
                            global $titles;
                       
                                
                            $links[$c] = $post->thread->site;
                            $titles[$c] = $post->title;
                            
                            if ($post->thread->main_image == null) {
                                  global $images;
                               $images[$c]='resources/img/TechBg.jpg';
                            
                            } else {
                                
                                if ($post->thread->main_image == 'http://www.techskimm.com/wp-content/plugins/wp-rss-multi-importer/images/facebook.png') {
                                      global $images;
                                    $images[$c] = 'resources/img/TechBg.jpg';
                                    
                                } else {
                                    
                                    global $images;
                                    $images[$c] = $post->thread->main_image;
                                }
                            }
                        
                            $c++;
                                
                            // this limits the number of posts to 3 by breaking out of the loop 
                            if ($c == 4) {
                                break 1;
                            }
                        }
                            
                           for($c=0; $c<3; $c++){
                                  global $images;
                               
                            if ($images[$c] == null) {
                        
                            $images[$c]='resources/img/TechBg.jpg';   
                            
                            }}
                            
                                
                           for($c=0; $c<4; $c++){
                                  global $titles;
                               
                            if ($titles[$c] == null) {
                        
                            $titles[$c]='Technology News';   
                            
                            }}
                            
                    }
                }

                $params = array(
                    "q" => "language:english site:TechCrunch.com",
                    "sort" => "relevancy"
                );
                
                $result = Webhose::query("filterWebContent", $params);
                
                print_filterwebdata_titles($result);
                
                
                ?>