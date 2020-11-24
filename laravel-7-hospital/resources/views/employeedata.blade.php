<!doctype html>
<html>
   <body>
             <select name="user" id="user" class="form-control">
  <option value="">Select Department</option>
  @foreach ($user as $item)
<tr>
  
<td>{{ $item->user_name }}</td>
<td>{{ $item->user_email }}</td>
<td>{{ $item->user_phone }}</td>
</tr>
@endforeach
</select>

     <!-- Script -->
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --> <!-- jQuery CDN -->
   <!--   <script src="assets/js/main.js"></script>

     <script >
     $(document).ready (function(){

       // Fetch all records
       $('#but_fetchall').click(function(){
	 fetchRecords(0);
       });

       // Search by userid
       $('#but_search').click(function(){
          var user_id = Number($('#search').val().trim());
				
	  if(userid > 0){
	    fetchRecords(user_id);
	  }

       });

     });

     function fetchRecords(id){
       $.ajax({
         url: 'getUsers/'+user_id,
         type: 'get',
         dataType: 'json',
         success: function(response){

           var len = 0;
           $('#usersTable tbody').empty(); // Empty <tbody>
           if(response['data'] != null){
              len = response['data'].length;
           }

           if(len > 0){
              for(var i=0; i<len; i++){
                 var id = response['data'][i].user_id;
                 var username = response['data'][i].user_name;
                 var email = response['data'][i].user_email;
                 var phone = response['data'][i].user_phone;

                 var tr_str = "<tr>" +
                   "<td align='center'>" + (i+1) + "</td>" +
                   "<td align='center'>" + username + "</td>" +
                   "<td align='center'>" + email + "</td>" +
                   "<td align='center'>" + phone + "</td>" +
                 "</tr>";

                 $("#userTable tbody").append(tr_str);
              }
           }else{
              var tr_str = "<tr>" +
                  "<td align='center' colspan='4'>No record found.</td>" +
              "</tr>";

              $("#usersTable tbody").append(tr_str);
           }

         }
       });
     }
     </script> -->

   <script src="assets/js/main.js"></script>
     <script>
  $(document).ready(function(){

    $('select[name="users"]').on('change',function(){

  var user_id = $(this).val();

    if(user_id){
    
    $.ajax({

    url: '/getusers/'+ user_id,
    type: 'GET',
    dataType:'json',
    success: function(data){
      console.log(data);
    $('select[name="users"]').empty();
      $.each(data, function(key, value){

      

      });

    }

    });
    
    }

  });
  
    });

  $( function() {
    $( "#datepicker" ).datepicker();
  } );





</script>
  </body>
</html>