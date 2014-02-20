
<html>
<head>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.bpopup.min.js"></script>
  <script type="text/javascript" language="javascript">
   
    // Semicolon (;) to ensure closing of earlier scripting
    // Encapsulation
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
      

            $('.cupid-green').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
            $('#element_to_pop_up').load('pages/inc.php');
              $('#element_to_pop_up').bPopup({
            content:'iframe', //'ajax', 'iframe' or 'image'
            contentContainer:'.content',
            loadUrl:'inc.php' //Uses jQuery.load()
        });
                
            });

        });

    })(jQuery);


   </script>
</head>
<?echo "10/10 Database";?>
<div class="bar_mortice mortice_tiny">
      <div class="progress progress_tiny green" style="width: 100%;"></div>
    </div>
    <br>
<button class="cupid-green">Show Databases </button>
</html>
