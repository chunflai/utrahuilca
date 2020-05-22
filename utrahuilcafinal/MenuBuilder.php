<?php
require_once '../config/conexion.php';

/**
 * Generate HTML for multi-dimensional menu from MySQL database
 * with ONE QUERY and WITHOUT RECURSION
 * @author J. Bruni
 */
class MenuBuilder
{
        /**
         * MySQL connection
         */
        var $conn;
       
        /**
         * Menu items
         */
        var $items = array();
       
        /**
         * HTML contents
         */
        var $html  = array();
       
        /**
         * Create MySQL connection
         */
        function MenuBuilder()
        {
			
                $this->conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
                
        }
       
        /**
         * Perform MySQL query and return all results
         */
        function fetch_assoc_all( $sql )
		{
				
                $result = mysqli_query($this->conn,$sql);
               
                if ( !$result )
                        return false;
               
                $assoc_all = array();
               
                while( $fetch = mysqli_fetch_assoc( $result ) )
                        $assoc_all[] = $fetch;
               
                mysqli_free_result( $result );
               
                return $assoc_all;
        }
       
        /**
         * Get all menu items from database
         */
        function get_menu_items()
        {
                // Change the field names and the table name in the query below to match tour needs
                $sql = 'SELECT id,cod_menu,opcion_padre,texto_opcion,enlace_opcion,cod_opcion,destino,icono FROM opciones_menu ORDER BY opcion_padre, cod_opcion;';
                return $this->fetch_assoc_all( $sql );
				
        }
       
        /**
         * Build the HTML for the menu
         */
        function get_menu_html( $root_id = 0,$clase ="")
        {
                $this->html  = array();
                $this->items = $this->get_menu_items();
               
                foreach ( $this->items as $item )
                        $children[$item['opcion_padre']][] = $item;
               
                // loop will be false if the root has no children (i.e., an empty menu!)
                $loop = !empty( $children[$root_id] );
               
                // initializing $parent as the root
                $parent = $root_id;
                $parent_stack = array();
               
                // HTML wrapper for the menu (open)
                $this->html[] = '<ul class="'.$clase.'">';
                $enlace="href='' onclick='return false;";
				$destino="";
				$icono="";
                while ( $loop && ( ( $option = each( $children[$parent] ) ) || ( $parent > $root_id ) ) )
                {   
                        
						if ( $option === false )
                        {
                                $parent = array_pop( $parent_stack );
                               
                                // HTML for menu item containing childrens (close)
                                $this->html[] = str_repeat( "\t", ( count( $parent_stack ) + 1 ) * 2 ) . '</ul>';
                                $this->html[] = str_repeat( "\t", ( count( $parent_stack ) + 1 ) * 2 - 1 ) . '</li>';
                        }
                        elseif ( !empty( $children[$option['value']['id']] ) )
                        {
                              
                                $tab = str_repeat( "\t", ( count( $parent_stack ) + 1 ) * 2 - 1 );
                               $destino=(!empty( $option['value']['destino'] ))? " target='".$option['value']['destino']."'":"";
							   $enlace=(empty($option['value']['enlace_opcion'] ))? " onclick='return false;'":"" ;
							   $icono=(empty($option['value']['icono'] ))? "<i class='".$option['value']['icono']."'></i>":"" ;
                                // HTML for menu item containing childrens (open)
								if($clase!=""){
                                $this->html[] = sprintf(
                                        '%1$s<li><a href="%2$s" %5$s %4$s>%6$s %3$s</a>',
                                        $tab,   // %1$s = tabulation
                                        $option['value']['enlace_opcion'],
										$option['value']['texto_opcion'],   // %3$s = text_opcion
                                        $destino ,  // %4$s = text_opcion
										$enlace,  // %5$s = enlace_opcion (URL)
										$icono
										);
								}else{
									$this->html[] = sprintf(
										'%1$s<li><p><a href="%2$s" %5$s %4$s>%6$s %3$s</a></p>',
                                        $tab,   // %1$s = tabulation
                                        $option['value']['enlace_opcion'],
										$option['value']['texto_opcion'],   // %3$s = text_opcion
                                         $destino,  // %4$s = text_opcion
										$enlace,  // %2$s = enlace_opcion (URL)
										$icono
										);
								} 
                                
                                $this->html[] = $tab . "\t" . '<ul class="submenu">';
                               
                                array_push( $parent_stack, $option['value']['opcion_padre'] );
                                $parent = $option['value']['id'];
                        }
                        else{
                                // HTML for menu item with no children (aka "leaf")
								
                                $this->html[] = sprintf(
                                        '%1$s<li><a href="%2$s" %5$s %4$s>%6$s %3$s</a></li>',
                                        str_repeat( "\t", ( count( $parent_stack ) + 1 ) * 2 - 1 ),   // %1$s = tabulation
                                        $option['value']['enlace_opcion'],
										$option['value']['texto_opcion'],   // %3$s = text_opcion
                                        $destino=(!empty( $option['value']['destino'] ))? " target='".$option['value']['destino']."'":"",
										$enlace=(empty($option['value']['enlace_opcion'] ))? " onclick='return false;'":"" ,
										$icono=(!empty($option['value']['icono'] ))? "<i class='".$option['value']['icono']."'></i>":"" 
                                );
                        
                        }
                    }
               
                // HTML wrapper for the menu (close)
                $this->html[] = '</ul>';
               
                return implode( "\r\n", $this->html );
        }

  
                      
