@extends('admin.adminMaster')

@section('title') TWS | Admin Dashboard @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/adminDashboard.css') }}">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@if (session('accepted'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '320',
            title: 'Arcticle Accepted'
        })
    </script>
@endif

@if (session('declined'))
    <script>
        Swal.fire({
            icon: 'error',
            width: '320',
            title: 'Arcticle Declined'
        })
    </script>
@endif


<div class="adminDashboard-container">
    <div class="adminDashboard-content">
        <div class="left-content">
            <ul>
                <li id="pending"> Pending Article </li>
                <li id="accepted"> Accepted Article </li>
                <li id="declined"> Declined Article </li>
                <li id="history"> History </li>
                <li id="users"> Users </li>
            </ul>
        </div>
        <div class="table-content">
                <div class="pending-content">
                    <div class="status">
                        Pending Article
                    </div>
                    <table>
                        <tr>
                            <th> User ID </th>
                            <th> Article Title </th>
                            <th> Article Author </th>
                            <th> Status </th>
                        </tr>
                        @foreach ($posts as $post)
                            @if ($post->status == 'Pending')
                                <tr>
                                    <td>{{ $post->user_id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>
                                        <a href="{{ route('admin-show-article', $post->id) }}"> Show </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>

                <div class="accepted-content" style="display: none">
                    <div class="status">
                        Accepted Article
                    </div>
                    <table>
                        <tr>
                            <th> User ID </th>
                            <th> Article Title </th>
                            <th> Article Author </th>
                            <th> Status </th>
                        </tr>
                        @foreach ($posts as $post)
                            @if ($post->status == 'Accepted')
                                <tr>
                                    <td>{{ $post->user_id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>{{ $post->status }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>


                <div class="declined-content" style="display: none">
                    <div class="status">
                        Declined Article
                    </div>
                    <table>
                        <tr>
                            <th> User ID </th>
                            <th> Article Title </th>
                            <th> Article Author </th>
                            <th> Status </th>
                        </tr>
                        @foreach ($posts as $post)
                            @if ($post->status == 'Declined')
                                <tr>
                                    <td>{{ $post->user_id }}</td>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->author }}</td>
                                    <td>{{ $post->status }}</td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>

                <div class="history-content" style="display: none">
                    <div class="status">
                        All Article
                    </div>
                    <table>
                        <tr>
                            <th> User ID </th>
                            <th> Article Title </th>
                            <th> Article Author </th>
                            <th> Status </th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->user_id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->author }}</td>
                                <td>{{ $post->status }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="users-content" style="display: none">
                    <div class="status">
                        All Users
                    </div>
                    <table>
                        <tr>
                            <th> User ID </th>
                            <th> Name </th>
                            <th> Username </th>
                            <th> Email </th>
                        </tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    </table>
                </div>

        </div>
    </div>
</div>

<script>

    let pending = document.getElementById("pending");
    let accepted = document.getElementById("accepted");
    let declined = document.getElementById("declined");
    let history = document.getElementById("history");
    let users = document.getElementById("users");

    let pendingContainer = document.querySelector('.pending-content');
    let acceptedContainer = document.querySelector('.accepted-content');
    let declinedContainer = document.querySelector('.declined-content');
    let historyContainer = document.querySelector('.history-content');
    let usersContainer = document.querySelector('.users-content');

    pending.addEventListener('click', function(){
        pendingContainer.style.display = "block";
        acceptedContainer.style.display = "none";
        declinedContainer.style.display = "none";
        historyContainer.style.display = "none";
        usersContainer.style.display = "none";
    });

    accepted.addEventListener('click', function(){
        acceptedContainer.style.display = "block";
        pendingContainer.style.display = "none";
        declinedContainer.style.display = "none";
        historyContainer.style.display = "none";
        usersContainer.style.display = "none";
    });

    declined.addEventListener('click', function(){
        declinedContainer.style.display = "block";
        acceptedContainer.style.display = "none";
        pendingContainer.style.display = "none";
        historyContainer.style.display = "none";
        usersContainer.style.display = "none";
    });

    history.addEventListener('click', function(){
        historyContainer.style.display = "block";
        pendingContainer.style.display = "none";
        acceptedContainer.style.display = "none";
        declinedContainer.style.display = "none";
        usersContainer.style.display = "none";
    });

    users.addEventListener('click', function(){
        usersContainer.style.display = "block";
        historyContainer.style.display = "none";
        pendingContainer.style.display = "none";
        acceptedContainer.style.display = "none";
        declinedContainer.style.display = "none";
    });

</script>

@endsection