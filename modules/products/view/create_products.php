
<!-- Main -->

<div id="main">

 <h1>Product Information</h1>
 
    </br>
    	<form method="post" name="formusers" id="formusers" action="index.php?module=products"><!-- onsubmit="return validate_user();" onsubmit="return validate_user();"  Declaramos las caracteristicas de formulario   onsubmit="return validate_user();"-->
    	
          	
    	<table width="50%"  border="0" cellspacing="0" cellpadding="0">
    	    <tr>
           
			<td><label for="code"><b>Product code:</b></label></td>
		<td><input  name="code" id="code" type="text" placeholder="Product code" value="<?php print($_POST['code'])?>" /></td>
			<td><span id="e_code" class="styerror"></span></td>
			
			<td>
				<?php
				if ($error_code != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_code . "</SPAN>");
			?>
			
		</td>
  </tr>
    	
    	
    	
    	<tr>
           
           
		<td><label for="nombre"><b>Product name:</b></label></td>
		<td><input name="nombre" id="nombre" type="text" placeholder="nombre" value="<?php print($_POST['nombre'])?>" /> </td>
		<td><span id="e_nombre" class="styerror"></span></td>
			
			
			<td>
			<?php
				if ($error_name != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_name . "</SPAN>");
			?>
	
	    </td>
         </tr>
	
		<tr>
        
        
          	<td>  <label for="origin"><b>Origin:</b></label></td>
           	<td> <input name="origin" id="origin" type="text" placeholder="origin" value="<?php print($_POST['origin'])?>"/></td>
          	<td>  <span id="e_origin" class="styerror"></span></td>
            
            	<td>
   	<?php
				if ($error_origen != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_origin . "</SPAN>");
			?>
            
     </td>
 </tr>
       
       
        	<tr>
        	    
        
           <td> <label for="provider"><b>Provider:</b></label></td>
            <td>	<input name="provider" id="provider" type="text" placeholder="Provider" value="<?php print($_POST['provider'])?>"  />     </td>
		<td>	<span id="e_provider" class="styerror"></span>     </td>
			
			<td>
            	<?php
				if ($error_provider != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_provider . "</SPAN>");
			?>
            
   
         </td>
         </tr>
       
        
        	<tr>
       
        
            <td><label for="email"><b>Email:</b></label></td>
          <td><input id="email" name="email" type="text" placeholder="email" value="<?php print($_POST['email'])?>"  /></td>
		<td><span id="e_email" class="styerror"></span></td>
		
		<td>
	
		<?php
				if ($error_email != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_email . "</SPAN>");
			?>
            
        
         </td>
         
         </tr>
         
         
        	<tr>
       
        
            <td><label for="price"><b>Price:</b></label></td>
          <td><input id="price" name="price" type="text" placeholder="price" value="<?php print($_POST['price'])?>"  /></td>
		<td><span id="e_price" class="styerror"></span></td>
		
		<td>
	
		<?php
				if ($error_price != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_price . "</SPAN>");
			?>
            
        
         </td>
         
         </tr>
         
         
        	<tr>
       
        
            <td valign="top"><label for="description"><b>Description:</b></label></td>
            <td><textarea  id="description" name="description" rows="6" cols="15" value="<?php print($_POST['description'])?>">Product description</textarea></td>
		<td><span id="e_description" class="styerror"></span></td>
		
		<td>
	
		<?php
				if ($error_description != "")
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_description . "</SPAN>");
			?>
            
        
         </td>
         
         </tr>
         
         	<tr>
			  <td><label for="gustos"><b>Gustos:</b></label></td>
			  <td>Inform&aacute;tica <input type="checkbox" name="gustos[]" value="Informatica">
					Buceo  <input type="checkbox" name="gustos[]" value="Buceo">
					Magia <input type="checkbox" name="gustos[]" value="Magia">
					Jazz   <input type="checkbox" name="gustos[]" value="Jazz"></td>
			</tr>
         
         <tr>
             <td><label><b>Stock:</b></label></td>
             <td><input id='stock_yes' name="stock" class="element radio" type="radio" value="Yes" checked="checked"/>
             <label>yes</label>
              <input id='stock_no'name="stock" class="element radio" type="radio" value="No"/>
              <label>No</label></td>
             <td> <span id="e_sexo" class="styerror"></span></td>
            
         </tr>
         
         <tr>
            <td><label><b>Product date reception:</b></label></td>
             <td> <input id="date_reception" type="text" name="date_reception"></td>
              <td> <span id="e_date_reception" class="styerror"></span></td>
               <td>
               
               
               <?php
               
				if ($error_date_reception != "")
				
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_date_reception . "</SPAN>");
		      		
			?>
			
			</td>
             
            </tr>
         
          <tr>
            <td><label><b>Product release date:</b></label></td>
             <td> <input id="departure_date" type="text" name="departure_date"></td>
              <td> <span id="e_departure_date" class="styerror"></span></td>
               <td>
               
               
               <?php
               
				if ($error_departure_date != "")
				
		      		print ("<BR><SPAN CLASS='styerror' color: #ff0000;>" . "* ".$error_departure_date . "</SPAN>");
		      		
			?>
			
			</td>
             
            </tr>
         
         
       
        </table>
        
    
        <p>
         
          <label><b>Country:</b></label>
         
        <select name="OS">
         
           <option value="1">Spain</option> 
           <option value="2">Windows 7</option> 
           <option value="3">Windows XP</option>
           <option value="10">Fedora</option> 
           <option value="11">Debian</option> 
           <option value="12">Suse</option> 
           
        </select>
         
        </p>
    
     <p>
         
          <label><b>Province:</b></label>
         
        <select name="OS1">
         
           <option value="1">Valencia</option> 
           <option value="2">Windows 7</option> 
           <option value="3">Windows XP</option>
           <option value="10">Fedora</option> 
           <option value="11">Debian</option> 
           <option value="12">Suse</option> 
           
        </select>
         
        </p>
    
     <p>
         
          <label><b>City:</b></label>
         
        <select name="OS2">
         
           <option value="1">Ontinyent</option> 
           <option value="2">Windows 7</option> 
           <option value="3">Windows XP</option>
           <option value="10">Fedora</option> 
           <option value="11">Debian</option> 
           <option value="12">Suse</option> 
           
        </select>
         
        </p>
    
    
    

        <div id="buttons">
            <input id="submit" type="submit" name="submit" value="Submit" />
            <input id="borrar" type="reset" name="borrar" value="Delete" />
        </div>
    
        
        
	</form>
	
</div>

<!-- Main -->

<!-- Tweet -->
		<div id="tweet">
			<div class="container">
				<section>
					<blockquote>&ldquo;In posuere eleifend odio. Quisque semper augue mattis wisi. Maecenas ligula. Pellentesque viverra vulputate enim. Aliquam erat volutpat.&rdquo;</blockquote>
				</section>
			</div>
		</div>
	<!-- /Tweet -->