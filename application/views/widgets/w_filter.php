<script>
	$(function() {
		$('#price').change(function () {
		var val = $(this).val();
		$('#slider_price').slider("values",0,val);
		});	
		
		$('#price2').change( function() {
			var val2 = $(this).val();
			$('#slider_price').slider("values",1,val2);
		});
	
		$( "#slider_price" ).slider({
			range: true,
			//orientation: "vertical",
			min: 0,
			step:10,
			max: 700,
			values: [ 100, 400 ],
			slide: function( event, ui ) {
                          
				//$( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
				$('#price').val(ui.values[0]);
				$('#price2').val(ui.values[1]);
                              //  var h = window.location.hostname;
                                
                               var id =  <?=$id?>;

                              href1='/catalog/cat/c'+id+'/'+ui.values[0]+'/'+ui.values[1];
                              //  href1+='catminmax/'+ui.values[0]+'/'+ui.values[1];
                                setTimeout(function() { location.assign(href1);}, 1000);
			}
		});
		//$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
			//" - $" + $( "#slider-range" ).slider( "values", 1 ) );
			$('#price').val($('#slider_price').slider("values",0));
			$('#price2').val($('#slider_price').slider("values",1));
	});
	</script>	

<div class="box simonfilters">
    <div class="box-heading">
        Фильтр
    </div>
    <div class="box-content">
        <div class="box-filter">
            <ul class="filter_grouper">
                <li>
                    <div id="options">
			<h3>Цена</h3>
			<form>
				<label for="price">От:
					<input type="text" name="price" id="price">
				</label>
				
				<label for="price2">До:
					<input type="text" name="price2" id="price2">
				</label>	
			</form>
			<div id="slider_price"></div>
		</div>
                </li>
            </ul>
        </div>
    </div>
</div>