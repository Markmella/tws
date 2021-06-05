@extends('admin.adminMaster')

@section('title') TWS | Show Article @endsection

@section('content')

<link rel="stylesheet" href="{{ asset('css/adminShow.css') }}">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<div class="adminShow-container">
    <div class="adminShow-content">
        <p> Title: 
            <span> {{ $post->title }} </span> 
        </p>
        <p> Author: 
            <span> {{ $post->author }} </span> 
        </p>
        <p class="article"> Article </p>
        <textarea disabled><?php echo $post->article ?></textarea>
        <form action="{{ route('admin-accept-article', $post->id) }}" name="accept_form" method="POST">
            @csrf
        </form>
        <form action="{{ route('admin-decline-article', $post->id) }}" name="decline_form" method="POST">
            @csrf
        </form>
        <div class="button-options">
            <input type="button" id="accept" name="submit" value="Accept">
            <input type="button" id="decline" value="Decline">
        </div>
    </div>
    <div class="back">
        <a href="{{ route('admin-dashboard') }}"> Back to Dashboard </a>
    </div>
</div>


<script>
    let btnAccept = document.getElementById('accept');

    btnAccept.addEventListener('click', function(){
        Swal.fire({
            width: 150,
            timer: 1500,
                didOpen: () => {
                    Swal.showLoading()
                },
            }).then(() => {
                accept_form.submit();
        })
    });


    let btnDecline = document.getElementById('decline');

    btnDecline.addEventListener('click', function(){
        Swal.fire({
            width: 150,
            timer: 1500,
                didOpen: () => {
                    Swal.showLoading()
                },
            }).then(() => {
                decline_form.submit();
        })
    });

</script>



@endsection