		//This function will take $_SERVER['REQUEST_URI'] and build a breadcrumb based on the user's current path
		function breadcrumbs($separator = ' &raquo; ', $home = 'Inicio') {
	
				//This gets the REQUEST_URI (/path/to/file.php), splits the string (using '/') into an array, and then filters out any empty values
				$path = array_filter(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
				$query = parse_url($_SERVER['REQUEST_URI'], PHP_URL_QUERY);
				
				$base ='index';
				$enlace=$path[sizeof($path)];
				if($base==$enlace || $enlace=='index.php'){
					return '';
				}
				if(!empty($query)){
					$enlace=$enlace."?".$query;
				}
				
				//This will build our "base URL" ... Also accounts for HTTPS :)
				
				
				//Initialize a temporary array with our breadcrumbs. (starting with our home page, which I'm assuming will be the base URL)
				$breadcrumbs = Array("<a href=\"$base\">$home</a>");
				$breadcrumbinverso=array();
				$sql2="SELECT count(*) cuenta, enlace_opcion FROM opciones_menu  WHERE enlace_opcion like '%".$enlace."%'";
				
				$sql="SELECT texto_opcion,opcion_padre FROM opciones_menu WHERE enlace_opcion like '%".$enlace."%'";
				//echo $sql; exit();
                $result=mysqli_query($this->conn,$sql);
				$result2=mysqli_query($this->conn,$sql2);
				
				$num=(mysqli_fetch_array($result2))['cuenta'];

				if($num!=0){
               while ($mostrar=mysqli_fetch_array($result)) {
					$padre=$mostrar['opcion_padre'];
					$i=0;
					$breadcrumbinverso[$i]=$mostrar['texto_opcion'];
					//echo $breadcrumbinverso[$i];
					while ($padre!=0){
						$sql="SELECT texto_opcion,opcion_padre,enlace_opcion FROM opciones_menu WHERE id=".$padre;
						$result=mysqli_query($this->conn,$sql);
						while ($mostrar=mysqli_fetch_array($result)) {
							$i++;
							$padre=$mostrar['opcion_padre'];
							//echo "<pre><a href='".$mostrar['enlace_opcion']."'>".$mostrar['texto_opcion']."</a></pre>";
							$breadcrumbinverso[$i] = "<a href='".$mostrar['enlace_opcion']."'>".$mostrar['texto_opcion']."</a>";

						}
					}
					
					
				}
				$c=sizeof($breadcrumbinverso)-1;

					for($i=1;$i<=$c+3;$i++){
						$breadcrumbs[$i] = $breadcrumbinverso[$c];
						$c--;
					}
				
				//Find out the index for the last value in our path array
				/*$last = end(array_keys($path));

				//Build the rest of the breadcrumbs
				foreach ($path AS $x => $crumb) {
					//Our "title" is the text that will be displayed (strip out .php and turn '_' into a space)
					$title = ucwords(str_replace(Array('.php', '_'), Array('', ' '), $crumb));

					//If we are not on the last index, then display an <a> tag
					if ($x != $last)
						$breadcrumbs[] = "<a href=\"$base$crumb\">$title</a>";
						//Otherwise, just display the title (minus)
					else
						$breadcrumbs[] = $title;
				}*/		
				}else {
					$enlace=array_filter(explode('.',$path[sizeof($path)]));
					$breadcrumbs[1]=ucfirst(str_replace("_", " ", $enlace[0]));
				}
				//Build our temporary array (pieces of bread) into one big string :)
				return implode($separator, $breadcrumbs);
			}
 
}