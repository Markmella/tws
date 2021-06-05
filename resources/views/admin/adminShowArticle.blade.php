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
        <form action="{{ route('admin-delete-article', $post->id) }}" name="delete_form" method="POST">
            @csrf
        </form>
        <div class="button-options">
            <input type="button" id="delete" value="Delete Article">
        </div>
    </div>
    <div class="back">
        <a href="{{ route('admin-dashboard') }}"> Back to Dashboard </a>
    </div>
</div>


<script>
    let btnDelete = document.getElementById('delete');

    btnDelete.addEventListener('click', function(){
        Swal.fire({
            width: 320,
            title: 'Deleting Article...',
            timer: 1500,
                didOpen: () => {
                    Swal.showLoading()
                },
            }).then(() => {
                delete_form.submit();
        })
    });
</script>



@endsection