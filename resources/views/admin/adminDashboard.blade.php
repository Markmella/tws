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

@if (session('deleted'))
    <script>
        Swal.fire({
            icon: 'success',
            width: '320',
            title: 'Arcticle Deleted'
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
                <li id="deleted"> Deleted Article </li>
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
                            <th class="action"> Action </th>
                        </tr>
                        @foreach ($posts as $post)
                            @if ($post->status == 'Pending')
                                <tr>
                                    <td>
                                        <p>
                                            {{ $post->user_id }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $post->title }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $post->author }}</td>
                                        </p>
                                    <td class="action">
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
                            <th class="action"> Status </th>
                            <th class="action"> Action </th>
                        </tr>
                        @foreach ($posts as $post)
                            @if ($post->status == 'Accepted')
                                <tr>
                                    <td>
                                        <p>
                                            {{ $post->user_id }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $post->title }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $post->author }}
                                        </p>
                                    </td>
                                    <td class="action">
                                        <p>
                                            {{ $post->status }}
                                        </p>
                                    </td>
                                    <td class="action">
                                        <a href="{{ route('admin-delete-article', $post->id) }}"> Show </a>
                                    </td>
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
                            <th class="action"> Status </th>
                            <th class="action"> Action </th>
                        </tr>
                        @foreach ($posts as $post)
                            @if ($post->status == 'Declined')
                                <tr>
                                    <td>
                                        <p>
                                            {{ $post->user_id }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $post->title }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $post->author }}
                                        </p>
                                    </td>
                                    <td class="action">
                                        <p>
                                            {{ $post->status }}
                                        </p>
                                    </td>
                                    <td class="action">
                                        <p>
                                            <a href="{{ route('admin-delete-article', $post->id) }}"> Show </a>
                                        </p>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </table>
                </div>

                <div class="deleted-content" style="display: none">
                    <div class="status">
                        Deleted Article
                    </div>
                    <table>
                        <tr>
                            <th> User ID </th>
                            <th> Article Title </th>
                            <th> Article Author </th>
                            <th class="action"> Status </th>
                        </tr>
                        @foreach ($posts as $post)
                            @if ($post->status == 'Deleted')
                                <tr>
                                    <td>
                                        <p>
                                            {{ $post->user_id }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $post->title }}
                                        </p>
                                    </td>
                                    <td>
                                        <p>
                                            {{ $post->author }}
                                        </p>
                                    </td>
                                    <td class="action">
                                        <p>
                                            {{ $post->status }}
                                        </p>
                                    </td>
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
                            <th class="action"> Status </th>
                        </tr>
                        @foreach ($posts as $post)
                            <tr>
                                <td>
                                    <p>
                                        {{ $post->user_id }}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{ $post->title }}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{ $post->author }}
                                    </p>
                                </td>
                                <td class="action">
                                    <p>
                                        {{ $post->status }}
                                    </p>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

                <div class="users-content" style="display: none">
                    <div class="status">
                        Users
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
                                <td>
                                    <p>
                                        {{ $user->id }}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{ $user->name }}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{ $user->username }}
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        {{ $user->email }}
                                    </p>
                                </td>
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
    let deleted = document.getElementById("deleted");
    let history = document.getElementById("history");
    let users = document.getElementById("users");

    let pendingContainer = document.querySelector('.pending-content');
    let acceptedContainer = document.querySelector('.accepted-content');
    let declinedContainer = document.querySelector('.declined-content');
    let deletedContainer = document.querySelector('.deleted-content');
    let historyContainer = document.querySelector('.history-content');
    let usersContainer = document.querySelector('.users-content');

    pending.addEventListener('click', function(){
        pendingContainer.style.display = "block";
        acceptedContainer.style.display = "none";
        declinedContainer.style.display = "none";
        deletedContainer.style.display = "none";
        historyContainer.style.display = "none";
        usersContainer.style.display = "none";
    });

    accepted.addEventListener('click', function(){
        acceptedContainer.style.display = "block";
        pendingContainer.style.display = "none";
        declinedContainer.style.display = "none";
        deletedContainer.style.display = "none";
        historyContainer.style.display = "none";
        usersContainer.style.display = "none";
    });

    declined.addEventListener('click', function(){
        declinedContainer.style.display = "block";
        pendingContainer.style.display = "none";
        acceptedContainer.style.display = "none";
        deletedContainer.style.display = "none";
        historyContainer.style.display = "none";
        usersContainer.style.display = "none";
    });

    deleted.addEventListener('click', function(){
        deletedContainer.style.display = "block";
        pendingContainer.style.display = "none";
        acceptedContainer.style.display = "none";
        declinedContainer.style.display = "none";
        historyContainer.style.display = "none";
        usersContainer.style.display = "none";
    });

    history.addEventListener('click', function(){
        historyContainer.style.display = "block";
        pendingContainer.style.display = "none";
        acceptedContainer.style.display = "none";
        declinedContainer.style.display = "none";
        deletedContainer.style.display = "none";
        usersContainer.style.display = "none";
    });

    users.addEventListener('click', function(){
        usersContainer.style.display = "block";
        historyContainer.style.display = "none";
        pendingContainer.style.display = "none";
        acceptedContainer.style.display = "none";
        declinedContainer.style.display = "none";
        deletedContainer.style.display = "none";
    });

</script>

@endsection