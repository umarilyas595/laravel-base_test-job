<div class="row">
    <div class="col-md-12">
        <div class="form-container margin-default">
            <div class="table-responsive">            
                <table class="table table-hover">                  
                    <thead>
                        <tr class="dark">
                            <th>Name</th>
                            <th>Province</th>
                            <th>Telephone</th>
                            <th>Postal code</th>
                            <th>Salary</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->province }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->postal_code }}</td>
                            <td>{{ $user->salary }}</td>
                            <td>
                                <a href="{{ route('user.edit.view.display',$user->id) }}">Update</a>
                                |
                                <a class="delete-user-info" href="{{ route('user.delete.info',$user->id) }}">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>       
            </div>
            <!-- responsive table ends here -->
        </div>
        <!-- form container --> 
        <div class="text-center">
            <nav aria-label="Page navigation">
                {!! $users->render() !!}
            </nav>
        </div>
        <!-- pagination -->
    </div>
</div>


