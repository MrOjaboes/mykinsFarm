<div class="card">
    <div class="card-body">
     <table class="table table-condensed table-hover table-responsive-lg">
         <thead>
             <tr>
                 <th>Customer</th>
                 <th>Email</th>
                 <th>Date</th>
             </tr>
         </thead>
         <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{$user->name}}</td>
             <td>{{$user->email}}</td>
             <td>{{$user->created_at}}</td>
         </tr>
            @endforeach
         </tbody>
     </table>
    </div>
 </div>
