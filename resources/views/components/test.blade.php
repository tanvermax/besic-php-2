<div>
    <!-- An unexamined life is not worth living. - Socrates -->

    <h5> SAME DATA Add New Client</h5>
    <p>Lorem ipsum dolor sit amet {{ $name }}</p>


    
    @foreach ($users as $user)
    <p>{{ $users->name }}</p>
    @endforeach

</div>