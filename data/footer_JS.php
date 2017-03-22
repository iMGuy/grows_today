
    <script t ype="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js">
	  </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
    <!--DataTable core JS -->
  	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js">
  	</script>
  	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/responsive/1.0.0/js/dataTables.responsive.min.js"></script>
  	
  	<script src="js/ie-emulation-modes-warning.js"></script>
      
    <script type="text/javascript">
      function uniqueRand( n, max ) {
			var result = [];
			var pool = [];
			var i;

			for ( i=0 ; i<max ; i++ ) {
				pool.push( i );
			}

			var getNumber = function () {
				var index = Math.floor(pool.length * Math.random());
				var drawn = pool.splice(index, 1);
				return drawn[0];
			};

			for ( i=0 ; i<n ; i++ ) {
				result.push( getNumber() );
			}

			return result;
		}

		$(document).ready( function () {
			$('#growtable')
				.addClass( 'nowrap' )
				.dataTable( {
					responsive: true,
					columnDefs: [
						{ targets: [-1, -3], className: 'dt-body-right' }
					],
					"oLanguage": {
			    	   "oPaginate": {
			    		   "sNext": "לעמוד הבא",
			    		   "sPrevious": "לעמוד הקודם",
			    		   "sLast": "לעמוד האחרון",
			    		   "sFirst": "לעמוד הראשון",
			    		   "sEmptyTable": "אין מידע זמין בטבלה",
			    		   "sInfo": "סך הכל _TOTAL_ תוצאות  (_START_ to _END_)",
			    		   "sInfoEmpty": "טבלה ריקה",
			    		   "sLengthMenu": "מציג _MENU_ רשומות",
			    		   "sZeroRecords": "לא נמצאו תוצאות",
			    		   
			    		   
			    		},
			    		"sSearch": "חיפוש: ",
		    		}
				} );

			var list = $('div.w-g-l > ul');
			list.children(':gt(7)').css( 'display', 'none' );

			var showingFull = false;
			$('<li><a>Show more features...</a></li>')
				.on( 'click', function (e) {
					e.preventDefault;

					if ( showingFull ) {
						list.children(':gt(7)').css( 'display', 'none' );
						list.children(':last').css( 'display', 'block' );
						$('a', this).html('Show more features...');
						showingFull = false;
					}
					else {
						list.find('li').css( 'display', 'block' );
						$('a', this).html('Show less');
						showingFull = true;
					}
				} )
				.appendTo( list );

			// Used by
			var usedBy = [
				[ 'http://www.cern.ch/', 'cern.png', 'CERN' ],
				[ 'http://latimes.com', 'la_times.png', 'LA Times' ],
				[ 'http://openlibrary.org/', 'open_library.png', 'Open Library' ],
				[ 'http://www.ppmroadmap.com/', 'ppmroadmap.jpg', 'PPM Roadmap' ],
				[ 'http://www.st-andrews.ac.uk/', 'stAndrews.png', 'St Andrews University' ],
				[ 'http://www.travellerspoint.com/', 'travellerspoint.png', 'Travellers Point' ],
				[ 'http://usatoday.com', 'usatoday.png', 'USA Today' ],
				[ 'http://www.sipcapture.org/', 'homer.png', 'Homer' ],
				[ 'http://www.amazon.com/', 'amazon.jpg', 'Amazon' ],
				[ 'http://pocketsmith.com/', 'pocketsmith_icon.png', 'PocketSmith' ],
				[ 'http://flightmapping.com/', 'flightmappinglogo88.png', 'FlightMapping.com' ],
				[ 'http://www.venuedirectory.com/', 'VenueDir.png', 'Venue Directory' ],
				[ 'https://www.misk.com/', 'Misk.png', 'Misk' ],
				[ 'http://www.avaza.com/', 'avaza.png', 'avaza' ],
				[ 'http://www.flysfo.com/', 'sfo.png', 'San Francisco International Airport' ]
			];

			$.each( uniqueRand( 6, usedBy.length ), function (i, val) {
				data = usedBy[ val ];
				$('#usedBy').append(
					'<div class="unit one-sixth center">'+
						'<a href="'+data[0]+'"><img src="/media/images/used_by/'+data[1]+'" alt="DataTables is used by '+data[2]+'"></a>'+
					'</div>'
				);
			} );
			
			
		} );
		  
  	</script>